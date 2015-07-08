<?php
namespace CoffeeStudio\Harness;

interface IUser extends IEntity
{
    public function getId();
    public function getUsername();
}