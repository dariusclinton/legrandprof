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
        $__internal_b6897dae9316578984df7e4c1a83c577e6ae2c54bcdf85a4b11e621287d7dabe = $this->env->getExtension("native_profiler");
        $__internal_b6897dae9316578984df7e4c1a83c577e6ae2c54bcdf85a4b11e621287d7dabe->enter($__internal_b6897dae9316578984df7e4c1a83c577e6ae2c54bcdf85a4b11e621287d7dabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6897dae9316578984df7e4c1a83c577e6ae2c54bcdf85a4b11e621287d7dabe->leave($__internal_b6897dae9316578984df7e4c1a83c577e6ae2c54bcdf85a4b11e621287d7dabe_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18ab0a29df4e00d1b4a8144a8a1eabeac5cbcf555bd6ee69730c6ea3096b45d2 = $this->env->getExtension("native_profiler");
        $__internal_18ab0a29df4e00d1b4a8144a8a1eabeac5cbcf555bd6ee69730c6ea3096b45d2->enter($__internal_18ab0a29df4e00d1b4a8144a8a1eabeac5cbcf555bd6ee69730c6ea3096b45d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_18ab0a29df4e00d1b4a8144a8a1eabeac5cbcf555bd6ee69730c6ea3096b45d2->leave($__internal_18ab0a29df4e00d1b4a8144a8a1eabeac5cbcf555bd6ee69730c6ea3096b45d2_prof);

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
