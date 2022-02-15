<?php

   session_start();

   $email = 'tecwebcode@gmail.com';
   $senha = '1234';

   $emailuser = $_POST['email'];
   $senhauser = $_POST['senha'];

   if(isset($_POST['entrar'])){
       if($emailuser == "" && $senhauser == ""){
           
           header('Location: ../Loginiflooring/login.php');
       }
       if($emailuser == $email && $senhauser == $senha ){
           header('Location: ./iflooruflooring_manager/managerflooring.php ');
      }else{
        header('Location: ./Loginiflooring/login.php');

      }
   };
?>