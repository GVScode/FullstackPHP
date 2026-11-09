 <?php

 class ListUsers extends Connection
 {
    public object $conn;

    public function list(): array
    {
        $this->conn = $this->connect();

        $sql = "SELECT id, name, email FROM users ORDER BY id DESC LIMIT 40";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
 }
?>
