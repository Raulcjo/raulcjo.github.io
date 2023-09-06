<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $mensagem = addcslashes($_POST['mensagem']);

    $para = "raulcosta886@gmail.com";
    $assunto = "Proposta de emprego ou relacionados";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: raulcosta886@gmail.com"."\n"."Reply-to: ".$email."\n"."X-mailer: PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo ("E-mail enviado com sucesso!");
    }
    else{
        echo ("Houve um erro ao eviar o e-mail");
    }

?>