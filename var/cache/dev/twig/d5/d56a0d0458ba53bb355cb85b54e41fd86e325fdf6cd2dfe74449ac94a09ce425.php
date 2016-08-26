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
        $__internal_fcfbcf9aeaa53d25d6fdff4ba4286ecc4ee750e4b58aac1663d588e14d0fe169 = $this->env->getExtension("native_profiler");
        $__internal_fcfbcf9aeaa53d25d6fdff4ba4286ecc4ee750e4b58aac1663d588e14d0fe169->enter($__internal_fcfbcf9aeaa53d25d6fdff4ba4286ecc4ee750e4b58aac1663d588e14d0fe169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcfbcf9aeaa53d25d6fdff4ba4286ecc4ee750e4b58aac1663d588e14d0fe169->leave($__internal_fcfbcf9aeaa53d25d6fdff4ba4286ecc4ee750e4b58aac1663d588e14d0fe169_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ce98a7d2a3ed4d708396aec9cb891561e1d0c4ea275cd967c01b225900fe3c0 = $this->env->getExtension("native_profiler");
        $__internal_0ce98a7d2a3ed4d708396aec9cb891561e1d0c4ea275cd967c01b225900fe3c0->enter($__internal_0ce98a7d2a3ed4d708396aec9cb891561e1d0c4ea275cd967c01b225900fe3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_0ce98a7d2a3ed4d708396aec9cb891561e1d0c4ea275cd967c01b225900fe3c0->leave($__internal_0ce98a7d2a3ed4d708396aec9cb891561e1d0c4ea275cd967c01b225900fe3c0_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_e46987cc6aa81f0a44cb9ed2235ed66bfbd5879771730c31b2a5e7ab8fe193e0 = $this->env->getExtension("native_profiler");
        $__internal_e46987cc6aa81f0a44cb9ed2235ed66bfbd5879771730c31b2a5e7ab8fe193e0->enter($__internal_e46987cc6aa81f0a44cb9ed2235ed66bfbd5879771730c31b2a5e7ab8fe193e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_e46987cc6aa81f0a44cb9ed2235ed66bfbd5879771730c31b2a5e7ab8fe193e0->leave($__internal_e46987cc6aa81f0a44cb9ed2235ed66bfbd5879771730c31b2a5e7ab8fe193e0_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de198d2e7c15c32d0de7b041eb341d2b5c39f7f16e91252f7917a00de4066b48 = $this->env->getExtension("native_profiler");
        $__internal_de198d2e7c15c32d0de7b041eb341d2b5c39f7f16e91252f7917a00de4066b48->enter($__internal_de198d2e7c15c32d0de7b041eb341d2b5c39f7f16e91252f7917a00de4066b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_de198d2e7c15c32d0de7b041eb341d2b5c39f7f16e91252f7917a00de4066b48->leave($__internal_de198d2e7c15c32d0de7b041eb341d2b5c39f7f16e91252f7917a00de4066b48_prof);

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
