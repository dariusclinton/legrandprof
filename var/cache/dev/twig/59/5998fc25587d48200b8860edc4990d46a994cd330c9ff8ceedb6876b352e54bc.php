<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_4e9388e47a351ec26429461ab99f3f6c97b7e94d2628279a1b59d02c9d8f356c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f6dcbb8fd34e11fd31e76f9935684950d5a5758e7fe1aedcdb61bce61186020 = $this->env->getExtension("native_profiler");
        $__internal_2f6dcbb8fd34e11fd31e76f9935684950d5a5758e7fe1aedcdb61bce61186020->enter($__internal_2f6dcbb8fd34e11fd31e76f9935684950d5a5758e7fe1aedcdb61bce61186020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f6dcbb8fd34e11fd31e76f9935684950d5a5758e7fe1aedcdb61bce61186020->leave($__internal_2f6dcbb8fd34e11fd31e76f9935684950d5a5758e7fe1aedcdb61bce61186020_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99d6406487c4443c7fb0c91141ee53f07b8605c0d4e77bead649c487145be2e0 = $this->env->getExtension("native_profiler");
        $__internal_99d6406487c4443c7fb0c91141ee53f07b8605c0d4e77bead649c487145be2e0->enter($__internal_99d6406487c4443c7fb0c91141ee53f07b8605c0d4e77bead649c487145be2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_99d6406487c4443c7fb0c91141ee53f07b8605c0d4e77bead649c487145be2e0->leave($__internal_99d6406487c4443c7fb0c91141ee53f07b8605c0d4e77bead649c487145be2e0_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_22fa256b46754e06ecebd0f1340b9666c671e7a376278769b03e298576a1c188 = $this->env->getExtension("native_profiler");
        $__internal_22fa256b46754e06ecebd0f1340b9666c671e7a376278769b03e298576a1c188->enter($__internal_22fa256b46754e06ecebd0f1340b9666c671e7a376278769b03e298576a1c188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_22fa256b46754e06ecebd0f1340b9666c671e7a376278769b03e298576a1c188->leave($__internal_22fa256b46754e06ecebd0f1340b9666c671e7a376278769b03e298576a1c188_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0363570b661a8beac3ef774f90fe8a673bcf42f29af218805919bbcaae7f81fa = $this->env->getExtension("native_profiler");
        $__internal_0363570b661a8beac3ef774f90fe8a673bcf42f29af218805919bbcaae7f81fa->enter($__internal_0363570b661a8beac3ef774f90fe8a673bcf42f29af218805919bbcaae7f81fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_0363570b661a8beac3ef774f90fe8a673bcf42f29af218805919bbcaae7f81fa->leave($__internal_0363570b661a8beac3ef774f90fe8a673bcf42f29af218805919bbcaae7f81fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  82 => 13,  73 => 11,  64 => 8,  56 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block title %}
  {{ app.user.prenoms }} {{ app.user.nom }} - {{ parent() }} 
{% endblock %}

{% block header_submenu %} 
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block fos_user_content %}    
  <div class=\"bg-grey dashboard\">
    {% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
  </div>
{% endblock fos_user_content %}";
    }
}
