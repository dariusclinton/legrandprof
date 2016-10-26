<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4a12d206b7dd89a860dd4ad62cd21f0787f674e52d98ce7eed504d9028261e06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89e322945bf0cec341fdd163750b6dd25299ed95ac48ce750896582b77b10df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e322945bf0cec341fdd163750b6dd25299ed95ac48ce750896582b77b10df4->enter($__internal_89e322945bf0cec341fdd163750b6dd25299ed95ac48ce750896582b77b10df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_89e322945bf0cec341fdd163750b6dd25299ed95ac48ce750896582b77b10df4->leave($__internal_89e322945bf0cec341fdd163750b6dd25299ed95ac48ce750896582b77b10df4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_19b25119d019961aeb50838d74b3f9f91eeceb0031b21394fd905886951094e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b25119d019961aeb50838d74b3f9f91eeceb0031b21394fd905886951094e5->enter($__internal_19b25119d019961aeb50838d74b3f9f91eeceb0031b21394fd905886951094e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_19b25119d019961aeb50838d74b3f9f91eeceb0031b21394fd905886951094e5->leave($__internal_19b25119d019961aeb50838d74b3f9f91eeceb0031b21394fd905886951094e5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
