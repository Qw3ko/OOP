<?php

interface VehicleInterface
{
    public function move();
    public function ability();
}

class Cars implements VehicleInterface
{
    public function move() {
        echo('Move')
    }
    public function ability() {
        echo('Nitrous oxide, turn on the wipers, horn')
    }
}

class Tanks implements VehicleInterface
{
    public function move() {
        echo('Move')
    }
    public function ability() {
        echo('Fire')
    }
}

class specialEquipment implements VehicleInterface
{
    public function move() {
        echo('Move')
    }
    public function ability() {
        echo('Bucket control')
    }
}
?>