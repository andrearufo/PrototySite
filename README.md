PrototySite
===========

PrototySite è uno script in PHP e JavaScript, realizzato da [Andrea Rufo](http://www.orangedropdesign.com/ "Orange Drop Design"), che permette una semplice e veloce visualizzazione dei prototipi  di siti web realizzati come immagini jpeg o png.

Questo progetto è dedicato in particolar modo ai grafici con poche competenze di programmazione per una veloce visualizzazione dei prototipi dei loro siti web via internet. Lo scopo è quello di mostrare, nella maniera più veritiera possibile, come realmente appare una grafica all'interno di un browser.

Sonnino, 9 giu 2013 23:40

##Come funziona##

In pratica lo script visualizza una immagine all'interno di una pagina web e, grazie a un po' di programmazione, imposta automaticamente tutta una serie di parametri per poter permettere una corretta visualizzazione. 

Cliccando ovunque nella pagina poi, sarà possibile avere __l'elenco completo delle immagini realizzate__ e quindi passare a un'altra visualizzazione.

Lo script si riduce tutto a pochi file: in particolare a index.php che è il primo file che viene richiamato quando si digita un indirizzo web.

##Installazione##

* Salvate tutte le vostre immagini prototipo in una cartella dello script (per esempio in 'images/');
* Aprite la pagina __index.php__ e configurate i parametri (leggi sotto);
* Caricate tutti i file del progetto (index.php; assets/ e images/) sul vostro spazio web via FTP;
* Andate sul browser e digitate l'indirizzo del sito.

##Configurazione##

La configurazione non è necessariamente obbligatoria ma ho stabilito alcune variabili che possono risultare utili

###File index.php###

Si possono configurare 4 variabili:

* __$root__: indica la cartella con le immagini della demo (es. 'images/').
* __$start__: è l'immagine di partenza; se non impostata parte dalla prima che viene trovata nella cartella specificata in $root.
* __$bgcol__: indica il colore di sfondo della pagina; se non impostato è bianco. Risulta utile nel caso la grafica fosse più corta dello schermo dell'utente o nel caso non coprisse tutte l'area visualizzata.
* __$title__: imposta titolo della pagina