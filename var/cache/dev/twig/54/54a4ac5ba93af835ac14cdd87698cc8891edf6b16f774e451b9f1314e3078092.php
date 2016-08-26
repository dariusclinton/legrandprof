<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_27a09d736fac03f0d4c39cae07b895e26a09caedb8ed943a9e6b28bf4fd87ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_b1157e2450ac8e8ed5e6e2d6dc38083c5543849b06aa9b1011bc9beeff9656af = $this->env->getExtension("native_profiler");
        $__internal_b1157e2450ac8e8ed5e6e2d6dc38083c5543849b06aa9b1011bc9beeff9656af->enter($__internal_b1157e2450ac8e8ed5e6e2d6dc38083c5543849b06aa9b1011bc9beeff9656af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1157e2450ac8e8ed5e6e2d6dc38083c5543849b06aa9b1011bc9beeff9656af->leave($__internal_b1157e2450ac8e8ed5e6e2d6dc38083c5543849b06aa9b1011bc9beeff9656af_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f031afd5d7cc0be2eb1a90ecfb1a6624e8d76ec83d7378ee465b9b02614eab2 = $this->env->getExtension("native_profiler");
        $__internal_1f031afd5d7cc0be2eb1a90ecfb1a6624e8d76ec83d7378ee465b9b02614eab2->enter($__internal_1f031afd5d7cc0be2eb1a90ecfb1a6624e8d76ec83d7378ee465b9b02614eab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_1f031afd5d7cc0be2eb1a90ecfb1a6624e8d76ec83d7378ee465b9b02614eab2->leave($__internal_1f031afd5d7cc0be2eb1a90ecfb1a6624e8d76ec83d7378ee465b9b02614eab2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
