<?php

namespace Forum\Model;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Rhumsaa\Uuid\Uuid;

/** @ODM\Document(collection="users") */
class User
{
    /** @ODM\Id */
    private $id;

    /** @ODM\String */
    private $name = null;
    // public $name = null;

    /** @ODM\String */
    private $password = null;

    /** @ODM\String */
    private $email = null;

    /** @ODM\String */
    private $otherEmails = null;

    /** @ODM\String */
    private $quote = null;

    /** @ODM\String */
    private $language = 'en_US';

    /** @ODM\Int */
    private $inviteSuccess = 0;

    /** @ODM\Int */
    private $maxPostsPerDay = 0;

    /** @ODM\Int */
    private $invitations = 0;

    /** @ODM\Int */
    private $reminders = 0;

    /** @ODM\ReferenceOne(targetDocument="User", simple=true) */
    private $inviterUser = null;

    /** @ODM\Date */
    private $regDate = null;

    /** @ODM\String */
    private $friendIntroduction = null;

    /** @ODM\String */
    private $regIntroduction = null;

    /** @ODM\String */
    private $introduction = null;

    /** @ODM\String */
    private $regId = null;

    /**
    * @ODM\String
    * @ODM\Index(unique=true, order="asc")
    */
    private $slug = null;

    /** @ODM\Int */
    private $sumComments = 0;

    /** @ODM\Int */
    private $todayComments = 0;

    /** @ODM\Int */
    private $topicCommentsPerPage = 50;

    /** @ODM\Int */
    private $topicPerGroup = 10;

    /** @ODM\Int */
    private $voteLimit = -5;

    /** @ODM\Int */
    private $ratingsCount = 0;

    /** @ODM\Int */
    private $ratingsSummary = 0;

    /** @ODM\Int */
    private $yesterdayComments = 0;

    /** @ODM\String */
    private $usedSkin = 'default';

    /** @ODM\EmbedOne(targetDocument="UserSettings") */
    private $settings = null;

