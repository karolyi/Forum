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

    public function setName($name)
    {
        var_dump('setting name ' . $name);
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPassword($value='')
    {
        $this->password = $value;
    }

}

/**
* @ODM\EmbeddedDocument
*/
class UserSettings
{
    /** @ODM\Boolean */
    private $showAnswersAtComments = true;

    /** @ODM\Boolean */
    private $showRelations = true;

    /** @ODM\Boolean */
    private $showChat = true;

    /** @ODM\Boolean */
    private $showOutsiders = true;

    /** @ODM\Boolean */
    private $isActivated = false;

    /** @ODM\Boolean */
    private $isDisabled = false;

    /** @ODM\Boolean */
    private $isAdmin = false;

    /** @ODM\Boolean */
    private $mailsFromMessages = true;

    /** @ODM\Boolean */
    private $mailsFromModeration = true;

    /** @ODM\Boolean */
    private $mailsFromReplies = true;

    /** @ODM\Boolean */
    private $mailsFromOwnTopic = false;

    /** @ODM\Boolean */
    private $useBackgrounds = true;

}
