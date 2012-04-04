<html>
	<head>
		<style type="text/css">
			section {width:100%; clear:both;}
			article {float:left; width:33.333%;}
			.innen {padding:1em;}
			.innen:hover, .innen:active {background-color:#eee;}
		</style>
	</head>
	<body>
		<section><?php

// Die Datei test.xml enthält ein XML-Dokument mit einem Wurzel-Element
// und mindestens einem Element /[root]/title.
$mal = 1;
if (file_exists('kliniken.xml')) {
	$content = file_get_contents('kliniken.xml');
	$xml = simplexml_load_string($content);
	
    
foreach($xml->KLINIK as $klinik) {
	
   switch($mal % 3) {
   	case 0:
	
		echo '<article><div class="innen"><h4>'.$klinik->NAME,'</h4>';
		echo '<p>Klinikdirektor: '.$klinik->DIREKTOR,'<br />';
		echo $klinik->STRASSE,'<br />';
		echo $klinik->ORT,'</p>';
		echo '<p><a href="'.$klinik->LINK.'" target="_blank">Homepage</a></p></div></article>';
	
	$mal++;
	break;
	case 1:
		
		echo '<article><div class="innen"><h4>'.$klinik->NAME,'</h4>';
		echo '<p>Klinikdirektor: '.$klinik->DIREKTOR,'<br />';
		echo $klinik->STRASSE,'<br />';
		echo $klinik->ORT,'</p>';
		echo '<p><a href="'.$klinik->LINK.'" target="_blank">Homepage</a></p></div></article>';
	
	$mal++;
	break;
	default:
		
		echo '<article><div class="innen"><h4>'.$klinik->NAME,'</h4>';
		echo '<p>Klinikdirektor: '.$klinik->DIREKTOR,'<br />';
		echo $klinik->STRASSE,'<br />';
		echo $klinik->ORT,'</p>';
		echo '<p><a href="'.$klinik->LINK.'" target="_blank">Homepage</a></p></div></article>';
	
	$mal++;
	break;
	};	
   };
} else {
    exit('Konnte test.xml nicht öffnen.');
}
?>

</body>
</html>