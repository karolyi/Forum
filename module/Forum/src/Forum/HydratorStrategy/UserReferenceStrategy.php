<?php

namespace Forum\HydratorStrategy;

use Zend\Stdlib\Hydrator\Strategy\StrategyInterface;
// use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use Doctrine\Common\Persistence\ObjectManager;
use Forum\Model\User;

class UserReferenceStrategy implements StrategyInterface
{
    private $_hydrator;
    private $_objectManager;

    public function __construct(ObjectManager $objectManager)
    {
        $this->_objectManager = $objectManager;
        // $this->_hydrator = new DoctrineHydrator($objectManager);
    }

    /**
     * Return the Id of the User model as a reference
     * @param  \Forum\Model\User $value The User model
     * @return id                The object Id of the User model
     */
    public function extract(User $value)
    {
        return $value->getId();
    }

    /**
     * Fetch the User model and return it. Throw errors on not found.
     * @param  string            $value The object id of the User model
     * @return \Forum\Model\User The User model
     */
    public function hydrate(str $id)
    {
        $user = $this->_objectManager->getRepository('\Forum\Model\User')->findOneBy(array('id' => $id));

        return $user;
    }
}
