<?php

require('../../vendor/autoload.php');

use HeadFirstDesignPatterns\Strategy\MallardDuck;
use HeadFirstDesignPatterns\Strategy\ModelDuck;
use HeadFirstDesignPatterns\Strategy\Behavior\FlyRocketPowered;

$mallard = new MallardDuck();
$mallard->display();
$mallard->performQuack();
$mallard->performFly();

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();