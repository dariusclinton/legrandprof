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
        $__internal_3a3120c9b95371febff8762babf652d82ef492ed914b541708e1067b1f96cfd8 = $this->env->getExtension("native_profiler");
        $__internal_3a3120c9b95371febff8762babf652d82ef492ed914b541708e1067b1f96cfd8->enter($__internal_3a3120c9b95371febff8762babf652d82ef492ed914b541708e1067b1f96cfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a3120c9b95371febff8762babf652d82ef492ed914b541708e1067b1f96cfd8->leave($__internal_3a3120c9b95371febff8762babf652d82ef492ed914b541708e1067b1f96cfd8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7ac188c0208034b4975d9a0a030926fdec5fb4f54f4807a84839a9328a0a826 = $this->env->getExtension("native_profiler");
        $__internal_d7ac188c0208034b4975d9a0a030926fdec5fb4f54f4807a84839a9328a0a826->enter($__internal_d7ac188c0208034b4975d9a0a030926fdec5fb4f54f4807a84839a9328a0a826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_d7ac188c0208034b4975d9a0a030926fdec5fb4f54f4807a84839a9328a0a826->leave($__internal_d7ac188c0208034b4975d9a0a030926fdec5fb4f54f4807a84839a9328a0a826_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_ed3cee12e108649c5fe78efa4bde65e390d4c4b66767403448161fd40451e605 = $this->env->getExtension("native_profiler");
        $__internal_ed3cee12e108649c5fe78efa4bde65e390d4c4b66767403448161fd40451e605->enter($__internal_ed3cee12e108649c5fe78efa4bde65e390d4c4b66767403448161fd40451e605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_ed3cee12e108649c5fe78efa4bde65e390d4c4b66767403448161fd40451e605->leave($__internal_ed3cee12e108649c5fe78efa4bde65e390d4c4b66767403448161fd40451e605_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60a87dc21226749bc4148bba0e1d674852647e4fe41fa11366fe98644d4ecee8 = $this->env->getExtension("native_profiler");
        $__internal_60a87dc21226749bc4148bba0e1d674852647e4fe41fa11366fe98644d4ecee8->enter($__internal_60a87dc21226749bc4148bba0e1d674852647e4fe41fa11366fe98644d4ecee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_60a87dc21226749bc4148bba0e1d674852647e4fe41fa11366fe98644d4ecee8->leave($__internal_60a87dc21226749bc4148bba0e1d674852647e4fe41fa11366fe98644d4ecee8_prof);

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
