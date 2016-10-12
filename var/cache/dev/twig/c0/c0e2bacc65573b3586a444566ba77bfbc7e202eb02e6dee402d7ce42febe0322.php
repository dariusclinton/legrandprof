<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_de3a5165fa096a95801d1d2b6414f309825b160f69891d7d9a7e4ad9595fd2e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_ea37690d9c8055f4f507fec9839fad48cecbe46977c0ab5e09a18f948c54a16f = $this->env->getExtension("native_profiler");
        $__internal_ea37690d9c8055f4f507fec9839fad48cecbe46977c0ab5e09a18f948c54a16f->enter($__internal_ea37690d9c8055f4f507fec9839fad48cecbe46977c0ab5e09a18f948c54a16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea37690d9c8055f4f507fec9839fad48cecbe46977c0ab5e09a18f948c54a16f->leave($__internal_ea37690d9c8055f4f507fec9839fad48cecbe46977c0ab5e09a18f948c54a16f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a14944d49c4e77a4e6fe343b1e50663ad2704062a6be41e32f2aa353c3139989 = $this->env->getExtension("native_profiler");
        $__internal_a14944d49c4e77a4e6fe343b1e50663ad2704062a6be41e32f2aa353c3139989->enter($__internal_a14944d49c4e77a4e6fe343b1e50663ad2704062a6be41e32f2aa353c3139989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a14944d49c4e77a4e6fe343b1e50663ad2704062a6be41e32f2aa353c3139989->leave($__internal_a14944d49c4e77a4e6fe343b1e50663ad2704062a6be41e32f2aa353c3139989_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
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
