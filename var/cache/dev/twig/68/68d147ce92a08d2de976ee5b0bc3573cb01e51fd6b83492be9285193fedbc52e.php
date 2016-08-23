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
        $__internal_c0061c886beabd44c56195ad7a14057e84a94a1b7df0e6e32454adbd39cc59ce = $this->env->getExtension("native_profiler");
        $__internal_c0061c886beabd44c56195ad7a14057e84a94a1b7df0e6e32454adbd39cc59ce->enter($__internal_c0061c886beabd44c56195ad7a14057e84a94a1b7df0e6e32454adbd39cc59ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0061c886beabd44c56195ad7a14057e84a94a1b7df0e6e32454adbd39cc59ce->leave($__internal_c0061c886beabd44c56195ad7a14057e84a94a1b7df0e6e32454adbd39cc59ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f451d66066cb9a117ec27dc33dddc38354feb1651a5ef3e203e3b7dc047bb56 = $this->env->getExtension("native_profiler");
        $__internal_8f451d66066cb9a117ec27dc33dddc38354feb1651a5ef3e203e3b7dc047bb56->enter($__internal_8f451d66066cb9a117ec27dc33dddc38354feb1651a5ef3e203e3b7dc047bb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_8f451d66066cb9a117ec27dc33dddc38354feb1651a5ef3e203e3b7dc047bb56->leave($__internal_8f451d66066cb9a117ec27dc33dddc38354feb1651a5ef3e203e3b7dc047bb56_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e2c91dafb47e3fb5320479d1ed27b765da4f5c78e78df1afe60a8ac1f4801ca = $this->env->getExtension("native_profiler");
        $__internal_8e2c91dafb47e3fb5320479d1ed27b765da4f5c78e78df1afe60a8ac1f4801ca->enter($__internal_8e2c91dafb47e3fb5320479d1ed27b765da4f5c78e78df1afe60a8ac1f4801ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_8e2c91dafb47e3fb5320479d1ed27b765da4f5c78e78df1afe60a8ac1f4801ca->leave($__internal_8e2c91dafb47e3fb5320479d1ed27b765da4f5c78e78df1afe60a8ac1f4801ca_prof);

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
