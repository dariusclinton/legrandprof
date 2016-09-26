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
        $__internal_807fbee009222025160db5aa35f35f4bc3f76f03ff13aa6b7b6c7522a8aa6e89 = $this->env->getExtension("native_profiler");
        $__internal_807fbee009222025160db5aa35f35f4bc3f76f03ff13aa6b7b6c7522a8aa6e89->enter($__internal_807fbee009222025160db5aa35f35f4bc3f76f03ff13aa6b7b6c7522a8aa6e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_807fbee009222025160db5aa35f35f4bc3f76f03ff13aa6b7b6c7522a8aa6e89->leave($__internal_807fbee009222025160db5aa35f35f4bc3f76f03ff13aa6b7b6c7522a8aa6e89_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d085dc0d474994f3b86a139e090c141a30de354e05c7e60de51099a4b68e0aad = $this->env->getExtension("native_profiler");
        $__internal_d085dc0d474994f3b86a139e090c141a30de354e05c7e60de51099a4b68e0aad->enter($__internal_d085dc0d474994f3b86a139e090c141a30de354e05c7e60de51099a4b68e0aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_d085dc0d474994f3b86a139e090c141a30de354e05c7e60de51099a4b68e0aad->leave($__internal_d085dc0d474994f3b86a139e090c141a30de354e05c7e60de51099a4b68e0aad_prof);

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
