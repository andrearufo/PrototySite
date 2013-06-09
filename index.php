<!--

PrototySite Script by Andrea Rufo, www.orangedropdesign.com

-->

<?php

//configura

$root	=	'images/';		// la cartella con le immagini della demo
$start	=	'';				// l'immagine di partenza; se non impostata parte dalla prima
$bgcol	=	'#fff';			// colore di sfondo della pagina; se non impostato è bianco
$title	=	'PrototySite'	// titolo della pagina

?>

<html>

<head lang="it_IT">
	<title><?=$title?></title>
	
	<link rel="stylesheet/less" type="text/css" href="assets/style.less" />
	<script src="assets/less-1.3.3.min.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/jquery-2.0.0.min.js" type="text/javascript"></script>
	
</head>
	
<body style="background-color:<?=$bgcol?>">

<?php

// funzioni

require_once('assets/functions.php');
$list = listfiles($root);

// scelgo l'immagine da visualizzare

if(!isset($_GET['img']) && !in_array($start, $list)){
	exit('<div class="errore">Errore: immagine di partenza non presente. Continuare? <a href="?img='.$list[0].'">Sì</a></div>');
}

if($_GET['img'] != ''){
	
	// immagine passata in variabile
	$img = $_GET['img'];

}elseif($start != ''){
	
	// immagine scelta in configurazione
	$img = $start;

}else{
	
	// la prima immagine della cartella
	$img = $list[0];

}

if($img == ''){
	exit('<div class="errore">Errore: non è stata trovata nessuna immagine da visualizzare nella demo</div>');
}

// ottengo le info

$infos = getimagesize($root.'/'.$img);

?>

	<div id="container" style="
		height: <?=$infos[1]?>;
		background-image:url(<?=$root.'/'.$img?>)
	"></div>
	
	<ul id="list"><?php foreach($list as $item) echo '<li><a href="?img='.$item.'">'.substr($item,0,-4).'</a></li>'; ?></ul>
	
	<script src="assets/script.js" type="text/javascript"></script>

</body>
	
</html>