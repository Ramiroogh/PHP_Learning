<?php
    /**
     * Ejemplo sencillo para entablar una conexion.
     * Respetando los principios de POO, esta clase deberia servir como puente
     * de conexion, esto significa crear otra clase, y usar "EXTENDS" de esta,
     * para hederar todos los atributos de la conexion y separar la logica
     * Alta cohesion, bajo acoplamiento.
     */
    session_start();

    class Conectar {
        // inicializacion de variable protegida de Conexión
        protected $dbh;

        // Cadena de Conexión
        protected function Conexion() {
            try {
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=helpdeskt","root","");
            } catch (Exception $e) {
                print "¡Error DB!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        // Para no tener problemas con las tildes o Ñ
        public function set_names() {
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        // Validar ruta
        public function ruta() {
            return "http://localhost:90/Helpdeskt_rama/";
        }
    }


?>