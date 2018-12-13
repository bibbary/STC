@extends('default')

    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb contact-info">
          <div class="col-md-12 mb-4">

          </div>
          <div class="w-100"></div>
          <div class="col-md-5">
            <p><span>Adresse:</span> 1 rue de Valmy  93120 La Courneuve</p>
          </div>
          <div class="col-md-4" >
            <p><span>Téléphone:</span> <a href="tel://+33753793542">+33753793542</a></p>
          </div>
          <div class="col-md-">
            <p><span>Email:</span> <a href="mailto:startthechange224@gmail.com">startthechange224@gmail.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
          	<h4 class="mb-4">Posez nous vos questions</h4>
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Votre Nom">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Votre Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Objet">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Envoyer" class="btn btn-primary py-2 px-5">
              </div>
            </form>

          </div>

          <div style="background:url('images/localisatio.png');width:480px;height:315px;margin-top:75px;"></div>
        </div>
      </div>
    </section>
