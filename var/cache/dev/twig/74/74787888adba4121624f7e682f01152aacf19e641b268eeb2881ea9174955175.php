<?php

/* LGPUserBundle:Prof:profile.html.twig */
class __TwigTemplate_4805bc4bbb2c594eff6c2174ab7b9f5a46902e34e0efa2fbee6d07a225c6e67f extends Twig_Template
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
        $__internal_e09ba966b44025ad0e5604ba61178550f6238b46ec4b7e2a01df444c7d9ce7ac = $this->env->getExtension("native_profiler");
        $__internal_e09ba966b44025ad0e5604ba61178550f6238b46ec4b7e2a01df444c7d9ce7ac->enter($__internal_e09ba966b44025ad0e5604ba61178550f6238b46ec4b7e2a01df444c7d9ce7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Prof:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e09ba966b44025ad0e5604ba61178550f6238b46ec4b7e2a01df444c7d9ce7ac->leave($__internal_e09ba966b44025ad0e5604ba61178550f6238b46ec4b7e2a01df444c7d9ce7ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2dfadd4d5773a9b67d58800e1b41a9155f120e1d194e73e0e8d7c492b4bebe8 = $this->env->getExtension("native_profiler");
        $__internal_b2dfadd4d5773a9b67d58800e1b41a9155f120e1d194e73e0e8d7c492b4bebe8->enter($__internal_b2dfadd4d5773a9b67d58800e1b41a9155f120e1d194e73e0e8d7c492b4bebe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b2dfadd4d5773a9b67d58800e1b41a9155f120e1d194e73e0e8d7c492b4bebe8->leave($__internal_b2dfadd4d5773a9b67d58800e1b41a9155f120e1d194e73e0e8d7c492b4bebe8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0d3be266f95c03f25272e9674f0bb652d24a70ced7d8a1c24f944c34ef708e0 = $this->env->getExtension("native_profiler");
        $__internal_e0d3be266f95c03f25272e9674f0bb652d24a70ced7d8a1c24f944c34ef708e0->enter($__internal_e0d3be266f95c03f25272e9674f0bb652d24a70ced7d8a1c24f944c34ef708e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <div class=\"row\">
    <ul class=\"list-group\">
      <li class=\"list-group-item\">Photo: <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "user", array()), "photo", array()))), "html", null, true);
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
        
        $__internal_e0d3be266f95c03f25272e9674f0bb652d24a70ced7d8a1c24f944c34ef708e0->leave($__internal_e0d3be266f95c03f25272e9674f0bb652d24a70ced7d8a1c24f944c34ef708e0_prof);

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
/*       <li class="list-group-item">Photo: <img src="{{ asset('uploads/images/' ~ prof.user.photo) }}" alt="" /> </li>*/
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
