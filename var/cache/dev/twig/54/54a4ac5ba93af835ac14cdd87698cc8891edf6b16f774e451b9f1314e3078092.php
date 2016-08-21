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
        $__internal_20b3242ed4b67b1048abd4bfdceea5f8d933339a7b152370dd43ca11a5e729c9 = $this->env->getExtension("native_profiler");
        $__internal_20b3242ed4b67b1048abd4bfdceea5f8d933339a7b152370dd43ca11a5e729c9->enter($__internal_20b3242ed4b67b1048abd4bfdceea5f8d933339a7b152370dd43ca11a5e729c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20b3242ed4b67b1048abd4bfdceea5f8d933339a7b152370dd43ca11a5e729c9->leave($__internal_20b3242ed4b67b1048abd4bfdceea5f8d933339a7b152370dd43ca11a5e729c9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff3ab1598433d058d64f84a3a54af59e7196ec5f2eccd3c721130e50a2833e6c = $this->env->getExtension("native_profiler");
        $__internal_ff3ab1598433d058d64f84a3a54af59e7196ec5f2eccd3c721130e50a2833e6c->enter($__internal_ff3ab1598433d058d64f84a3a54af59e7196ec5f2eccd3c721130e50a2833e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_ff3ab1598433d058d64f84a3a54af59e7196ec5f2eccd3c721130e50a2833e6c->leave($__internal_ff3ab1598433d058d64f84a3a54af59e7196ec5f2eccd3c721130e50a2833e6c_prof);

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
