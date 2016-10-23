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
        $__internal_1943513ffdf1cbb4bef5b58a9b9a2542373a1efc80b384836784ff3afcbe06dc = $this->env->getExtension("native_profiler");
        $__internal_1943513ffdf1cbb4bef5b58a9b9a2542373a1efc80b384836784ff3afcbe06dc->enter($__internal_1943513ffdf1cbb4bef5b58a9b9a2542373a1efc80b384836784ff3afcbe06dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1943513ffdf1cbb4bef5b58a9b9a2542373a1efc80b384836784ff3afcbe06dc->leave($__internal_1943513ffdf1cbb4bef5b58a9b9a2542373a1efc80b384836784ff3afcbe06dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3f118fd97d8cddade15bb2b81a10c135adba82fbb75a5b66201430083013532 = $this->env->getExtension("native_profiler");
        $__internal_a3f118fd97d8cddade15bb2b81a10c135adba82fbb75a5b66201430083013532->enter($__internal_a3f118fd97d8cddade15bb2b81a10c135adba82fbb75a5b66201430083013532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_a3f118fd97d8cddade15bb2b81a10c135adba82fbb75a5b66201430083013532->leave($__internal_a3f118fd97d8cddade15bb2b81a10c135adba82fbb75a5b66201430083013532_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_9b2e42f50fa23943500d137ed61c42a00fe4b9dce87eab4c05005f804c0ccfa6 = $this->env->getExtension("native_profiler");
        $__internal_9b2e42f50fa23943500d137ed61c42a00fe4b9dce87eab4c05005f804c0ccfa6->enter($__internal_9b2e42f50fa23943500d137ed61c42a00fe4b9dce87eab4c05005f804c0ccfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_9b2e42f50fa23943500d137ed61c42a00fe4b9dce87eab4c05005f804c0ccfa6->leave($__internal_9b2e42f50fa23943500d137ed61c42a00fe4b9dce87eab4c05005f804c0ccfa6_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11205e9cb1d7e193312a4c2b422ce044d93516c75857a12577bc79f99d63bb86 = $this->env->getExtension("native_profiler");
        $__internal_11205e9cb1d7e193312a4c2b422ce044d93516c75857a12577bc79f99d63bb86->enter($__internal_11205e9cb1d7e193312a4c2b422ce044d93516c75857a12577bc79f99d63bb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_11205e9cb1d7e193312a4c2b422ce044d93516c75857a12577bc79f99d63bb86->leave($__internal_11205e9cb1d7e193312a4c2b422ce044d93516c75857a12577bc79f99d63bb86_prof);

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
