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
        $__internal_e8a1c6462b063a59496a213b2d94639a822965abdeee1ccc19920ce5a67d6fd9 = $this->env->getExtension("native_profiler");
        $__internal_e8a1c6462b063a59496a213b2d94639a822965abdeee1ccc19920ce5a67d6fd9->enter($__internal_e8a1c6462b063a59496a213b2d94639a822965abdeee1ccc19920ce5a67d6fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8a1c6462b063a59496a213b2d94639a822965abdeee1ccc19920ce5a67d6fd9->leave($__internal_e8a1c6462b063a59496a213b2d94639a822965abdeee1ccc19920ce5a67d6fd9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0adb8ed53b65ae40db597ad575403c9b2f679a5730c0c714d2b7a77d2b91901 = $this->env->getExtension("native_profiler");
        $__internal_e0adb8ed53b65ae40db597ad575403c9b2f679a5730c0c714d2b7a77d2b91901->enter($__internal_e0adb8ed53b65ae40db597ad575403c9b2f679a5730c0c714d2b7a77d2b91901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e0adb8ed53b65ae40db597ad575403c9b2f679a5730c0c714d2b7a77d2b91901->leave($__internal_e0adb8ed53b65ae40db597ad575403c9b2f679a5730c0c714d2b7a77d2b91901_prof);

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
