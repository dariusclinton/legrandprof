<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_77561ebfd065ae127418de65663460602243aa631c602c07b6aacb8bf31583d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_1ba98a7713c83179c7279a7ba7555cfaa027c435f5086aab4a322fc97d5a9257 = $this->env->getExtension("native_profiler");
        $__internal_1ba98a7713c83179c7279a7ba7555cfaa027c435f5086aab4a322fc97d5a9257->enter($__internal_1ba98a7713c83179c7279a7ba7555cfaa027c435f5086aab4a322fc97d5a9257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ba98a7713c83179c7279a7ba7555cfaa027c435f5086aab4a322fc97d5a9257->leave($__internal_1ba98a7713c83179c7279a7ba7555cfaa027c435f5086aab4a322fc97d5a9257_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9d90531a7f1982bc4b9f7cc279ec082aa3068fc4a34ddc6f6031dc9cf73699e = $this->env->getExtension("native_profiler");
        $__internal_b9d90531a7f1982bc4b9f7cc279ec082aa3068fc4a34ddc6f6031dc9cf73699e->enter($__internal_b9d90531a7f1982bc4b9f7cc279ec082aa3068fc4a34ddc6f6031dc9cf73699e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_b9d90531a7f1982bc4b9f7cc279ec082aa3068fc4a34ddc6f6031dc9cf73699e->leave($__internal_b9d90531a7f1982bc4b9f7cc279ec082aa3068fc4a34ddc6f6031dc9cf73699e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
