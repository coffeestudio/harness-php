<?php
namespace CoffeeStudio\Harness;

interface IUserDAO extends IDAO
{
    public function getUser($id);
    public function login($login, $password);
}