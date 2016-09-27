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
        $__internal_322b9b485c377ecfe372a0faf1e55eb9b03ca3dc1556886acd15a23c144a393e = $this->env->getExtension("native_profiler");
        $__internal_322b9b485c377ecfe372a0faf1e55eb9b03ca3dc1556886acd15a23c144a393e->enter($__internal_322b9b485c377ecfe372a0faf1e55eb9b03ca3dc1556886acd15a23c144a393e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_322b9b485c377ecfe372a0faf1e55eb9b03ca3dc1556886acd15a23c144a393e->leave($__internal_322b9b485c377ecfe372a0faf1e55eb9b03ca3dc1556886acd15a23c144a393e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2801dec8ce620f51ccaf67a3e702edf976fe94a8dc9738568ddbcb0f508b796 = $this->env->getExtension("native_profiler");
        $__internal_e2801dec8ce620f51ccaf67a3e702edf976fe94a8dc9738568ddbcb0f508b796->enter($__internal_e2801dec8ce620f51ccaf67a3e702edf976fe94a8dc9738568ddbcb0f508b796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_e2801dec8ce620f51ccaf67a3e702edf976fe94a8dc9738568ddbcb0f508b796->leave($__internal_e2801dec8ce620f51ccaf67a3e702edf976fe94a8dc9738568ddbcb0f508b796_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_e7c533073d87f6d1b1661a5778c18862a12de887474a1c032fdd79e79d23447e = $this->env->getExtension("native_profiler");
        $__internal_e7c533073d87f6d1b1661a5778c18862a12de887474a1c032fdd79e79d23447e->enter($__internal_e7c533073d87f6d1b1661a5778c18862a12de887474a1c032fdd79e79d23447e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_e7c533073d87f6d1b1661a5778c18862a12de887474a1c032fdd79e79d23447e->leave($__internal_e7c533073d87f6d1b1661a5778c18862a12de887474a1c032fdd79e79d23447e_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9d4645132ab5945e224c46bf46fde8bd374266db6984b45348e26e85dbc7108 = $this->env->getExtension("native_profiler");
        $__internal_c9d4645132ab5945e224c46bf46fde8bd374266db6984b45348e26e85dbc7108->enter($__internal_c9d4645132ab5945e224c46bf46fde8bd374266db6984b45348e26e85dbc7108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_c9d4645132ab5945e224c46bf46fde8bd374266db6984b45348e26e85dbc7108->leave($__internal_c9d4645132ab5945e224c46bf46fde8bd374266db6984b45348e26e85dbc7108_prof);

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
