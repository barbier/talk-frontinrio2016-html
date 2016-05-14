<?php
$con = mysqli_connect("127.0.0.1","root","root","frontinrio");

$nome = $_POST['txt-nome'];
$email = $_POST['email'];
$endereco = $_POST['txt-endereco'];
$telefone = $_POST['tel-telefone'];
$twitter = $_POST['url-twitter'];

$sel = "select * from contato where telefone='$telefone'";

$run = mysqli_query($con, $sel);

$verifica_telefone = mysqli_num_rows($run);

if ($verifica_telefone == 1) {
  echo "<p>Amigo registrado.</p>";
  exit();
} else {
  $insert = "insert into contato (nome, email, endereco, telefone, twitter) values ('$nome', '$email', '$endereco', '$telefone', '$twitter')";
  $run_insert = mysqli_query($con, $insert);

  if ($run_insert) {
    echo "Amigo registrado!";
  }
}

mysqli_close($con);
