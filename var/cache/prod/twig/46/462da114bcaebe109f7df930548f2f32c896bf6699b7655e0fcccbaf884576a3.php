<?php

/* LGPUserBundle:Message:voir.html.twig */
class __TwigTemplate_fef0607f815fe74ece755bdc7ee463f6753c99d779d85fc781d2106f20642b5d extends Twig_Template
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
        echo "
<div class=\"message-title\">
    <h4><i>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "expediteur", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "expediteur", array()), "nom", array()), "html", null, true);
        echo "</i></h4>
</div>
<div class=\"message-content\">
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "contenu", array()), "html", null, true);
        echo "</p>
</div>

";
    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Message:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "
<div class=\"message-title\">
    <h4><i>{{ message.expediteur.prenoms }} {{ message.expediteur.nom }}</i></h4>
</div>
<div class=\"message-content\">
    <p>{{ message.contenu }}</p>
</div>

";
    }
}
