<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_8b84f0700c87a209d9b14409797815b33132862e9bdb6b9ce0e384f9eefb7840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_67c8e00c03f99d982c97fb45b15746846b54ee61a0979e587a333d399ea5cf5a = $this->env->getExtension("native_profiler");
        $__internal_67c8e00c03f99d982c97fb45b15746846b54ee61a0979e587a333d399ea5cf5a->enter($__internal_67c8e00c03f99d982c97fb45b15746846b54ee61a0979e587a333d399ea5cf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67c8e00c03f99d982c97fb45b15746846b54ee61a0979e587a333d399ea5cf5a->leave($__internal_67c8e00c03f99d982c97fb45b15746846b54ee61a0979e587a333d399ea5cf5a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ca575517e01f200b9f4f3837b2909665efcf5a60aecc5465d4d02eb979d194d = $this->env->getExtension("native_profiler");
        $__internal_2ca575517e01f200b9f4f3837b2909665efcf5a60aecc5465d4d02eb979d194d->enter($__internal_2ca575517e01f200b9f4f3837b2909665efcf5a60aecc5465d4d02eb979d194d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2ca575517e01f200b9f4f3837b2909665efcf5a60aecc5465d4d02eb979d194d->leave($__internal_2ca575517e01f200b9f4f3837b2909665efcf5a60aecc5465d4d02eb979d194d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
