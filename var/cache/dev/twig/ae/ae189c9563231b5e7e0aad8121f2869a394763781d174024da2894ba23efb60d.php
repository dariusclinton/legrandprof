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
        $__internal_fd221013abb9b294f9c93e34470a877dae0f2903bed790b9fb9cd7359cfcd83a = $this->env->getExtension("native_profiler");
        $__internal_fd221013abb9b294f9c93e34470a877dae0f2903bed790b9fb9cd7359cfcd83a->enter($__internal_fd221013abb9b294f9c93e34470a877dae0f2903bed790b9fb9cd7359cfcd83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd221013abb9b294f9c93e34470a877dae0f2903bed790b9fb9cd7359cfcd83a->leave($__internal_fd221013abb9b294f9c93e34470a877dae0f2903bed790b9fb9cd7359cfcd83a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a5f95b7b0abd545a9d3c383d1529466464847b2e801ab0bedd5ef79a22ad070 = $this->env->getExtension("native_profiler");
        $__internal_0a5f95b7b0abd545a9d3c383d1529466464847b2e801ab0bedd5ef79a22ad070->enter($__internal_0a5f95b7b0abd545a9d3c383d1529466464847b2e801ab0bedd5ef79a22ad070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_0a5f95b7b0abd545a9d3c383d1529466464847b2e801ab0bedd5ef79a22ad070->leave($__internal_0a5f95b7b0abd545a9d3c383d1529466464847b2e801ab0bedd5ef79a22ad070_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce07d739017efa40018efbec453e8aa35ec6d75a544113e7f511c5f4ce027b2c = $this->env->getExtension("native_profiler");
        $__internal_ce07d739017efa40018efbec453e8aa35ec6d75a544113e7f511c5f4ce027b2c->enter($__internal_ce07d739017efa40018efbec453e8aa35ec6d75a544113e7f511c5f4ce027b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_ce07d739017efa40018efbec453e8aa35ec6d75a544113e7f511c5f4ce027b2c->leave($__internal_ce07d739017efa40018efbec453e8aa35ec6d75a544113e7f511c5f4ce027b2c_prof);

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
