<?php

/* BlogBundle:Public:article.html.twig */
class __TwigTemplate_38cf9746257d77a95031f68009070015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <body>
\t<h1>Mots clef : ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "slug"), "html", null, true);
        echo "</h1>
\t<h1>Publié en : ";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "annee"), "html", null, true);
        echo "</h1>
\t<h1>Langue : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "lang"), "html", null, true);
        echo "</h1>

\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Blog_page", array("page" => $this->getContext($context, "annee"))), "html", null, true);
        echo "\" title=\"Retour à la page ";
        echo twig_escape_filter($this->env, $this->getContext($context, "annee"), "html", null, true);
        echo "\">Retour à la page ";
        echo twig_escape_filter($this->env, $this->getContext($context, "annee"), "html", null, true);
        echo "</a>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Public:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
