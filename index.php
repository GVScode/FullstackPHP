
<?php


// incluir o arquivo com a conexão com o banco de dados
require_once "./connection.php";


/***************************************************/
/******* colocacando dados diretos na QUERY ********/
/***************************************************/

//Criar a QUERY para inserir dados no banco de dados(CADASTRO DE USUARIOS)
//$sql = " INSERT INTO users (name, email) VALUES ('Giovanna', 'giovanna@gmail.com')";

//Prepara a query para ser executada no banco de dados
//$stmt = $conn->prepare($sql);

//Executa a query no banco de dados
//$stmt->execute();               

  /***********************************************************/
 /******* Usar link na QUERY  e substituir por binParam *****/
/***********************************************************/

// $name = "Murilo";
// $email = "murilo@gmail.com";

//Colocar valores direto na query
// $sql = "INSERT INTO users (name, email) Values (:name, :email)";

//Prepara a query 
// $stmt = $conn->prepare($sql);

//Substituir os links da QUERY pelos valores das variáveis
// $stmt->bindParam(':name', $name, PDO::PARAM_STR);
// $stmt->bindParam(':email',$email, PDO::PARAM_STR);

//executa a query no banco de dados  
// $stmt->execute();   

  /************************************************************/
 /******* Usar link na QUERY  e substituir por bindValue *****/
/************************************************************/


echo "<p style='color: #086;'>executou todos os comandos!</p>";
