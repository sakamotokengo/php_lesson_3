<?php
  namespace Kids\Controller;

  class Index extends \Kids\Controller {

    public function run()
    {
      if (!$this -> isLoggedIn())
      {
      // login check
      header('Location:' . SITE_URL . 'login.php');
      exit;
      }
      $userModel = new \Kids\Model\User();
    $this->setValues('users', $userModel->findAll());
    }

  }
