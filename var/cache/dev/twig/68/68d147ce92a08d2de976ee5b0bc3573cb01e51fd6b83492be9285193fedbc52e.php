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
        $__internal_f2939ee64ab2721b9fbc7cdad4318f743cdd94f7b2a96769128feef4e4a71989 = $this->env->getExtension("native_profiler");
        $__internal_f2939ee64ab2721b9fbc7cdad4318f743cdd94f7b2a96769128feef4e4a71989->enter($__internal_f2939ee64ab2721b9fbc7cdad4318f743cdd94f7b2a96769128feef4e4a71989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2939ee64ab2721b9fbc7cdad4318f743cdd94f7b2a96769128feef4e4a71989->leave($__internal_f2939ee64ab2721b9fbc7cdad4318f743cdd94f7b2a96769128feef4e4a71989_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52c1439d682dcc75ded3fb9a7edc6ad8e03cd943a7ae920e5e506e70441467be = $this->env->getExtension("native_profiler");
        $__internal_52c1439d682dcc75ded3fb9a7edc6ad8e03cd943a7ae920e5e506e70441467be->enter($__internal_52c1439d682dcc75ded3fb9a7edc6ad8e03cd943a7ae920e5e506e70441467be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_52c1439d682dcc75ded3fb9a7edc6ad8e03cd943a7ae920e5e506e70441467be->leave($__internal_52c1439d682dcc75ded3fb9a7edc6ad8e03cd943a7ae920e5e506e70441467be_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7cfc5b72d4a82e9af5932128e5f3086b65db53c7574736a80f47405f9293a88b = $this->env->getExtension("native_profiler");
        $__internal_7cfc5b72d4a82e9af5932128e5f3086b65db53c7574736a80f47405f9293a88b->enter($__internal_7cfc5b72d4a82e9af5932128e5f3086b65db53c7574736a80f47405f9293a88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_7cfc5b72d4a82e9af5932128e5f3086b65db53c7574736a80f47405f9293a88b->leave($__internal_7cfc5b72d4a82e9af5932128e5f3086b65db53c7574736a80f47405f9293a88b_prof);

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
