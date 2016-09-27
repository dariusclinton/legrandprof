<?php

/* LGPUserBundle:Cours:update.html.twig */
class __TwigTemplate_29c8667ecb8ddde55e0251a04ff2f7399af7da435ad0bb53fcb16b58c87308c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Cours:update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe91a2053cb7ce3eefd345ff0ca28d3bd4d498adedaa929523d6272f947880b7 = $this->env->getExtension("native_profiler");
        $__internal_fe91a2053cb7ce3eefd345ff0ca28d3bd4d498adedaa929523d6272f947880b7->enter($__internal_fe91a2053cb7ce3eefd345ff0ca28d3bd4d498adedaa929523d6272f947880b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe91a2053cb7ce3eefd345ff0ca28d3bd4d498adedaa929523d6272f947880b7->leave($__internal_fe91a2053cb7ce3eefd345ff0ca28d3bd4d498adedaa929523d6272f947880b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b47d5c729c45c5701ed787cee822f60c5a95cb253aab11adbcf12b53cb87710 = $this->env->getExtension("native_profiler");
        $__internal_4b47d5c729c45c5701ed787cee822f60c5a95cb253aab11adbcf12b53cb87710->enter($__internal_4b47d5c729c45c5701ed787cee822f60c5a95cb253aab11adbcf12b53cb87710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4b47d5c729c45c5701ed787cee822f60c5a95cb253aab11adbcf12b53cb87710->leave($__internal_4b47d5c729c45c5701ed787cee822f60c5a95cb253aab11adbcf12b53cb87710_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2e92268a58638c1362d25fed5f9bd10b430b937b4e6dbb57dc2426dcfea8282 = $this->env->getExtension("native_profiler");
        $__internal_e2e92268a58638c1362d25fed5f9bd10b430b937b4e6dbb57dc2426dcfea8282->enter($__internal_e2e92268a58638c1362d25fed5f9bd10b430b937b4e6dbb57dc2426dcfea8282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Cours:formulaire.html.twig", "LGPUserBundle:Cours:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_e2e92268a58638c1362d25fed5f9bd10b430b937b4e6dbb57dc2426dcfea8282->leave($__internal_e2e92268a58638c1362d25fed5f9bd10b430b937b4e6dbb57dc2426dcfea8282_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Cours:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Modification d'un cours - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Modification d'un cours</h1>
  
  {% include 'LGPUserBundle:Cours:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
