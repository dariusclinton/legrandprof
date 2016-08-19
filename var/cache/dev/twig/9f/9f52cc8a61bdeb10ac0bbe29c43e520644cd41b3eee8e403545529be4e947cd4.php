<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_225c0888c8d9bd7f5f76296f77ed0a56a0831e7eb5b1398311b8df0a873451e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d2a4e2679a5f23652ea8bcd688138f6f1b0a7086a4700924843736354fef7f5f = $this->env->getExtension("native_profiler");
        $__internal_d2a4e2679a5f23652ea8bcd688138f6f1b0a7086a4700924843736354fef7f5f->enter($__internal_d2a4e2679a5f23652ea8bcd688138f6f1b0a7086a4700924843736354fef7f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2a4e2679a5f23652ea8bcd688138f6f1b0a7086a4700924843736354fef7f5f->leave($__internal_d2a4e2679a5f23652ea8bcd688138f6f1b0a7086a4700924843736354fef7f5f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_473ddeb5204d75b37f4a8dcdf1d5f94b9bb87786e22a6442179f0607ddac439b = $this->env->getExtension("native_profiler");
        $__internal_473ddeb5204d75b37f4a8dcdf1d5f94b9bb87786e22a6442179f0607ddac439b->enter($__internal_473ddeb5204d75b37f4a8dcdf1d5f94b9bb87786e22a6442179f0607ddac439b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_473ddeb5204d75b37f4a8dcdf1d5f94b9bb87786e22a6442179f0607ddac439b->leave($__internal_473ddeb5204d75b37f4a8dcdf1d5f94b9bb87786e22a6442179f0607ddac439b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
