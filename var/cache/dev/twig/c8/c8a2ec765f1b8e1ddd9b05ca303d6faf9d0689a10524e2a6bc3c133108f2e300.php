<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_79ea177a4101e9774a6c3251f91353cbdc41aa67861dbaad2dd5c921a1bcba5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_cdfdceb2cf44ab5728e7f7c60bab83dd27f0d0e17ead3619e637d6e450b25533 = $this->env->getExtension("native_profiler");
        $__internal_cdfdceb2cf44ab5728e7f7c60bab83dd27f0d0e17ead3619e637d6e450b25533->enter($__internal_cdfdceb2cf44ab5728e7f7c60bab83dd27f0d0e17ead3619e637d6e450b25533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdfdceb2cf44ab5728e7f7c60bab83dd27f0d0e17ead3619e637d6e450b25533->leave($__internal_cdfdceb2cf44ab5728e7f7c60bab83dd27f0d0e17ead3619e637d6e450b25533_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdb71a4ccfc695308c340268f397243c1a30929f833b4fe2758834520fc8a138 = $this->env->getExtension("native_profiler");
        $__internal_cdb71a4ccfc695308c340268f397243c1a30929f833b4fe2758834520fc8a138->enter($__internal_cdb71a4ccfc695308c340268f397243c1a30929f833b4fe2758834520fc8a138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_cdb71a4ccfc695308c340268f397243c1a30929f833b4fe2758834520fc8a138->leave($__internal_cdb71a4ccfc695308c340268f397243c1a30929f833b4fe2758834520fc8a138_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
  {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
