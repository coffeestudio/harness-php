<?php
namespace CoffeeStudio\Harness;

interface IAdminSectionedViewDAO extends IAdminViewDAO
{
    public function getListBySection($sectionId);
}