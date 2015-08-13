<?php

namespace FormaLibre\ChatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as EXT;

class ChatController extends Controller
{
    /**
     * @EXT\Route("/index", name="formalibre_chat_index")
     * @EXT\Template
     *
     * @return Response
     */
    public function indexAction()
    {
        return array();
    }
}
