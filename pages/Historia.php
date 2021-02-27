<?php 
$conn = mysqli_connect("localhost","root","","projeto_final");
$sql = "SELECT num,referencia,nome FROM capas,hqs WHERE materia = 'Historia' and materia = materiaH and num = numH;";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>

<html lang="pt-br">

<head>
<title>História</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

  <div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/Educa.jpg');"> 
  
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      
      <div id="logo" class="fl_left">
        <h1><a href="../paginainicial.php">LAPEC+</a></h1>
      </div>
      
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../paginainicial.php">Home</a></li>
          <li class="active"><a class="drop" href="#">Pages</a>
            <ul>
              <li class="active"><a href="gallery.html">Gallery</a></li>
              <li><a href="full-width.html">Full Width</a></li>
              <li><a href="sidebar-left.html">Sidebar Left</a></li>
              <li><a href="sidebar-right.html">Sidebar Right</a></li>
              <li><a href="basic-grid.html">Basic Grid</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Dropdown</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Link Text</a></li>
          <li><a href="#">Link Text</a></li>
        </ul>
      </nav>
 
    </header>
  </div>
 
  <div class="wrapper">
    <section id="breadcrumb" class="hoc clear"> 
     
      <ul>
        <li>Home</li>
        <li>></li>
        <li>História</li>
        
      </ul>
    
      <h6 class="heading">Quadrinhos de História</h6>
    
    </section>
  </div>

</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 

    <div class="content"> 
     
      <div id="gallery">
        <figure>
        <?php 
        $count = 0; 
        if($count == 10){
          echo "<h6 class='heading'>História da Civilização</h6>";
        }

        ?>
        <ul class="nospace clear">

        <?php
         while($dados = mysqli_fetch_array($result)){

          $valor = $dados['referencia'];
          $identificador = $dados['num'];
          $_SESSION[$identificador] = $dados['num'];
   
         $nome = $dados['nome'];
         $_SESSION[$nome] = $dados['nome'];
       echo "<li class=\"one_quarter\" id = $identificador><a href=\"../console/Intermediaria.php?id=$identificador\" ><img src=$valor alt=\"\"></a> <br><span style= \"margin-left: 20px\">$nome</span></li>";
       
       $count = $count + 1;
       
      }

    
   ?>
              
          </ul>
          <h6 class="heading">História da Civilização</h6>
          <ul class="nospace clear">
            <li class="one_quarter first"><a href="../conexao/conexao1.php"><img src="../images/demo/gallery/16.jpg" alt=""></a> <br><span style="margin-left: 10px">História da Civilização I</span></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/17.jpg" alt=""></a><br><span style="margin-left: 10px">História da Civilização II</span></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/18.jpg" alt=""></a><br><span style="margin-left: 8px">História da Civilização III</span></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/19.jpg" alt=""></a><br><span style="margin-left: 8px">História da Civilização IV</span></li>
            <li class="one_quarter first"><a href="#"><img src="../images/demo/gallery/20.jpg" alt=""></a><br><span style="margin-left: 10px">História da Civilização V</span></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/24.jpg" alt=""></a><br><span style="margin-left: 10px">História da Civilização VI</span></li></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/25.jpg" alt=""></a><br><span style="margin-left: 07px">História da Civilização VII</span></li></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/26.jpg" alt=""></a><br><span style="margin-left: 10px">História da Civilização VIII</span></li></li>
            <li class="one_quarter first"><a href="../conexao/conexao5.php"><img src="../images/demo/gallery/27.jpg" alt=""></a><br><span style="margin-left: 08px">História da Civilização IX</span></li>
            <li class="one_quarter"><a href="../conexao/conexao6.php"><img src="../images/demo/gallery/28.jpg" alt=""></a><br><span style="margin-left: 25px">História da Civilização X</span></li>
            <li class="one_quarter"><a href="../conexao/conexao7.php"><img src="../images/demo/gallery/29.jpg" alt=""></a><br><span style="margin-left: 20px">História da Civilização XI</span></li>
            
          </ul>
        </figure>
      </div>
     

    
    </div>
  
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    
    <div class="one_half first">
      <h6 class="heading">Projeto criado por Alunos da rede CEFET/RJ</h6>
      <p class="btmspace-30">Campus Nova Iguaçu - Professores envolvidos: André Lourenço, Marta Máximo Pereira, Ulisses Tomáz e Bruno Guedes</p>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
   
    <div class="one_quarter">
      <h6 class="heading">Fale Conosco</h6>
   
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Nome">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>

  </footer>
</div>


<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 

    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
 
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<script src="../assets/layout/scripts/jquery.min.js"></script>
<script src="../assets/layout/scripts/jquery.backtotop.js"></script>
<script src="../assets/layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>