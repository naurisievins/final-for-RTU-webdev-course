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
  <h1><?php echo $lang['practice'];?></h1>
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
        <h2>IF uzdevums ar ievades formu.</h2>
        <p>Ievadiet skaitli no 1 līdz 10!</p>
        <input type="number" id="inputIF">
        <input type="submit" value="Iesniegt" onclick="inputIF()">
        <div id="resultIF"></div>

        <h2  class="margin">Ciklu uzdevums ar ievades formu</h2>
        <p>Ievadiet skaitli no 1 līdz 10!</p>
        <input type="number" id="inputFOR">
        <input type="submit" value="Iesniegt" onclick="inputFOR()">
        <div id="resultFOR"></div>

        <h2  class="margin">Nomainīt lapas izskatu</h2>
        <p>Nospiediet pogu, lai nomainītu lapas izskatu!</p>
        <input type="submit" value="Mainīt" onclick="changeSTYLE()">

        <h2  class="margin">Izveidot lapā jaunu elementu</h2>
        <p>Nospiediet pogu, lai izveidotu jaunu elementu!</p>
        <input type="submit" value="Izveidot elementu" onclick="createELE()">
        <div id="elements"></div>
    </div>
  </div>
</div>

<footer>
  <p>Nauris Ieviņš, Rīga, 2022</p>
</footer>

<script>
function inputIF () {
    let inputIF = document.getElementById("inputIF").value;
    if (inputIF > 0 && inputIF <= 10) {
        result = "Jūs ievadījāt skaitli " +inputIF +".";
        document.getElementById("resultIF").innerHTML = result;
    }
    else {
        result = "Jūsu ievadītais skaitlis nav robežās no 1 līdz 10!";
        document.getElementById("resultIF").innerHTML = result;
    }
}

function inputFOR () {
    document.getElementById("resultFOR").innerHTML = "";
    let inputFOR = document.getElementById("inputFOR").value;
    if (inputFOR > 0 && inputFOR <= 10) {
        for (i=1; i<inputFOR; i++) {
        result = "Jūs neievadījāt skaitli " +i +", <br>";
        document.getElementById("resultFOR").innerHTML += result;
        }
        result = "<b>Jūs ievadījāt skaitli " +inputFOR +".</b>";
        document.getElementById("resultFOR").innerHTML += result;
    }
    else {
        result = "Jūsu ievadītais skaitlis nav robežās no 1 līdz 10!";
        document.getElementById("resultFOR").innerHTML = result;
    }
}

function changeSTYLE () {
    document.body.style.background = "#" +Math.floor(Math.random() * 999999);
    const right = document.getElementsByClassName("right");
    for (let i = 0; i < right.length; i++) {
        right[i].style.backgroundColor = "#" +Math.floor(Math.random() * 999999);
        right[i].style.color = "#" +Math.floor(Math.random() * 999999);
    }
}

function createELE () {
    let ele = document.getElementById("elements");
    let div = document.createElement("div");
    let p =  document.createElement("p");
    div.setAttribute("id", "ele");
    p.innerHTML = "Jauns elements";
    ele.appendChild(div);
    div.appendChild(p);
}
</script>

</body>
</html>