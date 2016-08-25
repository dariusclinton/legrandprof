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
        $__internal_5426900d10e84136809b811544420883b70436e2ac527b0a0bf833e4dfa151d8 = $this->env->getExtension("native_profiler");
        $__internal_5426900d10e84136809b811544420883b70436e2ac527b0a0bf833e4dfa151d8->enter($__internal_5426900d10e84136809b811544420883b70436e2ac527b0a0bf833e4dfa151d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5426900d10e84136809b811544420883b70436e2ac527b0a0bf833e4dfa151d8->leave($__internal_5426900d10e84136809b811544420883b70436e2ac527b0a0bf833e4dfa151d8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d6d7cabb834e8a25f7dfcc59e70addc9726233e77847ebe81cabb00f4ce1c73 = $this->env->getExtension("native_profiler");
        $__internal_9d6d7cabb834e8a25f7dfcc59e70addc9726233e77847ebe81cabb00f4ce1c73->enter($__internal_9d6d7cabb834e8a25f7dfcc59e70addc9726233e77847ebe81cabb00f4ce1c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9d6d7cabb834e8a25f7dfcc59e70addc9726233e77847ebe81cabb00f4ce1c73->leave($__internal_9d6d7cabb834e8a25f7dfcc59e70addc9726233e77847ebe81cabb00f4ce1c73_prof);

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
