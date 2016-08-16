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
        $__internal_7b465099c1ce9f4de17435b216b3a938e83ce8386bd78917414fa4d9a8fd78c9 = $this->env->getExtension("native_profiler");
        $__internal_7b465099c1ce9f4de17435b216b3a938e83ce8386bd78917414fa4d9a8fd78c9->enter($__internal_7b465099c1ce9f4de17435b216b3a938e83ce8386bd78917414fa4d9a8fd78c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b465099c1ce9f4de17435b216b3a938e83ce8386bd78917414fa4d9a8fd78c9->leave($__internal_7b465099c1ce9f4de17435b216b3a938e83ce8386bd78917414fa4d9a8fd78c9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abeba57e4aae30a83ade2eacea975427eba9439de9fde32528aab747f039770c = $this->env->getExtension("native_profiler");
        $__internal_abeba57e4aae30a83ade2eacea975427eba9439de9fde32528aab747f039770c->enter($__internal_abeba57e4aae30a83ade2eacea975427eba9439de9fde32528aab747f039770c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_abeba57e4aae30a83ade2eacea975427eba9439de9fde32528aab747f039770c->leave($__internal_abeba57e4aae30a83ade2eacea975427eba9439de9fde32528aab747f039770c_prof);

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
