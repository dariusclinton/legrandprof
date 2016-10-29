<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c569f9891ea703df050261c3cdba45df7a6efbb1520c9e6f384a471cf4a82140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f7278f413cae170a160c647de0602b57f9cf77b0cd026572398a53c4ae1a4b3 = $this->env->getExtension("native_profiler");
        $__internal_5f7278f413cae170a160c647de0602b57f9cf77b0cd026572398a53c4ae1a4b3->enter($__internal_5f7278f413cae170a160c647de0602b57f9cf77b0cd026572398a53c4ae1a4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f7278f413cae170a160c647de0602b57f9cf77b0cd026572398a53c4ae1a4b3->leave($__internal_5f7278f413cae170a160c647de0602b57f9cf77b0cd026572398a53c4ae1a4b3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e60eee80f5d10d5fff2c2af8a7403cdd2d6e32b47034a288b1d8e5b02226c02 = $this->env->getExtension("native_profiler");
        $__internal_5e60eee80f5d10d5fff2c2af8a7403cdd2d6e32b47034a288b1d8e5b02226c02->enter($__internal_5e60eee80f5d10d5fff2c2af8a7403cdd2d6e32b47034a288b1d8e5b02226c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_5e60eee80f5d10d5fff2c2af8a7403cdd2d6e32b47034a288b1d8e5b02226c02->leave($__internal_5e60eee80f5d10d5fff2c2af8a7403cdd2d6e32b47034a288b1d8e5b02226c02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
