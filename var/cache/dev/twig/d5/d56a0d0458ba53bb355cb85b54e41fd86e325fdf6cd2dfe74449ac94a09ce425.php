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
        $__internal_9960f0b6a9a739bb91cfab0dba135b34f7a6c5fd599a7750aeef5d5fa4b7bf1f = $this->env->getExtension("native_profiler");
        $__internal_9960f0b6a9a739bb91cfab0dba135b34f7a6c5fd599a7750aeef5d5fa4b7bf1f->enter($__internal_9960f0b6a9a739bb91cfab0dba135b34f7a6c5fd599a7750aeef5d5fa4b7bf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9960f0b6a9a739bb91cfab0dba135b34f7a6c5fd599a7750aeef5d5fa4b7bf1f->leave($__internal_9960f0b6a9a739bb91cfab0dba135b34f7a6c5fd599a7750aeef5d5fa4b7bf1f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e596ee94d8434e60533e83ef1bfb82823609882021c976e6cfb9ea6cd46ec3c0 = $this->env->getExtension("native_profiler");
        $__internal_e596ee94d8434e60533e83ef1bfb82823609882021c976e6cfb9ea6cd46ec3c0->enter($__internal_e596ee94d8434e60533e83ef1bfb82823609882021c976e6cfb9ea6cd46ec3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_e596ee94d8434e60533e83ef1bfb82823609882021c976e6cfb9ea6cd46ec3c0->leave($__internal_e596ee94d8434e60533e83ef1bfb82823609882021c976e6cfb9ea6cd46ec3c0_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_8201d676726c30457dd7071171bce32f5d37d197c78d90e475874a95bea2a603 = $this->env->getExtension("native_profiler");
        $__internal_8201d676726c30457dd7071171bce32f5d37d197c78d90e475874a95bea2a603->enter($__internal_8201d676726c30457dd7071171bce32f5d37d197c78d90e475874a95bea2a603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_8201d676726c30457dd7071171bce32f5d37d197c78d90e475874a95bea2a603->leave($__internal_8201d676726c30457dd7071171bce32f5d37d197c78d90e475874a95bea2a603_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14d45f8f088db5a7b8a85dd7d82a1ea7b49d78eda2d9bc4c76e634e369909fd1 = $this->env->getExtension("native_profiler");
        $__internal_14d45f8f088db5a7b8a85dd7d82a1ea7b49d78eda2d9bc4c76e634e369909fd1->enter($__internal_14d45f8f088db5a7b8a85dd7d82a1ea7b49d78eda2d9bc4c76e634e369909fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_14d45f8f088db5a7b8a85dd7d82a1ea7b49d78eda2d9bc4c76e634e369909fd1->leave($__internal_14d45f8f088db5a7b8a85dd7d82a1ea7b49d78eda2d9bc4c76e634e369909fd1_prof);

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
