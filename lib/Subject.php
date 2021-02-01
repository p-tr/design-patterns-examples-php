<?php

abstract class Subject
{
  private $observers;

  public function __construct() {
    $this->observers = [];
  }

  public function getObservers() {
    return $this->observers;
  }

  public function registerObserver(Observer $observer) {
    if(! in_array($observer, $this->observers)) {
      $this->observers[] = $observer;
    }
  }

  public function unregisterObserver(Observer $observer) {
    if(in_array($observer, $this->observers)) {
      $key = array_search($observer, $this->observers);
      unset($this->observers[$key]);
    }
  }

  protected function notify($event, $data) {
    foreach($this->observers as $observer) {
      $observer->notify($event, $data);
    }
  }
}
