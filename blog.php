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
  <h1><?php echo $lang['blog'];?></h1>
</header>

<div class="row">
  <div class="column left">
    <div id="setlang">
        <a href="http://localhost/majasdarbs/index.php?lang=lv" onclick="alert('Valoda: latviešu')"><?php echo $lang['lv'];?></a> | <a href="http://localhost/majasdarbs/index.php?lang=en" onclick="alert('Language: english');"><?php echo $lang['en'];?></a>
    </div>
    <div class="dropdown">
        <button class="dropbtn"><?php echo $lang['menu'];?><i class="fa fa-caret-down dropbtn2"></i></button>
        <div class="dropdown-content">
            <a href="http://localhost/majasdarbs/index.php"><?php echo $lang['home'];?></a>
            <a href="http://localhost/majasdarbs/contact.php"><?php echo $lang['contact'];?></a>
            <a href="http://localhost/majasdarbs/practic.php"><?php echo $lang['practice'];?></a>
            <a href="http://localhost/majasdarbs/blog.php"><?php echo $lang['blog'];?></a>
        </div>
    </div>
  </div>
  <div class="column right">
    <div class="content">
      <h2><?php echo $lang['blog'];?></h2>
      <p class="justify">
        Šīs sadaļas galvenā ideja, cik noprotu, ir izmantot datubāzes.
        Zemāk pievienoju saiti, caur kuru var aiziet uz manis izpildītu Scandiweb uzņēmuma izveidotu pārbaudes uzdevumu.
        Uzdevuma galvenie nosacījumi: jābūt sadaļai, caur kuru var ievietot produktus datubāze un sadaļai, kur visi ievietotie produkti tiek parādīti.
        Kā arī jābut pogai, ar kuru var izdzēst atzīmētos produktus no datubāzes.<br>
        Spiediet uz attēla, lai aizietu uz saiti.<br>
        <a href="http://nrnk.infinityfreeapp.com/" target="_blank"><img src="/majasdarbs/img/scandiweb.png" alt="scandiweb test assignment" width="90%"></img></a>
      </p>
    </div>
  </div>
</div>

<footer>
  <p>Nauris Ieviņš, Rīga, 2022</p>
</footer>

</body>
</html>