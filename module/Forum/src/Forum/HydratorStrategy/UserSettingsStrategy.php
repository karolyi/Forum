<?php

namespace Forum\HydratorStrategy;

use Zend\Stdlib\Hydrator\Strategy\StrategyInterface;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use Doctrine\Common\Persistence\ObjectManager;

class UserSettingsStrategy implements StrategyInterface
{
    private $_hydrator;
    private $_objectManager;

    public function __construct(ObjectManager $objectManager)
    {
        $this->_objectManager = $objectManager;
        $this->_hydrator = new DoctrineHydrator($objectManager);
    }

    public function extract($value)
    {
        return $this->_hydrator->extract($value);
    }
    public function hydrate($value)
    {
        return $this->_hydrator->hydrate($value);
    }
}
