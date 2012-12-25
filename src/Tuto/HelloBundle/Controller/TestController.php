<?php

namespace Tuto\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
    public function indexAction()
    {
	return $this->render("HelloBundle:Test:index.html.twig");
    }
}
