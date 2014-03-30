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
     * Set isAdminOnly
     *
     * @param boolean $isAdminOnly
     * @return self
     */
    public function setIsAdminOnly($isAdminOnly)
    {
        $this->isAdminOnly = $isAdminOnly;
        return $this;
    }

    /**
     * Get isAdminOnly
     *
     * @return boolean $isAdminOnly
     */
    public function getIsAdminOnly()
    {
        return $this->isAdminOnly;
    }

    /**
     * Set commentCount
     *
     * @param int $commentCount
     * @return self
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
        return $this;
    }

    /**
     * Get commentCount
     *
     * @return int $commentCount
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * Get currComment
     *
     * @return Forum\Model\Comment $currComment
     */
    public function getCurrComment()
    {
        return $this->currComment;
    }

    /**
     * Set descriptionParsed
     *
     * @param string $descriptionParsed
     * @return self
     */
    public function setDescriptionParsed($descriptionParsed)
    {
        $this->descriptionParsed = $descriptionParsed;
        return $this;
    }

    /**
     * Get descriptionParsed
     *
     * @return string $descriptionParsed
     */
    public function getDescriptionParsed()
    {
        return $this->descriptionParsed;
    }

    /**
     * Set isDisabled
     *
     * @param boolean $isDisabled
     * @return self
     */
    public function setIsDisabled($isDisabled)
    {
        $this->isDisabled = $isDisabled;
        return $this;
    }

    /**
     * Get isDisabled
     *
     * @return boolean $isDisabled
     */
    public function getIsDisabled()
    {
        return $this->isDisabled;
    }

    /**
     * Set groupId
     *
     * @param int $groupId
     * @return self
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Get groupId
     *
     * @return int $groupId
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set htmlName
     *
     * @param string $htmlName
     * @return self
     */
    public function setHtmlName($htmlName)
    {
        $this->htmlName = $htmlName;
        return $this;
    }

    /**
     * Get htmlName
     *
     * @return string $htmlName
     */
    public function getHtmlName()
    {
        return $this->htmlName;
    }

    /**
     * Get opener
     *
     * @return Forum\Model\User $opener
     */
    public function getOpener()
    {
        return $this->opener;
    }

    /**
     * Set pureName
     *
     * @param string $pureName
     * @return self
     */
    public function setPureName($pureName)
    {
        $this->pureName = $pureName;
        return $this;
    }

    /**
     * Get pureName
     *
     * @return string $pureName
     */
    public function getPureName()
    {
        return $this->pureName;
    }

    /**
     * Set replyTo
     *
     * @param Forum\Model\Topic $replyTo
     * @return self
     */
    public function setReplyTo(\Forum\Model\Topic $replyTo)
    {
        $this->replyTo = $replyTo;
        return $this;
    }

    /**
     * Get replyTo
     *
     * @return Forum\Model\Topic $replyTo
     */
    public function getReplyTo()
    {
        return $this->replyTo;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return self
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * Get slug
     *
     * @return string $slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set truncateAt
     *
     * @param int $truncateAt
     * @return self
     */
    public function setTruncateAt($truncateAt)
    {
        $this->truncateAt = $truncateAt;
        return $this;
    }

    /**
     * Get truncateAt
     *
     * @return int $truncateAt
     */
    public function getTruncateAt()
    {
        return $this->truncateAt;
    }

    /**
     * Set isVotingEnabled
     *
     * @param boolean $isVotingEnabled
     * @return self
     */
    public function setIsVotingEnabled($isVotingEnabled)
    {
        $this->isVotingEnabled = $isVotingEnabled;
        return $this;
    }

    /**
     * Get isVotingEnabled
     *
     * @return boolean $isVotingEnabled
     */
    public function getIsVotingEnabled()
    {
        return $this->isVotingEnabled;
    }
}
