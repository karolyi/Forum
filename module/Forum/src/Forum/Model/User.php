<?php

namespace Forum\Model;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document(collection="users") */
class User
{
    /** @ODM\Id */
    private $id;

    /** @ODM\String */
    private $name;

    /** @ODM\String */
    private $password;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPassword($value='')
    {
        $this->password = $value;
    }

}
