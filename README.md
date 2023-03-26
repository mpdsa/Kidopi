# Trabalho--Processo_Seletivo--Kidopi
O exercício consistirá na construção de um sistema (interface web) que possibilite ao usuário obter informações sobre os casos de mortes por Covid. Estes dados serão obtidos por meio da API-Covid-19 que está disponível no servidor da Kidopi. É possível obter dados do número de casos confirmados e mortes de vários países afetados pela COVID-19.


Crie um banco de dados de Nome `Covid19` no MySQL e execute o script abaixo no bando de dados criado.
```
CREATE TABLE `ultimas_consultas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(100) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

Altere a conexão do MySQL nos arquivos `checkLastQuery` e `database`
