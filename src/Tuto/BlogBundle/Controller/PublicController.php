<?php
namespace Tuto\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicController extends Controller {

    public function indexAction() {
	return $this->render("BlogBundle:Public:index.html.twig");
    }

    public function pageAction($page){
	return $this->render("BlogBundle:Public:page.html.twig", array(
	    'page'  =>	$page
	));
    }

    public function articleAction($slug){
	//GEstion cookies
	$cookies = $this->getRequest()->cookies;
	$cookies->set('nom_du_cookie', 'test cookie');

	//Session
	$session = $this->get('session');
	$session->set('dateDerniereVisite',new \DateTime());

	$article = array(
	    'titre'	=>  'Titre de l\'article',
	    'date'	=>  $session->get('dateDerniereVisite'),
	    'contenu'	=>  'Contenu ici...',
	    'auteur'	=>  'Osurus',
	    'token'	=>  $cookies->get('nom_du_cookie')
	);

	return $this->render(
	    'BlogBundle:Public:article.html.twig',
	    array(
		'article'   =>	$article
	    )
	);

    }

}

?>
