<?php 

// Lendo as variaveis dos inputs
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    // metendo o email onde os dados vão ser enviados
    $para = "olamisterp@gmail.com";

    // assunto do email

    $assunto = "colecta de dados - Colegio kudicha";

    // desevolvendo o corpo do email

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Contacto: ".$contacto;

    // Cabeçalho do Email

    $cabeca = "From: colegio@kudicha.com"."\n"."Replay-to:".$email."\n"."X=Mailer:PHP/".phpversion();

    // Fazendo verificação
    if(mail($para,$assunto,$corpo,$cabeca)){
        echo ("E-mail enviado com sucesso");
    }else{
        echo ("Houve um erro ao enviar o email!");
    }
?>