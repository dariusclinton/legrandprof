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
        $__internal_bf6fb3bc37460476cb5d7ca69da63991e8969b478eb2b851bb99f40433b7c7d8 = $this->env->getExtension("native_profiler");
        $__internal_bf6fb3bc37460476cb5d7ca69da63991e8969b478eb2b851bb99f40433b7c7d8->enter($__internal_bf6fb3bc37460476cb5d7ca69da63991e8969b478eb2b851bb99f40433b7c7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf6fb3bc37460476cb5d7ca69da63991e8969b478eb2b851bb99f40433b7c7d8->leave($__internal_bf6fb3bc37460476cb5d7ca69da63991e8969b478eb2b851bb99f40433b7c7d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_022c9832dc3c4266a5ad81c3b2d9bc4e601ec2f8f25d3a4da644e6cedf41f14e = $this->env->getExtension("native_profiler");
        $__internal_022c9832dc3c4266a5ad81c3b2d9bc4e601ec2f8f25d3a4da644e6cedf41f14e->enter($__internal_022c9832dc3c4266a5ad81c3b2d9bc4e601ec2f8f25d3a4da644e6cedf41f14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_022c9832dc3c4266a5ad81c3b2d9bc4e601ec2f8f25d3a4da644e6cedf41f14e->leave($__internal_022c9832dc3c4266a5ad81c3b2d9bc4e601ec2f8f25d3a4da644e6cedf41f14e_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_2e05df560d7dc917fe89f6ffed40be6c1da6035ffe90da08b76c04671742917f = $this->env->getExtension("native_profiler");
        $__internal_2e05df560d7dc917fe89f6ffed40be6c1da6035ffe90da08b76c04671742917f->enter($__internal_2e05df560d7dc917fe89f6ffed40be6c1da6035ffe90da08b76c04671742917f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_2e05df560d7dc917fe89f6ffed40be6c1da6035ffe90da08b76c04671742917f->leave($__internal_2e05df560d7dc917fe89f6ffed40be6c1da6035ffe90da08b76c04671742917f_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c627f80322ae3b633978f61aa62eef9eeac85f8b32d42c57fa78b5872c1cb306 = $this->env->getExtension("native_profiler");
        $__internal_c627f80322ae3b633978f61aa62eef9eeac85f8b32d42c57fa78b5872c1cb306->enter($__internal_c627f80322ae3b633978f61aa62eef9eeac85f8b32d42c57fa78b5872c1cb306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_c627f80322ae3b633978f61aa62eef9eeac85f8b32d42c57fa78b5872c1cb306->leave($__internal_c627f80322ae3b633978f61aa62eef9eeac85f8b32d42c57fa78b5872c1cb306_prof);

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
