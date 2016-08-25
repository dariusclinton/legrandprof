<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_addc6a791de2974e7aa145d72799d3422f9b4b4248c4631977d654914e2cae32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_2ea80c751fbc7bc48f55331a537798f79e82a9cc94e2cd213dec1b63a9a14b7a = $this->env->getExtension("native_profiler");
        $__internal_2ea80c751fbc7bc48f55331a537798f79e82a9cc94e2cd213dec1b63a9a14b7a->enter($__internal_2ea80c751fbc7bc48f55331a537798f79e82a9cc94e2cd213dec1b63a9a14b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ea80c751fbc7bc48f55331a537798f79e82a9cc94e2cd213dec1b63a9a14b7a->leave($__internal_2ea80c751fbc7bc48f55331a537798f79e82a9cc94e2cd213dec1b63a9a14b7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72bca2424cb0131a3335ca64dacd9119cd4ccda168713e016eead2334bd92f06 = $this->env->getExtension("native_profiler");
        $__internal_72bca2424cb0131a3335ca64dacd9119cd4ccda168713e016eead2334bd92f06->enter($__internal_72bca2424cb0131a3335ca64dacd9119cd4ccda168713e016eead2334bd92f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_72bca2424cb0131a3335ca64dacd9119cd4ccda168713e016eead2334bd92f06->leave($__internal_72bca2424cb0131a3335ca64dacd9119cd4ccda168713e016eead2334bd92f06_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
