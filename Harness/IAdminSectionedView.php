<?php
namespace CoffeeStudio\Harness;

interface IAdminSectionedView extends IAdminView
{
    public function getSectionId();
    public function setSectionId($section_id);
}