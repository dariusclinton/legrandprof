<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4ab49bb795b9cf59c836d91c2c3dbbd61afe0342bba06ccaa56bf3d136d119fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_5c1c0599993ab2bc32bcd8a260526f510769321985cd9878d14879b04e775a34 = $this->env->getExtension("native_profiler");
        $__internal_5c1c0599993ab2bc32bcd8a260526f510769321985cd9878d14879b04e775a34->enter($__internal_5c1c0599993ab2bc32bcd8a260526f510769321985cd9878d14879b04e775a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c1c0599993ab2bc32bcd8a260526f510769321985cd9878d14879b04e775a34->leave($__internal_5c1c0599993ab2bc32bcd8a260526f510769321985cd9878d14879b04e775a34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af08881a9ec6cc9df9bf1c7820df3566c4723790adbfb0a82def6663f5deed73 = $this->env->getExtension("native_profiler");
        $__internal_af08881a9ec6cc9df9bf1c7820df3566c4723790adbfb0a82def6663f5deed73->enter($__internal_af08881a9ec6cc9df9bf1c7820df3566c4723790adbfb0a82def6663f5deed73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_af08881a9ec6cc9df9bf1c7820df3566c4723790adbfb0a82def6663f5deed73->leave($__internal_af08881a9ec6cc9df9bf1c7820df3566c4723790adbfb0a82def6663f5deed73_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2fa077a3c4809ea5ccee885c07d8ca3340f56524776a9c948eaae0fa66bf62f7 = $this->env->getExtension("native_profiler");
        $__internal_2fa077a3c4809ea5ccee885c07d8ca3340f56524776a9c948eaae0fa66bf62f7->enter($__internal_2fa077a3c4809ea5ccee885c07d8ca3340f56524776a9c948eaae0fa66bf62f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_2fa077a3c4809ea5ccee885c07d8ca3340f56524776a9c948eaae0fa66bf62f7->leave($__internal_2fa077a3c4809ea5ccee885c07d8ca3340f56524776a9c948eaae0fa66bf62f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
