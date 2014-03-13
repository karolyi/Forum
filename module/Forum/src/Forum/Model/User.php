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
    private $topicPerGroup = 50;

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

    public function __construct()
    {
        $this->regId = Uuid::uuid4();
        $this->regDate = time();
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPassword($value='')
    {
        $this->password = $value;
    }

}
