<?php

namespace Kids\Exception;

class UnmatchEmailOrPassword extends \Exception {
  protected $message = 'Email/Password do not match!';
}
