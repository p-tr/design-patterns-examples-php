<?php

class UserEventListener extends Observer
{
  public function __construct() {
    parent::__construct();
  }

  public function notify($event, $data)
  {
    echo("Received event " . $event . " with data " . $data . " !\n");
  }
}
