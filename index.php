<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
<link rel="sortcut icon" href="icone.ico" type="image/x-icon" />
<title>Registre suas atividades</title>


<!------ Include the above in your HEAD tag ---------->

<body>


<div id="registro_atividades_form">
    <h1 class="text-center text-white pt-5">Registrar atividades</h1>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form name="form" id="login-form" class="form" action="recebe_atividades.php" method="post" onsubmit="alert('Atividade registrada com sucesso!')">

                        <div class="form-group">
                            <label for="username" class="text-info">Matéria:</label><br>
                            <input type="text" class="form-control" name="materia" placeholder="Ex: Programação WEB" required>
                        </div>

                        <div class="form-group">
                            <label for="username" class="text-info">Nome da atividade:</label><br>
                            <input type="text" class="form-control" name="qual_atividade" placeholder="Ex: Desenvolver página de login" required>
                        </div>

                        <div class="form-group">
                            <label for="username" class="text-info">Data de entrega:</label><br>
                            <input type="date" class="form-control" name="data_entrega" required>
                        </div>

                        <div class="form-group">
                            <label for="username" class="text-info">Meio de entrega:</label><br>
                            <input type="text" class="form-control" name="meio_entrega" placeholder="Ex: Gdrive" required>
                        </div>

                        <div class="form-group">
                            <label for="username" class="text-info">Complemento:</label><br>
                            <input type="text" class="form-control" name="complemento" placeholder="Ex: Entregar no formato de PDF">
                        </div>

                        <br> <br> <br> <br>


                        <div id="register-link" class="text-right">
                            <input type="submit" class="btn btn-lg btn-primary btn-block"  value="Registrar" ;>
                        </div>

                        <br> <br> <br> <br>

                        <div id="register-link" class="text-right">
                            <a href="lista_atividades.php" class="btn btn-lg btn-primary btn-block">Listar atividades</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





</body>

<!--verifica_espaco(document.form.materia.value, document.form.qual_atividade.value, document.form.data_entrega.value, document.form.meio_entrega.value, document.form.complemento.value-->
