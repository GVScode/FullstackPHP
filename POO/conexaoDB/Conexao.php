<?php

/**
 * Classe responsável pela conexão com o banco de dados.
 * 
 * @author Cesar <cesar@celke.com.br>
 */
class Conexao
{
     /** 
     * @var string $host Endereço do servidor de banco de dados.
     */
    public string $host = "localhost";

    /** 
     * @var string $usuario Nome de usuário para autenticação no banco de dados.
     */
    public string $usuario = "root";

    /** 
     * @var string $senha Senha para autenticação no banco de dados.
     */
    public string $senha = "";

    /** 
     * @var string $dbnome Nome do banco de dados.
     */
    public string $dbnome = "celkepoo";

    /** 
     * @var int $porta Porta utilizada para a conexão com o banco de dados.
     */
    public int $porta = 3306;

    /** 
     * @var PDO|null $conexao Instância da conexão com o banco de dados.
     */
    public object|null $conexao = null;


    /**
     * Estabelece uma conexão com o banco de dados.
     *
     * Este método tenta estabelecer uma conexão com o banco de dados utilizando 
     * os parâmetros definidos na classe. Caso a conexão seja bem-sucedida, uma 
     * instância de PDO é retornada. Se houver falha, um erro é exibido e o 
     * método retorna `false`.
     *
     * @return PDO|false Retorna a instância de PDO em caso de sucesso ou `false` em caso de falha.
     */
     public function conectar()
     {
        try{
            // Conexão com a porta
            // $this->conexao = new PDO("mysql:host={$this->host};port={$this->porta};dbname=" . $this->dbnome, $this->usuario, $this->senha);

            // Conexão sem a porta
            $this->conexao = new PDO("mysql:host={$this->host};dbname=" . $this->dbnome, $this->usuario, $this->senha);

            // echo "Conexão com banco de dados realizada com sucesso!";

            // Retornar a conexão com banco de dados
            return $this->conexao;

        }catch (Exception $e){

            die("Conexão com banco de dados não realizada: " . $e->getMessage());

            return false;
        }
     }
}