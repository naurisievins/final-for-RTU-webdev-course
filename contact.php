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
  <h1><?php echo $lang['contact'];?></h1>
</header>

<div class="row">
  <div class="column left">
    <div id="setlang">
        <a href="http://localhost/majasdarbs/index.php?lang=lv" onclick="alert('Valoda: latviešu')"><?php echo $lang['lv'];?></a> | <a href="http://localhost/majasdarbs/index.php?lang=en" onclick="alert('Language: english');"><?php echo $lang['en'];?></a>
    </div>
    <div class="dropdown">
        <button class="dropbtn"><?php echo $lang['menu'];?><i class="fa fa-caret-down dropbtn2"></i></button>
        <div class="dropdown-content">
            <a href="index.html"><?php echo $lang['home'];?></a>
            <a href="contact.php"><?php echo $lang['contact'];?></a>
            <a href="practic.php"><?php echo $lang['practice'];?></a>
            <a href="blog.php"><?php echo $lang['blog'];?></a>
        </div>
    </div>
  </div>
  <div class="column right">
    <div class="content">
      <h2><?php echo $lang['contact'];?></h2>
      <p class="justify">
        Vārds: Nauris Ieviņš<br>
        Adrese: Rīga<br>
        Tel.:<br>
        e-pasta adrese: nauris.ievins@gmail.com<br>
      </p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d139178.88642389228!2d23.989081364498706!3d56.97158333444697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfb0e5073ded%3A0x400cfcd68f2fe30!2zUsSrZ2E!5e0!3m2!1slv!2slv!4v1656360979255!5m2!1slv!2slv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>

<footer>
  <p>Nauris Ieviņš, Rīga, 2022</p>
</footer>

</body>
</html>
