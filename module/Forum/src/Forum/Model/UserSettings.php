<?php
namespace Forum\Model;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

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


    /**
     * Set showAnswersAtComments
     *
     * @param boolean $showAnswersAtComments
     * @return self
     */
    public function setShowAnswersAtComments($showAnswersAtComments)
    {
        $this->showAnswersAtComments = $showAnswersAtComments;
        return $this;
    }

    /**
     * Get showAnswersAtComments
     *
     * @return boolean $showAnswersAtComments
     */
    public function getShowAnswersAtComments()
    {
        return $this->showAnswersAtComments;
    }

    /**
     * Set showRelations
     *
     * @param boolean $showRelations
     * @return self
     */
    public function setShowRelations($showRelations)
    {
        $this->showRelations = $showRelations;
        return $this;
    }

    /**
     * Get showRelations
     *
     * @return boolean $showRelations
     */
    public function getShowRelations()
    {
        return $this->showRelations;
    }

    /**
     * Set showChat
     *
     * @param boolean $showChat
     * @return self
     */
    public function setShowChat($showChat)
    {
        $this->showChat = $showChat;
        return $this;
    }

    /**
     * Get showChat
     *
     * @return boolean $showChat
     */
    public function getShowChat()
    {
        return $this->showChat;
    }

    /**
     * Set showOutsiders
     *
     * @param boolean $showOutsiders
     * @return self
     */
    public function setShowOutsiders($showOutsiders)
    {
        $this->showOutsiders = $showOutsiders;
        return $this;
    }

    /**
     * Get showOutsiders
     *
     * @return boolean $showOutsiders
     */
    public function getShowOutsiders()
    {
        return $this->showOutsiders;
    }

    /**
     * Set isActivated
     *
     * @param boolean $isActivated
     * @return self
     */
    public function setIsActivated($isActivated)
    {
        $this->isActivated = $isActivated;
        return $this;
    }

    /**
     * Get isActivated
     *
     * @return boolean $isActivated
     */
    public function getIsActivated()
    {
        return $this->isActivated;
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
     * Set isAdmin
     *
     * @param boolean $isAdmin
     * @return self
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return boolean $isAdmin
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Set mailsFromMessages
     *
     * @param boolean $mailsFromMessages
     * @return self
     */
    public function setMailsFromMessages($mailsFromMessages)
    {
        $this->mailsFromMessages = $mailsFromMessages;
        return $this;
    }

    /**
     * Get mailsFromMessages
     *
     * @return boolean $mailsFromMessages
     */
    public function getMailsFromMessages()
    {
        return $this->mailsFromMessages;
    }

    /**
     * Set mailsFromModeration
     *
     * @param boolean $mailsFromModeration
     * @return self
     */
    public function setMailsFromModeration($mailsFromModeration)
    {
        $this->mailsFromModeration = $mailsFromModeration;
        return $this;
    }

    /**
     * Get mailsFromModeration
     *
     * @return boolean $mailsFromModeration
     */
    public function getMailsFromModeration()
    {
        return $this->mailsFromModeration;
    }

    /**
     * Set mailsFromReplies
     *
     * @param boolean $mailsFromReplies
     * @return self
     */
    public function setMailsFromReplies($mailsFromReplies)
    {
        $this->mailsFromReplies = $mailsFromReplies;
        return $this;
    }

    /**
     * Get mailsFromReplies
     *
     * @return boolean $mailsFromReplies
     */
    public function getMailsFromReplies()
    {
        return $this->mailsFromReplies;
    }

    /**
     * Set mailsFromOwnTopic
     *
     * @param boolean $mailsFromOwnTopic
     * @return self
     */
    public function setMailsFromOwnTopic($mailsFromOwnTopic)
    {
        $this->mailsFromOwnTopic = $mailsFromOwnTopic;
        return $this;
    }

    /**
     * Get mailsFromOwnTopic
     *
     * @return boolean $mailsFromOwnTopic
     */
    public function getMailsFromOwnTopic()
    {
        return $this->mailsFromOwnTopic;
    }

    /**
     * Set useBackgrounds
     *
     * @param boolean $useBackgrounds
     * @return self
     */
    public function setUseBackgrounds($useBackgrounds)
    {
        $this->useBackgrounds = $useBackgrounds;
        return $this;
    }

    /**
     * Get useBackgrounds
     *
     * @return boolean $useBackgrounds
     */
    public function getUseBackgrounds()
    {
        return $this->useBackgrounds;
    }
}
