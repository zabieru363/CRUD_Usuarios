<?php
    # Clase de conexión a la base de datos.
    class Connection {
        # Propiedades
        private $server = "127.0.0.1";
        private $user = "root";
        private $password = "";
        protected $db_name;
        public $rows;
        private $connection;

        # Constructor
        public function __construct($db_name)
        {
            $this->db_name = $db_name;
        }

        # Método que abre la conexión con una base de datos.
        public function connect()
        {
            try
            {
                $this->connection = new PDO("mysql:host=$this->server;dbname=$this->db_name",$this->user,$this->password); 
                $this->connection ->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
                $this->connection ->exec("set names utf8mb4");
            }
            catch(PDOException $e)
            {
                echo "Error al conectarse a la base de datos " . $e->getMessage();
            }
        }

        # Método para cerrar la conexión a la base de datos.
        public function close()
        {
            $this->connection = null;
        }

        # Método para hacer consultas simples (INSERT INTO, UPDATE y DELETE)
        public function simple_query($query, $param)
        {
            $this->connect();

            $statement = $this->connection->prepare($query);

            if(!$statement->execute($param))
            {
                echo "Error al ejecutar la consulta" . "<br>";
                echo $query;
            }

            $this->close();
        }

        # Método para hacer consultas que devuelven datos (Consultas SELECT)
        public function select_query($query,$param)
        {
            $this->connect();

            $this->rows = [];

            $statement = $this->connection->prepare($query);

            if($statement->execute($param))
            {
                $this->rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            }
            else
            {
                echo "Error al ejecutar la consulta" . "<br>";
                echo $query;
            }

            $this->close();
        }
    }
?>