<?php
/**
 * Created by PhpStorm.
 * User: olisar
 * Date: 27.10.2017
 * Time: 21:12
 */

namespace Oli\MailServer\Entity;

interface IAttachment
{

	public function getFileName(): string;

	public function getPath(): string;

}
