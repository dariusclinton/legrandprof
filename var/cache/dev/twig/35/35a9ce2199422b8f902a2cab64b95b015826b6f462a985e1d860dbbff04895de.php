<?php

/* LGPUserBundle:Prof:profile.html.twig */
class __TwigTemplate_6f98457a9800e44336e7b1c1f8bd62b1c4d556111c2704416be26f9472ca50a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Prof:profile.html.twig", 1);
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
        $__internal_74b4c57712300d5d618c744fd1554ba8c50803989afbad57e30bcc5457a5220b = $this->env->getExtension("native_profiler");
        $__internal_74b4c57712300d5d618c744fd1554ba8c50803989afbad57e30bcc5457a5220b->enter($__internal_74b4c57712300d5d618c744fd1554ba8c50803989afbad57e30bcc5457a5220b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Prof:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74b4c57712300d5d618c744fd1554ba8c50803989afbad57e30bcc5457a5220b->leave($__internal_74b4c57712300d5d618c744fd1554ba8c50803989afbad57e30bcc5457a5220b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_153bf32b9383189bfb8e39263e8ad4995f9b18275a8484e05c67b76608e8f720 = $this->env->getExtension("native_profiler");
        $__internal_153bf32b9383189bfb8e39263e8ad4995f9b18275a8484e05c67b76608e8f720->enter($__internal_153bf32b9383189bfb8e39263e8ad4995f9b18275a8484e05c67b76608e8f720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_153bf32b9383189bfb8e39263e8ad4995f9b18275a8484e05c67b76608e8f720->leave($__internal_153bf32b9383189bfb8e39263e8ad4995f9b18275a8484e05c67b76608e8f720_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb470810193efacc6efee3d64c9b7e29d9dfd8a2f6d4a44495a1dbb0d32bbffd = $this->env->getExtension("native_profiler");
        $__internal_fb470810193efacc6efee3d64c9b7e29d9dfd8a2f6d4a44495a1dbb0d32bbffd->enter($__internal_fb470810193efacc6efee3d64c9b7e29d9dfd8a2f6d4a44495a1dbb0d32bbffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fb470810193efacc6efee3d64c9b7e29d9dfd8a2f6d4a44495a1dbb0d32bbffd->leave($__internal_fb470810193efacc6efee3d64c9b7e29d9dfd8a2f6d4a44495a1dbb0d32bbffd_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Prof:profile.html.twig";
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
