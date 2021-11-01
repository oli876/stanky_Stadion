<!DOCTYPE html>
<html lang="cz-cs">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O mopedu Stadion S11</title>
    
</head>

<body bgcolor="#E1E0E7">
   
    <header>
	<nav>
	<ul>
	<li><a href="../projekt33/index.php">Úvod</a></li>
	<li><a href="../projekt33/galerie.html">Galerie</a></li>
	<li><a href="../projekt33/tabulka.html">Výrobní série</a></li>
	</ul>
	</nav>	
	</header>
	
	<article>  
<center><h1>Stadion S11</h1></center>
<p>  
Moped Stadion S11 zvaný též "kozí dech", nebo také "splašené trubky", se V Československu montoval v národním podniku Velo Stadion Rakovník, motory se vyráběly v národním podniku Motor České Budějovice. První stroje se do sítí prodejen Mototechny začaly dodávat koncem listopadu 1957. Prodejní cena byla stanovena na 1.900,- Kčs, což tehdy bylo asi jeden a půl průměrného platu. Moped byl na chudém socialistickém trhu horká novinka. Takže nikoho nepřekvapilo, že so o něj lidé div neprali. Stadiony vážily pouhých 36kg a dokázaly postavit na kola pořádný kus českého a slovenského venkova.</p>

<p> K nebývalému zájmu příspívalo i to, co bylo uvedeno na evidenční kartičce. Mopedy Stadion S11 tehdy mohly řídit všechny osoby starší 15 let, bez řidičského oprávnění.	</p>
<p>Označení stadionu S11 znamená, že se jedná o první sérii. Celkem bylo vyrobeno asi 112 200 kusů mopedů S11. Poslední Stadion S11 sjel z rakovnické linky v roce 1961. V té chvíli se už vedle linky připravovaly součástky na montáž  první série nového, odpérovaného mopedu Stadion S22. Následná série nesla označení S23 (rok zahájení výroby 1962) což byl moped hlavně na export.</p>
<p>Na základě direktivního rozhodnutí orgánů moci, spojeným s restrukturalizací motocyklové výroby v Československu, byla výroba mopedů v Rakovníku v roce 1965 ukončena.</p>
<p>
<address>
Zdroj: Československé mopedy 1, Stadion S11, Petr Hošťálek</address>

<br>
<a href="https://www.jawa-50.cz/clanek/jawa-552-stadion-s11-s22-s23.html"> Mopedy Stadion (S11, S22, S23)</a>
<br>
<a href="https://www.garaz.cz/clanek/splasene-trubky-aneb-pribeh-rakovnickych-mopedu-stadion-21004997"> Splašené trubky aneb Příběh rakovnických mopedů Stadion</a>
<center><a href="https://www.vendyatelier.cz/image/moped-50-jawa-stadion"> S11-perokresba</a></center>

<center><img src="../projekt33/obrazky/mopedak.jpg" alt="perokresba S11"/></center>
</article>	

<?php
if(!isset($_COOKIE["id"])) setcookie ("id", 1);
if(!isset($_COOKIE["cas"])) setcookie ("cas", time());
if(isset($_COOKIE["stranek"])) setcookie ("stranek", ++$_COOKIE["stranek"]); else setcookie("stranek",1);

echo "<p>Vaše údaje jsou:";
echo "<BR>ID: ".$_COOKIE["id"];
echo "<BR>Čas přihlášení: ".date("j.n.Y G:i:s",$_COOKIE["cas"]);
echo "<BR>Počet navštívených stránek po přihlášení: ".$_COOKIE["stranek"];
?>	
</body>
</html>
