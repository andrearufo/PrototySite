# PrototySite

PrototySite è uno script in PHP e JavaScript, realizzato da [Andrea Rufo](http://www.orangedropdesign.com/ "Orange Drop Design"), che permette una semplice e veloce visualizzazione dei prototipi  di siti web realizzati come immagini jpeg o png.

Questo progetto è dedicato in particolar modo ai grafici con poche competenze di programmazione per una veloce visualizzazione dei prototipi dei loro siti web via internet. Lo scopo è quello di mostrare, nella maniera più veritiera possibile, come realmente appare una grafica all'interno di un browser.

Dalla URL lo script richiama l'immagine e imposta la pagina delle giuste dimensioni per visualizzare centrata e della giusta lunghezza l'immagine voluta che ha la parvenza di essere un sito web all'interno del browser. Questo per fare in modo che un cliente la visualizza delle giuste proporzioni sullo schermo e delle giuste dimensioni per ogni risoluzione.

Per informazioni o contatti: orangedropdesign@gmail.com

Sonnino, 9 giu 2013 23:40

## Demo

Potete visualizzare una demo di come opera lo script con diverse immagini su [http://dev.orangedropdesign.com/PrototySite/](http://dev.orangedropdesign.com/PrototySite/ "Orange Drop Design Dev, Demo di PrototySite").

## Come funziona

In pratica lo script visualizza una immagine all'interno di una pagina web e, grazie a un po' di programmazione, imposta automaticamente tutta una serie di parametri per poter permettere una corretta visualizzazione. 

Cliccando ovunque nella pagina poi, sarà possibile avere __l'elenco completo delle immagini realizzate__ e quindi passare a un'altra visualizzazione.

Lo script si riduce tutto a pochi file: in particolare a index.php che è il primo file che viene richiamato quando si digita un indirizzo web.

## Installazione

* Create il layout in Photoshop ed esportate in JPEG o PNG (si consiglia una larghezza di __1920px__ per una corretta visualizzazione sugli schermi più grandi);
* Salvate tutte le vostre immagini prototipo in una cartella dello script (per esempio in 'images/');
* Aprite la pagina __index.php__ e configurate i parametri (leggi sotto);
* Caricate tutti i file del progetto (index.php; assets/ e images/) sul vostro spazio web via FTP;
* Andate sul browser e digitate l'indirizzo del sito.

## Configurazione

La configurazione non è necessariamente obbligatoria ma ho stabilito alcune variabili che possono risultare utili

### File index.php

Si possono configurare 4 variabili:

* __$root__: indica la cartella con le immagini della demo (es. 'images/').
* __$start__: è l'immagine di partenza; se non impostata parte dalla prima che viene trovata nella cartella specificata in $root.
* __$bgcol__: indica il colore di sfondo della pagina; se non impostato è bianco. Risulta utile nel caso la grafica fosse più corta dello schermo dell'utente o nel caso non coprisse tutte l'area visualizzata.
* __$title__: imposta titolo della pagina

## Versioni

### ver. 0.1 

Script di visualizzazione con gestione manuale dell'indirizzo web

### ver. 1.0

Prima release pubblica con elenco immagini e link automatici a tutta pagina

### ver. 1.1

Correzzione di alcuni bug nella selezione delle immagini e nell'automatizzazione della visualizzazione

### ver. 1.2

Creazione di una barra di utilità invece della lista a tutta pagina

### ver. 1.3

Miglioramento della barra e creazione delle funzioni per la gestiona della navigazion

### ver. 1.3.1

Nuovi strumenti nella barra, bugfix delle animazioni e bugfix delle funzioni di controllo dell'eistenza immagine. Impendita la ripetizione dello sfondo del contenitore principale (fastidioso per i layout dalla larghezza ridotta).

## Sviluppi futuri

* Form per il caricamento di una nuova immagine direttamente dalla pagina web
