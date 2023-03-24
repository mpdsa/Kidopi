<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet">
  <title>Casos de mortes por Covid</title>
  <link rel="stylesheet" href="./style.css" type="text/css">
</head>

<body>
  <div class="container">
    <header class="header">
      <h1 class="header__title">Casos de mortes por Covid</h1>
<<<<<<< Updated upstream
      <p class="header__copy">No Brasil, a COVID-19 teve um impacto significativo, com altos números de casos e mortes. O país enfrentou desafios em relação à gestão da pandemia e à adesão da população às medidas de prevenção. Atualmente, o país tem uma taxa de vacinação crescente, mas ainda enfrenta desafios na contenção da disseminação do vírus.</p>
      <p class="header__copy">No Canadá, a COVID-19 também teve um impacto significativo, mas em menor escala do que no Brasil. O país adotou medidas rigorosas de distanciamento social e implementou uma estratégia bem-sucedida de vacinação em massa, resultando em uma taxa de vacinação relativamente alta. No entanto, o Canadá ainda enfrenta desafios com o surgimento de novas variantes do vírus.</p>
      <p class="header__copy">Na Austrália, a COVID-19 foi relativamente bem controlada, com um número relativamente baixo de casos e mortes em comparação com outros países. O país adotou medidas rigorosas de fronteira e quarentena para impedir a disseminação do vírus, bem como medidas de distanciamento social e rastreamento de contatos. A taxa de vacinação na Austrália é atualmente menor do que em outros países, mas está aumentando gradualmente.</p>
=======
      <p class="header__copy">No Brasil, a COVID-19 teve um impacto significativo, com altos números de casos e mortes.
        O país enfrentou desafios em relação à gestão da pandemia e à adesão da população às medidas de prevenção.
        Atualmente, o país tem uma taxa de vacinação crescente, mas ainda enfrenta desafios na contenção da disseminação
        do vírus.</p>
      <p class="header__copy">No Canadá, a COVID-19 também teve um impacto significativo, mas em menor escala do que no
        Brasil. O país adotou medidas rigorosas de distanciamento social e implementou uma estratégia bem-sucedida de
        vacinação em massa, resultando em uma taxa de vacinação relativamente alta. No entanto, o Canadá ainda enfrenta
        desafios com o surgimento de novas variantes do vírus.</p>
      <p class="header__copy">Na Austrália, a COVID-19 foi relativamente bem controlada, com um número relativamente
        baixo de casos e mortes em comparação com outros países. O país adotou medidas rigorosas de fronteira e
        quarentena para impedir a disseminação do vírus, bem como medidas de distanciamento social e rastreamento de
        contatos. A taxa de vacinação na Austrália é atualmente menor do que em outros países, mas está aumentando
        gradualmente.</p>
