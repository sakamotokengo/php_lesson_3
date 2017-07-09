<?php
  namespace Kids\Exception;

  class DuplicateEmail extends \Exception
  {
    protected $message = 'すでに登録済みのメールアドレスです';
  }
