<?php

/**
 * Template Name: Perguntas e Respostas
 */


get_header(); ?>
  <main>
    <section class="bg-blue">
      <div class="container">
        <h1 class="text-white">Perguntas e<br> respostas:</h1>
      </div>
    </section>

    <section class="container acordion-section">
      <h2>Sobre os Serviços:</h2>
      <div class="px-0 py-sm-0 px-lg-0 col-sm-9 col-12">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              1 - O que exatamente você vende?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                O objetivo do meu trabalho é aumentar o valor percebido sobre seu negócio desenvolvendo projetos eficazes, duradouros e funcionais para a sua marca. Um projeto bem pensado assegura o resultado esperado, diferencia sua marca de outras e gera confiança para seus consumidores.
                Uma boa marca, quando atrelada a um bom produto/serviço, pode ser fator decisivo entre você e seu concorrente, portanto é importante enxergar meu trabalho como um investimento no seu negócio.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              2 - Como é o pagamento?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              3 - Você trabalha com materiais impressos?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
  