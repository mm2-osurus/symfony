<?php

/* BlogBundle:Public:page.html.twig */
class __TwigTemplate_22a1d45e9bb5eb9a5818c33bb4098d52 extends Twig_Template
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
\t<h1>Blog, page : ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
        echo "</h1>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Public:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
