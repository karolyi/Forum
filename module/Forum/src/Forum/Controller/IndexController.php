<?php

namespace Forum\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Forum\Model\User;
use Forum\Model\Topic;
use Forum\Model\Comment;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        $dm = $this->getServiceLocator()->get('doctrine.documentmanager.odm_default');
        $user = new User();
        // var_dump($user);
        $user->setName('test name');
        $user->setPassword('test password');
        // var_dump($this->getServiceLocator()->get('configuration'));

        $topic = new Topic();
        $comment = new Comment();

        $topic->setCurrComment = $comment;
        $topic->setOpener($user);

        var_dump($topic->getAdminOnly());

        $dm->persist($user);
        $dm->persist($comment);
        $dm->persist($topic);
        $dm->flush();

        var_dump($user);

        return new ViewModel();
    }

}
