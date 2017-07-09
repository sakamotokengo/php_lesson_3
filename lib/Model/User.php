<?php
  namespace Kids\Model;

  class User extends \Kids\Model
  {

    public function createUser($values)
    {
      $stmt = $this->db->prepare("insert into users (email, password, created, modified) values (:email, :password, now(), now())");
        $res = $stmt->execute([
          ':email' => $values['email'],
          ':password' => password_hash($values['password'], PASSWORD_DEFAULT)
        ]);
        if ($res === false) {
          throw new \Kids\Exception\DuplicateEmail();
        }
    }

  }
