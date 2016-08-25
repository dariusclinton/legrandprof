<?php

/* @LGPUser/Parent/profile.html.twig */
class __TwigTemplate_f36f99e20eac6ec305d8c3ae86b817ee395e49e027cb1e0aa640539fdbf7187a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Parent/profile.html.twig", 1);
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
        $__internal_e28244204fdd65a2832c96b0c7a30e83f444a20e7f571b33bdbdce987f31294f = $this->env->getExtension("native_profiler");
        $__internal_e28244204fdd65a2832c96b0c7a30e83f444a20e7f571b33bdbdce987f31294f->enter($__internal_e28244204fdd65a2832c96b0c7a30e83f444a20e7f571b33bdbdce987f31294f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Parent/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e28244204fdd65a2832c96b0c7a30e83f444a20e7f571b33bdbdce987f31294f->leave($__internal_e28244204fdd65a2832c96b0c7a30e83f444a20e7f571b33bdbdce987f31294f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2a1f47f7a803b53c34539f4e754d0bbaa2f2494b786a67c9b37b425247c4f82 = $this->env->getExtension("native_profiler");
        $__internal_a2a1f47f7a803b53c34539f4e754d0bbaa2f2494b786a67c9b37b425247c4f82->enter($__internal_a2a1f47f7a803b53c34539f4e754d0bbaa2f2494b786a67c9b37b425247c4f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a2a1f47f7a803b53c34539f4e754d0bbaa2f2494b786a67c9b37b425247c4f82->leave($__internal_a2a1f47f7a803b53c34539f4e754d0bbaa2f2494b786a67c9b37b425247c4f82_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_16b8b082571a887d07c04e7f4e696b0227d862a2807e4d7835a388be51b84db0 = $this->env->getExtension("native_profiler");
        $__internal_16b8b082571a887d07c04e7f4e696b0227d862a2807e4d7835a388be51b84db0->enter($__internal_16b8b082571a887d07c04e7f4e696b0227d862a2807e4d7835a388be51b84db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_16b8b082571a887d07c04e7f4e696b0227d862a2807e4d7835a388be51b84db0->leave($__internal_16b8b082571a887d07c04e7f4e696b0227d862a2807e4d7835a388be51b84db0_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Parent/profile.html.twig";
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
