<?php

/* LGPUserBundle:Avis:voir.html.twig */
class __TwigTemplate_f17da733bd7ba47fef836983e6a778666da6c4c3ec552ec026e2ee7cf005531e extends Twig_Template
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
        $__internal_9226176dc241fc23d7d1a05b4223bd5ef758f71e60e6aacdf3009a070e909221 = $this->env->getExtension("native_profiler");
        $__internal_9226176dc241fc23d7d1a05b4223bd5ef758f71e60e6aacdf3009a070e909221->enter($__internal_9226176dc241fc23d7d1a05b4223bd5ef758f71e60e6aacdf3009a070e909221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:voir.html.twig"));

        // line 1
        echo "<h1>Note: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")), "note", array()), "html", null, true);
        echo "</h1>
<h3>Prof: ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")), "prof", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")), "prof", array()), "nom", array()), "html", null, true);
        echo "</h3>
<h3>Commentaire</h3>
<p>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")), "commentaire", array()), "html", null, true);
        echo "</p>";
        
        $__internal_9226176dc241fc23d7d1a05b4223bd5ef758f71e60e6aacdf3009a070e909221->leave($__internal_9226176dc241fc23d7d1a05b4223bd5ef758f71e60e6aacdf3009a070e909221_prof);

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
        return array (  34 => 4,  27 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<h1>Note: {{ avis.note }}</h1>
<h3>Prof: {{ avis.prof.prenoms }} {{ avis.prof.nom }}</h3>
<h3>Commentaire</h3>
<p>{{ avis.commentaire }}</p>";
    }
}
