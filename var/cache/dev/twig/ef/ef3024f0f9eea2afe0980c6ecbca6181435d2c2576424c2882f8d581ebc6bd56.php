<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_760d568cbb53013b6301aaf33138d45296907573a3270a183f571ad953597aff extends Twig_Template
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
        $__internal_2b688c76ed1501fdcf67e009be54d534e20c881f545a499d257efbac66506653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b688c76ed1501fdcf67e009be54d534e20c881f545a499d257efbac66506653->enter($__internal_2b688c76ed1501fdcf67e009be54d534e20c881f545a499d257efbac66506653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b688c76ed1501fdcf67e009be54d534e20c881f545a499d257efbac66506653->leave($__internal_2b688c76ed1501fdcf67e009be54d534e20c881f545a499d257efbac66506653_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e954d9b356981cc90fd2963ba0195105faaae7b89d6fed0bd72717a5a41bdc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e954d9b356981cc90fd2963ba0195105faaae7b89d6fed0bd72717a5a41bdc7->enter($__internal_7e954d9b356981cc90fd2963ba0195105faaae7b89d6fed0bd72717a5a41bdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_7e954d9b356981cc90fd2963ba0195105faaae7b89d6fed0bd72717a5a41bdc7->leave($__internal_7e954d9b356981cc90fd2963ba0195105faaae7b89d6fed0bd72717a5a41bdc7_prof);

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
