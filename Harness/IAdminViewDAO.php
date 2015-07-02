<?php
namespace CoffeeStudio\Harness;

interface IAdminViewDAO extends IDAO
{
    public function get($id);
    public function getList();
    public function listViewProjection();
    public function editViewProjection();
}