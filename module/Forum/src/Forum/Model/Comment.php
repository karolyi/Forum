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

}
