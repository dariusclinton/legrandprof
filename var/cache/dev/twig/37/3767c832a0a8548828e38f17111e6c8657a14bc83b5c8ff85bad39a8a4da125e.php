<?php

/* LGPUserBundle:SeanceDeCours:update.html.twig */
class __TwigTemplate_f5017a6e72a3b9ebaee211c13d5fb36d550c459ab3df4500ed2a6c72f2cdebc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:SeanceDeCours:update.html.twig", 1);
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
        $__internal_2acada7f65c5ce49388bfe67d4805eb59b5b970f912905fedfe82cdbe398ecbd = $this->env->getExtension("native_profiler");
        $__internal_2acada7f65c5ce49388bfe67d4805eb59b5b970f912905fedfe82cdbe398ecbd->enter($__internal_2acada7f65c5ce49388bfe67d4805eb59b5b970f912905fedfe82cdbe398ecbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2acada7f65c5ce49388bfe67d4805eb59b5b970f912905fedfe82cdbe398ecbd->leave($__internal_2acada7f65c5ce49388bfe67d4805eb59b5b970f912905fedfe82cdbe398ecbd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4cd2b71889e4364f51fb450b8a9fd8cfbdd5929b77f2fb6e41f6374767149a5 = $this->env->getExtension("native_profiler");
        $__internal_d4cd2b71889e4364f51fb450b8a9fd8cfbdd5929b77f2fb6e41f6374767149a5->enter($__internal_d4cd2b71889e4364f51fb450b8a9fd8cfbdd5929b77f2fb6e41f6374767149a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'une séance de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d4cd2b71889e4364f51fb450b8a9fd8cfbdd5929b77f2fb6e41f6374767149a5->leave($__internal_d4cd2b71889e4364f51fb450b8a9fd8cfbdd5929b77f2fb6e41f6374767149a5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_02e6791d057579167b51641dd107e76a6c627ba50e1f9c6052a9b412500d041a = $this->env->getExtension("native_profiler");
        $__internal_02e6791d057579167b51641dd107e76a6c627ba50e1f9c6052a9b412500d041a->enter($__internal_02e6791d057579167b51641dd107e76a6c627ba50e1f9c6052a9b412500d041a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'une séances de cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:SeanceDeCours:formulaire.html.twig", "LGPUserBundle:SeanceDeCours:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_02e6791d057579167b51641dd107e76a6c627ba50e1f9c6052a9b412500d041a->leave($__internal_02e6791d057579167b51641dd107e76a6c627ba50e1f9c6052a9b412500d041a_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:SeanceDeCours:update.html.twig";
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
  Modification d'une séance de cours - {{ parent() }}
{% endblock %}

{% block body %}
  <h1>Modification d'une séances de cours</h1>
  
  {% include 'LGPUserBundle:SeanceDeCours:formulaire.html.twig' %}
  
{% endblock %}";
    }
}
