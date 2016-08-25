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
        $__internal_c5c367be4e94d24962c61fab083fd6ba681ccdf713e10b459857d34f6c0f1634 = $this->env->getExtension("native_profiler");
        $__internal_c5c367be4e94d24962c61fab083fd6ba681ccdf713e10b459857d34f6c0f1634->enter($__internal_c5c367be4e94d24962c61fab083fd6ba681ccdf713e10b459857d34f6c0f1634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Parent:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5c367be4e94d24962c61fab083fd6ba681ccdf713e10b459857d34f6c0f1634->leave($__internal_c5c367be4e94d24962c61fab083fd6ba681ccdf713e10b459857d34f6c0f1634_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5577e6d609101edb9edb11b9558b2df7d9da3c508ec6e949f69cad8464d3df4c = $this->env->getExtension("native_profiler");
        $__internal_5577e6d609101edb9edb11b9558b2df7d9da3c508ec6e949f69cad8464d3df4c->enter($__internal_5577e6d609101edb9edb11b9558b2df7d9da3c508ec6e949f69cad8464d3df4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5577e6d609101edb9edb11b9558b2df7d9da3c508ec6e949f69cad8464d3df4c->leave($__internal_5577e6d609101edb9edb11b9558b2df7d9da3c508ec6e949f69cad8464d3df4c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_049fe923b86f8ffff766cdbe2f5c3998259a136c5e868fabcbdc6dedd0de88a9 = $this->env->getExtension("native_profiler");
        $__internal_049fe923b86f8ffff766cdbe2f5c3998259a136c5e868fabcbdc6dedd0de88a9->enter($__internal_049fe923b86f8ffff766cdbe2f5c3998259a136c5e868fabcbdc6dedd0de88a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_049fe923b86f8ffff766cdbe2f5c3998259a136c5e868fabcbdc6dedd0de88a9->leave($__internal_049fe923b86f8ffff766cdbe2f5c3998259a136c5e868fabcbdc6dedd0de88a9_prof);

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
