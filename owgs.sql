-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Jun 2015 um 09:30
-- Server-Version: 5.6.24
-- PHP-Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `owgs`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `game_type`
--

CREATE TABLE IF NOT EXISTS `game_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `game_type`
--

INSERT INTO `game_type` (`id`, `name`) VALUES
(1, 'allerlei'),
(2, 'Shooter'),
(3, 'Jump and Run'),
(4, 'Race'),
(5, 'RPG');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `platform`
--

CREATE TABLE IF NOT EXISTS `platform` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `platform`
--

INSERT INTO `platform` (`id`, `name`) VALUES
(1, 'Wii U'),
(2, 'PC'),
(3, 'Playstation');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkt`
--

CREATE TABLE IF NOT EXISTS `produkt` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fk_platform` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `fk_game_type` int(11) NOT NULL,
  `bild_path` varchar(50) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `produkt`
--

INSERT INTO `produkt` (`id`, `name`, `fk_platform`, `description`, `fk_game_type`, `bild_path`, `date`, `price`, `quantity`) VALUES
(1, 'Call of Duty: Black Ops 3', 2, 'Eine Call of Duty-Kampagne, wie es sie noch nie zuvor gegeben hat.\r\n\r\n\r\nFacts & Features:\r\n\r\n    Koop-Kampagne: Treyarch hebt das gemeinsame Spielerlebnis in Call of Duty auf eine neue Stufe und liefert eine Kampagne, die mit bis zu vier Spielern online im Koop-Modus bestritten werden kann - mit denselben kampferprobten Netzwerkstrukturen und Sozialsystemen, die auch im erstklassigen Multiplayer- und Zombies-Modus zum Einsatz kommen.\r\n    Cineastisches Arena-Gaming: Das auf den Koop-Modus und einen hohen Wiederspielwert ausgelegte Spiel bietet den Spielern all die epischen cineastischen Spielmomente, für die Call of Duty berühmt ist, sowie neue offene Spielgebiete mit arenaartigen Spielelementen, die es den Spielern erlauben, das Spiel immer wieder mit einer anderen Strategie anzugehen.\r\n    Charakter-Fortschritt: Jeder Spieler kann darüber hinaus beliebig personalisiert werden: von Waffen und Ausrüstung bis hin zu Fähigkeiten und Aussehen - mit einem vollständigen Fortschrittssystem und einer personalisierten Waffenkammer, um die eigenen Errungenschaften zu präsentieren und ein Kampagne-Erlebnis zu schaffen, dass sich stetig weiterentwickelt.\r\n    Neues Bewegungssystem: Mit Black Ops III führt Treyarch ein neues Bewegungssystem ein, das dynamische, miteinander verkettete Bewegungsabläufe unterstützt und es den Spielern ermöglicht, sich flüssig und gewandt in einer Vielzahl von Kombinationen aus kontrollierten Schubsprüngen, Rutschmanövern und Kletterfähigkeiten durch die Umgebung zu bewegen und dabei jederzeit die volle Kontrolle über ihre Waffensysteme zu wahren.\r\n    Massgeschneiderte Maps: Sämtliche Maps wurden von Grund auf für dieses neue Bewegungssystem entworfen, sodass die Spieler sowohl mit traditionellen Bewegungen als auch mit fortschrittlicheren Taktiken und Manövern erfolgreich sein können.\r\n    Spezialisten-Charaktere: Der Multiplayer-Modus von Black Ops III führt ausserdem das neue Spezialisten-Charaktersystem ein, das es den Spielern ermöglicht, sämtliche kampferprobten Waffen und Fähigkeiten jedes einzelnen Charakters zu meistern und dabei in den Stufen aufzusteigen. Dank dieser Erweiterung des traditionellen sowie des Waffen-EP-Fortschrittsystems bietet der Multiplayer-Modus von Black Ops III den Spielern drei unterschiedliche Wege für den Stufenaufstieg.\r\n    Bekämpfen Sie die Untoten in einer brandneuen Horrorgeschichte: Kein Treyarch-Spiel wäre vollständig ohne den charakteristischen Zombies-Modus - ein vollständiges Spielerlebnis mit eigenständiger Geschichte.\r\n    EP-Fortschrittsystem: Black Ops III Zombies ist das bislang spannendste und ambitionierteste Call of Duty Zombies-Erlebnis mit einem vollständigen EP-basierten Fortschrittssystem, das dem packenden Gameplay noch mehr Tiefe und Wiederspielwert verleiht, als es Zombies-Fans ohnehin schon gewohnt sind.', 2, 'img/produkte/pc/cod_bo3.png', '2015-05-12 12:04:41', 60, 10),
(2, 'Assassin''s Creed: Unity', 2, 'Paris, 1789. Die Französische Revolution verwandelt eine einst prächtige Stadt in einen Ort des Schreckens und des Chaos. Das Kopfsteinpflaster der Strassen färbt sich rot vom Blut gewöhnlicher Bürger, die es wagten, sich gegen die Willkür der Aristokratie aufzulehnen. Doch während sich die Nation zerfleischt, begibt sich ein junger Mann namens Arno auf ein außergewöhnliches Abenteuer, um die wahren Mächte hinter der Revolution zu entlarven. Seine Suche führt ihn mitten hinein in einem rücksichtslosen Kampf um das Schicksal der Nation und macht ihn zu einem wahren Meister-Assassinen.\r\n\r\nAssassin’s Creed Unity ist die Next-Gen-Weiterentwicklung der gleichnamigen Blockbuster-Serie, angetrieben von der brandneuen und komplett überarbeiteten Anvil-Engine. Erlebe die Französische Revolution vom Sturm auf die Bastille bis zur Hinrichtung Ludwig XVI auf nie gekannte Weise und hilf dem französischen Volk, sich eine neue Zukunft zu schmieden.\r\n\r\nNeben der epischen Einzelspielerkampagne kannst du das frei begehbare Paris des 18. Jahrhunderts auch mit bis zu drei Freunden erkunden. Begeht riskante Raubüberfälle und nehmt an einzigartigen story-getriebenen Missionen teil, die eigens für das kooperative Spiel entworfen wurden. Schütze einen Kaiser oder meuchle einen Spion der Templer. Aber der Sieg wird nicht leicht erkauft sein. Du und deine tödliche Truppe müsst euch absprechen, koordinieren und eure diversen Fertigkeiten zum Einsatz bringen, um Eure Mission zu erfüllen und anschliessend im Schatten zu verschwinden.', 5, 'img/produkte/pc/pc_assassinscreedunitysee.jpg', '2015-05-11 07:50:49', 30, 27),
(3, ' Grand Theft Auto 5', 2, 'Rockstar Games'' von der Presse gefeiertes Open-World-Spiel, Grand Theft Auto V, erscheint für den PC.\r\n\r\nGrand Theft Auto V für PC bietet zahlreiche und signifikante visuelle und technische Verbesserungen, die Los Santos und Blaine County noch fesselnder machen, als jemals zuvor. Neben erhöhter Sichtweite und einer Bildwiederholrate von 60FPS sowie der Möglichkeit, die Grafik in 4K-Auflösung darzustellen, können sich Spieler auf eine Reihe von Ergänzungen und Verbesserungen freuen, unter anderem auf:\r\n\r\n    Neue Waffen, Fahrzeuge und Aktivitäten\r\n    Eine erweiterte Tierwelt\r\n    Dichteren Verkehr\r\n    Ein neues Vegetations-System\r\n    Verbesserte Schadens- und Wettereffekte und vieles mehr.\r\n\r\nAll diese Features werden durch die beeindruckende Auflösung, die dramatischen Verbesserungen in Sachen Belichtung, Schatten und Texturen sowie durch eine konstante Bildwiederholrate noch weiter verbessert.\r\n\r\nDie PC-Version von Grand Theft Auto V und Grand Theft Auto Online beinhaltet außerdem die Egoperspektive, die Spielern die Möglichkeit gibt, die unglaublich detaillierte Welt von Los Santos und Blaine County auf eine ganz neue Weise zu erkunden.\r\n\r\nGrand Theft Auto V für PC beinhaltet ausserdem den neuen Rockstar-Editor, der den Spielern eine große Palette an Werkzeugen an die Hand gibt, um Gameplay-Clips zu erstellen, zu bearbeiten und direkt im Social Club und auf YouTube zu veröffentlichen.\r\n\r\nGrand Theft Auto V beinhaltet auch Grand Theft Auto Online, das dynamische und sich ständig verändernde Grand Theft Auto-Universum. Zu den Verbesserungen in Grand Theft Auto Online gehört eine erhöhte Spieleranzahl – 30 Spieler können jetzt online miteinander spielen. Alle bestehenden Gameplay-Verbesserungen und von Rockstar seit der Veröffentlichung von Grand Theft Auto Online erstellten Inhalte werden auch für PC verfügbar sein – und viele weitere werden folgen.\r\n\r\nJetzt Vorbestellen und 1.000.000 $ im Spiel sichern:\r\nAlle Vorbesteller des Spiels erhalten zum Start eine Gutschrift in Höhe von 1.000.000 GTA$ zur Verwendung in Grand Theft Auto V und Grand Theft Auto Online.\r\n\r\nExklusive Inhalte für bestehende Spieler:\r\nAuf alle bestehenden Spieler der PlayStation3- und Xbox 360-Versionen wartet ebenfalls eine Vielzahl neuer, exklusiver Inhalte, unter anderem seltene Ausführungen klassischer Fahrzeuge der Grand Theft Auto-Reihe zum Sammeln, wie der Dukes, das Wasserflugzeug Dodo und ein schnelleres, wendigeres Atomic-Luftschiff sowie Aktivitäten wie Wildtier-Foto-Herausforderungen, neue Schiessstand-Herausforderungen, neue Waffen und mehr.\r\n\r\nÜbertrage deinen bestehenden GTA-Online Charakter:\r\nBestehende Spieler können ihre Charaktere und ihren Spielfortschritt in Grand Theft Auto Online von PlayStation 3 oder Xbox 360 wahlweise auf PlayStation 4, Xbox One oder PC übertragen.', 1, 'img/produkte/pc/pc_gta5e.png', '2015-05-11 07:53:09', 55, 15),
(4, 'Battlefield: Hardline', 2, 'Werde in Battlefield Hardline zum Cop oder zum Verbrecher. Dieser actionreiche Blockbuster vereint das typische Multiplayer-Gameplay von Battlefield mit einer emotionsgeladenen Story und einer Spielwelt, wie man sie von Crime-Serien aus dem TV kennt.\r\n\r\nIn der packenden Einzelspieler-Kampagne stürzt du dich als junger Detective Nick Mendoza in einen Rachefeldzug quer durchs ganze Land, um mit deinen ehemaligen Kollegen abzurechnen.\r\n\r\nIm Multiplayer-Modus gehst du in neuen Cops-&-Verbrecher-Modi wie „Überfall“ und „Rettung“ auf Verbrecherjagd, raubst Tresore aus und rettest Geiseln. Willkommen in deiner neuen Welt.\r\n\r\nKäufer von Battlefield Hardline erhalten 3 Gold Battlepacks, die eine Mischung aus Waffenzubehör, Emblemen, XP-Boosts und weiteren Objekten zur Individualisierung des Spielers beinhalten. Du erhältst je ein Battlepack pro Woche, sobald du den Titel erstmals gespielt hast.', 2, 'img/produkte/pc/pc_battlefieldhardline.jpg', '2015-05-11 08:19:22', 65, 53),
(5, 'Call of Duty: Advanced Warfare', 2, 'Call of Duty: Advanced Warfare von Entwickler Sledgehammer Games (Mitentwickler von Call of Duty: Modern Warfare 3) markiert den ersten Titel der Serie, der dem neuen Drei-Jahre-Turnus folgt. Call of Duty: Advanced Warfare zeigt die gewaltigen Schlachtfelder der Zukunft, auf denen die Technologie und Taktik sich derart weiterentwickelt haben, dass sie ein neues Kampfzeitalter einläuten.\r\n\r\nMit einer atemberaubenden schauspielerischen Darstellung von Oscarpreisträger Kevin Spacey als Jonathan Irons – einem der einflussreichsten Männer der Welt – zeigt das Spiel eine schaurige Vision der zukünftigen Kriegsführung.\r\n\r\n\r\nEine fortschrittliche Welt:\r\n\r\n    Call of Duty: Advanced Warfare spielt in einer glaubwürdigen Zukunft, in der technologischer Fortschritt und die heutigen Militärpraktiken gemeinsam zu weitreichenden Konsequenzen geführt haben.\r\n    In dieser sorgsam recherchierten und ausgearbeiteten Vision der Zukunft sind Private Militär-Corporations (PMCs) die vorherrschenden Streitkräfte unzähliger Nationen geworden, die ihr Militär outgesourced haben, wodurch die Grenzen neu abgesteckt und die Kriegsregeln neu geschrieben wurden.\r\n    Und Jonathan Irons, der Gründer und Vorstand einer der größten PMCs der Welt – der Atlas Corporation – steht im Mittelpunkt.\r\n\r\n\r\nEin fortschrittlicher Soldat:\r\n\r\n    Mächtige Exoskelette haben jeden Aspekt der Einsatzbereitschaft eines Soldaten weiterentwickelt. Die Kämpfer können unglaublich tödlich überall eingesetzt werden und müssen sich nicht erst spezialisieren.\r\n    Dank dieser neuen Gameplay-Mechanik haben die Spieler neue Aktionsmöglichkeiten und können mit neuen Boost-Sprüngen und Enterhaken viel stärker vertikal agieren, sich tarnen und eine Biomechanik ausnutzen, die unnachahmliche Stärke, Wachsamkeit, Ausdauer und Geschwindigkeit ermöglicht.\r\n    Mit Einführung des Exoskeletts und einer neuen und fortschrittlichen Panzerung und Bewaffnung besitzt jeder Soldat taktische Freiheit in jedem Gelände wie niemals zuvor, so dass sich die Spielweise von Call of Duty in allen Spielmodi ändern wird.', 2, 'img/produkte/pc/pc_codadvancedwarfare.jpg', '2015-05-11 08:23:56', 35, 24),
(6, 'Titanfall', 2, 'Das Universum von Titanfall stellt Klein gegen Groß, Natur gegen Industrie und Mensch gegen Maschine und wirft die Spieler als Elitepiloten in einen Konflikt zwischen der Interstellar Manufacturing Corporation (IMC) und der Miliz.\r\n\r\nDie Schlachten erinnern an typische Multiplayergefechte in einer grafisch imposanten, sehr bunten Umgebung. Nach und nach ist immer mehr von den Titanen zu sehen, die mit schweren Geschützen ausgestattet sind, einen Gegner aber auch einfach mit einem gezielten Tritt ausschalten können. Die Stahlrüstungen sind schwer umkämpft: Spieler können ihnen auf den eisernen Kopf springen und dort eine Sprengladung anbringen, oder sie kapern und aus der Cockpitsicht selbst mit ihnen kämpfen.\r\n\r\nWer auf dem Boden bleibt, ist deutlich flexibler und schneller als die schweren Kolosse, zumal die Piloten in Titanfall für kurze Zeit in Parcour-Manier an Wänden entlanglaufen und so rasch an einige Stellen gelangen können, die für die Titanen nicht ganz so fix erreichbar sind.', 2, 'img/produkte/pc/pc_titanfall.jpg', '2015-05-11 08:40:16', 25, 14),
(7, 'Project CARS', 2, 'Project CARS ist eines der authentischsten, intensivsten und technisch beeindrucktesten Rennspiele auf diesem Planeten.\r\n\r\nDas Projekt wurde über Crowd-Funding von einer passionierten Community ins Leben gerufen, welche aktiv in den Entwicklungsprozess eingebunden ist, um das ultimative Rennspielerlebnis zu schaffen. In Project CARS können Spieler, einen Fahrer erstellen und mit ihm innerhalb eines weiten Spektrums an Motorsportarten mit Vollgas einer Vielzahl von Historic Goals hinterherjagen und dabei in der Hall Of Fame verewigt werden. Darüber hinaus können die Spieler im Online-Modus ihr Fahrkönnen; entweder während Leaderboard-basierender und kompetitiver Rennwochenenden oder in kontinuierlich aktualisierten Community-Events – zuweilen mit echten Preisgewinnen, testen.\r\n\r\nMit der grössten Streckenauswahl aller Zeiten, einer bahnbrechenden Tag-und-Nacht- sowie Wetterdynamik, Weltklasse-Grafik und - kontrollen, einem tiefgreifenden Tuning- und Boxenstopp-System sowie Oculus Rift und Project Morpheus Unterstützung, lässt Project CARS die Konkurrenz hinter sich im Staub zurück.', 4, 'img/produkte/pc/pc_projectcars.jpg', '2015-05-11 08:42:12', 60, 46),
(8, 'Dying Light', 2, 'Dying Light ist ein Action-Survival-Horror-Spiel in der Egoperspektive, das in einer riesigen, offenen Welt angesiedelt ist. Bei Tag durchstreifen die Spieler auf der Suche nach Vorräten eine weitläufige urbane Umgebung, in der gefährliche Zombiehorden ihr Unwesen treiben und bauen Waffen, um sich gegen die wachsende Schar der Infizierten zur Wehr zu setzen. In der Nacht werden die Jäger zu Gejagten, denn die Gegner werden aggressiver und gefährlicher. Am furchterregendsten aber sind die Predators, die erst nach Sonnenuntergang erscheinen. Um bis zu den ersten Sonnenstrahlen am nächsten Morgen zu überleben, müssen die Spieler Einfallsreichtum beweisen und all ihre Kräfte aufbieten. Gute Nacht und viel Glück!', 5, 'img/produkte/pc/pc_dyinglight.jpg', '2015-05-11 08:43:25', 50, 57),
(9, 'Dead Island 2', 2, 'Mehrere Monate nach den Ereignissen auf Banoi hat das US-Militär den goldenen Staat unter Quarantäne gestellt. Als Sperrgebiet wurde Kalifornien zu einem blutigen Paradies für all diejenigen, die ihre Häuser nicht verlassen wollten, und zu einem Action-Spielplatz für alle, die Ruhm, Abenteuer und einen Neuanfang für sich suchen. Durch die Kombination der klassischen Serien-Elemente eines fesselnden Nahkampfes und von Action- und Rollenspielelementen bietet Dead Island 2 verrückte und noch niemals zuvor gesehene handgefertigte Waffen und ausgefallene Charaktere, die den Spielern den markanten goldenen Staat bis hin zu den Promenaden des berühmten Venice Beach zeigen.\r\n\r\nMit der Unreal Engine 4 setzt Dead Island 2 wieder auf den beliebten nahtlosen Mehrspieler-Modus für bis zu acht Spieler, die mit- oder gegeneinander sowie jeder für sich in einem Erlebnis der nächsten Generation mit sozialen Komponenten spielen können. Die individuellen Klassen sorgen für ein abwechslungsreiches Gameplay: Vom actionorientierten Berserker bis hin zum Hunter besitzt jeder Charakter einen eigenen Spielstil. Mit dem detaillierten Fähigkeitssystem können die Spieler eigene Helden und Waffen schmieden.', 5, 'img/produkte/pc/pc_deadisland2.jpg', '2015-05-11 08:44:37', 50, 42),
(10, ' Battlefield 4 - Premium Edition', 2, 'Der Action-Blockbuster Battlefield 4 setzt neue Maßstäbe im Genre und bietet einzigartige Momente,wie nur Battlefield es kann. Dank der Leistungsfähigkeit der Next-Generation-Engine Frostbite 3 liefert Battlefield 4 unübertreffliche Dramatik und Spannung.\r\n\r\nNur in Battlefield hast du die Möglichkeit, die Gebäude zu zerstören, in denen der Feind Schutz gesucht hat. Nur in Battlefield kannst du einen Angriff von einem Kanonenboot aus leiten. In Battlefield hast du die Freiheit, mehr zu erleben und mehr zu tun und dabei genau der zu sein, der du sein möchtest: Spiele deine Stärken aus und beschreite den Pfad zum Sieg so, wie es dir gefällt.\r\n\r\nDer Multiplayer-Modus hat die Serie berühmt gemacht, doch Battlefield 4 bietet außerdem noch eine spannende und fesselnde Kampagne. Evakuiere amerikanische VIPs aus Shanghai und begleite dein Squad auf seinem schweren Weg zurück nach Hause.\r\n\r\nSo hast du noch nie gespielt. Erlebe spektakuläre Schlachten, wie es sie nur in Battlefield gibt', 2, 'img/produkte/pc/pc_battlefield4premium.jpg', '2015-05-11 08:45:43', 45, 50),
(11, 'The Crew', 3, '„The Crew“ will es wissen: Das Rennspiel ist ein waschechtes Action-MMO mit einer riesigen, komplett befahrbaren Spielwelt, vollbepackt mit Events. Ein gängiger Trend, zuletzt etwa in Szene gesetzt von „Forza Horizon“ oder der Neuauflage von „Need for Speed – Most Wanted“. Dieses Spielprinzip wird natürlich auf den Next-Gen-Konsolen bis aufs Äußerste ausgereizt: Sie befahren nicht etwa nur eine Großstadt, sondern eher ein ganzes Land...', 4, 'img/produkte/ps/ps4_thecrew.jpg', '2015-05-12 09:54:31', 40, 32),
(12, 'Fifa 15', 3, 'EA SPORTS FIFA 15 – Feel The Game. Fussball ist mehr als nur das Spiel auf dem Platz. Fussball ist Einstellung und Glaube. Ist Athletik und Präzision. Ist Dramatik und Emotion. Fussball ist immer wieder neu, unvorhersehbar und einzigartig.\r\n\r\nIn EA SPORTS FIFA 15 erfährst Du die Intensität und die Emotionen des Spiels auf und neben dem Platz wie nie zuvor. Die Spieler werden durch Authentic Player Models noch wirklichkeitsnaher dargestellt. Player Control verbessert die Reaktion der Bewegung der Spieler, gibt den Athleten mehr Kontrolle und Personalität am Ball und macht Eins-zu-Eins Situationen lohnender als je zuvor. Zum ersten Mal sind alle 20 Stadien der Barclays Premier League komplett in das Spiel integriert. Die konkurrenzlose Authentizität erreicht so ein ganz neues Level. Fussball ist das grösste Drama der Erde und FIFA 15 stellt die Fans ins Zentrum erlaubt dir die Intensität des grössten Spiels der Welt zu erleben.', 1, 'img/produkte/ps/ps4_fifa15.jpg', '2015-05-12 09:57:40', 25, 19),
(13, 'Dark Souls 2: Scholar of the First Sin', 3, 'Diese Version des Spiels zieht darüber hinaus den vollen Nutzen aus der höheren Rechenleistung des PlayStation 4 Systems, der Xbox One sowie aus DirectX-11-fähigen Spiele-PCs, um auf diesen Plattformen zusätzlich zu den Neuerungen eine verbesserte Grafikqualität zu bieten.\r\n\r\nDARK SOULS II: Scholar of the First Sin erscheint außerdem für das PlayStation®3 System, Xbox 360 und DirectX-9-fähige PCs. Diese Version enthält alle drei DLC-Missionen (Crown Of The Sunken King, Crown Of The Old Iron King und Crown Of The Ivory King) sowie das umfangreiche Update auf Version 1.10. Das Update fügt neue Features wie einen weiteren Nicht-Spieler-Charakter hinzu, welcher für eine verräterische Aufgabe, die die Spieler quer durch Drangleic führt, aufgesucht werden kann. Außerdem enthalten: erweiterte Story, die neuen Ingame-Events, sowie das verbesserte Balancing und Online-Matchmaking.\r\n\r\nSpieler, die bereits DARK SOULS II auf PC, Xbox 360 oder PlayStation 3 besitzen, erhalten das Update auf Version 1.10 kostenfrei (für PCs nur für DirectX-9). Audio-Visuelle Verbesserungen für die PC-Version beinhaltet nur das kostenpflichtige Update für DirectX-11.', 5, 'img/produkte/ps/ps4_darksouls2.jpg', '2015-05-12 09:59:30', 65, 55),
(14, 'Call of Duty: Advanced Warfare', 3, 'Call of Duty: Advanced Warfare von Entwickler Sledgehammer Games (Mitentwickler von Call of Duty: Modern Warfare 3) markiert den ersten Titel der Serie, der dem neuen Drei-Jahre-Turnus folgt. Call of Duty: Advanced Warfare zeigt die gewaltigen Schlachtfelder der Zukunft, auf denen die Technologie und Taktik sich derart weiterentwickelt haben, dass sie ein neues Kampfzeitalter einläuten. Mit einer atemberaubenden schauspielerischen Darstellung von Oscarpreisträger Kevin Spacey als Jonathan Irons – einem der einflussreichsten Männer der Welt – zeigt das Spiel eine schaurige Vision der zukünftigen Kriegsführung. Eine fortschrittliche Welt: Call of Duty: Advanced Warfare spielt in einer glaubwürdigen Zukunft, in der technologischer Fortschritt und die heutigen Militärpraktiken gemeinsam zu weitreichenden Konsequenzen geführt haben. In dieser sorgsam recherchierten und ausgearbeiteten Vision der Zukunft sind Private Militär-Corporations (PMCs) die vorherrschenden Streitkräfte unzähliger Nationen geworden, die ihr Militär outgesourced haben, wodurch die Grenzen neu abgesteckt und die Kriegsregeln neu geschrieben wurden. Und Jonathan Irons, der Gründer und Vorstand einer der größten PMCs der Welt – der Atlas Corporation – steht im Mittelpunkt. Ein fortschrittlicher Soldat: Mächtige Exoskelette haben jeden Aspekt der Einsatzbereitschaft eines Soldaten weiterentwickelt. Die Kämpfer können unglaublich tödlich überall eingesetzt werden und müssen sich nicht erst spezialisieren. Dank dieser neuen Gameplay-Mechanik haben die Spieler neue Aktionsmöglichkeiten und können mit neuen Boost-Sprüngen und Enterhaken viel stärker vertikal agieren, sich tarnen und eine Biomechanik ausnutzen, die unnachahmliche Stärke, Wachsamkeit, Ausdauer und Geschwindigkeit ermöglicht. Mit Einführung des Exoskeletts und einer neuen und fortschrittlichen Panzerung und Bewaffnung besitzt jeder Soldat taktische Freiheit in jedem Gelände wie niemals zuvor, so dass sich die Spielweise von Call of Duty in allen Spielmodi ändern wird. ', 2, 'img/produkte/ps/ps4_codadvancedwarfare.jpg', '2015-05-12 11:06:44', 50, 23),
(15, 'Battlefield: Hardline', 3, 'Werde in Battlefield Hardline zum Cop oder zum Verbrecher. Dieser actionreiche Blockbuster vereint das typische Multiplayer-Gameplay von Battlefield mit einer emotionsgeladenen Story und einer Spielwelt, wie man sie von Crime-Serien aus dem TV kennt. In der packenden Einzelspieler-Kampagne stürzt du dich als junger Detective Nick Mendoza in einen Rachefeldzug quer durchs ganze Land, um mit deinen ehemaligen Kollegen abzurechnen. Im Multiplayer-Modus gehst du in neuen Cops-&-Verbrecher-Modi wie „Überfall“ und „Rettung“ auf Verbrecherjagd, raubst Tresore aus und rettest Geiseln. Willkommen in deiner neuen Welt. Käufer von Battlefield Hardline erhalten 3 Gold Battlepacks, die eine Mischung aus Waffenzubehör, Emblemen, XP-Boosts und weiteren Objekten zur Individualisierung des Spielers beinhalten. Du erhältst je ein Battlepack pro Woche, sobald du den Titel erstmals gespielt hast. ', 2, 'img/produkte/ps/ps4_battlefieldhardline.jpg', '2015-05-12 11:09:23', 60, 21),
(16, 'Borderlands: The Handsome Collection', 3, 'Erstmals können die Spieler Borderlands 2 und Borderlands: The Pre-Sequel in HD auf Konsolen erleben – und es sieht besser aus denn je. Die The Handsome Collection lässt die Fans von Borderlands ihr Abenteuer genau dort fortsetzen, wo sie aufgehört haben, indem sie ihre gespeicherten Spielstände mit der neuen Cross-Save-Funktion auf die Next-Gen-Konsolen übertragen**. Nach Stunden des Schiessens und Absahnens in Borderlands 2 und Borderlands: The Pre-Sequel auf älteren Konsolen können die Spieler ihre hochgelevelten Charaktere und ihren Badass-Rang in die The Handsome Collection übernehmen. Außerdem können bis zu vier Spieler gleichzeitig an einem Bildschirm spielen – mit dem Splitscreen für vier Spieler, einer weiteren Neuerung in der Reihe.\r\n\r\n"Mit der The Handsome Collection können die Spieler die ganze Geschichte des Aufstiegs und Falls von Handsome Jack erleben – von seinen gar nicht so bescheidenen Anfängen auf Elpis bis hin zu seinem Dasein als tyrannischer CEO von Hyperion auf Pandora – alles in einem Komplettpaket zum Vorteilspreis", so Christoph Hartmann, Präsident von 2K. "Diese Sammlung ist der offizielle Schritt der Marke Borderlands auf die Next-Gen-Plattformen und wir sind stolz darauf, unseren Fans die Möglichkeit geben zu können, in der The Handsome Collection mit genau den Charakteren weiterzuspielen, die sie sich während ihrer Abenteuer aufgebaut haben."', 2, 'img/produkte/ps/ps4_borderland.jpg', '2015-05-12 11:11:37', 55, 56),
(17, 'Ride', 3, 'Ride ist ein Spiel für alle, die Motorräder lieben. Ride bietet euch eine riesige Auswahl der schönsten Strassen–Motorräder von den beliebtesten Herstellern, viele Individualisierungs–Möglichkeiten für Motorräder und Fahrer, spannende Vollgas-Wettbewerbe und eine Reise um die Welt mit zahlreichen einzigartigen Strecken, die das Herz eines jeden Motorrad–Fans höher schlagen lassen.\r\n\r\nGrosse Auswahl an Spielmodi:\r\n\r\n    Welttournee-Events: Bring deinen Fahrer an die Spitze der Weltrangliste. Bestehe in verschiedenen Disziplinen wie Einzelrennen, Zeitfahren, Beschleunigungsrennen, Ausdauerrennen oder speziellen Herausforderungen.\r\n    Schnelles Rennen mit individueller Auswahl von Strecke und Motorrad.\r\n    Zeitfahren\r\n    Split Screen Multiplayer zu zweit an einer Konsole.\r\n    Online–Modus für Rennen mit bis zu 12 menschlichen Fahrern.\r\n', 4, 'img/produkte/ps/ps4_ride.jpg', '2015-05-12 11:16:00', 75, 64),
(18, ' Call of Duty: Black Ops 3', 3, 'Eine Call of Duty-Kampagne, wie es sie noch nie zuvor gegeben hat.\r\n\r\n\r\nFacts & Features:\r\n\r\n    Koop-Kampagne: Treyarch hebt das gemeinsame Spielerlebnis in Call of Duty auf eine neue Stufe und liefert eine Kampagne, die mit bis zu vier Spielern online im Koop-Modus bestritten werden kann - mit denselben kampferprobten Netzwerkstrukturen und Sozialsystemen, die auch im erstklassigen Multiplayer- und Zombies-Modus zum Einsatz kommen.\r\n    Cineastisches Arena-Gaming: Das auf den Koop-Modus und einen hohen Wiederspielwert ausgelegte Spiel bietet den Spielern all die epischen cineastischen Spielmomente, für die Call of Duty berühmt ist, sowie neue offene Spielgebiete mit arenaartigen Spielelementen, die es den Spielern erlauben, das Spiel immer wieder mit einer anderen Strategie anzugehen.\r\n    Charakter-Fortschritt: Jeder Spieler kann darüber hinaus beliebig personalisiert werden: von Waffen und Ausrüstung bis hin zu Fähigkeiten und Aussehen - mit einem vollständigen Fortschrittssystem und einer personalisierten Waffenkammer, um die eigenen Errungenschaften zu präsentieren und ein Kampagne-Erlebnis zu schaffen, dass sich stetig weiterentwickelt.\r\n    Neues Bewegungssystem: Mit Black Ops III führt Treyarch ein neues Bewegungssystem ein, das dynamische, miteinander verkettete Bewegungsabläufe unterstützt und es den Spielern ermöglicht, sich flüssig und gewandt in einer Vielzahl von Kombinationen aus kontrollierten Schubsprüngen, Rutschmanövern und Kletterfähigkeiten durch die Umgebung zu bewegen und dabei jederzeit die volle Kontrolle über ihre Waffensysteme zu wahren.\r\n    Massgeschneiderte Maps: Sämtliche Maps wurden von Grund auf für dieses neue Bewegungssystem entworfen, sodass die Spieler sowohl mit traditionellen Bewegungen als auch mit fortschrittlicheren Taktiken und Manövern erfolgreich sein können.\r\n    Spezialisten-Charaktere: Der Multiplayer-Modus von Black Ops III führt ausserdem das neue Spezialisten-Charaktersystem ein, das es den Spielern ermöglicht, sämtliche kampferprobten Waffen und Fähigkeiten jedes einzelnen Charakters zu meistern und dabei in den Stufen aufzusteigen. Dank dieser Erweiterung des traditionellen sowie des Waffen-EP-Fortschrittsystems bietet der Multiplayer-Modus von Black Ops III den Spielern drei unterschiedliche Wege für den Stufenaufstieg.\r\n    Bekämpfen Sie die Untoten in einer brandneuen Horrorgeschichte: Kein Treyarch-Spiel wäre vollständig ohne den charakteristischen Zombies-Modus - ein vollständiges Spielerlebnis mit eigenständiger Geschichte.\r\n    EP-Fortschrittsystem: Black Ops III Zombies ist das bislang spannendste und ambitionierteste Call of Duty Zombies-Erlebnis mit einem vollständigen EP-basierten Fortschrittssystem, das dem packenden Gameplay noch mehr Tiefe und Wiederspielwert verleiht, als es Zombies-Fans ohnehin schon gewohnt sind.', 2, 'img/produkte/ps/ps4_callofdutyblackops3.jpg', '2015-05-12 11:19:17', 75, 100),
(19, 'Super Mario 3D World', 1, 'In Super Mario 3D World reist du mit Mario, Luigi & Co. Ins Feenland. Bowser hat die Feenprinzessin entführt, und nun ist es an Mario und seinen Freunden, sie zu retten, indem sie am Ende der vielfältigen Level auf ihrem Weg den Zielpfahl erreichen. Das Feenland steckt voller Tricks und Fallen, mit denen unsere Helden umgehen müssen. Sie müssen sich durch transparente Röhren quetschen, können Bälle gezielt auf Gegner werfen und auf den Dächern von Zügen fahren. Es kann sogar vorkommen, dass sie katzenhaft über eine Mauer klettern müssen. Mit seinem lokalen 4-Spieler-Multiplayer und der spziellen Wii U GamePad-Steuerung bietet SUPER MARIO 3D WORLD ein brandneues Abenteuer - nur auf Wii U!\r\n\r\nMarios Bandbreite an Kopfbedeckungen und Spezialfähigkeiten wächst immer weiter. Neben Klassikern wie Tanuki-Mario und Bumerang-Mario gibt es diverse neue Power-Ups zu entdecken. Mit einer Superglocke kannst du Mario in eine Katze verwandeln, die Wände empor klettern und mit ihren Krallen gehörig kratzen kann. Eine Kanonen-Box auf deinem Kopf verleiht dir die Fähigkeit, Projektile zu verschießen. Und indem du eine Doppelkirsche einsammelst, kannst du dich klonen und mit doppelter Durchschlagskraft angreifen.\r\n\r\nAber in diesem Abenteuer ist Mario nicht allein. Luigi, Prinzessin Peach und Toad sind ebenfalls mit von der Partie und trumpfen mit verschiedensten Fähigkeiten auf. Mario verfügt über das ausgewogenste Repertoire an Fähigkeiten, während Luigi am höchsten springen, Prinzessin Peach durch die Luft schweben und Toad sich am schnellsten am Boden bewegen kann. Du kannst deinen bevorzugten Charakter wählen, seine einzigartigen Fähigkeiten nutzen und so jeden Winkel der einzelnen Level erkunden.\r\n\r\nIm lokalen Mehrspieler-Modus von Super Mario 3D World können bis zu vier Person gemeinsam an den Start gehen. Sie können zusammenarbeiten, um ein Level zu meistern, oder um die höchste Punktzahl wetteifern. Dabei können verschiedene Controller verwendet werden*. Du kannst also denjenigen wählen, der deinem Spielstil entgegenkommt.\r\n\r\nWenn du die vielen Stempel aufspürst, die über das Feenland verstreut sind, kannst du damit die Mitteilungen verzieren, die du aus dem Spiel heraus im Miiverse postest. Viel Spaß beim Sammeln!', 3, 'img/produkte/wu/wu_supermario3dworld.jpg', '2015-05-12 11:26:57', 65, 34),
(20, 'Angry Birds Star Wars', 1, 'In Angry Birds Star Wars schlüpfen die wütenden Vögel in die Rollen bekannter Film-Charaktere wie Luke Skywalker oder Prinzessin Leia. Jeder der gefiederten Helden ist dabei nicht nur mit charakteristischen optischen Merkmalen wie etwa Leias Zopf-Frisur ausgestattet, sondern zieht auch mit Spezial-Fähigkeiten gegen die grunzenden Gegenspieler ins Feld. So kann Luke Skywalker beispielsweise mit seinem Lichtschwert Gebäude in Schutt und Asche legen, während Leia AT-AT Walker mit einem Schussregen zerlegt.\r\n\r\nAm bekannten Spielprinzip der Angry-Birds-Reihe hat sich auch mit dem neuen Ableger nichts geändert. Nach wie vor gilt es, unterschiedliche Vögel mit einer Schleuder auf gegnerische Bauwerke abzufeuern und diese mit möglichst wenigen Würfen zu zerstören. Je weniger Federvieh für diese Aufgabe benötigt wird, desto mehr Punkte bekommt der Spieler am Ende eines Levels.', 1, 'img/produkte/wu/wu_angrybirdsstarwars.jpg', '2015-05-12 11:28:57', 20, 46),
(21, 'Call of Duty: Black Ops 2', 1, 'Call of Duty: Black Ops 2 legt die Messlatte noch höher, was die Fans von der bahnbrechenden Serie erwarten können. Es versetzt die Spieler in die nahe Zukunft, in den Kalten Krieg des 21. Jahrhunderts, wo dank des Zusammenspiels neuer Waffen und Technologien andere Kriege ausgefochten werden.\r\n\r\nIn einer Geschichte, die mehrere Epochen und Generationen überspannt, sind die Spieler mit dem heimtückischen Genie Raul Menendez konfrontiert, der sich die Infrastruktur des U.S.-Militärs zunutze macht, um seine eigenen Pläne zu verfolgen. Verwenden Sie futuristische Waffen und fortschrittliche Robotik, um die Welt vor dem Abgrund der Vernichtung zu retten.\r\n\r\nBrandneues erstellen einer Klasse:\r\nDas Erstellen von Klassen wurde neu gestaltet und bietet den Spielern ein neues "Nimm-10" Zuteilungssystem, mit dem eine nie zuvor dagewesene Anzahl an Kombinationen zum Erstellen einer Klasse möglich ist. Spieler müssen nicht länger Ausrüstung aus jeder Kategorie wählen; stattdessen tauschen sie Objekte von einer Kategorie gegen zusätzliche Objekte in einer anderen - jede Kombination von 10 Objekten macht beinahe alles möglich.', 2, 'img/produkte/wu/wu_callofdutyblackops2.jpg', '2015-05-12 11:30:19', 35, 21),
(22, 'Mario Kart 8', 1, 'Mario Kart 8 ist das erste Spiel der Kult-Rennserie, das in brilliantem HD erscheint – exklusiv für Wii U. Zu entdecken gibt es: neue Kurse, neu designte Fahrzeuge und das neue Antigravitations-Feature, mit dem sich die Fahrer der Schwerkraft widersetzen können. Auch bekannte Elemente, wie der Gleitschirm aus Mario Kart 7 oder die rasanten Motorräder aus Mario Kart Wii sind integriert.', 4, 'img/produkte/wu/wu_mariokart8.jpg', '2015-05-12 11:33:21', 55, 42),
(23, ' Hyrule Warriors', 1, 'Als Link, Impa und andere Charaktere aus der The Legend of Zelda-Reihe kämpfst du gegen ganze Legionen von Gegnern und setzt dabei mächtige Attacken im Stil von Dynasty Warriors ein. Dieses Abenteuer führt dich an beliebte Schauplätze des Königreichs von Hyrule, wo du auf die fiesesten Feinde der Zelda-Geschichte treffen wirst. Du musst strategisch denken und Missionen so effizient wie möglich meistern, um Hyrule zu retten.\r\n\r\nDas Triforce ist aus dem Gleichgewicht geraten, und das Königreich von Hyrule wird wieder einmal von finsteren Mächten bedroht. Diesmal steckt Cia, die schwarze Zauberin, dahinter. Nun ist es dem legendären Helden Link überlassen, Horden von Feinden zu besiegen und die verschwundene Prinzessin Zelda aufzuspüren.\r\n\r\nIndem du in der Handlung voranschreitest, schaltest du neue spielbare Charaktere mit einzigartigen Techniken und Waffenarten frei. Du kannst Rubine und andere nützliche Gegenstände sammeln, um Waffen aufzurüsten und Abzeichen herzustellen, mit denen du die Fähigkeiten der einzelnen Krieger verbessern kannst. Mit intensiven Combos musst du dann alles aus deinen Attacken herausholen, um Horden von Bokblins niederzuschlagen. Diesmal wirst du dir die Hände schmutzig machen, um Hyrule zu retten ...', 5, 'img/produkte/wu/wu_hyrulewarriors.jpg', '2015-05-12 11:36:43', 45, 24),
(24, 'Watch Dogs', 1, 'Du spielst Aiden Pearce, einen brillanten Hacker und ehemaligen Gangster, dessen kriminelle Vergangenheit zu einer blutigen Familientragödie führte. Jetzt bist du auf der Jagd nach den Leuten, die deiner Familie Leid zugefügt haben, und du hast die Möglichkeit jeden in deinem Umfeld zu überwachen und zu hacken, indem du alles manipulierst, was mit dem Netzwerk der Stadt verbunden ist. Greife auf die allgegenwärtigen Überwachungskameras zu, lade persönliche Informationen herunter, um eine Zielperson zu finden, kontrolliereAmpeln und öffentliche Verkehrsmittel… und vieles mehr. Nutze die Stadt Chicago als deine ultimative Waffe und nimm auf deine persönliche Art Rache.', 5, 'img/produkte/wu/wu_watchdogs.jpg', '2015-05-12 11:37:50', 25, 31),
(25, 'New Super Mario Bros. U', 1, 'Mario macht den Sprung auf Wii U mit New Super Mario Bros. U, einem neuen Side-Scrolling-Abenteuer, in dem Mario immer neue Gestalt annimmt und die Spieler in Form ihrer Mii-Charaktere mitmischen können. Das Spiel führt zudem den Boost-Modus ein, mit dessen Hilfe man Blöcke hinzufügen oder Spielern helfen kann, ihren Gegnern auszuweichen. Außerdem lässt er Mario Geheimnisse aufdecken, und er ermöglicht es mehreren Spielern zu kooperieren, um Speed Runs in Rekordzeit hinzulegen. ', 3, 'img/produkte/wu/wu_newsupermariobros.jpg', '2015-05-12 11:39:23', 60, 19),
(26, 'Legend of Zelda Wii U', 1, 'Action-Adventure mit RPG-Einschlag...', 5, 'img/produkte/wu/wu_zelda.jpg', '2015-05-12 11:41:31', 65, 123);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(3, 'user'),
(4, 'admin');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `vorname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `adresse` varchar(255) CHARACTER SET utf8 NOT NULL,
  `plz` int(8) NOT NULL,
  `ort` varchar(255) CHARACTER SET utf8 NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fk_rolle` int(11) NOT NULL,
  `guthaben` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `password`, `vorname`, `name`, `adresse`, `plz`, `ort`, `username`, `fk_rolle`, `guthaben`, `email`) VALUES
(11, '$2y$10$MpQbXlB3GRePxdAThbr2X.OGiCJfJdQ8DoEzJ9MjDGTM749t6WYI2', 'admin', 'admin', 'admin 32', 1234, 'admin', 'admin', 4, 99999, 'admin@admin.ch');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `warenkorb`
--

CREATE TABLE IF NOT EXISTS `warenkorb` (
  `id` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `fk_produkt` int(11) NOT NULL,
  `quantity` int(11) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `warenkorb`
--

INSERT INTO `warenkorb` (`id`, `fk_user`, `fk_produkt`, `quantity`) VALUES
(7, 0, 1, 1),
(42, 10, 13, 4),
(43, 9, 1, 2);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `game_type`
--
ALTER TABLE `game_type`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `warenkorb`
--
ALTER TABLE `warenkorb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `game_type`
--
ALTER TABLE `game_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `platform`
--
ALTER TABLE `platform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `produkt`
--
ALTER TABLE `produkt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT für Tabelle `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT für Tabelle `warenkorb`
--
ALTER TABLE `warenkorb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
