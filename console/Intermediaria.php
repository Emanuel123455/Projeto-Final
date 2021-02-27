<?php
session_start();

$conn = mysqli_connect("localhost","root","","projeto_final");

$sql = "SELECT referenciaH FROM hqs WHERE numH = '$_GET[id]'";
$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>LAPEC+</title>
<!--

ART FACTORY

https://templatemo.com/tm-537-art-factory

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/owl-carousel.css">

    </head>
    
    <body>
    
  
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">LAPEC+</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Início</a></li>
                            <li class="scroll-to-section"><a href="#about">Upload</a></li>
                        
                          
                            <li class="submenu">
                                <a href="javascript:;">Matérias</a>
                                <ul>
                                    <li><a href="./pages/Fisica.php">Física</a></li>
                                    <li><a href="">Química</a></li>
                                    <li><a href="">História</a></li>
                                    <li><a href="">Biologia</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#contact-us">Controle</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <?php echo $_GET['id'];  var_dump($_SESSION); ?>
                        <p>Selecione uma Opção:</p>
                        <a href="<?php while($res = mysqli_fetch_array($result)){  echo $res['referenciaH']; session_destroy(); }?>" class="main-button-slider">Visualizar HQ</a> 
                        <a href="#about" class="main-button-slider">Visualizar Comentários</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="../assets/images/j.png" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->


   

  </body>
</html>