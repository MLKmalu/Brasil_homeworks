<?php
 if($_GET){
     
     $email = $_GET['email'];
     $senha = $_GET['senha'];
     if($email == 'aaaaa@user' && $senha == '123'){
        //log ok
         //echo('User: '.$email.' logado');
         header('Location:../home.php');
     }
 else {
     //log invalido
          header('Location:../index.php?cod=171');
     }
 }
 else{
     header('Location:../index.php');
     
 }
?>