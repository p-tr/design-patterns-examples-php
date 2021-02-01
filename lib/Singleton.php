<?php

abstract class Singleton
{
  private static $instance = null;

  protected function __construct() {

  }

  public static function getInstance() {
    if(! static::$instance) {
      static::$instance = new static;
    }

    return static::$instance;
  }
}
