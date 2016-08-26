<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a9726e6d020e42e487c531aea7c293bf9878ac3d55d1fba467f08e4b556d14a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_18316e6bc55c990bb840bf148a832379f17c36514c4342c848e42dd2d661cb54 = $this->env->getExtension("native_profiler");
        $__internal_18316e6bc55c990bb840bf148a832379f17c36514c4342c848e42dd2d661cb54->enter($__internal_18316e6bc55c990bb840bf148a832379f17c36514c4342c848e42dd2d661cb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18316e6bc55c990bb840bf148a832379f17c36514c4342c848e42dd2d661cb54->leave($__internal_18316e6bc55c990bb840bf148a832379f17c36514c4342c848e42dd2d661cb54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c42d266e78ea68b8c5a16b1dc8b78668eff3fda2e386a397f44e0b9fa43cb1d = $this->env->getExtension("native_profiler");
        $__internal_8c42d266e78ea68b8c5a16b1dc8b78668eff3fda2e386a397f44e0b9fa43cb1d->enter($__internal_8c42d266e78ea68b8c5a16b1dc8b78668eff3fda2e386a397f44e0b9fa43cb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_8c42d266e78ea68b8c5a16b1dc8b78668eff3fda2e386a397f44e0b9fa43cb1d->leave($__internal_8c42d266e78ea68b8c5a16b1dc8b78668eff3fda2e386a397f44e0b9fa43cb1d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
