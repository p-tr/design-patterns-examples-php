<?php

class User extends Subject
{
  private $username;
  private $email;

  public function __construct($username, $email) {
    parent::__construct();

    $this->username = $username;
    $this->email = $email;
  }

  public function setUsername($username) {
    $this->username = $username;
    $this->notify('setUsername', $username);
  }

  public function setEmail($email) {
    $this->email = $email;
    $this->notify('setEmail', $email);
  }

  public function getUsername() {
    return $this->username;
  }

  public function getEmail() {
    return $this->email;
  }
}
