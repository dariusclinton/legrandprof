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
        $__internal_520f613aa7624ea26069c5fa903efe5bc68a15bc7561a3400824a2fc687fe52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520f613aa7624ea26069c5fa903efe5bc68a15bc7561a3400824a2fc687fe52c->enter($__internal_520f613aa7624ea26069c5fa903efe5bc68a15bc7561a3400824a2fc687fe52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_520f613aa7624ea26069c5fa903efe5bc68a15bc7561a3400824a2fc687fe52c->leave($__internal_520f613aa7624ea26069c5fa903efe5bc68a15bc7561a3400824a2fc687fe52c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd044f0bf01a37ab0c884b88cc9dd59b6d27ed70655670bd9056b25408e3264a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd044f0bf01a37ab0c884b88cc9dd59b6d27ed70655670bd9056b25408e3264a->enter($__internal_bd044f0bf01a37ab0c884b88cc9dd59b6d27ed70655670bd9056b25408e3264a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_bd044f0bf01a37ab0c884b88cc9dd59b6d27ed70655670bd9056b25408e3264a->leave($__internal_bd044f0bf01a37ab0c884b88cc9dd59b6d27ed70655670bd9056b25408e3264a_prof);

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
