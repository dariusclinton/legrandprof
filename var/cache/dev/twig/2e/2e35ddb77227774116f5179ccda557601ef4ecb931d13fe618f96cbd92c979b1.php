<?php

/* @LGPUser/Prof/profile.html.twig */
class __TwigTemplate_5e0e88df461c5c314b06e6446fe6c71fa3ea741158fd7f70900c6ae6ed05fd9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Prof/profile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0a779a78e9c26de8f1fd0999db9cdf47e2d2e15e265de77b99325f63678ec04 = $this->env->getExtension("native_profiler");
        $__internal_b0a779a78e9c26de8f1fd0999db9cdf47e2d2e15e265de77b99325f63678ec04->enter($__internal_b0a779a78e9c26de8f1fd0999db9cdf47e2d2e15e265de77b99325f63678ec04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Prof/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0a779a78e9c26de8f1fd0999db9cdf47e2d2e15e265de77b99325f63678ec04->leave($__internal_b0a779a78e9c26de8f1fd0999db9cdf47e2d2e15e265de77b99325f63678ec04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25d577887fa23eaef4b015183db4326179e275453d23a797bfdbb091fdd58416 = $this->env->getExtension("native_profiler");
        $__internal_25d577887fa23eaef4b015183db4326179e275453d23a797bfdbb091fdd58416->enter($__internal_25d577887fa23eaef4b015183db4326179e275453d23a797bfdbb091fdd58416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_25d577887fa23eaef4b015183db4326179e275453d23a797bfdbb091fdd58416->leave($__internal_25d577887fa23eaef4b015183db4326179e275453d23a797bfdbb091fdd58416_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2495c9efd6c4b0cbc656039b5579f6984d2625396aa236187645de561cded8e5 = $this->env->getExtension("native_profiler");
        $__internal_2495c9efd6c4b0cbc656039b5579f6984d2625396aa236187645de561cded8e5->enter($__internal_2495c9efd6c4b0cbc656039b5579f6984d2625396aa236187645de561cded8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <div class=\"row\">
    <ul class=\"list-group\">
      <li class=\"list-group-item\">Photo: <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "photo", array())), "html", null, true);
        echo "\" alt=\"\" /> </li>
      <li class=\"list-group-item\">Nom: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "nom", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Prénoms: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "prenoms", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Date  de naissance: ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Sexe: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "sexe", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Téléphone: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "numTelephone", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Pays: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "pays", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Ville: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "ville", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Quartier: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "quartier", array()), "html", null, true);
        echo "</li>
    </ul>
  </div>
";
        
        $__internal_2495c9efd6c4b0cbc656039b5579f6984d2625396aa236187645de561cded8e5->leave($__internal_2495c9efd6c4b0cbc656039b5579f6984d2625396aa236187645de561cded8e5_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Prof/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 18,  93 => 17,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 8,  55 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*   {{ prof.user.prenoms }} {{ prof.user.nom }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div class="row">*/
/*     <ul class="list-group">*/
/*       <li class="list-group-item">Photo: <img src="{{ asset(prof.user.photo) }}" alt="" /> </li>*/
/*       <li class="list-group-item">Nom: {{ prof.user.nom }}</li>*/
/*       <li class="list-group-item">Prénoms: {{ prof.user.prenoms }}</li>*/
/*       <li class="list-group-item">Date  de naissance: {{ prof.user.dateNaissance|date('d/m/y') }}</li>*/
/*       <li class="list-group-item">Sexe: {{ prof.user.sexe }}</li>*/
/*       <li class="list-group-item">Téléphone: {{ prof.user.numTelephone }}</li>*/
/*       <li class="list-group-item">Pays: {{ prof.user.pays }}</li>*/
/*       <li class="list-group-item">Ville: {{ prof.ville }}</li>*/
/*       <li class="list-group-item">Quartier: {{ prof.quartier }}</li>*/
/*     </ul>*/
/*   </div>*/
/* {% endblock %}*/
/* */
