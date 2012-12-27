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
    <head>
\t<meta charset=\"utf-8\">
\t<title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
        echo "</title>
    </head>
    <body>
\t<article>
\t    <header>
\t\t<h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
        echo "</h1>
\t\t<p>
\t\t    <span>Publié le ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "date"), "d/m/Y"), "html", null, true);
        echo " </span>
\t\t    <span>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "auteur"), "html", null, true);
        echo "</span>
\t\t</p>
\t\t<p>
\t\t    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "contenu"), "html", null, true);
        echo "
\t\t</p>
\t\t<p>
\t\t    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "token"), "html", null, true);
        echo "
\t\t</p>
\t    </header>
\t</article>
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
        return array (  53 => 18,  47 => 15,  41 => 12,  37 => 11,  32 => 9,  24 => 4,  19 => 1,);
    }
}
