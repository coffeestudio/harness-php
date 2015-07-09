<?php
namespace CoffeeStudio\Harness;

interface IAttachment extends IEntity
{
    public function getId();
    public function getTitle();
    public function getComment();
    public function getSort();
    public function isMain();
    public function getFileType();
    public function getFilePath();
}
