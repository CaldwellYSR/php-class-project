<?php 
    class TodoRepository {

        private $db;

        public function __construct($dbname, $user, $pass) {
            try {
                $this->db = new PDO('mysql:host=localhost;dbname=' . $dbname, $user, $pass);
            } catch(Exception $e) {
                die($e->getMessage() . PHP_EOL);
            }
        }

        // Returns an item from the database where ID = $id
        public function getItem($id) {

            $query = "
                SELECT *
                FROM todos
                WHERE id = :id
            ";

            $statement = $this->db->prepare($query);
            $statement->bindParam(":id", $id);
            $results = $statement->execute();

            if ($results) {
                var_dump($statement->fetchAll());
            } else {
                die("No results found" . PHP_EOL);
            }

        }

    }

    $repo = new TodoRepository("todos", "testing", "12345");
    $repo->getItems();
?>
