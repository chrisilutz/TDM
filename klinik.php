<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Kompetenznetz KJP TDM e.V.</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<!-- add your meta tags here -->
<meta name="description" content="TDM, KJP, Therapeuthical, Drug, Monitoring, Kinderpsychatrie, Jugendpsychatrie, Forschungsdatenbank, Internetbasiert, Entwicklungspsychopharmakologie, Arzneimittelserumspiegel, Blutspiegel, Serumkonzentration, Multizentrisches Forschungsprojekt, Serumspiegel, Plasmaspiegel" />
<meta name="keywords" content="TDM, KJP, Therapeuthical, Drug, Monitoring, Kinderpsychatrie, Jugendpsychatrie, Forschungsdatenbank, Internetbasiert, Entwicklungspsychopharmakologie, Arzneimittelserumspiegel, Blutspiegel, Serumkonzentration, Multizentrisches Forschungsprojekt, Serumspiegel, Plasmaspiegel" />

<link href="css/my_layout.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 7]>
<link href="css/patches/patch_my_layout.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
  <div id="page_margins">
    <div id="border-top">
      <div id="edge-tl"></div>
      <div id="edge-tr"></div>
    </div>
    <div id="page">
      <div id="header">
        <div id="topnav">
          <!-- start: skip link navigation -->
          <a class="skip" title="skip link" href="#navigation">Skip to the navigation</a><span class="hideme">.</span>
          <a class="skip" title="skip link" href="#content">Skip to the content</a><span class="hideme">.</span>
          <!-- end: skip link navigation --><a href="eng/participants.html"><img src="images/english.gif" /></a>&nbsp;<a href="#"><img src="images/german.gif" /></a><br /><a href="kontakt.html">Kontakt</a> | <a href="kontakt.html">Impressum</a>
        </div>
        <img src="images/logo.jpg" />
      </div>
      <div id="nav">
        <!-- skiplink anchor: navigation -->
        <a id="navigation" name="navigation"></a>
        <div id="nav_main">
          <!-- main navigation: #nav_main -->
          <ul>
            <li><a href="index.html">Aktuelles &amp; Ziele</a>
            </li>
            <li><a href="hintergrund.html">Hintergrund</a></li>
            <li><a href="datenbank.html">Datenbank</a></li>
            <li><a href="labor.html">Laborleistungen</a></li>
            <li id="current"><a href="beteiligte.html">Beteiligte</a></li>
            <li><a href="projekte.html">Schwerpunkt &amp; Projekte</a></li>
            <li><a href="publikationen.html">F&ouml;rderung &amp; Publikationen</a></li>
            <li><a href="kontakt.html">Kontakt</a></li>
          </ul>
        </div>
      </div>
      <div id="main">
        <div id="col1">
          <div id="col1_content" class="clearfix">
            <!-- add your content here -->
			<div class="note">
            <h2>Kontakt</h2>
            <h4>Netzwerksekretariat:</h4>
            <p><b>Kompetenznetz TDM KJP e.V.</b><br />
Andrea B&auml;uerle<br />
Klinik f&uuml;r Kinder- und Jugendpsychiatrie / Psychotherapie Universit&auml;t Ulm <br />
Steinh&ouml;velstr. 5<br />
89075 Ulm<br /><br /><br />

Tel.:	(+49) 0731-500-61710<br />
Email:	<a href="mailto:andrea.baeuerle@uniklinik-ulm.de" target="_blank">andrea.baeuerle@uniklinik-ulm.de</a>
</p> 
</div>
</div>
        </div>
        <div id="col3">
          <div id="col3_content" class="clearfix">
            <!-- add your content here -->
            <div id="teaser3">

            </div>
            <h1>KJP-Zentren</h1>
 <div class="ym-grid">           
            <?php
