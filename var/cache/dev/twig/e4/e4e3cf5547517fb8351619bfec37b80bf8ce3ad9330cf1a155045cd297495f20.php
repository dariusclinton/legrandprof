<?php

/* LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_e9fee84088b688574dd8d2e907e013f4d0839ed48f6eda39b0d6d05c42107a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_664ed44725c3cefe1f67634c0e8cb45df020f6eec5f4e01afef147c1d57aa769 = $this->env->getExtension("native_profiler");
        $__internal_664ed44725c3cefe1f67634c0e8cb45df020f6eec5f4e01afef147c1d57aa769->enter($__internal_664ed44725c3cefe1f67634c0e8cb45df020f6eec5f4e01afef147c1d57aa769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_664ed44725c3cefe1f67634c0e8cb45df020f6eec5f4e01afef147c1d57aa769->leave($__internal_664ed44725c3cefe1f67634c0e8cb45df020f6eec5f4e01afef147c1d57aa769_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9dbb9d389f09114d7612bdce06bd58cff6553ff74ea27120135167e5290a17cd = $this->env->getExtension("native_profiler");
        $__internal_9dbb9d389f09114d7612bdce06bd58cff6553ff74ea27120135167e5290a17cd->enter($__internal_9dbb9d389f09114d7612bdce06bd58cff6553ff74ea27120135167e5290a17cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9dbb9d389f09114d7612bdce06bd58cff6553ff74ea27120135167e5290a17cd->leave($__internal_9dbb9d389f09114d7612bdce06bd58cff6553ff74ea27120135167e5290a17cd_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
";
    }
}
