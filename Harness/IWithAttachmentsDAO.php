<?php
namespace CoffeeStudio\Harness;

interface IWithAttachmentsDAO extends IDAO
{
    public function getAttachmentsById($entityId);
    public function addAttachment($entityId, $path, $title='', $comment='', $sort=50, $isMain=false);
    public function editAttachment($entityId, $attId, $path=null, $title=null, $comment=null, $sort=null, $isMain=null);
    public function delAttachment($entityId, $attId);
}
