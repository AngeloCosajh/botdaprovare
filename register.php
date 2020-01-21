<?php
$token = "841046224:AAFCGt3nsN7Huguq07jvLP_aCe7588yrHlE"; //Il token da @BotFather
$sito = "https://botdaprovare.herokuapp.com/index.php"; //Il percorso dell'index

//////////////////////////////////// NON TOCCARE QUI ////////////////////////////////////////
$webhook = 'https://api.telegram.org/bot'.$token.'/setwebhook?url='.$sito.'?api=bot'.$token;
$ch = curl_init("$webhook");
curl_exec($ch);
