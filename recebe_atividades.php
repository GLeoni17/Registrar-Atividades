<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
<link rel="sortcut icon" href="icone.ico" type="image/x-icon" />
<title>Atividade Registrada!</title>

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

<meta http-equiv="refresh" content="0; URL='https://registrar-atividades.herokuapp.com/'"/>

<!------ Include the above in your HEAD tag ---------->

<body>
</body>

