<?php

/* BlogBundle:Admin:index.html.twig */
class __TwigTemplate_d3b154a5a1c16788e4581bc8478d5588 extends Twig_Template
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
\t<p>
\t    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 5
            echo "
\t\t<span class=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getContext($context, "k"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "v"), "html", null, true);
            echo "</span>

\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "\t</p>
\t<h1>Admin</h1>
\t<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_ajouter_article"), "html", null, true);
        echo "\" title=\"\">Ajouter un article</a>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  42 => 9,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
