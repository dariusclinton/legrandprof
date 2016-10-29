<?php

/* LGPUserBundle:Avis:voir.html.twig */
class __TwigTemplate_b04f0f9bf42f21cb2dac6ec188af3d05e2602799b195a317b8903ab7cbcd7b13 extends Twig_Template
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
        return "";
    }
}
