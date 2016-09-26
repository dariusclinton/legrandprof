<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_fd4abe4e58b39b59a1c53c0d1d9dc0ec81ab125cd4b88e060c60dfbf71072d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_9cd9917c6d4410c0b3f305394a879394e2f2c63b3e6c8c967c31a7a99bad9c67 = $this->env->getExtension("native_profiler");
        $__internal_9cd9917c6d4410c0b3f305394a879394e2f2c63b3e6c8c967c31a7a99bad9c67->enter($__internal_9cd9917c6d4410c0b3f305394a879394e2f2c63b3e6c8c967c31a7a99bad9c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cd9917c6d4410c0b3f305394a879394e2f2c63b3e6c8c967c31a7a99bad9c67->leave($__internal_9cd9917c6d4410c0b3f305394a879394e2f2c63b3e6c8c967c31a7a99bad9c67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e426e6387f381087a6daaf23a095634be3226d4eb5a61578e2ad24b36e6130b = $this->env->getExtension("native_profiler");
        $__internal_8e426e6387f381087a6daaf23a095634be3226d4eb5a61578e2ad24b36e6130b->enter($__internal_8e426e6387f381087a6daaf23a095634be3226d4eb5a61578e2ad24b36e6130b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_8e426e6387f381087a6daaf23a095634be3226d4eb5a61578e2ad24b36e6130b->leave($__internal_8e426e6387f381087a6daaf23a095634be3226d4eb5a61578e2ad24b36e6130b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
