<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-cad-alunos.css">
    <title>Login do Usuario</title>
</head>

<body>

    <?php

    include "head.html";

    ?>

    <div class="container-prin">

        <div class="caixa">
            <div class="caixa-form">
                <h2>Fazendo login na Conta</h2>

                <form action="" method="post">
                    

                        <div class="input-email">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" placeholder="Digite o seu email" required style="width: 100%;">
                        </div>

                        <div class="input-senha">
                            <label for="senha">Senha</label>
                            <input type="password" name="password" id="senha" placeholder="Digite sua senha" required style="width: 100%;">
                        </div>
                    
                    

                        <div class="input-nome">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Digite o seu Nome" required style="width: 100%;">
                        </div>

                    

                    <div class="input-botão" >
                        <button class="entar-button"style="width: 100%; height: 100%;" type="submit">Entrar</button>
                    </div>

                </form>
            </div>
        </div>
        <p> Ainda não possui uma conta? <a href="cad-aluno.php"> cadastre-se </a> </p>
    </div>

    <?php

    include "rodape.html";

    ?>

</body>

</html>