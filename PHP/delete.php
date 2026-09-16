<?php

session_start(); // Iniciar a sessão

//incluir o arquivo de conexão com o banco de dados
require_once('./connection.php');


// Receber o id da URL
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if ($id) {

    // Tratar exceções e erros
    try {

        // Criar a QUERY para apagar o registro
        $sql = "DELETE FROM users 
        WHERE id = :id";

        //Preparar a QUERY
        $stmt = $conn->prepare($sql);

        // Substituir os links da QUERY pelos valores
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        //Executar a QUERY
        $stmt->execute();

        //verificar o numero de linhas afetadas
        $affectedRows = $stmt->rowCount();

        //verficar se executou o SQL
        // if ($stmt->execute()) {

        // verificar se algum registro foi afetado no banco de dados;
        if ($affectedRows > 0) {




            //Criar mensagem de sucesso e salvar na variavel global
            $_SESSION['msg'] = "<p style='color: #086;'>Usuário apagado com sucesso!</p>";

            // Redirecionar o usuario para a pg listar
            header("location: index.php");

            //parar o processamento da página
            return;
        }
    } catch (Exception $e) {
    }
}


//Criar mensagem de erro e salvar na variavel global
$_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não apagado!</p>";

// Redirecionar o usuario para a pg listar
header("location: index.php");