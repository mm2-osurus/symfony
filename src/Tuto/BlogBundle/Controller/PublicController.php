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

    public function articleAction($slug, $annee, $_locale){
	return $this->render("BlogBundle:Public:article.html.twig", array(
	    'slug'	=>	$slug,
	    'annee'	=>	$annee,
	    'lang'	=>	$_locale
	));
    }

}

?>
