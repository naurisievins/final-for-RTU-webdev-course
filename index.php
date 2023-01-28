<?php
  include "lang.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $lang['title']; ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Nauris Ieviņš, RTU web izstrādes noslēguma darbs.">
<meta name="keywords" content="HTML, CSS, JavaScript, RTU, web, Nauris, noslēguma, darbs">
<meta name="author" content="Nauris Ieviņš">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<link rel="icon" type="image/x-icon" href="/majasdarbs/img/favicon.ico">

</head>
<body>
<header>
  <h1><?php echo $lang['home'];?></h1>
</header>

<div class="row">
  <div class="column left">
    <div id="setlang">
        <a href="http://localhost/majasdarbs/index.php?lang=lv" onclick="alert('Valoda: latviešu')"><?php echo $lang['lv'];?></a> | <a href="http://localhost/majasdarbs/index.php?lang=en" onclick="alert('Language: english');"><?php echo $lang['en'];?></a>
    </div>
    <div class="dropdown">
        <button class="dropbtn"><?php echo $lang['menu'];?><i class="fa fa-caret-down dropbtn2"></i></button>
        <div class="dropdown-content">
            <a href="index.php"><?php echo $lang['home'];?></a>
            <a href="contact.php"><?php echo $lang['contact'];?></a>
            <a href="practic.php"><?php echo $lang['practice'];?></a>
            <a href="blog.php"><?php echo $lang['blog'];?></a>
        </div>
    </div>
  </div>
  <div class="column right">
    <div class="content">
      <h2>Noslēguma darbs</h2>
      <p class="justify">
        Sveicināti! Mans noslēguma darbs sastāv no trīs daļām:<br>
        <b>1. daļa</b> ir šī lapa, kurā ir iekļauti nosacījumu punkti, kuri nav atrodami pārējās daļās;<br><br>
        <b>2. daļa</b> ir lapa, kuru sāku veidot kā pašu pirmo, un esmu veltījis visvairāk laika gan tāpēc, ka vēl nebija tik pat kā nekādu zināšanu - visu iemācījos darba procesā,
        kā arī daudz laiks tika veltīts vizuālajam lapas noformējumam, responsivitātei un citām lietām.
        Šī lapa ir pieejama publiski, tiek turēta uz github.com, darbināta izmantojot www.netlify.com web serveri un piešķirta domēna adrese caur namecheap.com. Šī lapa pēc lietotāja identifikatora
        (kriptovalūtas maka publiskās adreses) ievadīšanas iegūst lietotāja datus no blokķēdes par konkrētu kriptovalūtas projektu.
        Pārbaudes nolūkam var izmantot adresi - "<i>0xF82410De7CB6D13B4Cae885c8C8EB2836567348e</i>";<br>
        Saite uz lapu <a href="https://tracker.place/" target="_blank"><u style=color:#7a7306;>https://tracker.place/</u></a><br><br>
        <b>3. daļa</b> ir uzņēmuma Scandiweb izveidots pārbaudes uzdevums, kurā nepieciešams izmantot datubāzi. To var apskatīt šīs lapas sadaļā "Blogs".

      </p>
    </div>
  </div>
</div>

<footer>
  <p>Nauris Ieviņš, Rīga, 2022</p>
</footer>

</body>
</html>
