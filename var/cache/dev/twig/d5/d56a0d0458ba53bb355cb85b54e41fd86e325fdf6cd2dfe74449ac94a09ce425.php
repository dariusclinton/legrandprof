<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6e659f441b0be411675991e045c89a537eed53cca390353003cc4a11f1e14ba3 extends Twig_Template
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
        $__internal_a7c68832c8313f5b9735c9b4a7d56c7bf6f192022c1f9a71d8557aa84b17c74b = $this->env->getExtension("native_profiler");
        $__internal_a7c68832c8313f5b9735c9b4a7d56c7bf6f192022c1f9a71d8557aa84b17c74b->enter($__internal_a7c68832c8313f5b9735c9b4a7d56c7bf6f192022c1f9a71d8557aa84b17c74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7c68832c8313f5b9735c9b4a7d56c7bf6f192022c1f9a71d8557aa84b17c74b->leave($__internal_a7c68832c8313f5b9735c9b4a7d56c7bf6f192022c1f9a71d8557aa84b17c74b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85dcb0a7a42ce11dd10be159797e3d2cc2cd0d9d8bd5404610d88ea381547b0c = $this->env->getExtension("native_profiler");
        $__internal_85dcb0a7a42ce11dd10be159797e3d2cc2cd0d9d8bd5404610d88ea381547b0c->enter($__internal_85dcb0a7a42ce11dd10be159797e3d2cc2cd0d9d8bd5404610d88ea381547b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_85dcb0a7a42ce11dd10be159797e3d2cc2cd0d9d8bd5404610d88ea381547b0c->leave($__internal_85dcb0a7a42ce11dd10be159797e3d2cc2cd0d9d8bd5404610d88ea381547b0c_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_1d4ba8fed7c44bd4f300b9c97ced35813f687f598f0aaf7962a998b89bc3a990 = $this->env->getExtension("native_profiler");
        $__internal_1d4ba8fed7c44bd4f300b9c97ced35813f687f598f0aaf7962a998b89bc3a990->enter($__internal_1d4ba8fed7c44bd4f300b9c97ced35813f687f598f0aaf7962a998b89bc3a990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_1d4ba8fed7c44bd4f300b9c97ced35813f687f598f0aaf7962a998b89bc3a990->leave($__internal_1d4ba8fed7c44bd4f300b9c97ced35813f687f598f0aaf7962a998b89bc3a990_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea5804d354d2fd7c26491b2405894be1209c407fe32626d454c66666a0de4904 = $this->env->getExtension("native_profiler");
        $__internal_ea5804d354d2fd7c26491b2405894be1209c407fe32626d454c66666a0de4904->enter($__internal_ea5804d354d2fd7c26491b2405894be1209c407fe32626d454c66666a0de4904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_ea5804d354d2fd7c26491b2405894be1209c407fe32626d454c66666a0de4904->leave($__internal_ea5804d354d2fd7c26491b2405894be1209c407fe32626d454c66666a0de4904_prof);

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
