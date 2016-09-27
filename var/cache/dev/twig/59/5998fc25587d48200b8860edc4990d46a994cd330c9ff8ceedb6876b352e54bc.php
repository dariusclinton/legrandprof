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
        $__internal_b4098dbf0ac854e05751cd14f3051fe47534123597ac091c89b2a07b74f989b2 = $this->env->getExtension("native_profiler");
        $__internal_b4098dbf0ac854e05751cd14f3051fe47534123597ac091c89b2a07b74f989b2->enter($__internal_b4098dbf0ac854e05751cd14f3051fe47534123597ac091c89b2a07b74f989b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4098dbf0ac854e05751cd14f3051fe47534123597ac091c89b2a07b74f989b2->leave($__internal_b4098dbf0ac854e05751cd14f3051fe47534123597ac091c89b2a07b74f989b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_800e66bd7ff82997f5fbcae7f46fddb1d8bbe4ffbebca32d320c3ab4089ace93 = $this->env->getExtension("native_profiler");
        $__internal_800e66bd7ff82997f5fbcae7f46fddb1d8bbe4ffbebca32d320c3ab4089ace93->enter($__internal_800e66bd7ff82997f5fbcae7f46fddb1d8bbe4ffbebca32d320c3ab4089ace93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_800e66bd7ff82997f5fbcae7f46fddb1d8bbe4ffbebca32d320c3ab4089ace93->leave($__internal_800e66bd7ff82997f5fbcae7f46fddb1d8bbe4ffbebca32d320c3ab4089ace93_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_3ee51c7dd62475f966b532f9605112ecc4ca49225f11d849bcef77496dec11b9 = $this->env->getExtension("native_profiler");
        $__internal_3ee51c7dd62475f966b532f9605112ecc4ca49225f11d849bcef77496dec11b9->enter($__internal_3ee51c7dd62475f966b532f9605112ecc4ca49225f11d849bcef77496dec11b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_3ee51c7dd62475f966b532f9605112ecc4ca49225f11d849bcef77496dec11b9->leave($__internal_3ee51c7dd62475f966b532f9605112ecc4ca49225f11d849bcef77496dec11b9_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_938b6d681b6decde58f3cb96c90faaed42ae61a29626569101c17e70a8a0bd44 = $this->env->getExtension("native_profiler");
        $__internal_938b6d681b6decde58f3cb96c90faaed42ae61a29626569101c17e70a8a0bd44->enter($__internal_938b6d681b6decde58f3cb96c90faaed42ae61a29626569101c17e70a8a0bd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_938b6d681b6decde58f3cb96c90faaed42ae61a29626569101c17e70a8a0bd44->leave($__internal_938b6d681b6decde58f3cb96c90faaed42ae61a29626569101c17e70a8a0bd44_prof);

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
