<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e3b6f24e444bf886ec53293b4a63b53f11bd74ebb2cd59edae68a3b385d93fd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_ef985a991078a13da4c9b66b6df5d7f7c669fa4c02766a97061cca6a1369f01f = $this->env->getExtension("native_profiler");
        $__internal_ef985a991078a13da4c9b66b6df5d7f7c669fa4c02766a97061cca6a1369f01f->enter($__internal_ef985a991078a13da4c9b66b6df5d7f7c669fa4c02766a97061cca6a1369f01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef985a991078a13da4c9b66b6df5d7f7c669fa4c02766a97061cca6a1369f01f->leave($__internal_ef985a991078a13da4c9b66b6df5d7f7c669fa4c02766a97061cca6a1369f01f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b32b7325022623d42683e098be1b347f41129d26ec5b6d6e76af4efe381afcb2 = $this->env->getExtension("native_profiler");
        $__internal_b32b7325022623d42683e098be1b347f41129d26ec5b6d6e76af4efe381afcb2->enter($__internal_b32b7325022623d42683e098be1b347f41129d26ec5b6d6e76af4efe381afcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_b32b7325022623d42683e098be1b347f41129d26ec5b6d6e76af4efe381afcb2->leave($__internal_b32b7325022623d42683e098be1b347f41129d26ec5b6d6e76af4efe381afcb2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
