<?php
  namespace Kids;

  class Controller
  {
    private $_errors;

    public function __construct()
    {
      if (!isset($_SESSION['token']))
      {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(16));
      }
      $this -> _errors = new \stdClass();
    }

    protected function setErrors($key, $error)
    {
      $this -> _errors -> $key = $error;
    }

    public function getErrors($key)
    {
      return isset($this -> _errors -> $key) ? $this -> _errors -> $key : '';
    }

    protected function hasError()
    {
      return !empty(get_object_vars($this -> _errors));
    }

    protected function isLoggedIn()
    {
      return isset($_SESSION['me']) && !empty($_SESSION['me']);
    }
    public function me() {
    return $this->isLoggedIn() ? $_SESSION['me'] : null;
  }

  }
