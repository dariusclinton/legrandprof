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
        $__internal_5a2fdd47c51d2c1b9b44e733e5e9efe83bd15366b5c739d13b367373eea7884d = $this->env->getExtension("native_profiler");
        $__internal_5a2fdd47c51d2c1b9b44e733e5e9efe83bd15366b5c739d13b367373eea7884d->enter($__internal_5a2fdd47c51d2c1b9b44e733e5e9efe83bd15366b5c739d13b367373eea7884d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a2fdd47c51d2c1b9b44e733e5e9efe83bd15366b5c739d13b367373eea7884d->leave($__internal_5a2fdd47c51d2c1b9b44e733e5e9efe83bd15366b5c739d13b367373eea7884d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc872a1e6e9410722f142ec7277d1d7203d7c0a03b4d5f9adfc1d5ba433ac2c3 = $this->env->getExtension("native_profiler");
        $__internal_cc872a1e6e9410722f142ec7277d1d7203d7c0a03b4d5f9adfc1d5ba433ac2c3->enter($__internal_cc872a1e6e9410722f142ec7277d1d7203d7c0a03b4d5f9adfc1d5ba433ac2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_cc872a1e6e9410722f142ec7277d1d7203d7c0a03b4d5f9adfc1d5ba433ac2c3->leave($__internal_cc872a1e6e9410722f142ec7277d1d7203d7c0a03b4d5f9adfc1d5ba433ac2c3_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_1d286e4000cd27970023626813388252be10a6b4a6a413c401de472116587249 = $this->env->getExtension("native_profiler");
        $__internal_1d286e4000cd27970023626813388252be10a6b4a6a413c401de472116587249->enter($__internal_1d286e4000cd27970023626813388252be10a6b4a6a413c401de472116587249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_1d286e4000cd27970023626813388252be10a6b4a6a413c401de472116587249->leave($__internal_1d286e4000cd27970023626813388252be10a6b4a6a413c401de472116587249_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d591e764e7805c8fe0ec55af61b6134f4b470dfe764ca3802e9d70803483bda6 = $this->env->getExtension("native_profiler");
        $__internal_d591e764e7805c8fe0ec55af61b6134f4b470dfe764ca3802e9d70803483bda6->enter($__internal_d591e764e7805c8fe0ec55af61b6134f4b470dfe764ca3802e9d70803483bda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_d591e764e7805c8fe0ec55af61b6134f4b470dfe764ca3802e9d70803483bda6->leave($__internal_d591e764e7805c8fe0ec55af61b6134f4b470dfe764ca3802e9d70803483bda6_prof);

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
