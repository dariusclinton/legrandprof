<?php

/* @LGPUser/Profile/show.html.twig */
class __TwigTemplate_a5f8413eda7573d3f30913d1076d736bc729b89d8f3951e8d6b1d76b85360962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Profile/show.html.twig", 1);
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
        $__internal_01f14aeb9daecac47702bc3a142f142cedc971a65a5f8ecca00f225563e9a4f4 = $this->env->getExtension("native_profiler");
        $__internal_01f14aeb9daecac47702bc3a142f142cedc971a65a5f8ecca00f225563e9a4f4->enter($__internal_01f14aeb9daecac47702bc3a142f142cedc971a65a5f8ecca00f225563e9a4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01f14aeb9daecac47702bc3a142f142cedc971a65a5f8ecca00f225563e9a4f4->leave($__internal_01f14aeb9daecac47702bc3a142f142cedc971a65a5f8ecca00f225563e9a4f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_917c062ccd77187cdd0d42f7ed3b9a0c74351088f723d37daefd5d407192b783 = $this->env->getExtension("native_profiler");
        $__internal_917c062ccd77187cdd0d42f7ed3b9a0c74351088f723d37daefd5d407192b783->enter($__internal_917c062ccd77187cdd0d42f7ed3b9a0c74351088f723d37daefd5d407192b783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_917c062ccd77187cdd0d42f7ed3b9a0c74351088f723d37daefd5d407192b783->leave($__internal_917c062ccd77187cdd0d42f7ed3b9a0c74351088f723d37daefd5d407192b783_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_9ee1092148fa9a9fc0b244fa6112859064ca9d09a3af348a8df7e90278af31cb = $this->env->getExtension("native_profiler");
        $__internal_9ee1092148fa9a9fc0b244fa6112859064ca9d09a3af348a8df7e90278af31cb->enter($__internal_9ee1092148fa9a9fc0b244fa6112859064ca9d09a3af348a8df7e90278af31cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_9ee1092148fa9a9fc0b244fa6112859064ca9d09a3af348a8df7e90278af31cb->leave($__internal_9ee1092148fa9a9fc0b244fa6112859064ca9d09a3af348a8df7e90278af31cb_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63162a23965a9b798138d53de36f97af2b923f4e9b76271f16312fc17cc54327 = $this->env->getExtension("native_profiler");
        $__internal_63162a23965a9b798138d53de36f97af2b923f4e9b76271f16312fc17cc54327->enter($__internal_63162a23965a9b798138d53de36f97af2b923f4e9b76271f16312fc17cc54327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_63162a23965a9b798138d53de36f97af2b923f4e9b76271f16312fc17cc54327->leave($__internal_63162a23965a9b798138d53de36f97af2b923f4e9b76271f16312fc17cc54327_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  82 => 13,  73 => 11,  64 => 8,  56 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ app.user.prenoms }} {{ app.user.nom }} - {{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block header_submenu %} */
/*     {{ include('LGPCoreBundle::header-submenu.html.twig') }}*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}    */
/*     <div class="bg-grey dashboard">*/
/*         {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
