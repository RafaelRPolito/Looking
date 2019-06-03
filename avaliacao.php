<?php
    // session_start inicia a sessão
    session_start();
    // as variáveis login e senha recebem os dados digitados na página anterior 
    $id = 2;//$_POST['idusuario']; 
   // $nome = $_POST['nome'];

  $conn = new PDO("mysql:host=localhost;dbname=bd_looking", "root", "");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $consulta = $conn->query("SELECT nome, tipo, ano, descricao, nota FROM produto WHERE Codusuario = $id");
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel= "stylesheet" href="css/style.css"/>
        <meta charset="UTF-8">
        <script src= "jquery/jquery.min.js"></script>
        <script src= "bootstrap/js/bootstrap.min.js"></script>
        <title>LooKing</title>
    </head>

    <body>
        <div class="faixa">
            
            <div class="row">
                <div class="col-sm-4">
                    <img class="logo" src="imagens/logotipo.png">
                </div>

                <div class="col-sm-4">
                        <input class= "buscar" type="text" name="buscar" placeholder="Pesquise aqui os filmes, séries e jogos :)">
                    </div>

                <div class="col-sm-4">
                    
                </div>

            </div>

        </div>

        <div class="avaliacao">
                
            <div class="col-sm-6">
                <div style= "Color:black">Suas avaliações</div>
                <div >
                    <?php while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
                    <p></p>
                    <p1>Tipo: </p1>
                    <?php echo $linha['tipo'] ?><br>
                    <p1>Nome:</p1>
                    <?php echo $linha['nome']?><br>
                    <p1>Ano: </p1>
                    <?php echo $linha['ano']?><br>
                    <p1>Nota: </p1>
                    <?php echo $linha['nota']?><br>
                    <p1>Descrição: </p1>
                    <?php echo $linha['descricao']?><br>
                    <?php } ?>
                        
                </div>
            </div>

                <div class="col-sm-6">
                        <form method="post" action="../controler/cadastroControler.php">   
                            <p class="label">Tipo</p>
                                <select name="Tipo">
                                        <option>Selecione o tipo</option>
                                        <option>Filme</option>
                                        <option>Série</option>
                                        <option>Jogo</option>
                                </select>
    
                                <p class="texto-cadastroProduto">Nome</p>
                                <input class= "texto-cadastroProduto" type ="text" name="nomeProduto"/>
    
                                <p class="texto-cadastroProduto">Ano</p>
                                <input class= "texto-cadastroProduto" type ="text" name="ano"/>
                                
                                <input type="hidden" name="usuario" value="<?php echo $id;?>">
                                
                                <p class="label">Nota</p>
                                <select name="nota">
                                        <option>Selecione a nota</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                </select>
                                    <p class="texto-cadastroProduto">Descrição: </p>

                                <input class= "texto-cadastroProduto" type ="text" name="descricao"/>
                                <p></p>
                                    
                                <input type="submit" name ="bavaliacao" value="Cadastrar" class="btn btn-danger">
                            </form>
                </div>
        
        </div>


        
    </body>


</html>