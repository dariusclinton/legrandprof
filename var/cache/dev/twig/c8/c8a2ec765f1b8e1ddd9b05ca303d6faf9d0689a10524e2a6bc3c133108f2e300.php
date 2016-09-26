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
        $__internal_d30e7cbc74c61e9b1f9d8974c97a0146eeb41ad8a8191dc58f3d2a699cfd3a25 = $this->env->getExtension("native_profiler");
        $__internal_d30e7cbc74c61e9b1f9d8974c97a0146eeb41ad8a8191dc58f3d2a699cfd3a25->enter($__internal_d30e7cbc74c61e9b1f9d8974c97a0146eeb41ad8a8191dc58f3d2a699cfd3a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d30e7cbc74c61e9b1f9d8974c97a0146eeb41ad8a8191dc58f3d2a699cfd3a25->leave($__internal_d30e7cbc74c61e9b1f9d8974c97a0146eeb41ad8a8191dc58f3d2a699cfd3a25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a438ff7003ec6dcc0c6116426f1f37020c895898f2e8c63aef063181483e5e2c = $this->env->getExtension("native_profiler");
        $__internal_a438ff7003ec6dcc0c6116426f1f37020c895898f2e8c63aef063181483e5e2c->enter($__internal_a438ff7003ec6dcc0c6116426f1f37020c895898f2e8c63aef063181483e5e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a438ff7003ec6dcc0c6116426f1f37020c895898f2e8c63aef063181483e5e2c->leave($__internal_a438ff7003ec6dcc0c6116426f1f37020c895898f2e8c63aef063181483e5e2c_prof);

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
