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


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set editor
     *
     * @param Forum\Model\User $editor
     * @return self
     */
    public function setEditor(\Forum\Model\User $editor)
    {
        $this->editor = $editor;
        return $this;
    }

    /**
     * Get editor
     *
     * @return Forum\Model\User $editor
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set previousContent
     *
     * @param string $previousContent
     * @return self
     */
    public function setPreviousContent($previousContent)
    {
        $this->previousContent = $previousContent;
        return $this;
    }

    /**
     * Get previousContent
     *
     * @return string $previousContent
     */
    public function getPreviousContent()
    {
        return $this->previousContent;
    }
}
