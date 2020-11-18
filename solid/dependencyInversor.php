<?php
//DEPENDENCY INVERSION PRINCIPLE=>Las entidades deben depender de abstracciones no de concreciones. El módulo de alto nivel no debe depender del módulo de bajo nivel, pero deben depender de abstracciones.
class PasswordReminder
{
    private $dbConnection;

    public function __construct(MySQLConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}
//aplicando dependency inversion

interface DBConnectionInterface
{
    public function connect();
}

class MySQLConnection implements DBConnectionInterface {
    public function connect() {
        return "Conexión a la base de datos";
    }
}

class PasswordReminder {
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
}

