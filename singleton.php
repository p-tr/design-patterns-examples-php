<?php

require(__DIR__ . '/vendor/autoload.php');

$instance1 = MachinUnique::getInstance();
$instance2 = MachinUnique::getInstance();

if($instance1 == $instance2) {
  echo("Les deux instances sont identiques !\n");
} else {
  echo("Ecoute coco, ton singleton là, bah il marche pas !\n");
}

$instance1->helloWorld();

MachinUnique::getInstance()->helloWorld();
