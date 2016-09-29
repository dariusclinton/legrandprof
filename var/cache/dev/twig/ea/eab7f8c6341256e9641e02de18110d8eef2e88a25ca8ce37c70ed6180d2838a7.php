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
        $__internal_dc9ee4972c4c7a4046f70dbb572946f9045e7bc77865d1fad0e0a3ed07f2e576 = $this->env->getExtension("native_profiler");
        $__internal_dc9ee4972c4c7a4046f70dbb572946f9045e7bc77865d1fad0e0a3ed07f2e576->enter($__internal_dc9ee4972c4c7a4046f70dbb572946f9045e7bc77865d1fad0e0a3ed07f2e576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:voir.html.twig"));

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
        
        $__internal_dc9ee4972c4c7a4046f70dbb572946f9045e7bc77865d1fad0e0a3ed07f2e576->leave($__internal_dc9ee4972c4c7a4046f70dbb572946f9045e7bc77865d1fad0e0a3ed07f2e576_prof);

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
