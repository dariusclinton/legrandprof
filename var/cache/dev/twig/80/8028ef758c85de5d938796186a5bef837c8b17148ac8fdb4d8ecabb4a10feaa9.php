<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_aee0adb452f4ca037c48c800836f5e195b7f07cf4d7a1e9376be1a705ad2abb0 extends Twig_Template
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
        $__internal_3e8349ddd791ced1c708f5b24d7357b17fe1aa3e6d377c86b6da31c9c3cb3e16 = $this->env->getExtension("native_profiler");
        $__internal_3e8349ddd791ced1c708f5b24d7357b17fe1aa3e6d377c86b6da31c9c3cb3e16->enter($__internal_3e8349ddd791ced1c708f5b24d7357b17fe1aa3e6d377c86b6da31c9c3cb3e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e8349ddd791ced1c708f5b24d7357b17fe1aa3e6d377c86b6da31c9c3cb3e16->leave($__internal_3e8349ddd791ced1c708f5b24d7357b17fe1aa3e6d377c86b6da31c9c3cb3e16_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2f1bb635b831ef6f0b8b77423f472c65765ce22933538747a50a772aacd044f = $this->env->getExtension("native_profiler");
        $__internal_a2f1bb635b831ef6f0b8b77423f472c65765ce22933538747a50a772aacd044f->enter($__internal_a2f1bb635b831ef6f0b8b77423f472c65765ce22933538747a50a772aacd044f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_a2f1bb635b831ef6f0b8b77423f472c65765ce22933538747a50a772aacd044f->leave($__internal_a2f1bb635b831ef6f0b8b77423f472c65765ce22933538747a50a772aacd044f_prof);

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

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
