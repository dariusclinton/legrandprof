<?php

/* LGPUserBundle:Parent:profile.html.twig */
class __TwigTemplate_7f5936ed08367ca5a8a9a6747a7c79d9d52ca8786cfe5524c4e5a20b0f5c2226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Parent:profile.html.twig", 1);
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
        $__internal_21dec2a5af0c8693a0e8fa4603411dd43914cea67ba4b023b6e5b232e8528345 = $this->env->getExtension("native_profiler");
        $__internal_21dec2a5af0c8693a0e8fa4603411dd43914cea67ba4b023b6e5b232e8528345->enter($__internal_21dec2a5af0c8693a0e8fa4603411dd43914cea67ba4b023b6e5b232e8528345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Parent:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21dec2a5af0c8693a0e8fa4603411dd43914cea67ba4b023b6e5b232e8528345->leave($__internal_21dec2a5af0c8693a0e8fa4603411dd43914cea67ba4b023b6e5b232e8528345_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b643ee7caa1e78d273a1d7323f6363e4f17629939a7bd467ba0bb767700b1992 = $this->env->getExtension("native_profiler");
        $__internal_b643ee7caa1e78d273a1d7323f6363e4f17629939a7bd467ba0bb767700b1992->enter($__internal_b643ee7caa1e78d273a1d7323f6363e4f17629939a7bd467ba0bb767700b1992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b643ee7caa1e78d273a1d7323f6363e4f17629939a7bd467ba0bb767700b1992->leave($__internal_b643ee7caa1e78d273a1d7323f6363e4f17629939a7bd467ba0bb767700b1992_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_364b8a68b5b62e881f485f07a401dc5cb68751b746cd02cdadbddceb79a48414 = $this->env->getExtension("native_profiler");
        $__internal_364b8a68b5b62e881f485f07a401dc5cb68751b746cd02cdadbddceb79a48414->enter($__internal_364b8a68b5b62e881f485f07a401dc5cb68751b746cd02cdadbddceb79a48414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <div class=\"row\">
    <ul class=\"list-group\">
      <li class=\"list-group-item\">Photo: <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "photo", array()))), "html", null, true);
        echo "\" alt=\"\" /> </li>
      <li class=\"list-group-item\">Nom: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "nom", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Prénoms: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "prenoms", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Date  de naissance: ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Sexe: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "sexe", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Téléphone: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "numTelephone", array()), "html", null, true);
        echo "</li>
      <li class=\"list-group-item\">Pays: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "pays", array()), "html", null, true);
        echo "</li>
    </ul>
  </div>
";
        
        $__internal_364b8a68b5b62e881f485f07a401dc5cb68751b746cd02cdadbddceb79a48414->leave($__internal_364b8a68b5b62e881f485f07a401dc5cb68751b746cd02cdadbddceb79a48414_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Parent:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  85 => 15,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 8,  55 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*   {{ parent.user.prenoms }} {{ parent.user.nom }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div class="row">*/
/*     <ul class="list-group">*/
/*       <li class="list-group-item">Photo: <img src="{{ asset('uploads/images/' ~ parent.user.photo) }}" alt="" /> </li>*/
/*       <li class="list-group-item">Nom: {{ parent.user.nom }}</li>*/
/*       <li class="list-group-item">Prénoms: {{ parent.user.prenoms }}</li>*/
/*       <li class="list-group-item">Date  de naissance: {{ parent.user.dateNaissance|date('d/m/y') }}</li>*/
/*       <li class="list-group-item">Sexe: {{ parent.user.sexe }}</li>*/
/*       <li class="list-group-item">Téléphone: {{ parent.user.numTelephone }}</li>*/
/*       <li class="list-group-item">Pays: {{ parent.user.pays }}</li>*/
/*     </ul>*/
/*   </div>*/
/* {% endblock %}*/
/* */
