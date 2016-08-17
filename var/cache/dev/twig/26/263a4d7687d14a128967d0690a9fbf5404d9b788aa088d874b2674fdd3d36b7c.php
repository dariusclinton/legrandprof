<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_77561ebfd065ae127418de65663460602243aa631c602c07b6aacb8bf31583d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_c254a3d0857b111ff07ed6e6f38564e160f8aff50d9ea3de27b7e23f225cee0f = $this->env->getExtension("native_profiler");
        $__internal_c254a3d0857b111ff07ed6e6f38564e160f8aff50d9ea3de27b7e23f225cee0f->enter($__internal_c254a3d0857b111ff07ed6e6f38564e160f8aff50d9ea3de27b7e23f225cee0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c254a3d0857b111ff07ed6e6f38564e160f8aff50d9ea3de27b7e23f225cee0f->leave($__internal_c254a3d0857b111ff07ed6e6f38564e160f8aff50d9ea3de27b7e23f225cee0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04a617f97277a73fdcc479c4856d68573b6daab82d49021d4370c0229a9be901 = $this->env->getExtension("native_profiler");
        $__internal_04a617f97277a73fdcc479c4856d68573b6daab82d49021d4370c0229a9be901->enter($__internal_04a617f97277a73fdcc479c4856d68573b6daab82d49021d4370c0229a9be901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_04a617f97277a73fdcc479c4856d68573b6daab82d49021d4370c0229a9be901->leave($__internal_04a617f97277a73fdcc479c4856d68573b6daab82d49021d4370c0229a9be901_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
