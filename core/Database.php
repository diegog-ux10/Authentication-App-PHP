<?php

namespace core;

class Database 
{
    public \PDO $pdo;

    public function __construct($config)
    {
        $this->pdo = new \PDO($config["db_dsb"],$config["db_user"], $config["db_password"]);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function applyMigrations() 
    {
        $this->createMigrationsTable();
        $this->getAppliedMigrations();
    }

    public function createMigrationsTable() 
    {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS migrations(
            id INT AUTO_INCREMENT PRIMARY KEY,
            migration VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=INNODB;");
    }

    public function getAppliedMigrations() 
    {
        $statement = $this->pdo->prepare("SELECT migrations FROM migrations");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_COLUMN);
    }
}