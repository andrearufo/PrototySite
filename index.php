<!--

PrototySite Script by Andrea Rufo, www.orangedropdesign.com
ver. 1.3

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
	
	<link rel="icon" href="assets/favicon.png" type="image/png" />
	
	<link rel="stylesheet" href="assets/style.css"/>
	<script src="http://code.jquery.com/jquery-2.0.0.min.js" type="text/javascript"></script>
	
</head>
	
<body style="background-color:<?=$bgcol?>">

<?php

// funzioni

require_once('assets/functions.php');
$list = listfiles($root);

// scelgo l'immagine da visualizzare

if(!isset($_GET['img']) && $start != '' && !in_array($start, $list) || $_GET['img'] == ''){
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

	<div id="bar">
	
	<h1>Powered by <a href="https://github.com/andrearufo/PrototySite" target="_blank">PrototySite</a></h1>
	
	<ul>
		<li class="prev"><a href="?img=<?=prevItem($list, $img) ?>">&#59229;</a></li>
		<li class="list"><a href="javascript:void(0)">&#9776;</a>
			<ul><?php foreach($list as $item) echo '<li><a href="?img='.$item.'">'.substr($item,0,-4).'</a></li>'; ?></ul>
		</li>
		<li class="next"><a href="?img=<?=nextItem($list, $img) ?>">&#59230;</a></li>
	</ul>
	
	</div>
	
	<div id="container" title="Clicca per l'elenco dei prototipi" style="
		height: <?=$infos[1]?>;
		background-image:url(<?=$root.'/'.$img?>)
	"></div>
	
	<script src="assets/script.js" type="text/javascript"></script>

</body>
	
</html>