<?php

/* BlogBundle:AdminArticle:ajouter.html.twig */
class __TwigTemplate_75f1b1f5934c152a4c8f39430c83727e extends Twig_Template
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
\t<h1>Admin</h1>
\t<form action=\"#\" method=\"POST\" name=\"\">
\t    <input type=\"text\" name=titre\" />
\t    <input type=\"submit\"/>
\t</form>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "BlogBundle:AdminArticle:ajouter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
