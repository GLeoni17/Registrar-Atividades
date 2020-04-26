<?php
$arquivo_xml = simplexml_load_file('atividades.xml');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/font/css/open-iconic-bootstrap.min.css">
    <link rel="sortcut icon" href="icone.ico" type="image/x-icon" />
    <title>Listando as Atividades</title>
    <style>
			table {
				text-align: center;
				border: 1px solid black;
				
			}
			th {
			border: 1px solid black;
			}
			td {
				border: 1px solid black;
				text-align: center;
			}
			</style>
</head>
<body>
<table style="width:50%" class="table table-striped">
    <tr>
        <th>Materia </th>
        <th>Atividade </th>
        <th>Data de entrega </th>
        <th>Meio de entrega </th>
        <th>Complemento </th>
    </tr>
    <?php
    // para cada elemento do vetor $arquivo_xml->agendamento sendo este elemento a variavel $a
    foreach($arquivo_xml->atividade as $a){
        if($a->materia!='-'){
            echo "<tr>
					<td>".$a->materia."</td>
					<td>".$a->qual_atividade."</td>
                    <td>".$a->data_entrega."</td>
                    <td>".$a->meio_entrega."</td>
					<td>".$a->complemento."</td>
				</tr>";
        }
    }
    ?>
</table>
<div id="register-link" class="btn">
    <a href="index.php" class="btn btn-lg btn-primary btn-block">Registrar novas atividades</a>
</div>
<br>
</body>
</html>
