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
        $__internal_cf93c0ee7148de57c37745ef0a64399b7a8bdddcc3fa337d3542085b225ced0b = $this->env->getExtension("native_profiler");
        $__internal_cf93c0ee7148de57c37745ef0a64399b7a8bdddcc3fa337d3542085b225ced0b->enter($__internal_cf93c0ee7148de57c37745ef0a64399b7a8bdddcc3fa337d3542085b225ced0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf93c0ee7148de57c37745ef0a64399b7a8bdddcc3fa337d3542085b225ced0b->leave($__internal_cf93c0ee7148de57c37745ef0a64399b7a8bdddcc3fa337d3542085b225ced0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6b7818afcf551458e4e1bfddbd6082eeff6973f1bde467dee2a3eadf89a3086 = $this->env->getExtension("native_profiler");
        $__internal_a6b7818afcf551458e4e1bfddbd6082eeff6973f1bde467dee2a3eadf89a3086->enter($__internal_a6b7818afcf551458e4e1bfddbd6082eeff6973f1bde467dee2a3eadf89a3086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_a6b7818afcf551458e4e1bfddbd6082eeff6973f1bde467dee2a3eadf89a3086->leave($__internal_a6b7818afcf551458e4e1bfddbd6082eeff6973f1bde467dee2a3eadf89a3086_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_f22e1f85e21bcef795573fde1789ea97c82a981c2f1c20811e08df276bf64e64 = $this->env->getExtension("native_profiler");
        $__internal_f22e1f85e21bcef795573fde1789ea97c82a981c2f1c20811e08df276bf64e64->enter($__internal_f22e1f85e21bcef795573fde1789ea97c82a981c2f1c20811e08df276bf64e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_f22e1f85e21bcef795573fde1789ea97c82a981c2f1c20811e08df276bf64e64->leave($__internal_f22e1f85e21bcef795573fde1789ea97c82a981c2f1c20811e08df276bf64e64_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6dd176719e0a4e065ffba92ebf2af952c6e056e805b5799e4ce3ebe5dd786440 = $this->env->getExtension("native_profiler");
        $__internal_6dd176719e0a4e065ffba92ebf2af952c6e056e805b5799e4ce3ebe5dd786440->enter($__internal_6dd176719e0a4e065ffba92ebf2af952c6e056e805b5799e4ce3ebe5dd786440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_6dd176719e0a4e065ffba92ebf2af952c6e056e805b5799e4ce3ebe5dd786440->leave($__internal_6dd176719e0a4e065ffba92ebf2af952c6e056e805b5799e4ce3ebe5dd786440_prof);

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
