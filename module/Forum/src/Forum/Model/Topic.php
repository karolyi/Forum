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
    private $commentCount;

    /** @ODM\ReferenceOne(targetDocument="Comment", simple=true) */
    private $currComment;

    /** @ODM\String */
    private $descriptionParsed;

    /** @ODM\Boolean */
    private $isDisabled;

    /** @ODM\Int */
    private $groupId;

    /** @ODM\String */
    private $htmlName;

    /** @ODM\ReferenceOne(targetDocument="User", simple=true) */
    private $opener;

    /** @ODM\String */
    private $pureName;

    /** @ODM\ReferenceOne(targetDocument="Topic", simple=true, nullable=true) */
    private $replyTo = null;

    /**
     * @ODM\String
     * @ODM\Index(unique=true, order="asc")
     */
    private $slug = 'abc123';

    /** @ODM\Int */
    private $truncateAt = 0;

    /** @ODM\Boolean */
    private $isVotingEnabled;

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
