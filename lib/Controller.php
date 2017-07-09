<?php
  namespace Kids;

  class Controller
  {

    protected function isLoggedIn()
    {
      return isset($_SESSION['me']) && !empty($_SESSION['me']);
    }

  }
