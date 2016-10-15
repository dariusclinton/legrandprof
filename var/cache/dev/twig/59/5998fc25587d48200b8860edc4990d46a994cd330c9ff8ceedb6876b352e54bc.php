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
        $__internal_1beb6b384478762e2820f953175f17818990df4be75f31767046ef68b9cdc0aa = $this->env->getExtension("native_profiler");
        $__internal_1beb6b384478762e2820f953175f17818990df4be75f31767046ef68b9cdc0aa->enter($__internal_1beb6b384478762e2820f953175f17818990df4be75f31767046ef68b9cdc0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1beb6b384478762e2820f953175f17818990df4be75f31767046ef68b9cdc0aa->leave($__internal_1beb6b384478762e2820f953175f17818990df4be75f31767046ef68b9cdc0aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46d333950567c09c07bed292007072b0fd295831ce9e1d867a9c38aae472fdae = $this->env->getExtension("native_profiler");
        $__internal_46d333950567c09c07bed292007072b0fd295831ce9e1d867a9c38aae472fdae->enter($__internal_46d333950567c09c07bed292007072b0fd295831ce9e1d867a9c38aae472fdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_46d333950567c09c07bed292007072b0fd295831ce9e1d867a9c38aae472fdae->leave($__internal_46d333950567c09c07bed292007072b0fd295831ce9e1d867a9c38aae472fdae_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_1a88484cc86d2d4f6ab96bb0a7cbb5d44785580457b872c662c5a846c7e8d54d = $this->env->getExtension("native_profiler");
        $__internal_1a88484cc86d2d4f6ab96bb0a7cbb5d44785580457b872c662c5a846c7e8d54d->enter($__internal_1a88484cc86d2d4f6ab96bb0a7cbb5d44785580457b872c662c5a846c7e8d54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_1a88484cc86d2d4f6ab96bb0a7cbb5d44785580457b872c662c5a846c7e8d54d->leave($__internal_1a88484cc86d2d4f6ab96bb0a7cbb5d44785580457b872c662c5a846c7e8d54d_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e5508f9e50a81fddfcb1552f768f6868ae5bddefd58e82b6d9ba1755c1420b6 = $this->env->getExtension("native_profiler");
        $__internal_0e5508f9e50a81fddfcb1552f768f6868ae5bddefd58e82b6d9ba1755c1420b6->enter($__internal_0e5508f9e50a81fddfcb1552f768f6868ae5bddefd58e82b6d9ba1755c1420b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_0e5508f9e50a81fddfcb1552f768f6868ae5bddefd58e82b6d9ba1755c1420b6->leave($__internal_0e5508f9e50a81fddfcb1552f768f6868ae5bddefd58e82b6d9ba1755c1420b6_prof);

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
