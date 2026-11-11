 <?php

    class users extends Connection
    {
        public object $conn;

        public array $formData;

        public function list(): array
        {
            $this->conn = $this->connect();

            $sql = "SELECT id, name, email FROM users ORDER BY id DESC LIMIT 40";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        }
        public function create(): bool
        {
            //estabelece a conexao com o banco de dados
            $this->conn = $this->connect();

            $sql =  "INSERT INTO users (name, email) VALUES (:name, :email)";

            $addUser = $this->conn->prepare($sql);
           

            return false;
        }
    }
    ?>
