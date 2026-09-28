<?php

// Incluir o arquivo com a conexão com banco de dados
require './Conexao.php';

/**
 * Classe responsável por manipular e listar os dados dos usuários.
 * 
 * @author Cesar <cesar@celke.com.br>
 * 
 */
class Usuarios
{

    /**
     * @var PDO|null $conexao Conexão com o banco de dados.
     */
    public object|null $conexao;

    /**
     * Lista os usuários do banco de dados.
     *
     * @return array Lista de usuários.
     */
    public function listar(): array
    {
        // Estabelece a conexão com o banco de dados
        $conexao = new Conexao();
        $this->conexao = $conexao->conectar();

        // QUERY para listar os usuários
        $queryUsuarios = "SELECT id, nome, email FROM usuarios ORDER BY id DESC LIMIT 40";

        // Preparar a QUERY
        $resultadoUsuarios = $this->conexao->prepare($queryUsuarios);

        // Executar a QUERY
        $resultadoUsuarios->execute();

        // Retorna a lista de usuários
        return $resultadoUsuarios->fetchAll();
    }
}
