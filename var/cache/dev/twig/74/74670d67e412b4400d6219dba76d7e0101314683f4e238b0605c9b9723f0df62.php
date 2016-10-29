<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_dad2cae64d39fce7d188db1e06f2133d500c896dad7c542fea87f74449bf5185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_da83c48aa860552a641f1648472fabb4e9519638985328a31c1a7c5f0b47ab31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da83c48aa860552a641f1648472fabb4e9519638985328a31c1a7c5f0b47ab31->enter($__internal_da83c48aa860552a641f1648472fabb4e9519638985328a31c1a7c5f0b47ab31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da83c48aa860552a641f1648472fabb4e9519638985328a31c1a7c5f0b47ab31->leave($__internal_da83c48aa860552a641f1648472fabb4e9519638985328a31c1a7c5f0b47ab31_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a056da882c5403a2acd4a2a1fd87fb52c9f8ef86d489e30e9f3fe5616dae1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a056da882c5403a2acd4a2a1fd87fb52c9f8ef86d489e30e9f3fe5616dae1ba->enter($__internal_5a056da882c5403a2acd4a2a1fd87fb52c9f8ef86d489e30e9f3fe5616dae1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5a056da882c5403a2acd4a2a1fd87fb52c9f8ef86d489e30e9f3fe5616dae1ba->leave($__internal_5a056da882c5403a2acd4a2a1fd87fb52c9f8ef86d489e30e9f3fe5616dae1ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
