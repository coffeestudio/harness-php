<?php
namespace CoffeeStudio\Harness;

interface ITestDAO extends IDAO
{
    /**
     * @return ITest
     */
    public function getTest();
}
