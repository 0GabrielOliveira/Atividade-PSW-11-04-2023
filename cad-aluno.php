<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-cad-alunos.css">
    <title>Cadastro</title>
</head>

<body>
    <?php 
    include_once('head.html')
    ?>
    <div class="conteudo">
       <p>Cadastro do Aluno</p> 
        <div class="form">
            <form class="form" action="mostra-aluno.php" method="post">

                <div class="line1">
                    <div class="form-name" style="margin-right: 15vh;">
                        <label for="name">Nome:</label><br>
                        <input type="text" id="name" name="name" style="width: 65vh;">
                    </div>

                    <div class="form-cpf">
                        <label for="cpf"> CPF:</label><br>
                        <input type="tel" id="cpf" name="cpf" style="width: 40vh;">
                    </div>
                </div>
                <div class="line2">
                    <div class="form-matricula" style="margin-right: 20vh;">
                        <label for="matricula"> Matricula:</label><br>
                        <input type="text" id="matricula" name="matricula" style="width: 30vh;">
                    </div>
                    <div class="form-tel">
                        <label for="tel"> Telefone:</label><br>
                        <input type="tel" id="tel" name="tel" style="width: 30vh;">
                    </div>
                </div>
                <div class="line3">
                    <div class="form-endereco" style="margin-right: 15vh;">
                        <label for="endereco"> Endereço:</label><br>
                        <input type="text" id="endereco" name="endereco" style="width: 65vh;">
                    </div>
                    <div class="form-bairro">
                        <label for="bairro"> Bairro:</label><br>
                        <input type="text" id="bairro" name="bairro" style="width: 40vh;">
                    </div>
                </div>
                <div class="line4">
                    <div class="form-cidade" style="margin-right: 20vh;">
                        <label for="cidade"> Cidade:</label><br>
                        <input type="text" id="cidade" name="cidade" style="width: 30vh;">
                    </div>
                    <div class="form-estado">
                        <label for="estado"> Estado:</label><br>
                        <input type="text" id="estado" name="estado" style="width: 30vh;">
                    </div>
                </div>
                <input TYPE="hidden" NAME="form_submit" VALUE="OK"> 
                <div class="line5" style="margin-left: 20px;">
                    <input class="botao" type="submit" value="Cadastrar" style="color:white; width: 20vh; background-color: rgb(14, 68, 245);">
                </div>
                
            </form>
            
        </div>
           
    </div>
    <?php 
    include_once('rodape.html')
    ?>
</body>

</html>