<?php
namespace CoffeeStudio\Harness;

interface IWithSpecAttachmentsDAO extends IWithAttachmentsDAO
{
    public function addAttachment($entityId, $path, $title='', $comment='', $sort=50, $isMain=false, $isSpec=false);
    public function editAttachment($entityId, $attId, $path=null, $title=null, $comment=null, $sort=null, $isMain=null, $isSpec=null);
}
