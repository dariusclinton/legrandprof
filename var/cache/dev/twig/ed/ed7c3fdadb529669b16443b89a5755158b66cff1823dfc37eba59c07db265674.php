<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_be1e132bae8340ed2a0182bfd29fdc26ce89f6f4aa09f54257e84ea80981a725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_b5db1924522b84fdc2a9472056cd4d788fcd02ce6597571095ab019c252eaa3b = $this->env->getExtension("native_profiler");
        $__internal_b5db1924522b84fdc2a9472056cd4d788fcd02ce6597571095ab019c252eaa3b->enter($__internal_b5db1924522b84fdc2a9472056cd4d788fcd02ce6597571095ab019c252eaa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5db1924522b84fdc2a9472056cd4d788fcd02ce6597571095ab019c252eaa3b->leave($__internal_b5db1924522b84fdc2a9472056cd4d788fcd02ce6597571095ab019c252eaa3b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c91cf60cec9b40dbbd9e642056ba525711491d863e66fc804f6df6c18c75aba = $this->env->getExtension("native_profiler");
        $__internal_2c91cf60cec9b40dbbd9e642056ba525711491d863e66fc804f6df6c18c75aba->enter($__internal_2c91cf60cec9b40dbbd9e642056ba525711491d863e66fc804f6df6c18c75aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_2c91cf60cec9b40dbbd9e642056ba525711491d863e66fc804f6df6c18c75aba->leave($__internal_2c91cf60cec9b40dbbd9e642056ba525711491d863e66fc804f6df6c18c75aba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
