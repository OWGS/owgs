************************************
Doku fuer Entwickler Git: https://github.com/OWGS/owgs
************************************
Webseite installieren:
-----------------------------------
1. Leere mySQL Datenbank mit Namen OWGS erstellen (Es können auch andere Namen verwendet werden.)
2. sql script owgs.sql in der erstellten Datenbank ausführen
3. die sql/db_connection.php datei anpassen
4. Alle Files auf den Webserver kopieren Download: https://github.com/OWGS/owgs/archive/master.zip


SESSION Variablen:
-----------------------------------

$_SESSION["authenticated"]
  in dieser variable wird der authentifitierungscode gespeichert:
	0 -> User nicht eingeloggt
	1 -> normaler User eingeloggt
	2 -> Admin User eingeloggt

$_SESSION["good"] und $_SESSION["bad"]
  In diesen Variablen wird eine Message gespeichert danach auf der Seite welche als naechstes geladen wird erscheint.
  Um Eine good message (gruende Meldung) zu senden schreibe:
	$_SESSION["good"] = "Message Text"
  Um Eine bad message (rote Meldung) zu senden schreibe:
	$_SESSION["bad"] = "Message Text
  Alle message werden von folgendem Script ausgegeben: resources/message.php

$_SESSION["userID"]
  In dieser variable istt die ID des zurzeit eingeloggten Users gespeichert.

$_SESSION["username"]
  In dieser variable ist der Usernamen des zurzeit eingeloggten Users gespeichert.


VALIDATIONS:
-----------------------------------

In diesem Projekt gib es javascript-, HTML-, und PHP-Validations

Alle javascript Validations befinden sich im file: js/validationScript.js (kann beliebig erweitert werden.)

Die HTML Validations befinden sich logischerweise imemr im HTML code

Alle PHP Validations befinden sich im file: sql/validation.php
Falls Sie etwas mit PHP validieren wollen muessen sie Folgende Variabeln verwenden:
	$plz
	$guthaben 
	$password
	$name
	$vorname
	$username
	$email
	$adresse
  Beispiel:
 	 $plz = 1235; $username = "hallo";
 	 require_once(__DIR__."/sql/validation.php");
	 if ($validate === true) {
	  Die Eingaben waren valid.
 	 } else {
	  Die Eingaben waren nicht valid.
 	 }

Falls eine neu PHP validation benoetigt wird einfach das file: sql/validation.php erweitern.
	





