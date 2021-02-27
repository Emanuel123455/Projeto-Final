

<!DOCTYPE html>

<html lang="pt-br">

<head>
<title>Upload</title>
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
          <li><a href="../paginainicial.php">Início</a></li>
          <li class="active"><a class="drop" href="#">Matérias</a>
            <ul>
              <li class="active"><a href="Fisica.php">Física</a></li>
              <li><a href="Química.php">Química</a></li>
              <li><a href="Historia.php">História</a></li>
              <li><a href="Biologia.php">Biologia</a></li>
              
            </ul>
          </li>
          
          <li><a href="upload.php">Upload</a></li>
          <li><a href="#">Controle</a></li>
        </ul>
      </nav>
 
    </header>
  </div>
 
  <div class="wrapper">
    <section id="breadcrumb" class="hoc clear"> 
     
      <ul>
        <li>Páginas</li>
        <li>></li>
        <li>Upload de novas Histórias</li>
        
      </ul>
    
      <h6 class="heading">Upload de Novos Arquivos</h6>
    
    </section>
  </div>

</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 

  <form enctype="multipart/form-data" action="../console/recebeupload.php" method="POST">
    
    <input type="hidden" name="MAX_FILE_SIZE" value="99999999999999999999999" />
  
    Enviar esse arquivo: <input name="userfile" type="file" />
    Escolha uma capa para a HQ: <input name="capa" type="file" />
    Escolha o nome: <input name="nome" type="text" />
    Escolha a materia: <input name="materia" type="text" />
    <input type="submit" value="Enviar arquivo" />
</form>
   
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