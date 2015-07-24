<?php
namespace CoffeeStudio\Harness;


interface IKeyValStorage extends IAdminView
{
    public function getName();
    public function getType();
    public function getValue();
    public function setValue($value);
}