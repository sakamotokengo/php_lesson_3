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
    public function login($values) {
  $stmt = $this->db->prepare("select * from users where email = :email");
  $stmt->execute([
    ':email' => $values['email']
  ]);
  $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
  $user = $stmt->fetch();
  public function findAll() {
    $stmt = $this->db->query("select * from users order by id");
    $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
    return $stmt->fetchAll();
  }

  if (empty($user)) {
    throw new \Kids\Exception\UnmatchEmailOrPassword();
  }

  if (!password_verify($values['password'], $user->password)) {
    throw new \Kids\Exception\UnmatchEmailOrPassword();
  }

  return $user;
}
}
