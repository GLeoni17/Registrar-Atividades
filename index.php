<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<style>
	form {
		border-style: 1px solid black;
    }
    h1{
        text-align: center
    }
	</style>
	<link href="cover.css" rel="stylesheet">
    <link rel="sortcut icon" href="icone.ico" type="image/x-icon" />
    <title>Registro de Atividades</title>
</head>
<body>

	<div class="container-fluid">
        <h1>Registrar atividades durante a quarentena</h1>
		<div class="row">
            <span class="col-md-4"> </span>
                <div class="col-md-4">
                    <form action="recebe_atividades.php" class="form-login" method="POST">
                        <input type="text" class="form-control" name="materia" placeholder="Materia...">
                        <br><br>
                        <input type="text" class="form-control" name="qual_atividade" placeholder="Atividade...">
                        <br><br>
                        Data de entrega:
                        <input type="date" class="form-control" name="data_entrega" >
                        <br><br>
                        <input type="text" class="form-control" name="meio_entrega" placeholder="Meio de entrega...">
                        <br><br>
                        <input type="text" class="form-control" name="complemento" placeholder="Complemento...">
                        <br><br>
                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Registrar">
                    </form>
                    <a href="lista_atividades.php">Listar atividades</a>
                </div>
            <span class="col-md-4"> </span>
		</div>
</body>
</html>
