<?php
$nome = $_POST['nome'];
$materia = $_POST['materia'];
$uploaddir = '../dados/HQs/';
$uploaddir1 = '../dados/Capas/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$uploadfile1 = $uploaddir1 . basename($_FILES['capa']['name']);
$conn = mysqli_connect("localhost","root","","projeto_final");
$sql = "INSERT INTO capas(referencia) VALUES('$uploadfile1');";
$sql1 = "INSERT INTO hqs(referencia,nome,materia) VALUES('$uploadfile','$nome','$materia');";
$result = mysqli_query($conn,$sql);
$result1 = mysqli_query($conn,$sql1);


echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile) && move_uploaded_file($_FILES['capa']['tmp_name'], $uploadfile1) ) {
    
    echo "Arquivo válido e enviado com sucesso.\n";
} 

else {
    echo "Possível ataque de upload de arquivo!\n";
}



?>
