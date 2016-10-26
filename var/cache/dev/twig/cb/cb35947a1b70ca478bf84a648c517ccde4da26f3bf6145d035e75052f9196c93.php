<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_17eb534f6c255540da2e9a315b12e5c2cbb8ce4d6421bdae09fb284b465279e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b389edfe7331c0187f7a2e89d8fed839ee8e30b62fe6cc5cdef2a3264c44475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b389edfe7331c0187f7a2e89d8fed839ee8e30b62fe6cc5cdef2a3264c44475->enter($__internal_1b389edfe7331c0187f7a2e89d8fed839ee8e30b62fe6cc5cdef2a3264c44475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b389edfe7331c0187f7a2e89d8fed839ee8e30b62fe6cc5cdef2a3264c44475->leave($__internal_1b389edfe7331c0187f7a2e89d8fed839ee8e30b62fe6cc5cdef2a3264c44475_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1588c658741bf285b3a9c1b3da34abbe8c83d79e7ac4308d55629043b3276e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1588c658741bf285b3a9c1b3da34abbe8c83d79e7ac4308d55629043b3276e4c->enter($__internal_1588c658741bf285b3a9c1b3da34abbe8c83d79e7ac4308d55629043b3276e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_1588c658741bf285b3a9c1b3da34abbe8c83d79e7ac4308d55629043b3276e4c->leave($__internal_1588c658741bf285b3a9c1b3da34abbe8c83d79e7ac4308d55629043b3276e4c_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"::layout.html.twig\" %}

{% block body %}



{% endblock %}
";
    }
}
