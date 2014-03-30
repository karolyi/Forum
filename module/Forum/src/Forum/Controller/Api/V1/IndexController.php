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
// use Zend\Stdlib\Hydrator;

class IndexController extends AbstractRestfulController
{

    public function getList()
    {
        $dm = $this->getServiceLocator()->get('doctrine.documentmanager.odm_default');
        $user = new User();
        $hydrator = new DoctrineHydrator($dm);
        // $hydrator = new Hydrator\Reflection($dm);
        $user->setName('test name');
        $user->setPassword('test password');
        // var_dump($this->getServiceLocator()->get('configuration'));

        $topic = new Topic();
        $comment = new Comment();

        $topic->setCurrComment = $comment;
        $topic->setOpener($user);

        // var_dump($topic->getAdminOnly());

        $dm->persist($user);
        $dm->persist($comment);
        $dm->persist($topic);
        $dm->flush();
        // $queryBuilder = $this->getEntityManager()->createQueryBuilder();

        // var_dump($user);
        $hydrator->hydrate(array('name' => 'teeeeest'), $user);

        return new JsonModel(array('user' => $hydrator->extract($user)));
    }

}
