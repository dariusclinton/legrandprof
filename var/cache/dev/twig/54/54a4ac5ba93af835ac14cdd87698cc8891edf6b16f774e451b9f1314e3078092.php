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
        $__internal_2fb8d7ac42834825672b3b2f8460b45aeff04f89f3fcfdb1f57e168a27f877b5 = $this->env->getExtension("native_profiler");
        $__internal_2fb8d7ac42834825672b3b2f8460b45aeff04f89f3fcfdb1f57e168a27f877b5->enter($__internal_2fb8d7ac42834825672b3b2f8460b45aeff04f89f3fcfdb1f57e168a27f877b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fb8d7ac42834825672b3b2f8460b45aeff04f89f3fcfdb1f57e168a27f877b5->leave($__internal_2fb8d7ac42834825672b3b2f8460b45aeff04f89f3fcfdb1f57e168a27f877b5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d91151e609b4e0fc807afa01438b053b29e86deaecbfe9745125cb18740474c = $this->env->getExtension("native_profiler");
        $__internal_2d91151e609b4e0fc807afa01438b053b29e86deaecbfe9745125cb18740474c->enter($__internal_2d91151e609b4e0fc807afa01438b053b29e86deaecbfe9745125cb18740474c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2d91151e609b4e0fc807afa01438b053b29e86deaecbfe9745125cb18740474c->leave($__internal_2d91151e609b4e0fc807afa01438b053b29e86deaecbfe9745125cb18740474c_prof);

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
