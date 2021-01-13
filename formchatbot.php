<?php

if(empty($_POST['nameFormChatbot']) AND empty($_POST['emailFormChatbot']) AND empty($_POST['messageFormChatbot']) AND !isset($_POST['submitFormChatbot'])) {
    header('HTTP/1.1 403 Forbidden'); 
    die('Accès Refusé !'); 
} 

$Zonestexte = array($_POST['nameFormChatbot'], $_POST['emailFormChatbot'], $_POST['messageFormChatbot']);

foreach($Zonestexte as $Zonetexte) {
    if(preg_match('/\//ism',$Zonetexte)){ header('Location: index.php?errorlink1'); exit(); }
    if(preg_match('/www/ism',$Zonetexte)){ header('Location: index.php?errorlink2'); exit(); }
    if(preg_match('/http(s?)/ism',$Zonetexte)){ header('Location: index.php?errorlink3'); exit(); }
    if(preg_match('/</ism',$Zonetexte)){ header('Location: index.php?errorlink4'); exit(); }
    if(preg_match('/>/ism',$Zonetexte)){ header('Location: index.php?errorlink4'); exit(); }
}

if (strlen($_POST['nameFormChatbot']) >= 50){ header('Location: index.php?errorlength1'); exit(); }
if (strlen($_POST['emailFormChatbot']) >= 100){ header('Location: index.php?errorlength2'); exit(); }
if (strlen($_POST['messageFormChatbot']) >= 800){ header('Location: index.php?errorlength4'); exit(); }

if (isset($_POST['submitFormChatbot'])) {
    if(!empty($_POST['nameFormChatbot']) AND !empty($_POST['emailFormChatbot']) AND !empty($_POST['messageFormChatbot'])) {
        $header="MIME-Version: 1.0\r\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        $message='
        <html>
          <body>
            <div style="text-align:center;width:70%;min-width:510px;height:318px;background-color:#ececec;margin:20px auto;font-family:Arial,sans-serif;font-size:16px;border:solid black 1px;"><br>
              <div style="margin:auto;margin-top:-13px;background-color:white;width:calc( 100% - 10px );min-width:500px;height:40px;line-height:40px;border:solid black 1px;"><b>Nom de l\'expéditeur : </b><span style="color:blue">'.$_POST['nomPrenomForm'].'</span></div><br>
              <div style="margin:auto;margin:auto;margin-top:-13px;background-color:white;width:calc( 100% - 10px );min-width:500px;height:40px;line-height:40px;border:solid black 1px;"><b>Mail de l\'expéditeur : </b><span style="color:blue">'.$_POST['emailForm'].'</span></div><br>
              <div style="margin:auto;margin-top:-13px;background-color:white;width:calc( 100% - 20px );min-width:490px;height:153px;padding:5px;border:solid black 1px;"><p style="margin:0 0 15px 0;"><b>Message de l\'expéditeur : </b></p><span style="color:blue">'.nl2br($_POST['messageForm']).'</span></div><br>
              <div style="margin:auto;margin-top:-13px;background-color:white;width:calc( 100% - 10px );min-width:500px;height:40px;line-height:40px;border:solid black 1px;"><b>Message provenant du site : </b><span style="color:blue"> Appetee - Formulaire</span></div><br>
            </div>
          </body>
        </html>';

        mail("...", "Message de contact", $message, $header);
        header('Location: index.php?success');
        exit();
    } else {
        header('Location: index.php?error');
        exit();
    }
    header('Location: index.php?error2');
    exit();
}