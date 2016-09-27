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
        $__internal_2547899f1a178a2729940390d15b5d99e62a9380638002eefe6e36a15d71cc6e = $this->env->getExtension("native_profiler");
        $__internal_2547899f1a178a2729940390d15b5d99e62a9380638002eefe6e36a15d71cc6e->enter($__internal_2547899f1a178a2729940390d15b5d99e62a9380638002eefe6e36a15d71cc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:SeanceDeCours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2547899f1a178a2729940390d15b5d99e62a9380638002eefe6e36a15d71cc6e->leave($__internal_2547899f1a178a2729940390d15b5d99e62a9380638002eefe6e36a15d71cc6e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3f3ac3e8a2ed6864172dde9812497788fea3533ad9bbb14d2383ccf7e71a2b8 = $this->env->getExtension("native_profiler");
        $__internal_f3f3ac3e8a2ed6864172dde9812497788fea3533ad9bbb14d2383ccf7e71a2b8->enter($__internal_f3f3ac3e8a2ed6864172dde9812497788fea3533ad9bbb14d2383ccf7e71a2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'une séance de cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f3f3ac3e8a2ed6864172dde9812497788fea3533ad9bbb14d2383ccf7e71a2b8->leave($__internal_f3f3ac3e8a2ed6864172dde9812497788fea3533ad9bbb14d2383ccf7e71a2b8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d2e2366305dc6190ac07d2d5b0b31c27831cb7bbf2116e5b9843280f25a3e94 = $this->env->getExtension("native_profiler");
        $__internal_4d2e2366305dc6190ac07d2d5b0b31c27831cb7bbf2116e5b9843280f25a3e94->enter($__internal_4d2e2366305dc6190ac07d2d5b0b31c27831cb7bbf2116e5b9843280f25a3e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'une séances de cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:SeanceDeCours:formulaire.html.twig", "LGPUserBundle:SeanceDeCours:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_4d2e2366305dc6190ac07d2d5b0b31c27831cb7bbf2116e5b9843280f25a3e94->leave($__internal_4d2e2366305dc6190ac07d2d5b0b31c27831cb7bbf2116e5b9843280f25a3e94_prof);

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
