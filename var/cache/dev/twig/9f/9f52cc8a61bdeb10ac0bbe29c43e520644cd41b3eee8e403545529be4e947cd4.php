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
        $__internal_2b8e29d5607edbbd6004b532e1ec084c98fd88da328d0dc71e768462914bb12b = $this->env->getExtension("native_profiler");
        $__internal_2b8e29d5607edbbd6004b532e1ec084c98fd88da328d0dc71e768462914bb12b->enter($__internal_2b8e29d5607edbbd6004b532e1ec084c98fd88da328d0dc71e768462914bb12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b8e29d5607edbbd6004b532e1ec084c98fd88da328d0dc71e768462914bb12b->leave($__internal_2b8e29d5607edbbd6004b532e1ec084c98fd88da328d0dc71e768462914bb12b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_960a10fd347e29179f849e72b5c9d9093c79661e87349120485ca1711408b15c = $this->env->getExtension("native_profiler");
        $__internal_960a10fd347e29179f849e72b5c9d9093c79661e87349120485ca1711408b15c->enter($__internal_960a10fd347e29179f849e72b5c9d9093c79661e87349120485ca1711408b15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_960a10fd347e29179f849e72b5c9d9093c79661e87349120485ca1711408b15c->leave($__internal_960a10fd347e29179f849e72b5c9d9093c79661e87349120485ca1711408b15c_prof);

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