$daten = file_get_contents("kliniken.xml"); // Datei einlesen
$daten = explode("<KLINIK>" , $daten); // Inhalt in ein Array zerlegen
	$mal = 1;
		for ($zaehler = 1; $zaehler < count($daten); $zaehler++)  {
 preg_match("~<NAME>(.*)</NAME>~" , $daten[$zaehler] , $name); // Name auslesen
 preg_match("~<DIREKTOR>(.*)</DIREKTOR>~" , $daten[$zaehler] , $direktor); // Direktor auslesen
 preg_match("~<STRASSE>(.*)</STRASSE>~" , $daten[$zaehler] , $strasse); // Strasse auslesen
 preg_match("~<ORT>(.*)</ORT>~" , $daten[$zaehler] , $ort); // Ort auslesen
 preg_match("~<LINK>(.*)</LINK>~" , $daten[$zaehler] , $link); // Link auslesen (wird in $link[1] gespeichert)


switch ($mal % 3) {
	case 0: 
 // letzte Spalte
 echo "<div class='c33l_k'><div class='subcl_k'><p><b>".$name[1]."</b></p>\n";
 echo "<p>Direktor: ".$direktor[1]."</p>\n";
 echo "<p>".$strasse[1]."<br />\n".$ort[1]."</p>\n";
 echo "<a href='" . trim($link[1]) . " target='_blank'>Homepage</a></p></div></div></div>\n";
$mal++;
break;

case 1: 
 // Erste Spalte
 echo "\n<!-- Neue Reihe !-->\n\n<div class='subcolumns'><div class='c33l_k'><div class='subcl_k'><p><b>".$name[1]."</b></p>\n";
 echo "<p>Direktor: ".$direktor[1]."</p>\n";
 echo "<p>".$strasse[1]."<br />\n".$ort[1]."</p>\n";
 echo "<a href='" . trim($link[1]) . " target='_blank'>Homepage</a></p></div></div>\n";
$mal++;
break;

 default:
// mittlere Spalte
 echo "<div class='c33l_k'><div class='subcl_k'><p><b>".$name[1]."</b></p>\n";
 echo "<p>Direktor: ".$direktor[1]."</p>\n";
 echo "<p>".$strasse[1]."<br />\n".$ort[1]."</p>\n";
 echo "<a href='" . trim($link[1]) . " target='_blank'>Homepage</a></p></div></div>\n";

$mal++;
break;

};
};

?>	
 </div>           
            
            
			<h1>IT-Koordination</h1>
			<div class="subcolumns">
			<div class="c66l">

			<div class="c50l">
			<p><b>Frau Gisela Antony</b><br />
Dipl.-Psych. / Wirtschaftsinformatikerin<br />
Philipps-Universit&auml;t Marburg<br />
Zentrum f&uuml;r Nervenheilkunde<br />
Kompetenznetz Parkinson, IT Koordination<br />
Rudolf-Bultmann-Str. 8<br />
35039 Marburg<br />
Tel.: 06421-5865440<br />
<a href="http://www.kompetenznetz-parkinson.de/index2.html" target="_blank">Homepage</a></p>

			</div>
			</div>

			</div>
			<h1>TDM-Labors</h1>
			<div class="subcolumns">
			<div class="c66l">

			<div class="c50l">
			<div class="subcl">
			<p><b>Neuropharmakologisches Forschungslabor<br />
			der Universit&auml;t Freiburg,</b><br />
PD Dr. H.-W. Clement<br />
Abteilung f&uuml;r Psychiatrie und Psychotherapie<br />
des Kindes- und Jugendalters<br />
Hauptstr. 8<br />
79104 Freiburg<br />
<a href="http://www.uniklinik-freiburg.de/kijupsych/live/forschung.html" target="_blank">Homepage</a>
</p>
			</div>
			</div>
			<div class="c50r">
			<div class="subcl">
			<p><b>TDM - HPLC – Labor der<br />Universit&auml;tsklinikum W&uuml;rzburg
<br />
			</b>
Leiter:<br />
Prof. Dr. Manfred Gerlach<br />
<br />
Ansprechpartner f&uuml;r TDM:<br />
Rainer Burger<br />
Klinik und Poliklinik f&uuml;r Psychiatrie,<br />
Psychosomatik und Psychotherapie<br />
F&uuml;chsleinstr. 15<br />
97080 W&uuml;rzburg<br />

<a href="http://nervenklinik.uk-wuerzburg.de/klinik/speziallabor-fuer-therapeutisches-drug-monitoring-tdm.html" target="_blank">Homepage</a>
</p>
			</div>
			</div>
			</div>
			<div class="c33r">
			<div class="subcl">
			<p><b>Pharmakogenetik-Labor der Universit&auml;t Ulm

<br />
			</b>
Prof. Dr. Julia Kirchheiner<br />
Institut f&uuml;r Naturheilkunde &amp; klinische Pharmakologie<br />
Helmholtzstra&szlig;e 20<br />
89081 Ulm
<br />

<a href="http://www.uni-ulm.de/klinik/nhk/" target="_blank">Homepage</a>
</p>
			</div>
			</div>

			</div>
          </div>
          <!-- IE Column Clearing -->
          <div id="ie_clearing"> &#160; </div>
        </div>

      <!-- begin: #footer -->
      <div id="footer">Erstellt von <a href="http://www.3rat.de" target="_blank">3rat</a>
      </div>
   </div>
   </div>
    <div id="border-bottom">
      <div id="edge-bl"></div>
      <div id="edge-br"></div>
    </div>

</body>
</html>
