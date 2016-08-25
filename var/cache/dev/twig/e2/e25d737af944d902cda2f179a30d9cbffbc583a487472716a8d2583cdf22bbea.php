<?php

/* LGPUserBundle:Parent:profile.html.twig */
class __TwigTemplate_5c65599e0324f1b64835d503fbb43315342c0aa4ba3c39db0a9bd52474f9c40f extends Twig_Template
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
        $__internal_85f22105df0e7d08f68f9d6e81f00c382b4146712d90462835bf4d55ec65d123 = $this->env->getExtension("native_profiler");
        $__internal_85f22105df0e7d08f68f9d6e81f00c382b4146712d90462835bf4d55ec65d123->enter($__internal_85f22105df0e7d08f68f9d6e81f00c382b4146712d90462835bf4d55ec65d123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Parent:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85f22105df0e7d08f68f9d6e81f00c382b4146712d90462835bf4d55ec65d123->leave($__internal_85f22105df0e7d08f68f9d6e81f00c382b4146712d90462835bf4d55ec65d123_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_059d692ed4df526432296d51f69c7d9c4e3fc4b768125214b9bdc3185b40203e = $this->env->getExtension("native_profiler");
        $__internal_059d692ed4df526432296d51f69c7d9c4e3fc4b768125214b9bdc3185b40203e->enter($__internal_059d692ed4df526432296d51f69c7d9c4e3fc4b768125214b9bdc3185b40203e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_059d692ed4df526432296d51f69c7d9c4e3fc4b768125214b9bdc3185b40203e->leave($__internal_059d692ed4df526432296d51f69c7d9c4e3fc4b768125214b9bdc3185b40203e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_61db8411f64d4f70c31efdcb5a907f0cc080693f0e17b81ff044b3ea77e2b38a = $this->env->getExtension("native_profiler");
        $__internal_61db8411f64d4f70c31efdcb5a907f0cc080693f0e17b81ff044b3ea77e2b38a->enter($__internal_61db8411f64d4f70c31efdcb5a907f0cc080693f0e17b81ff044b3ea77e2b38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <div class=\"row\">
    <ul class=\"list-group\">
      <li class=\"list-group-item\">Photo: <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "photo", array())), "html", null, true);
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
        
        $__internal_61db8411f64d4f70c31efdcb5a907f0cc080693f0e17b81ff044b3ea77e2b38a->leave($__internal_61db8411f64d4f70c31efdcb5a907f0cc080693f0e17b81ff044b3ea77e2b38a_prof);

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
/*       <li class="list-group-item">Photo: <img src="{{ asset(parent.user.photo) }}" alt="" /> </li>*/
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
