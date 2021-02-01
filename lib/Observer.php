<?php

abstract class Observer
{
  private $subject;

  public function __construct() {
    $this->subject = null;
  }

  public abstract function notify($event, $data);

  public function attach(Subject $subject) {
    $this->subject = $subject;
    $this->subject->registerObserver($this);
  }

  public function detach() {
    $this->subject->unregisterObserver($this);
    $this->subject = null;
  }
}
