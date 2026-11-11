 <?php

    // Classe para gerenciar usuários do banco de dados
    class users extends Connection
    {

        /**
         * Conexão com o banco de dados
         * @var object $conn
         */
        public object $conn;

        /**
         * Listar os usuários do banco de dados
         * @return array Retorna um array com os usuários cadastrados
         */
        public array $formData;

        public function setFormData(array $formData): void
        {
            $this->formData = $formData;
        }

        public function list(): array
        {
            $this->conn = $this->connect();

            // Consulta SQL para selecionar os usuários do banco de dados

            $sql = "SELECT id, name, email FROM users ORDER BY id DESC LIMIT 40";

            // Prepara a consulta SQL e executa
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            // Retorna os resultados da consulta como um array associativo
            return $stmt->fetchAll();
        }
        public function create(): bool
        {

            // estabelece a conexao com o banco de dados
            $this->conn = $this->connect();

            $sql =  "INSERT INTO users (name, email) VALUES (:name, :email)";

            $addUser = $this->conn->prepare($sql);

            $addUser->bindParam(':name', $this->formData['name'], PDO::PARAM_STR);
            $addUser->bindParam(':email', $this->formData['email'], PDO::PARAM_STR);

            $addUser->execute();

            if ($addUser->rowCount()) {
               
                return true;
            } else {
                
                return false;
            }
        }
    }
    ?>
