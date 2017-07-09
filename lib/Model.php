<?php
  namespace Kids;

  class Model{
    protected $db;

    public function __construct()
    {
      try{
        $this -> db = new \PDO(PDO_DSN, DATABASE_USER, DATABASE_PASSWORD);
      }catch(\PDOException $e) {
        echo $e -> getMessage();
        exit;
      }
    }
  }
