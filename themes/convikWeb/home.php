<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>


    <link rel="stylesheet" href="<?=theme('assets/styles.css')?>" />
    <link rel="icon" type="image/png" href="<?=theme('assets/icon.png')?>">
    <title>XD Software - Sistema de Gestão</title>
  </head>
  <body>
    <nav>
      <div class="nav__logo">
        <a href="https://www.conviktus.co.ao/" target="_blank"><img src="<?=theme('assets/logo.png')?>" alt="logo" /></a>
      </div>
       
    </nav>

    <header class="section__container header__container">
      <div class="header__content">
        <span class="bg__blur"></span>
        <span class="bg__blur header__blur"></span>
        <h4 style="text-transform: uppercase;">Transforme sua Gestão Empresarial com o</h4>
        <h1><span>Software XD</span> Comercial </h1>
        <p>
          Você está pronto para levar a gestão do seu negócio para o próximo nível? 
          Apresentamos o XD, o software de gestão comercial que redefine a forma como 
          você administra sua empresa.
        </p>
        
          <button class="btn" id="open-popup">Experimente Grátis Agora!</button>
      
      </div>
      <div class="header__image">
        <img src="<?=theme('assets/header.png')?>" alt="header" />
      </div>
    </header>

    <section class="section__container explore__container">
      <div class="explore__header">
        <h2 class="section__header" style="text-transform: uppercase;">principais funcionalidades</h2>
        <div class="explore__nav">
          <span><i class="ri-arrow-left-line"></i></span>
          <span><i class="ri-arrow-right-line"></i></span>
        </div>
      </div>
      <div class="explore__grid">
        <div class="explore__card">
          <span><i class="ri-slideshow-fill"></i></span>
          <h4>Gestão de Vendas e Pedidos</h4>
          <p>
            Permite registrar vendas, processar pedidos de clientes, gerar faturas e acompanhar o status dos pedidos.
          </p>
          <a href="#">Ver Mais <i class="ri-arrow-right-line"></i></a>
        </div>
        <div class="explore__card">
          <span><i class="ri-swap-box-line"></i></span>
          <h4>Gestão de Estoque e Inventário</h4>
          <p>
            Facilita o controle de estoque, rastreia produtos em estoque, ajuda na reposição de estoque e prevê demandas futuras.
          </p>
          <a href="#">Ver Mais <i class="ri-arrow-right-line"></i></a>
        </div>
        <div class="explore__card">
          <span><i class="ri-shopping-cart-2-line"></i></span>
          <h4>Controle Financeiro</h4>
          <p>
            Ajuda na gestão de contas a pagar e a receber, gera relatórios financeiros, monitora fluxo de caixa e facilita reconciliações bancárias.
          </p>
          <a href="#">Ver Mais <i class="ri-arrow-right-line"></i></a>
        </div>
        <div class="explore__card">
          <span><i class="ri-shopping-basket-fill"></i></span>
          <h4>Gestão de Fornecedores</h4>
          <p>
            Mantém registros de fornecedores, gerencia contratos e facilita o processo de compra de produtos.
          </p>
          <a href="#">Ver Mais <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>
    </section>

    <section class="section__container class__container">
      <div class="class__image">
        <span class="bg__blur"></span>
        <img src="<?=theme('assets/class1.jpg')?>" alt="class" class="class__img-1" />
        <img src="<?=theme('assets/class2.jpg')?>" alt="class" class="class__img-2" />
      </div>
      <div class="class__content">
        <h2 class="section__header">Venda do Software de Faturação e Gestão</h2>
        <p>
          Com o XD, você terá acesso a uma suíte completa de ferramentas poderosas projetadas para 
          simplificar e otimizar todas as áreas do seu negócio. Desde o controle de inventário até a 
          gestão financeira, passando pela relação com os clientes e muito mais, o XD é a solução definitiva 
          para todas as suas necessidades comerciais.
        </p>
        <button class="btn" id="open-popup1">Quero saber mais!</button>
      </div>
    </section>
    <div id="popup" class="popup">
  <div class="popup-content">
    <span class="close" id="close-popup">&times;</span>
    <h2>Preencha o formulario e a nossa equipa vai entrar em contacto! </h2>
    <form id="lead-form" action="<?= url("/"); ?>" method="post" enctype="multipart/form-data">
    <?= csrf_input(); ?>
    <div class="ajax_response"><?= flash(); ?></div>
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name"  required>
      </div>
      <div class="form-group">
        <label for="tel">Nº Telefone:</label>
        <input type="tel" id="tel" name="tel"   required>
      </div>
      <div class="form-group">
        <label for="company">Nome da Empresa:</label>
        <input type="text" id="company" name="company"  required>
      </div>
      <button  class="submit-btn">Enviar</button>
    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?=theme('assets/scripts.js')?>"></script>
<script src="<?=theme('assets/script.js')?>"></script>
    <div class="footer__bar">
      Copyright © Conviktus. Todos direitos reservados. | NIF : 5001099310
    </div>
  </body>
</html>