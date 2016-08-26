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
        $__internal_f157a2045810ce3051379a70921f83279ee8b1e2441a2320c40036d8826bd2aa = $this->env->getExtension("native_profiler");
        $__internal_f157a2045810ce3051379a70921f83279ee8b1e2441a2320c40036d8826bd2aa->enter($__internal_f157a2045810ce3051379a70921f83279ee8b1e2441a2320c40036d8826bd2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f157a2045810ce3051379a70921f83279ee8b1e2441a2320c40036d8826bd2aa->leave($__internal_f157a2045810ce3051379a70921f83279ee8b1e2441a2320c40036d8826bd2aa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c3525e2bb7311eaaa752e732f837d7d1d0d08d57b9aa102a044587b92b78cb51 = $this->env->getExtension("native_profiler");
        $__internal_c3525e2bb7311eaaa752e732f837d7d1d0d08d57b9aa102a044587b92b78cb51->enter($__internal_c3525e2bb7311eaaa752e732f837d7d1d0d08d57b9aa102a044587b92b78cb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_c3525e2bb7311eaaa752e732f837d7d1d0d08d57b9aa102a044587b92b78cb51->leave($__internal_c3525e2bb7311eaaa752e732f837d7d1d0d08d57b9aa102a044587b92b78cb51_prof);

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
