<?php

namespace Forum\Controller\Api\V1;

// use Zend\Mvc\Controller\AbstractActionController;
use Zend\Mvc\Controller\AbstractRestfulController;
// use Zend\View\Model\ViewModel;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use Zend\View\Model\JsonModel;
use Forum\Model\User;
use Forum\Model\Topic;
use Forum\Model\Comment;
use Forum\HydratorStrategy\UserSettingsStrategy;
use Zend\Session\Container;
// use Zend\Stdlib\Hydrator;

class IndexController extends AbstractRestfulController
{

    public function getList()
    {
        $user_session = new Container();
        var_dump($user_session->user);
        $om = $this->getServiceLocator()->get('doctrine.documentmanager.odm_default');
        $user = new User();
        $user2 = new User();
        $om->persist($user2);
        $user->setInviterUser($user2);
        $hydrator = new DoctrineHydrator($om);
        $hydrator->addStrategy('settings', new UserSettingsStrategy($om));
        // $hydrator = new Hydrator\Reflection($om);
        $user->setName('test name');
        $user->setPassword('test password');
        // var_dump($this->getServiceLocator()->get('configuration'));

        $topic = new Topic();
        $comment = new Comment();

        $topic->setCurrComment = $comment;
        $topic->setOpener($user);

        $om->persist($user);
        $om->persist($comment);
        $om->persist($topic);
        $om->flush();

        $hydrator->hydrate(array('name' => 'teeeeest'), $user);

        $retVal = $hydrator->extract($user);
        // var_dump($retVal);
        return new JsonModel($retVal);
    }

}
