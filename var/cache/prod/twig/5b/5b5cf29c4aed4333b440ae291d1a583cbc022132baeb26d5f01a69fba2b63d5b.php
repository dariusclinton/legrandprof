<?php

/* LGPUserBundle:Avis:voir.html.twig */
class __TwigTemplate_3d5c0c1cf1dddf298ace1dec53f3fea68d5eece56d82e5d1643c6301aee5ac8f extends Twig_Template
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
        echo "<h3>Note: </h3>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avis"]) ? $context["avis"] : null), "note", array()), "html", null, true);
        echo "
<h3>Commentaire</h3>
<p>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avis"]) ? $context["avis"] : null), "commentaire", array()), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<h3>Note: </h3>{{ avis.note }}
<h3>Commentaire</h3>
<p>{{ avis.commentaire }}</p>";
    }
}