>>>>>>> Stashed changes
    </header>
    <main class="main">
      <section class="flags">
        <h2 class="flags__title">Casos de Morte por País</h2>
        <p class="flags__subtitle">Selecione uma opção</p>
        <div class="flags__list">
          <span class="flags__list__item" onClick="showHint('Brazil')">
            <img class="flags__list__item__image" src="https://flagcdn.com/w320/br.png" alt="Bandeira do Brasil">
            <strong class="flags__list__item__title">Brasil</strong>
          </span>
          <span class="flags__list__item" onClick="showHint('Canada')">
            <img class="flags__list__item__image" src="https://flagcdn.com/w320/ca.png" alt="Bandeira do Brasil">
            <strong class="flags__list__item__title">Canadá</strong>
          </span>
          <span class="flags__list__item" onClick="showHint('Australia')">
            <img class="flags__list__item__image" src="https://flagcdn.com/w320/au.png" alt="Bandeira do Brasil">
            <strong class="flags__list__item__title">Austrália</strong>
          </span>
        </div>
        <article class="fact">
          <div class="fact__legend">
            <span class="fact__legend__item">
              <svg class="fact__legend__item__image--green" fill="green" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                  d="M192 24c0-13.3 10.7-24 24-24h80c13.3 0 24 10.7 24 24s-10.7 24-24 24H280V81.6c30.7 4.2 58.8 16.3 82.3 34.1L386.1 92 374.8 80.6c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l56.6 56.6c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L420 125.9l-23.8 23.8c17.9 23.5 29.9 51.7 34.1 82.3H464V216c0-13.3 10.7-24 24-24s24 10.7 24 24v80c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H430.4c-4.2 30.7-16.3 58.8-34.1 82.3L420 386.1l11.3-11.3c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-56.6 56.6c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9L386.1 420l-23.8-23.8c-23.5 17.9-51.7 29.9-82.3 34.1V464h16c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h16V430.4c-30.7-4.2-58.8-16.3-82.3-34.1L125.9 420l11.3 11.3c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L46.7 408.7c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L92 386.1l23.8-23.8C97.9 338.8 85.8 310.7 81.6 280H48v16c0 13.3-10.7 24-24 24s-24-10.7-24-24V216c0-13.3 10.7-24 24-24s24 10.7 24 24v16H81.6c4.2-30.7 16.3-58.8 34.1-82.3L92 125.9 80.6 137.2c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l56.6-56.6c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L125.9 92l23.8 23.8c23.5-17.9 51.7-29.9 82.3-34.1V48H216c-13.3 0-24-10.7-24-24zm48 200a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm64 104a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
              </svg>
              <strong class="fact__legend__item__copy--green">Casos Confirmados</strong>
            </span>
            <span class="fact__legend__item">
              <svg class="fact__legend__item__image--red" fill="red" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                  d="M192 24c0-13.3 10.7-24 24-24h80c13.3 0 24 10.7 24 24s-10.7 24-24 24H280V81.6c30.7 4.2 58.8 16.3 82.3 34.1L386.1 92 374.8 80.6c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l56.6 56.6c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L420 125.9l-23.8 23.8c17.9 23.5 29.9 51.7 34.1 82.3H464V216c0-13.3 10.7-24 24-24s24 10.7 24 24v80c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H430.4c-4.2 30.7-16.3 58.8-34.1 82.3L420 386.1l11.3-11.3c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-56.6 56.6c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9L386.1 420l-23.8-23.8c-23.5 17.9-51.7 29.9-82.3 34.1V464h16c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h16V430.4c-30.7-4.2-58.8-16.3-82.3-34.1L125.9 420l11.3 11.3c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L46.7 408.7c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L92 386.1l23.8-23.8C97.9 338.8 85.8 310.7 81.6 280H48v16c0 13.3-10.7 24-24 24s-24-10.7-24-24V216c0-13.3 10.7-24 24-24s24 10.7 24 24v16H81.6c4.2-30.7 16.3-58.8 34.1-82.3L92 125.9 80.6 137.2c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l56.6-56.6c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L125.9 92l23.8 23.8c23.5-17.9 51.7-29.9 82.3-34.1V48H216c-13.3 0-24-10.7-24-24zm48 200a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm64 104a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
              </svg>
              <strong class="fact__legend__item__copy--red">Mortes</strong>
            </span>
          </div>
          <span class="fact--data"></span>
        </article>
      </section>
    </main>
    <footer>

    </footer>
  </div>
  <script>
    function showHint(country) {
      document.querySelector(".flags__subtitle").innerHTML = "Carregando...";

      if (country.length === 0) {
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            const json = JSON.parse(this.responseText)
            const covidDataByCountry = Object.values(json)

            document.querySelector(".flags__subtitle").innerHTML = `Selecionado: ${country}`;
            document.querySelector(".fact--data").innerHTML = '';

            for (const i of covidDataByCountry) {
              document.querySelector(".fact--data").innerHTML += `
            <div class="fact__list">
              <h2 class="fact__list__title">${i.ProvinciaEstado}</h2>
              <span class="fact__list__item">
                <svg class="fact__list__item__image--green" fill="green" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path
                    d="M192 24c0-13.3 10.7-24 24-24h80c13.3 0 24 10.7 24 24s-10.7 24-24 24H280V81.6c30.7 4.2 58.8 16.3 82.3 34.1L386.1 92 374.8 80.6c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l56.6 56.6c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L420 125.9l-23.8 23.8c17.9 23.5 29.9 51.7 34.1 82.3H464V216c0-13.3 10.7-24 24-24s24 10.7 24 24v80c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H430.4c-4.2 30.7-16.3 58.8-34.1 82.3L420 386.1l11.3-11.3c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-56.6 56.6c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9L386.1 420l-23.8-23.8c-23.5 17.9-51.7 29.9-82.3 34.1V464h16c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h16V430.4c-30.7-4.2-58.8-16.3-82.3-34.1L125.9 420l11.3 11.3c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L46.7 408.7c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L92 386.1l23.8-23.8C97.9 338.8 85.8 310.7 81.6 280H48v16c0 13.3-10.7 24-24 24s-24-10.7-24-24V216c0-13.3 10.7-24 24-24s24 10.7 24 24v16H81.6c4.2-30.7 16.3-58.8 34.1-82.3L92 125.9 80.6 137.2c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l56.6-56.6c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L125.9 92l23.8 23.8c23.5-17.9 51.7-29.9 82.3-34.1V48H216c-13.3 0-24-10.7-24-24zm48 200a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm64 104a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
                </svg>
                <strong class="fact__list__item__copy--green">${i.Confirmados}</strong>
              </span>
              <span class="fact__list__item">
                <svg class="fact__list__item__image--red" fill="red" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path
                    d="M192 24c0-13.3 10.7-24 24-24h80c13.3 0 24 10.7 24 24s-10.7 24-24 24H280V81.6c30.7 4.2 58.8 16.3 82.3 34.1L386.1 92 374.8 80.6c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l56.6 56.6c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L420 125.9l-23.8 23.8c17.9 23.5 29.9 51.7 34.1 82.3H464V216c0-13.3 10.7-24 24-24s24 10.7 24 24v80c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H430.4c-4.2 30.7-16.3 58.8-34.1 82.3L420 386.1l11.3-11.3c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-56.6 56.6c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9L386.1 420l-23.8-23.8c-23.5 17.9-51.7 29.9-82.3 34.1V464h16c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h16V430.4c-30.7-4.2-58.8-16.3-82.3-34.1L125.9 420l11.3 11.3c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L46.7 408.7c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L92 386.1l23.8-23.8C97.9 338.8 85.8 310.7 81.6 280H48v16c0 13.3-10.7 24-24 24s-24-10.7-24-24V216c0-13.3 10.7-24 24-24s24 10.7 24 24v16H81.6c4.2-30.7 16.3-58.8 34.1-82.3L92 125.9 80.6 137.2c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l56.6-56.6c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L125.9 92l23.8 23.8c23.5-17.9 51.7-29.9 82.3-34.1V48H216c-13.3 0-24-10.7-24-24zm48 200a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm64 104a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
                </svg>
                <strong class="fact__list__item__copy--red">${i.Mortos}</strong>
              </span>
            </div>
                  `

            }

          }
        }

        xmlhttp.open("GET", "database.php?q=" + country, true);
        xmlhttp.send();
      }
    }
  </script>
</body>

</html>
