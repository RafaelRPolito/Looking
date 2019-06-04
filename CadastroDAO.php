<?php

class CadastroDAO {

    function inserir($nome, $tipo, $ano, $descricao, $nota, $id) {

        try {
            $conn = new PDO("mysql:host=localhost;dbname=bd_looking", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare('INSERT INTO produto (nome, tipo, ano, descricao, nota, Codusuario) VALUES(:nome, :tipo, :ano, :descricao, :nota, :usuario)');
            $stmt->execute(array(':nome' => "$nome", ':tipo' => "$tipo", ':ano' => "$ano", ':descricao' => "$descricao", ':nota' => "$nota", ':usuario' => "$id"));
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function cadastro($email, $senha, $nomeusu) {

        try {
            $conn = new PDO("mysql:host=localhost;dbname=bd_looking", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare('INSERT INTO usuario (email, senha, nome) VALUES(:email, :senha, :nome)');
            $stmt->execute(array(':email' => "$email", ':senha' => "$senha", ':nome' => "$nomeusu"));
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

     function login($email, $senha){
	  try {
              
              session_start();
              
               include('conexao.php');
           
                 $query = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = '{$senha}'";
     		 $result = mysqli_query($conection, $query);
       		 $busca = mysqli_num_rows($result);
                 $linha = mysqli_fetch_assoc($result);
                 
        if ($busca > 0)
            { 
            $_SESSION['usuario'] = $linha['idusuario'];
            $usu = $linha['idusuario'];
            $_SESSION['nome'] = $linha['nome'];
            $_SESSION['email'] = $linha['email'];
         
          
            header('Location: ../view/avaliacao.php');
            
            exit;
            }
          else
            {
               
           header('Location: ../view/login.php');
            }
        } catch (PDOException $e) {
       	      echo 'Error: ' . $e->getMessage();
        }
	

	}
        
       
        

}
?>
<html>
    <body>
          <form method="post" action="../view/avaliacao.php"> 
              <input type="hidden" name="usu" value="<?php echo  $usu;?>">
          </form>
    </body>
</html>