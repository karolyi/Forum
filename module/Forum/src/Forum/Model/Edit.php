<?php

namespace Forum\Model;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document(collection="edits") */
class Edit
{
    /** @ODM\Id */
    private $id;

    /** @ODM\ReferenceOne(targetDocument="User", simple=true) */
    private $editor;

    /** @ODM\String */
    private $previousContent;

}
