<?php

?>

<html>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" />
        <meta charset="UTF-8">
        <script src="jquery/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <title>LooKing</title>
    </head>

    <body>
        <header>
            <div class="faixa">
                <form method="post" action="../controler/cadastroControler.php"> 
             
                <div class="row">
                    <div class="col-sm-7">
                        <img class="logo" src="imagens/logotipo.png">
                    </div>
                    
                    <div class="col-sm-4 login">
                        <div class="label">E-mail: <input class="texto-login" type="email" name="email" required></div>
                        <div class="label">Senha: <input class="texto-senha" type="password" name="senha" required>
                        </div>
                    </div>
                     <div class="entrar">
                        <input type="submit" name="bentra" value="Entrar" class="btn btn-danger">
                        </div>
                     
                </div>
            </form> 
            </div>
        </header>

        <section class="apresentacaoCadastro">
            <div class="container row">
                <div class="col-sm-9 apresentacao">
                    <img class="lembreDosSeusFilmesJogos" src="imagens/lembreDosSeusFilmesJogos.png">
                </div>

                <div class="col-sm-3 cadastro">
                    <div class="imagens-cadastro">
                        <img class="cadastrese" src="imagens/cadastrese.png">
                        <p></p>
                        <img class="criarContaFacil" src="imagens/criarContaFacil.png">
                        <img class="continuarComFacebook" src="imagens/continuarComFacebook.png">
                        <img class="ouPreenchaOformulárioAbaixo" src="imagens/ouPreenchaOformulárioAbaixo.png">
                    </div>
                    <div id="cadastro" class="signin">
                        <form method="post" action="../controler/cadastroControler.php"> 
                            <input class="texto-cadastro" type="email" name="email" placeholder="E-mail" required />

                            <p></p>
                            <input class="texto-cadastro" type="password" name="senha" placeholder="Nova senha" required />

                            <p></p>
                            <input class="texto-cadastro" type="text" name="nomePessoa" placeholder="Nome completo"
                                   required />
                            <input type="submit" name="bcadastro" value="Cadastrar" class="btn btn-danger criar-cadastro">
                     </form>
                    </div>

                    
                </div>
            </div>
        </section>

    </body>

</html>