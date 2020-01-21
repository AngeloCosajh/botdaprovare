<?php
$token = "IL TUO TOKEN"; //Il token da @BotFather
$sito = "https://tuodominio.altervista.org/TuoBot/index.php"; //Il percorso dell'index

//////////////////////////////////// NON TOCCARE QUI ////////////////////////////////////////
$webhook = 'https://api.telegram.org/bot'.$token.'/setwebhook?url='.$sito.'?api=bot'.$token;
$ch = curl_init("$webhook");
curl_exec($ch);