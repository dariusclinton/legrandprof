<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_76f956740670e1d0c7cf76e1e38e59ae9e7cd737e87007a415e8dc0b23580121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_a26fb8bab0d5f616e060aaab198b341adb627546584a12b2b6e3a8b41aff62f1 = $this->env->getExtension("native_profiler");
        $__internal_a26fb8bab0d5f616e060aaab198b341adb627546584a12b2b6e3a8b41aff62f1->enter($__internal_a26fb8bab0d5f616e060aaab198b341adb627546584a12b2b6e3a8b41aff62f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a26fb8bab0d5f616e060aaab198b341adb627546584a12b2b6e3a8b41aff62f1->leave($__internal_a26fb8bab0d5f616e060aaab198b341adb627546584a12b2b6e3a8b41aff62f1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1abdaf4ef682b8729302fd6153a7fc2bffafa3a6d5725bd6146cf9c0efeb5cb0 = $this->env->getExtension("native_profiler");
        $__internal_1abdaf4ef682b8729302fd6153a7fc2bffafa3a6d5725bd6146cf9c0efeb5cb0->enter($__internal_1abdaf4ef682b8729302fd6153a7fc2bffafa3a6d5725bd6146cf9c0efeb5cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1abdaf4ef682b8729302fd6153a7fc2bffafa3a6d5725bd6146cf9c0efeb5cb0->leave($__internal_1abdaf4ef682b8729302fd6153a7fc2bffafa3a6d5725bd6146cf9c0efeb5cb0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
