<?php
  require_once(__DIR__ . '/../config/config.php');

  $app = new Kids\Controller\Index();

  $app -> run();
