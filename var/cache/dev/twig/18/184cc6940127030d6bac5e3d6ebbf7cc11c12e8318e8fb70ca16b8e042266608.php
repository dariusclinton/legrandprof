<?php

/* LGPUserBundle:Avis:update.html.twig */
class __TwigTemplate_441dc54e3edf3c254a14e708c88678c33b58742741d6c45f5f56afb80f44cdb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:update.html.twig", 1);
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
        $__internal_184c94c95286e7508bad7555ccdb3dd5b149b752bf7fde83c5dbc22eef939009 = $this->env->getExtension("native_profiler");
        $__internal_184c94c95286e7508bad7555ccdb3dd5b149b752bf7fde83c5dbc22eef939009->enter($__internal_184c94c95286e7508bad7555ccdb3dd5b149b752bf7fde83c5dbc22eef939009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_184c94c95286e7508bad7555ccdb3dd5b149b752bf7fde83c5dbc22eef939009->leave($__internal_184c94c95286e7508bad7555ccdb3dd5b149b752bf7fde83c5dbc22eef939009_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b8e8b5fe15a7a75b9884ba3693ccda45f071bbe27c13cc0b2bae5e38ae39b69 = $this->env->getExtension("native_profiler");
        $__internal_1b8e8b5fe15a7a75b9884ba3693ccda45f071bbe27c13cc0b2bae5e38ae39b69->enter($__internal_1b8e8b5fe15a7a75b9884ba3693ccda45f071bbe27c13cc0b2bae5e38ae39b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1b8e8b5fe15a7a75b9884ba3693ccda45f071bbe27c13cc0b2bae5e38ae39b69->leave($__internal_1b8e8b5fe15a7a75b9884ba3693ccda45f071bbe27c13cc0b2bae5e38ae39b69_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_38edeb4d6b07824e22fdcc17cdcf3a94617fbd9a3f9eec4e67cfbd41df625b65 = $this->env->getExtension("native_profiler");
        $__internal_38edeb4d6b07824e22fdcc17cdcf3a94617fbd9a3f9eec4e67cfbd41df625b65->enter($__internal_38edeb4d6b07824e22fdcc17cdcf3a94617fbd9a3f9eec4e67cfbd41df625b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_38edeb4d6b07824e22fdcc17cdcf3a94617fbd9a3f9eec4e67cfbd41df625b65->leave($__internal_38edeb4d6b07824e22fdcc17cdcf3a94617fbd9a3f9eec4e67cfbd41df625b65_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:update.html.twig";
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
  Modification d'un avis - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Modification d'un avis</h1>

  {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}
  
{% endblock %}";
    }
}
