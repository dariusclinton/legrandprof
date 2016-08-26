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
        $__internal_df4f9a946cccfce16cb25d912575df0e264dcda7fdb8abe232f019d1be197371 = $this->env->getExtension("native_profiler");
        $__internal_df4f9a946cccfce16cb25d912575df0e264dcda7fdb8abe232f019d1be197371->enter($__internal_df4f9a946cccfce16cb25d912575df0e264dcda7fdb8abe232f019d1be197371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df4f9a946cccfce16cb25d912575df0e264dcda7fdb8abe232f019d1be197371->leave($__internal_df4f9a946cccfce16cb25d912575df0e264dcda7fdb8abe232f019d1be197371_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_349a1974d756a54f97d1692a0345798c80339a79f6f75d20c91d1d3233fedd2f = $this->env->getExtension("native_profiler");
        $__internal_349a1974d756a54f97d1692a0345798c80339a79f6f75d20c91d1d3233fedd2f->enter($__internal_349a1974d756a54f97d1692a0345798c80339a79f6f75d20c91d1d3233fedd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_349a1974d756a54f97d1692a0345798c80339a79f6f75d20c91d1d3233fedd2f->leave($__internal_349a1974d756a54f97d1692a0345798c80339a79f6f75d20c91d1d3233fedd2f_prof);

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
