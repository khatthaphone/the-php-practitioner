<?php

class QueryBuilder {

  protected $pdo;

  public function __construct($pdo) {

    $this->pdo = $pdo;

  }

  public function selectAll($table) {
  
    $statement = $this->pdo->prepare("select * from {$table}");
  
    $statement->execute();
  
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function insert($table, $description) {
    $statement = $this->pdo->prepare("insert into {$table}(description) values(:name)");

    $statement->execute(array(
      "name" => $description
    ));
  }
}