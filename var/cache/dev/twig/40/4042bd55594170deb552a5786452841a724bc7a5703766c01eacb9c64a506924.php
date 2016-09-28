<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_42cfbfb6741769ca2075c566da8f902c19e3935fe0db0961b599b2c0c81605e2 extends Twig_Template
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
        $__internal_d92d1a67ddfb3469bb0871d5acfbb08fecc7f957b342499f6b889b1eadec3f8b = $this->env->getExtension("native_profiler");
        $__internal_d92d1a67ddfb3469bb0871d5acfbb08fecc7f957b342499f6b889b1eadec3f8b->enter($__internal_d92d1a67ddfb3469bb0871d5acfbb08fecc7f957b342499f6b889b1eadec3f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d92d1a67ddfb3469bb0871d5acfbb08fecc7f957b342499f6b889b1eadec3f8b->leave($__internal_d92d1a67ddfb3469bb0871d5acfbb08fecc7f957b342499f6b889b1eadec3f8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac77ae525fac461d156b08c1dd8e0a31068b4cd680c4b727e377778f7aae4cbc = $this->env->getExtension("native_profiler");
        $__internal_ac77ae525fac461d156b08c1dd8e0a31068b4cd680c4b727e377778f7aae4cbc->enter($__internal_ac77ae525fac461d156b08c1dd8e0a31068b4cd680c4b727e377778f7aae4cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ac77ae525fac461d156b08c1dd8e0a31068b4cd680c4b727e377778f7aae4cbc->leave($__internal_ac77ae525fac461d156b08c1dd8e0a31068b4cd680c4b727e377778f7aae4cbc_prof);

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

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
