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
        $__internal_edcdd0a773306885efdef42a1d94df7a8fe6b9c38056d7ba8eb3b9ae8883c18f = $this->env->getExtension("native_profiler");
        $__internal_edcdd0a773306885efdef42a1d94df7a8fe6b9c38056d7ba8eb3b9ae8883c18f->enter($__internal_edcdd0a773306885efdef42a1d94df7a8fe6b9c38056d7ba8eb3b9ae8883c18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edcdd0a773306885efdef42a1d94df7a8fe6b9c38056d7ba8eb3b9ae8883c18f->leave($__internal_edcdd0a773306885efdef42a1d94df7a8fe6b9c38056d7ba8eb3b9ae8883c18f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f01c9b433ffc79f1108ceaf688f634c8ff091f26dc3fdc0d4259533d97d2fd4 = $this->env->getExtension("native_profiler");
        $__internal_2f01c9b433ffc79f1108ceaf688f634c8ff091f26dc3fdc0d4259533d97d2fd4->enter($__internal_2f01c9b433ffc79f1108ceaf688f634c8ff091f26dc3fdc0d4259533d97d2fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2f01c9b433ffc79f1108ceaf688f634c8ff091f26dc3fdc0d4259533d97d2fd4->leave($__internal_2f01c9b433ffc79f1108ceaf688f634c8ff091f26dc3fdc0d4259533d97d2fd4_prof);

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
