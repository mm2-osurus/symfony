<?php

namespace Tuto\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminArticleController extends Controller {

    public function ajouterAction() {
	$request = $this->getRequest();
	if ($request->getMethod() == 'POST') {
	    $session = $this->get('session');//On recup la session
	    $session->setFlash('info', "L'article a été ajouté");//On ajoute un message flash (alerte)

	    return $this->redirect($this->generateUrl('blog_admin_home'));//Redirection
	}

	if($request->isXmlHttpRequest()){
	    //traitement SGBD
	    return new Response(json_encode(array('erreur','ok')));//Retour en JSON pour ajax
	}

	return $this->render('BlogBundle:AdminArticle:ajouter.html.twig');//Retour en vue classic d'ajout
    }


}

?>
