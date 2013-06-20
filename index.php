<!--

PrototySite Script by Andrea Rufo, www.orangedropdesign.com
ver. 1.3.1

-->

<?php

//configura

$root	=	'images/';		// la cartella con le immagini della demo
$start	=	'index.jpg';	// l'immagine di partenza; se non impostata parte dalla prima
$bgcol	=	'#fff';			// colore di sfondo della pagina; se non impostato è bianco
$title	=	'PrototySite'	// titolo della pagina

?>

<html>

<head lang="it_IT">
	<title><?=$title?></title>
	
	<link rel="icon" href="assets/favicon.png" type="image/png" />
	
	<meta name="generator" content="PrototySite 1.3.1" />
	<meta name="author" content="Andrea Rufo, www.orangedropdesign.com" />
	<meta charset="UTF-8" />

	<link rel="stylesheet" href="assets/style.css" />
	<script src="http://code.jquery.com/jquery-2.0.0.min.js" type="text/javascript"></script>
	
</head>
	
<body style="background-color:<?=$bgcol?>">

<?php

// funzioni

require_once('assets/functions.php');
$list = listfiles($root);

// controllo se esiste l'immagine segnalata

if( $_GET['img']=='' && $start==''){
	exit('<div class="start"><p>Attenzione! Non è stata segnalata nessuna immagine di partenza. Continuare?</p>
	<p><a href="?img='.$list[0].'">Si, continua con la prima immagine della lista</a></p>
	<p>Puoi configurare lo script nella pagina index.php o leggendo il file Readme</p>
	</div>');
}

// controllo se l'immagine di partenza esiste

elseif($_GET['img']=='' && !in_array($start, $list)){
	exit('<div class="errore">Errore: immagine di partenza non presente. Continuare?<br/> <a href="?img='.$list[0].'">Si, continua con la prima immagine della lista</a></div>');
}

// scelgo l'immagine da visualizzare

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
	
	<ul>
		<li class="info"><a title="Informazioni" href="javascript:void(0)">&#9881;</a>
			<ul>
				<li>Cartella dei layout: <em><?=$root?></em></li>
				<li>Immagine di partenza: <em><?=$start?></em></li>
				<li>Colore di sfondo: <em><?=$bgcol?></em></li>
				<li>Titolo della pagina: <em><?=$title?></em></li>
				<li>File visualizzato: <em><?=$img?></em></li>
				<li>Dimensione immagine: <em><?=$infos[0].'px x '.$infos[1].'px'?></em></li>
			</ul>
		</li>
		<li class="news"><a title="News" href="javascript:void(0)">&#59185;</a>
			<ul>
				<li><?=lastnews()?></li>
			</ul>
		</li>
		<li class="separator"></li>
		<li class="prev"><a title="Precedente" href="?img=<?=prevItem($list, $img) ?>">&#59229;</a></li>
		<li class="list"><a title="Lista prototipi" href="javascript:void(0)">&#9776;</a>
			<ul><?php foreach($list as $item) echo '<li><a href="?img='.$item.'">'.substr($item,0,-4).'</a></li>'; ?></ul>
		</li>
		<li class="next"><a title="Successiva" href="?img=<?=nextItem($list, $img) ?>">&#59230;</a></li>
	</ul>
	
	</div>
	
	<div id="container" title="Clicca per l'elenco dei prototipi" style="
		height: <?=$infos[1]?>;
		background-image:url(<?=$root.'/'.$img?>);
	"></div>
	
	<script src="assets/script.js" type="text/javascript"></script>

</body>
	
</html>