    public function __construct()
    {
        $this->regId = Uuid::uuid4();
        $this->regDate = time();
        $this->settings = new UserSettings();
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
     * Set name
     *
     * @param  string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set password
     *
     * @param  string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param  string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set otherEmails
     *
     * @param  string $otherEmails
     * @return self
     */
    public function setOtherEmails($otherEmails)
    {
        $this->otherEmails = $otherEmails;

        return $this;
    }

    /**
     * Get otherEmails
     *
     * @return string $otherEmails
     */
    public function getOtherEmails()
    {
        return $this->otherEmails;
    }

    /**
     * Set quote
     *
     * @param  string $quote
     * @return self
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get quote
     *
     * @return string $quote
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * Set language
     *
     * @param  string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string $language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set inviteSuccess
     *
     * @param  int  $inviteSuccess
     * @return self
     */
    public function setInviteSuccess($inviteSuccess)
    {
        $this->inviteSuccess = $inviteSuccess;

        return $this;
    }

    /**
     * Get inviteSuccess
     *
     * @return int $inviteSuccess
     */
    public function getInviteSuccess()
    {
        return $this->inviteSuccess;
    }

    /**
     * Set maxPostsPerDay
     *
     * @param  int  $maxPostsPerDay
     * @return self
     */
    public function setMaxPostsPerDay($maxPostsPerDay)
    {
        $this->maxPostsPerDay = $maxPostsPerDay;

        return $this;
    }

    /**
     * Get maxPostsPerDay
     *
     * @return int $maxPostsPerDay
     */
    public function getMaxPostsPerDay()
    {
        return $this->maxPostsPerDay;
    }

    /**
     * Set invitations
     *
     * @param  int  $invitations
     * @return self
     */
    public function setInvitations($invitations)
    {
        $this->invitations = $invitations;

        return $this;
    }

    /**
     * Get invitations
     *
     * @return int $invitations
     */
    public function getInvitations()
    {
        return $this->invitations;
    }

    /**
     * Set reminders
     *
     * @param  int  $reminders
     * @return self
     */
    public function setReminders($reminders)
    {
        $this->reminders = $reminders;

        return $this;
    }

    /**
     * Get reminders
     *
     * @return int $reminders
     */
    public function getReminders()
    {
        return $this->reminders;
    }

    /**
     * Set inviterUser
     *
     * @param  Forum\Model\User $inviterUser
     * @return self
     */
    public function setInviterUser(\Forum\Model\User $inviterUser)
    {
        $this->inviterUser = $inviterUser;

        return $this;
    }

    /**
     * Get inviterUser
     *
     * @return Forum\Model\User $inviterUser
     */
    public function getInviterUser()
    {
        return $this->inviterUser;
    }

    /**
     * Set regDate
     *
     * @param  date $regDate
     * @return self
     */
    public function setRegDate($regDate)
    {
        $this->regDate = $regDate;

        return $this;
    }

    /**
     * Get regDate
     *
     * @return date $regDate
     */
    public function getRegDate()
    {
        return $this->regDate;
    }

    /**
     * Set friendIntroduction
     *
     * @param  string $friendIntroduction
     * @return self
     */
    public function setFriendIntroduction($friendIntroduction)
    {
        $this->friendIntroduction = $friendIntroduction;

        return $this;
    }

    /**
     * Get friendIntroduction
     *
     * @return string $friendIntroduction
     */
    public function getFriendIntroduction()
    {
        return $this->friendIntroduction;
    }

    /**
     * Set regIntroduction
     *
     * @param  string $regIntroduction
     * @return self
     */
    public function setRegIntroduction($regIntroduction)
    {
        $this->regIntroduction = $regIntroduction;

        return $this;
    }

    /**
     * Get regIntroduction
     *
     * @return string $regIntroduction
     */
    public function getRegIntroduction()
    {
        return $this->regIntroduction;
    }

    /**
     * Set introduction
     *
     * @param  string $introduction
     * @return self
     */
    public function setIntroduction($introduction)
    {
        $this->introduction = $introduction;

        return $this;
    }

    /**
     * Get introduction
     *
     * @return string $introduction
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * Set regId
     *
     * @param  string $regId
     * @return self
     */
    public function setRegId($regId)
    {
        $this->regId = $regId;

        return $this;
    }

    /**
     * Get regId
     *
     * @return string $regId
     */
    public function getRegId()
    {
        return $this->regId;
    }

    /**
     * Set slug
     *
     * @param  string $slug
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
     * Set sumComments
     *
     * @param  int  $sumComments
     * @return self
     */
    public function setSumComments($sumComments)
    {
        $this->sumComments = $sumComments;

        return $this;
    }

    /**
     * Get sumComments
     *
     * @return int $sumComments
     */
    public function getSumComments()
    {
        return $this->sumComments;
    }

    /**
     * Set todayComments
     *
     * @param  int  $todayComments
     * @return self
     */
    public function setTodayComments($todayComments)
    {
        $this->todayComments = $todayComments;

        return $this;
    }

    /**
     * Get todayComments
     *
     * @return int $todayComments
     */
    public function getTodayComments()
    {
        return $this->todayComments;
    }

    /**
     * Set topicCommentsPerPage
     *
     * @param  int  $topicCommentsPerPage
     * @return self
     */
    public function setTopicCommentsPerPage($topicCommentsPerPage)
    {
        $this->topicCommentsPerPage = $topicCommentsPerPage;

        return $this;
    }

    /**
     * Get topicCommentsPerPage
     *
     * @return int $topicCommentsPerPage
     */
    public function getTopicCommentsPerPage()
    {
        return $this->topicCommentsPerPage;
    }

    /**
     * Set topicPerGroup
     *
     * @param  int  $topicPerGroup
     * @return self
     */
    public function setTopicPerGroup($topicPerGroup)
    {
        $this->topicPerGroup = $topicPerGroup;

        return $this;
    }

    /**
     * Get topicPerGroup
     *
     * @return int $topicPerGroup
     */
    public function getTopicPerGroup()
    {
        return $this->topicPerGroup;
    }

    /**
     * Set voteLimit
     *
     * @param  int  $voteLimit
     * @return self
     */
    public function setVoteLimit($voteLimit)
    {
        $this->voteLimit = $voteLimit;

        return $this;
    }

    /**
     * Get voteLimit
     *
     * @return int $voteLimit
     */
    public function getVoteLimit()
    {
        return $this->voteLimit;
    }

    /**
     * Set ratingsCount
     *
     * @param  int  $ratingsCount
     * @return self
     */
    public function setRatingsCount($ratingsCount)
    {
        $this->ratingsCount = $ratingsCount;

        return $this;
    }

    /**
     * Get ratingsCount
     *
     * @return int $ratingsCount
     */
    public function getRatingsCount()
    {
        return $this->ratingsCount;
    }

    /**
     * Set ratingsSummary
     *
     * @param  int  $ratingsSummary
     * @return self
     */
    public function setRatingsSummary($ratingsSummary)
    {
        $this->ratingsSummary = $ratingsSummary;

        return $this;
    }

    /**
     * Get ratingsSummary
     *
     * @return int $ratingsSummary
     */
    public function getRatingsSummary()
    {
        return $this->ratingsSummary;
    }

    /**
     * Set yesterdayComments
     *
     * @param  int  $yesterdayComments
     * @return self
     */
    public function setYesterdayComments($yesterdayComments)
    {
        $this->yesterdayComments = $yesterdayComments;

        return $this;
    }

    /**
     * Get yesterdayComments
     *
     * @return int $yesterdayComments
     */
    public function getYesterdayComments()
    {
        return $this->yesterdayComments;
    }

    /**
     * Set usedSkin
     *
     * @param  string $usedSkin
     * @return self
     */
    public function setUsedSkin($usedSkin)
    {
        $this->usedSkin = $usedSkin;

        return $this;
    }

    /**
     * Get usedSkin
     *
     * @return string $usedSkin
     */
    public function getUsedSkin()
    {
        return $this->usedSkin;
    }

    /**
     * Set settings
     *
     * @param  Forum\Model\UserSettings $settings
     * @return self
     */
    public function setSettings(\Forum\Model\UserSettings $settings)
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * Get settings
     *
     * @return Forum\Model\UserSettings $settings
     */
    public function getSettings()
    {
        return $this->settings;
    }
}
