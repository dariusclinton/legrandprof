<?php

/* LGPUserBundle:Message:voir.html.twig */
class __TwigTemplate_08bfc3cd1a826c9627fd6663b632da6fe7b8f7c5537ecbade3f4e8e484aaec4f extends Twig_Template
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
        $__internal_8dcd68b6784d1ee5d57b4e8a243f860822835576edf30e0a72fcbfc4e49604f1 = $this->env->getExtension("native_profiler");
        $__internal_8dcd68b6784d1ee5d57b4e8a243f860822835576edf30e0a72fcbfc4e49604f1->enter($__internal_8dcd68b6784d1ee5d57b4e8a243f860822835576edf30e0a72fcbfc4e49604f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:voir.html.twig"));

        // line 1
        echo "<h4>Expéditeur: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "expediteur", array()), "html", null, true);
        echo "</h4>
<h4>Récepteur: ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "recepteur", array()), "html", null, true);
        echo "</h4>
<h1>Objet: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "objet", array()), "html", null, true);
        echo "</h1>
<h1>Contenu</h1>
<p>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "contenu", array()), "html", null, true);
        echo "</p>";
        
        $__internal_8dcd68b6784d1ee5d57b4e8a243f860822835576edf30e0a72fcbfc4e49604f1->leave($__internal_8dcd68b6784d1ee5d57b4e8a243f860822835576edf30e0a72fcbfc4e49604f1_prof);

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
        return array (  36 => 5,  31 => 3,  27 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<h4>Expéditeur: {{ message.expediteur }}</h4>
<h4>Récepteur: {{ message.recepteur }}</h4>
<h1>Objet: {{ message.objet }}</h1>
<h1>Contenu</h1>
<p>{{ message.contenu }}</p>";
    }
}
