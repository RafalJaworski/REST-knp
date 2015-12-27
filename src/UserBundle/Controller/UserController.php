<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function listAction()
    {
        return $this->render('UserBundle:User:list.html.twig', array(
            // ...
        ));
    }

    public function createAction()
    {
        return $this->render('UserBundle:User:create.html.twig', array(
            // ...
        ));
    }

    public function removeAction()
    {
        return $this->render('UserBundle:User:remove.html.twig', array(
            // ...
        ));
    }

    public function showAction()
    {
        return $this->render('UserBundle:User:show.html.twig', array(
            // ...
        ));
    }

}
