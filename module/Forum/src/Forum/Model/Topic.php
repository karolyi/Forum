<?php

namespace Forum\Model;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document(collection="topics") */
class Topic
{
    /** @ODM\Id */
    private $id;

    /** @ODM\Boolean */
    private $isAdminOnly = false;

    /** @ODM\Int */
    private $commentCount = null;

    /** @ODM\ReferenceOne(targetDocument="Comment", simple=true) */
    private $currComment = null;

    /** @ODM\String */
    private $descriptionParsed = null;

    /** @ODM\Boolean */
    private $isDisabled = null;

    /** @ODM\Int */
    private $groupId = null;

    /** @ODM\String */
    private $htmlName = null;

    /** @ODM\ReferenceOne(targetDocument="User", simple=true) */
    private $opener = null;

    /** @ODM\String */
    private $pureName = null;

    /** @ODM\ReferenceOne(targetDocument="Topic", simple=true, nullable=true) */
    private $replyTo = null;

    /**
     * @ODM\String
     * @ODM\Index(unique=true, order="asc")
     */
    private $slug = null;

    /** @ODM\Int */
    private $truncateAt = 0;

    /** @ODM\Boolean */
    private $isVotingEnabled = true;

    public function getAdminOnly()
    {
        return $this->isAdminOnly;
    }

    public function setCurrComment(Comment $currComment)
    {
        $this->currComment = $currComment;
    }

    public function setOpener(User $opener)
    {
        $this->opener = $opener;
    }

}
