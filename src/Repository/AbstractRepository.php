<?php

namespace App\Repository;

use PDO;

abstract class AbstractRepository
{
  protected PDO $pdo;
  protected const TABLE = '';

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }
  
  public function find(int $id)
  {
    $stmt = $this->pdo->prepare("SELECT * FROM " . static::TABLE . " WHERE ".ucfirst(static::TABLE)."Id=:id");

    $stmt->execute(['id' => $id]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if  ($result !== false) {
      return $result ;
    }
  }
  
  public function findall(): array
  {
    $stmt = $this->pdo->prepare("SELECT * FROM " . static::TABLE );
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

     if  ($result !== false) {
      return $result ;
    }
  }
  
}
