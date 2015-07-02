<?php
namespace CoffeeStudio\Harness;

interface IAdminView extends IEntity
{
    public function getId();
    public function getTitle();
}