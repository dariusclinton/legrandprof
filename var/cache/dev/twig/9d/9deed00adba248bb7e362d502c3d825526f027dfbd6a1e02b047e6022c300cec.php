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
        $__internal_4404844cb2c373e1ecffc735e721a9f23baf014189b9bf79c04cdfc3a7d62f4d = $this->env->getExtension("native_profiler");
        $__internal_4404844cb2c373e1ecffc735e721a9f23baf014189b9bf79c04cdfc3a7d62f4d->enter($__internal_4404844cb2c373e1ecffc735e721a9f23baf014189b9bf79c04cdfc3a7d62f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4404844cb2c373e1ecffc735e721a9f23baf014189b9bf79c04cdfc3a7d62f4d->leave($__internal_4404844cb2c373e1ecffc735e721a9f23baf014189b9bf79c04cdfc3a7d62f4d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0da6fe4f6232bc91c12d1667260c3aaa07c09868f8748005ef87fb73685c92ea = $this->env->getExtension("native_profiler");
        $__internal_0da6fe4f6232bc91c12d1667260c3aaa07c09868f8748005ef87fb73685c92ea->enter($__internal_0da6fe4f6232bc91c12d1667260c3aaa07c09868f8748005ef87fb73685c92ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0da6fe4f6232bc91c12d1667260c3aaa07c09868f8748005ef87fb73685c92ea->leave($__internal_0da6fe4f6232bc91c12d1667260c3aaa07c09868f8748005ef87fb73685c92ea_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_def7bf97f2f169162ec79a57ce4dc7175902a47234cde5a681d8c389661eb876 = $this->env->getExtension("native_profiler");
        $__internal_def7bf97f2f169162ec79a57ce4dc7175902a47234cde5a681d8c389661eb876->enter($__internal_def7bf97f2f169162ec79a57ce4dc7175902a47234cde5a681d8c389661eb876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Cours:formulaire.html.twig", "LGPUserBundle:Cours:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_def7bf97f2f169162ec79a57ce4dc7175902a47234cde5a681d8c389661eb876->leave($__internal_def7bf97f2f169162ec79a57ce4dc7175902a47234cde5a681d8c389661eb876_prof);

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
