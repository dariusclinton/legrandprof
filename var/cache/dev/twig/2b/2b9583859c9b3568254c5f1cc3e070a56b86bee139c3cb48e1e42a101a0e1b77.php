<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_9e7ca3807a687f1a957fe54edb754d77f874866c05b65d869f2e9f026f30c90c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_a549a1356e1a6777e629c8b60e0c67a49c08a85bd49303bf6279e466bec62d0c = $this->env->getExtension("native_profiler");
        $__internal_a549a1356e1a6777e629c8b60e0c67a49c08a85bd49303bf6279e466bec62d0c->enter($__internal_a549a1356e1a6777e629c8b60e0c67a49c08a85bd49303bf6279e466bec62d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a549a1356e1a6777e629c8b60e0c67a49c08a85bd49303bf6279e466bec62d0c->leave($__internal_a549a1356e1a6777e629c8b60e0c67a49c08a85bd49303bf6279e466bec62d0c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef78325db4cac53c849de5b1d0b94e96d77a2c0b237e5adc894b2b5c75edfbf3 = $this->env->getExtension("native_profiler");
        $__internal_ef78325db4cac53c849de5b1d0b94e96d77a2c0b237e5adc894b2b5c75edfbf3->enter($__internal_ef78325db4cac53c849de5b1d0b94e96d77a2c0b237e5adc894b2b5c75edfbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_ef78325db4cac53c849de5b1d0b94e96d77a2c0b237e5adc894b2b5c75edfbf3->leave($__internal_ef78325db4cac53c849de5b1d0b94e96d77a2c0b237e5adc894b2b5c75edfbf3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
