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
        $__internal_50c7bf66c15ecd2990647b81a2f517ab29abb776b58555586d55919a579c5d7d = $this->env->getExtension("native_profiler");
        $__internal_50c7bf66c15ecd2990647b81a2f517ab29abb776b58555586d55919a579c5d7d->enter($__internal_50c7bf66c15ecd2990647b81a2f517ab29abb776b58555586d55919a579c5d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50c7bf66c15ecd2990647b81a2f517ab29abb776b58555586d55919a579c5d7d->leave($__internal_50c7bf66c15ecd2990647b81a2f517ab29abb776b58555586d55919a579c5d7d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_956ddbfc354c7927eb1709088b263a37230a501d7342d69094335b1877028e43 = $this->env->getExtension("native_profiler");
        $__internal_956ddbfc354c7927eb1709088b263a37230a501d7342d69094335b1877028e43->enter($__internal_956ddbfc354c7927eb1709088b263a37230a501d7342d69094335b1877028e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_956ddbfc354c7927eb1709088b263a37230a501d7342d69094335b1877028e43->leave($__internal_956ddbfc354c7927eb1709088b263a37230a501d7342d69094335b1877028e43_prof);

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
