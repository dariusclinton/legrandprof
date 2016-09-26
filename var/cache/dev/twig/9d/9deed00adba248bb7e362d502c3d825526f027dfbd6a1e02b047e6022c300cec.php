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
        $__internal_8e2876bda6681758339bd2fc95b790e421f1df2053ad85c1ee3aee82748fda40 = $this->env->getExtension("native_profiler");
        $__internal_8e2876bda6681758339bd2fc95b790e421f1df2053ad85c1ee3aee82748fda40->enter($__internal_8e2876bda6681758339bd2fc95b790e421f1df2053ad85c1ee3aee82748fda40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e2876bda6681758339bd2fc95b790e421f1df2053ad85c1ee3aee82748fda40->leave($__internal_8e2876bda6681758339bd2fc95b790e421f1df2053ad85c1ee3aee82748fda40_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aca8663977a060c51c2228fd52a739914cfaeb61aed5507ccf89bd77965db625 = $this->env->getExtension("native_profiler");
        $__internal_aca8663977a060c51c2228fd52a739914cfaeb61aed5507ccf89bd77965db625->enter($__internal_aca8663977a060c51c2228fd52a739914cfaeb61aed5507ccf89bd77965db625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aca8663977a060c51c2228fd52a739914cfaeb61aed5507ccf89bd77965db625->leave($__internal_aca8663977a060c51c2228fd52a739914cfaeb61aed5507ccf89bd77965db625_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_92a80c41b6089ffa02b54ac3e78dd7cd10407c45fadad45a9bb328ce2adb7018 = $this->env->getExtension("native_profiler");
        $__internal_92a80c41b6089ffa02b54ac3e78dd7cd10407c45fadad45a9bb328ce2adb7018->enter($__internal_92a80c41b6089ffa02b54ac3e78dd7cd10407c45fadad45a9bb328ce2adb7018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un cours</h1>
  
  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Cours:formulaire.html.twig", "LGPUserBundle:Cours:update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_92a80c41b6089ffa02b54ac3e78dd7cd10407c45fadad45a9bb328ce2adb7018->leave($__internal_92a80c41b6089ffa02b54ac3e78dd7cd10407c45fadad45a9bb328ce2adb7018_prof);

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
