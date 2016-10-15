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
        $__internal_2c09893f41e103fefff78440454e14d13b68b74fa097acbe996f51cbaf44d21a = $this->env->getExtension("native_profiler");
        $__internal_2c09893f41e103fefff78440454e14d13b68b74fa097acbe996f51cbaf44d21a->enter($__internal_2c09893f41e103fefff78440454e14d13b68b74fa097acbe996f51cbaf44d21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c09893f41e103fefff78440454e14d13b68b74fa097acbe996f51cbaf44d21a->leave($__internal_2c09893f41e103fefff78440454e14d13b68b74fa097acbe996f51cbaf44d21a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39d768faf5f94673555149704a453d24efcad5723e6a4d330dd2a4ada52952fd = $this->env->getExtension("native_profiler");
        $__internal_39d768faf5f94673555149704a453d24efcad5723e6a4d330dd2a4ada52952fd->enter($__internal_39d768faf5f94673555149704a453d24efcad5723e6a4d330dd2a4ada52952fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_39d768faf5f94673555149704a453d24efcad5723e6a4d330dd2a4ada52952fd->leave($__internal_39d768faf5f94673555149704a453d24efcad5723e6a4d330dd2a4ada52952fd_prof);

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
