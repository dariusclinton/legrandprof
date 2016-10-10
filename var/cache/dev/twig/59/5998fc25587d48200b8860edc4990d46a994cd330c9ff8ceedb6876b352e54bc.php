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
        $__internal_8faab46bcd5807e2c8781e79934973f57263f74739315be6639473d0287ff3ce = $this->env->getExtension("native_profiler");
        $__internal_8faab46bcd5807e2c8781e79934973f57263f74739315be6639473d0287ff3ce->enter($__internal_8faab46bcd5807e2c8781e79934973f57263f74739315be6639473d0287ff3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8faab46bcd5807e2c8781e79934973f57263f74739315be6639473d0287ff3ce->leave($__internal_8faab46bcd5807e2c8781e79934973f57263f74739315be6639473d0287ff3ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d80f37ebe5f82a81aa5040f9d639972b4ff1a0b6883bb7a0cfed83e4639281af = $this->env->getExtension("native_profiler");
        $__internal_d80f37ebe5f82a81aa5040f9d639972b4ff1a0b6883bb7a0cfed83e4639281af->enter($__internal_d80f37ebe5f82a81aa5040f9d639972b4ff1a0b6883bb7a0cfed83e4639281af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_d80f37ebe5f82a81aa5040f9d639972b4ff1a0b6883bb7a0cfed83e4639281af->leave($__internal_d80f37ebe5f82a81aa5040f9d639972b4ff1a0b6883bb7a0cfed83e4639281af_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_fd16ea2afbd33742d9946a3fe8d39c9bcab5e65f0da2f6ef38c3354a13260d44 = $this->env->getExtension("native_profiler");
        $__internal_fd16ea2afbd33742d9946a3fe8d39c9bcab5e65f0da2f6ef38c3354a13260d44->enter($__internal_fd16ea2afbd33742d9946a3fe8d39c9bcab5e65f0da2f6ef38c3354a13260d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_fd16ea2afbd33742d9946a3fe8d39c9bcab5e65f0da2f6ef38c3354a13260d44->leave($__internal_fd16ea2afbd33742d9946a3fe8d39c9bcab5e65f0da2f6ef38c3354a13260d44_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f5b7d6d0ffbfd67a7381b80d62f9e681470248e31733a629a70f49a9151a9a3 = $this->env->getExtension("native_profiler");
        $__internal_4f5b7d6d0ffbfd67a7381b80d62f9e681470248e31733a629a70f49a9151a9a3->enter($__internal_4f5b7d6d0ffbfd67a7381b80d62f9e681470248e31733a629a70f49a9151a9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_4f5b7d6d0ffbfd67a7381b80d62f9e681470248e31733a629a70f49a9151a9a3->leave($__internal_4f5b7d6d0ffbfd67a7381b80d62f9e681470248e31733a629a70f49a9151a9a3_prof);

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
