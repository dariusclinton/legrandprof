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
        $__internal_a73696a5dfe471e1b339eda62800a0d2d9b934939dd4141cc3d58439f8bb112c = $this->env->getExtension("native_profiler");
        $__internal_a73696a5dfe471e1b339eda62800a0d2d9b934939dd4141cc3d58439f8bb112c->enter($__internal_a73696a5dfe471e1b339eda62800a0d2d9b934939dd4141cc3d58439f8bb112c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a73696a5dfe471e1b339eda62800a0d2d9b934939dd4141cc3d58439f8bb112c->leave($__internal_a73696a5dfe471e1b339eda62800a0d2d9b934939dd4141cc3d58439f8bb112c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2396ac2c93620961acb60634625d6e21a0a378dbb198f4551764f07325246574 = $this->env->getExtension("native_profiler");
        $__internal_2396ac2c93620961acb60634625d6e21a0a378dbb198f4551764f07325246574->enter($__internal_2396ac2c93620961acb60634625d6e21a0a378dbb198f4551764f07325246574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2396ac2c93620961acb60634625d6e21a0a378dbb198f4551764f07325246574->leave($__internal_2396ac2c93620961acb60634625d6e21a0a378dbb198f4551764f07325246574_prof);

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
