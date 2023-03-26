<?php

$q = $_REQUEST["q"];
if ($q == "") {
  echo '';
}

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://dev.kidopilabs.com.br/exercicio/covid.php?pais=$q",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);


$conn = new mysqli('localhost', 'root', '30061993', 'Covid19');
if ($conn->connect_error) {
  echo 'não é possivel conectar';
};

$dataLocal = date('Y-m-d H:i:s');
$sql = "INSERT INTO ultimas_consultas (pais, `data`) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $q, $dataLocal);
$stmt->execute();


echo $response;


curl_close($curl);
$stmt->close();
$conn->close();

?>