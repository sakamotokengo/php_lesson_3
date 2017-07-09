<?php
  namespace Kids\Controller;

  class Signup extends \Kids\Controller {

    public function run()
    {
      if ($this -> isLoggedIn())
      {
      // login check
      header('Location:' . SITE_URL);
      exit;
      }

      if ($_SERVER['REQUEST_METHOD'] === 'POST')
      {
        $this -> registerUser();
      }
    }

    protected function registerUser()
    {
      try {
        $this -> _validate();
      } catch (\Kids\Exception\InvalidEmail $e){
        // echo $e -> getMessage();
        // exit;
        $this -> setErrors('email', $e -> getMessage());
      } catch (\Kids\Exception\InvalidPassword $e){
        // echo $e -> getMessage();
        // exit;
        $this -> setErrors('email', $e -> getMessage());
      }
      if($this -> hasError())
      {
        return;
      }
      else
      {
        // create user
        try{
          $userModel = new \Kids\Model\User();
          $userModel -> createUser([
            'email' => $_POST['email'],
            'password' => $_POST['password']
          ]);
        } catch (\Kids\Exception\DuplicateEmail $e) {
          $this -> setErrors('email', $e -> getMessage());
          return;
        }

        header('Location:'. SITE_URL . 'login.php');
        exit;
      }
      // echo 'success';
      // exit;

    }
    private function _validate()
    {
      if(!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token'])
      {
        echo 'トークンが間違っています';
        exit;
      }

      if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
      {
        throw new \Kids\Exception\InvalidEmail();
      }

      if (!preg_match('/\A[a-zA-Z0-9]+\z/', $_POST['password']))
      {
        throw new \Kids\Exception\InvalidPassword();
      }
    }
  }
