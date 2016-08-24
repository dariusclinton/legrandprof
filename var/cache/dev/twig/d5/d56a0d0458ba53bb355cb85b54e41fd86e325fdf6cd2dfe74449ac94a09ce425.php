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
        $__internal_d8fb9127163cf02389c270a36d2b9ce4c0033fa074efe618ccd0f9327ce46029 = $this->env->getExtension("native_profiler");
        $__internal_d8fb9127163cf02389c270a36d2b9ce4c0033fa074efe618ccd0f9327ce46029->enter($__internal_d8fb9127163cf02389c270a36d2b9ce4c0033fa074efe618ccd0f9327ce46029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8fb9127163cf02389c270a36d2b9ce4c0033fa074efe618ccd0f9327ce46029->leave($__internal_d8fb9127163cf02389c270a36d2b9ce4c0033fa074efe618ccd0f9327ce46029_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ccae25b6133b5e6ff5bd93f75c82edae42f0cf1cfa029a168ac3245be6510e7 = $this->env->getExtension("native_profiler");
        $__internal_0ccae25b6133b5e6ff5bd93f75c82edae42f0cf1cfa029a168ac3245be6510e7->enter($__internal_0ccae25b6133b5e6ff5bd93f75c82edae42f0cf1cfa029a168ac3245be6510e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_0ccae25b6133b5e6ff5bd93f75c82edae42f0cf1cfa029a168ac3245be6510e7->leave($__internal_0ccae25b6133b5e6ff5bd93f75c82edae42f0cf1cfa029a168ac3245be6510e7_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_5fc3c0bc6bc5832c21d2cf264b765389c20ac538917b367f4001d6159ad2a607 = $this->env->getExtension("native_profiler");
        $__internal_5fc3c0bc6bc5832c21d2cf264b765389c20ac538917b367f4001d6159ad2a607->enter($__internal_5fc3c0bc6bc5832c21d2cf264b765389c20ac538917b367f4001d6159ad2a607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_5fc3c0bc6bc5832c21d2cf264b765389c20ac538917b367f4001d6159ad2a607->leave($__internal_5fc3c0bc6bc5832c21d2cf264b765389c20ac538917b367f4001d6159ad2a607_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebffb0526e280c09c95d7abfd0276366097292be67084f039753a97db9f48eae = $this->env->getExtension("native_profiler");
        $__internal_ebffb0526e280c09c95d7abfd0276366097292be67084f039753a97db9f48eae->enter($__internal_ebffb0526e280c09c95d7abfd0276366097292be67084f039753a97db9f48eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_ebffb0526e280c09c95d7abfd0276366097292be67084f039753a97db9f48eae->leave($__internal_ebffb0526e280c09c95d7abfd0276366097292be67084f039753a97db9f48eae_prof);

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
