PrototySite
===========

PrototySite è uno script in PHP e JavaScript, realizzato da [Andrea Rufo](http://www.orangedropdesign.com/ "Orange Drop Design"), che permette una semplice e veloce visualizzazione dei prototipi  di siti web realizzati come immagini jpeg o png.

Sonnino, 9 giu 2013 23:40

##Configurazione##

La configurazione non è necessariamente obbligatoria ma ho stabilito alcune variabili che possono risultare utili

###File index.php###

Si possono configurare 4 variabili:

* __$root__: indica la cartella con le immagini della demo (es. 'images/').
* __$start__: è l'immagine di partenza; se non impostata parte dalla prima che viene trovata nella cartella specificata in $root.
* __$bgcol__: indica il colore di sfondo della pagina; se non impostato è bianco. Risulta utile nel caso la grafica fosse più corta dello schermo dell'utente o nel caso non coprisse tutte l'area visualizzata.
* __$title__: imposta titolo della pagina