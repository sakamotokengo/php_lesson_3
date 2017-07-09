<?php
  namespace Kids\Exception;

  class InvalidEmail extends \Exception
  {
    protected $message = 'メールアドレスが不正です。';
  }
