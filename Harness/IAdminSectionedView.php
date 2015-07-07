<?php
namespace CoffeeStudio\Harness;

interface IAdminSectionedView extends IAdminView
{
    public function getSectionId();
}