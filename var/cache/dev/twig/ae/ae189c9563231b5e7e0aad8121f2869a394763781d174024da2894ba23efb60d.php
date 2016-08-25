<?php

/* @LGPUser/layout.html.twig */
class __TwigTemplate_121d417e80f449987b96c0694b6c3f8454776af0ec9692c329704d319b061a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33e9ae27644d4fa351da6fca5d49670fe879878f88f32b61cf4719344f21a055 = $this->env->getExtension("native_profiler");
        $__internal_33e9ae27644d4fa351da6fca5d49670fe879878f88f32b61cf4719344f21a055->enter($__internal_33e9ae27644d4fa351da6fca5d49670fe879878f88f32b61cf4719344f21a055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33e9ae27644d4fa351da6fca5d49670fe879878f88f32b61cf4719344f21a055->leave($__internal_33e9ae27644d4fa351da6fca5d49670fe879878f88f32b61cf4719344f21a055_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9f9b82af08517cf73528c761118cef285e10538e1d8bc98e2a28d8fcf79cb90 = $this->env->getExtension("native_profiler");
        $__internal_d9f9b82af08517cf73528c761118cef285e10538e1d8bc98e2a28d8fcf79cb90->enter($__internal_d9f9b82af08517cf73528c761118cef285e10538e1d8bc98e2a28d8fcf79cb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_d9f9b82af08517cf73528c761118cef285e10538e1d8bc98e2a28d8fcf79cb90->leave($__internal_d9f9b82af08517cf73528c761118cef285e10538e1d8bc98e2a28d8fcf79cb90_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a3fbd78dc82836133afafd9fda726fb8a0447ae8ad2de7224d36379b202b707 = $this->env->getExtension("native_profiler");
        $__internal_4a3fbd78dc82836133afafd9fda726fb8a0447ae8ad2de7224d36379b202b707->enter($__internal_4a3fbd78dc82836133afafd9fda726fb8a0447ae8ad2de7224d36379b202b707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_4a3fbd78dc82836133afafd9fda726fb8a0447ae8ad2de7224d36379b202b707->leave($__internal_4a3fbd78dc82836133afafd9fda726fb8a0447ae8ad2de7224d36379b202b707_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/* */
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
