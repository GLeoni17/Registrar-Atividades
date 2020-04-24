<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<title>Atividade Registrada!</title>
	<link rel="sortcut icon" href="icone.ico" type="image/x-icon" />;
</head>

<body>
	<?php
	function verifica_arquivo_existente($arquivo){
		if(!file_exists($arquivo)){
			$arquivo = fopen($arquivo,"w+");
			$xml = "<?xml version='1.0'?>";
			$xml .= "<atividades>";
			$xml .= "</atividades>";
			fwrite($arquivo,$xml);
			fclose($arquivo);
		}
	}
	
	function adicionar_atividades($valores, $arquivo){
		$xml = simplexml_load_file($arquivo);
		$filho = $xml->addChild('atividade','');
		$filho->addChild('materia',$valores["materia"]);
		$filho->addChild('qual_atividade',$valores["qual_atividade"]);
		$filho->addChild('data_entrega',$valores["data_entrega"]);
		$filho->addChild('meio_entrega',$valores["meio_entrega"]);
		$filho->addChild('complemento',$valores["complemento"]);	
		file_put_contents ($arquivo, $xml->asXML());
	}

	verifica_arquivo_existente("atividades.xml");

	adicionar_atividades($_POST,"atividades.xml");
	?>
	<h4>Atividades registradas com sucesso!</h4>
	<a href="index.php"> Nova atividade </a>
	<br>
	<a href="lista_atividades.php"> Listar atividades </a>
	</body>

</html>