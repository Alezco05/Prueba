<?php
include_once 'controller/controller.php';
include_once 'views/head.php';

?>
<style>
    body{
        background-color: black;
    }
</style>

<body>
<!-- header section -->
<section class="banner" role="banner" id="home">
    <header id="header">
        <div class="header-content clearfix">
            <a class="logo" href="Index.php">Master
                <span>Chefs</span>
            </a>
        </div>
    </header>

<section id="contact" class="section">
<div class="container">
    <div class="section-header">
        <h2 class="wow fadeInDown animated">Contacto</h2>
        <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
    </div>
    <div class="row">
<div class="col-md-8 col-md-offset-2 conForm">  
    <form method="post" id="contacto">
        <input type="text" placeholder="Máximo 12 Caracteres" maxlength="12" 
class="col-xs-12 col-sm-12 col-md-12 col-lg-12" name="nombre" id="nombre" placeholder="Escriba su nombre" required>
<input type="email" placeholder="Escriba su correo" 
class="col-xs-12 col-sm-12 col-md-12 col-lg-12" name="email" id="email" placeholder="Escriba su email" required>

<textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></textarea>

<input type="submit" value="Enviar" class="submitBnt">
<div id="error" style= color:white></div>
</form>
</div>
</div>

</div>
</section>
</body>
</html>

<script src = "js/app.js"></script>
<?php

$registro = new Correo();
$registro -> registroEmail();

?>