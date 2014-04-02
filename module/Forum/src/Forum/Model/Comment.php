<?php

namespace Forum\Model;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
* @ODM\Document(
*   collection="comments",
*   requireIndexes=true
* )
* @ODM\UniqueIndex(keys={"topic"="asc", "unixTime"="desc"})
*/
class Comment
{
    /** @ODM\Id */
    private $id;

    /** @ODM\ReferenceOne(targetDocument="Topic", simple=true) */
    private $topic;

    /** @ODM\ReferenceMany(targetDocument="Comment", simple=true) */
    private $answersToThis;

    /** @ODM\Int */
    private $unixTime;

    /** @ODM\String */
    private $ip;

    /** @ODM\Int */
    private $commentNumber;

    /** @ODM\Int */
    private $votingValue = 0;

    /** @ODM\ReferenceOne(targetDocument="Comment", simple=true) */
    private $prevComment;

    /** @ODM\ReferenceMany(targetDocument="Edit", simple=true) */
    private $edits;

    /** @ODM\String */
    private $commentParsed;

    /** @ODM\ReferenceOne(targetDocument="User", simple=true) */
    private $owner;

    /** @ODM\ReferenceOne(targetDocument="Topic", simple=true) */
    private $origTopic;

    public function __construct()
    {
        $this->answersToThis = new \Doctrine\Common\Collections\ArrayCollection();
        $this->edits = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set topic
     *
     * @param  Forum\Model\Topic $topic
     * @return self
     */
    public function setTopic(\Forum\Model\Topic $topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return Forum\Model\Topic $topic
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Add answersToThi
     *
     * @param Forum\Model\Comment $answersToThi
     */
    public function addAnswersToThis(\Forum\Model\Comment $answersToThis)
    {
        $this->answersToThis[] = $answersToThis;
    }

    /**
     * Remove answersToThi
     *
     * @param Forum\Model\Comment $answersToThi
     */
    public function removeAnswersToThis(\Forum\Model\Comment $answersToThis)
    {
        $this->answersToThis->removeElement($answersToThis);
    }

    /**
     * Get answersToThis
     *
     * @return Doctrine\Common\Collections\Collection $answersToThis
     */
    public function getAnswersToThis()
    {
        return $this->answersToThis;
    }

    /**
     * Set unixTime
     *
     * @param  int  $unixTime
     * @return self
     */
    public function setUnixTime($unixTime)
    {
        $this->unixTime = $unixTime;

        return $this;
    }

    /**
     * Get unixTime
     *
     * @return int $unixTime
     */
    public function getUnixTime()
    {
        return $this->unixTime;
    }

    /**
     * Set ip
     *
     * @param  string $ip
     * @return self
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string $ip
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set commentNumber
     *
     * @param  int  $commentNumber
     * @return self
     */
    public function setCommentNumber($commentNumber)
    {
        $this->commentNumber = $commentNumber;

        return $this;
    }

    /**
     * Get commentNumber
     *
     * @return int $commentNumber
     */
    public function getCommentNumber()
    {
        return $this->commentNumber;
    }

    /**
     * Set votingValue
     *
     * @param  int  $votingValue
     * @return self
     */
    public function setVotingValue($votingValue)
    {
        $this->votingValue = $votingValue;

        return $this;
    }

    /**
     * Get votingValue
     *
     * @return int $votingValue
     */
    public function getVotingValue()
    {
        return $this->votingValue;
    }

    /**
     * Set prevComment
     *
     * @param  Forum\Model\Comment $prevComment
     * @return self
     */
    public function setPrevComment(\Forum\Model\Comment $prevComment)
    {
        $this->prevComment = $prevComment;

        return $this;
    }

    /**
     * Get prevComment
     *
     * @return Forum\Model\Comment $prevComment
     */
    public function getPrevComment()
    {
        return $this->prevComment;
    }

    /**
     * Add edit
     *
     * @param Forum\Model\Edit $edit
     */
    public function addEdit(\Forum\Model\Edit $edit)
    {
        $this->edits[] = $edit;
    }

    /**
     * Remove edit
     *
     * @param Forum\Model\Edit $edit
     */
    public function removeEdit(\Forum\Model\Edit $edit)
    {
        $this->edits->removeElement($edit);
    }

    /**
     * Get edits
     *
     * @return Doctrine\Common\Collections\Collection $edits
     */
    public function getEdits()
    {
        return $this->edits;
    }

    /**
     * Set commentParsed
     *
     * @param  string $commentParsed
     * @return self
     */
    public function setCommentParsed($commentParsed)
    {
        $this->commentParsed = $commentParsed;

        return $this;
    }

    /**
     * Get commentParsed
     *
     * @return string $commentParsed
     */
    public function getCommentParsed()
    {
        return $this->commentParsed;
    }

    /**
     * Set owner
     *
     * @param  Forum\Model\User $owner
     * @return self
     */
    public function setOwner(\Forum\Model\User $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return Forum\Model\User $owner
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set origTopic
     *
     * @param  Forum\Model\Topic $origTopic
     * @return self
     */
    public function setOrigTopic(\Forum\Model\Topic $origTopic)
    {
        $this->origTopic = $origTopic;

        return $this;
    }

    /**
     * Get origTopic
     *
     * @return Forum\Model\Topic $origTopic
     */
    public function getOrigTopic()
    {
        return $this->origTopic;
    }
}
