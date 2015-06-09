<?php
namespace CoffeeStudio\Harness;

interface ITest extends IEntity
{
    /**
     * @return string
     */
    public function getTestMessage();
}
