<?php

if(isset($_POST['email']) && !empty($_POST['email'])){
    $email= addslashes($_POST['email']);

    $mail_to = "zapon.pt@gmail.com";
    $mail_subjet = "Contato - site";
    $mail_body = 
            "Email".$email;

    $header = 'MIME-Version: 1.0 /r/n'
    . 'From:Zapon.pt@gmail.com'. '/r/n' . 'Reply-to:' . $mail . '/r/n';


    if(mail($mail_to,$mail_subjet,$mail_body,$header)){
        echo  ("<script>alert('Email enviado com Sucesso!');</script>");
    } else{
        echo  ("<script>alert('Email não pode ser enviado, preencha todos os dados');</script>");
    }

} else {
    echo  ("<script>alert('Email não pode ser enviado, preencha todos os dados');</script>");
}




?>