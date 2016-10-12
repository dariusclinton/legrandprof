<?php

/* LGPUserBundle:Message:new.html.twig */
class __TwigTemplate_c951c3c5f1069f623532ea5eb7f47ad4fab0f9d9bbda7f5679e0c0f3dab3c13c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Message:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd9134e0b3deeb8953ca8158df78d44661c97f5015d098d376fd690e5bf06e5c = $this->env->getExtension("native_profiler");
        $__internal_cd9134e0b3deeb8953ca8158df78d44661c97f5015d098d376fd690e5bf06e5c->enter($__internal_cd9134e0b3deeb8953ca8158df78d44661c97f5015d098d376fd690e5bf06e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd9134e0b3deeb8953ca8158df78d44661c97f5015d098d376fd690e5bf06e5c->leave($__internal_cd9134e0b3deeb8953ca8158df78d44661c97f5015d098d376fd690e5bf06e5c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad802930b3a9b8c5b447aa94f325d4c5722401a4e6858fb0ae52c0cef23fe646 = $this->env->getExtension("native_profiler");
        $__internal_ad802930b3a9b8c5b447aa94f325d4c5722401a4e6858fb0ae52c0cef23fe646->enter($__internal_ad802930b3a9b8c5b447aa94f325d4c5722401a4e6858fb0ae52c0cef23fe646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Envoi de message - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ad802930b3a9b8c5b447aa94f325d4c5722401a4e6858fb0ae52c0cef23fe646->leave($__internal_ad802930b3a9b8c5b447aa94f325d4c5722401a4e6858fb0ae52c0cef23fe646_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_1c535f25baf3a97bc225f1611d748767d7c2d1d187cabd518ca5d5f22b74e721 = $this->env->getExtension("native_profiler");
        $__internal_1c535f25baf3a97bc225f1611d748767d7c2d1d187cabd518ca5d5f22b74e721->enter($__internal_1c535f25baf3a97bc225f1611d748767d7c2d1d187cabd518ca5d5f22b74e721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_1c535f25baf3a97bc225f1611d748767d7c2d1d187cabd518ca5d5f22b74e721->leave($__internal_1c535f25baf3a97bc225f1611d748767d7c2d1d187cabd518ca5d5f22b74e721_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ea31e6791d6edf6ca8366e2b60035b6677091f15e38046a16c9c6dcc7b4ad69 = $this->env->getExtension("native_profiler");
        $__internal_7ea31e6791d6edf6ca8366e2b60035b6677091f15e38046a16c9c6dcc7b4ad69->enter($__internal_7ea31e6791d6edf6ca8366e2b60035b6677091f15e38046a16c9c6dcc7b4ad69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  <div class=\"form-group\">
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'label', array("label_attr" => array(), "label" => "Objet du message"));
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'widget', array("attr" => array()));
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'errors');
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recepteur", array()), 'label', array("label_attr" => array(), "label" => "Récepteur"));
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recepteur", array()), 'widget', array("attr" => array()));
        echo "
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recepteur", array()), 'errors');
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'label', array("label_attr" => array(), "label" => "Message"));
        echo "
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array()));
        echo "
    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
  </div>

    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\">

    ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  ";
        
        $__internal_7ea31e6791d6edf6ca8366e2b60035b6677091f15e38046a16c9c6dcc7b4ad69->leave($__internal_7ea31e6791d6edf6ca8366e2b60035b6677091f15e38046a16c9c6dcc7b4ad69_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Message:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 38,  130 => 34,  124 => 31,  120 => 30,  116 => 29,  109 => 25,  105 => 24,  101 => 23,  94 => 19,  90 => 18,  86 => 17,  80 => 14,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Envoi de message - {{ parent() }}
{% endblock %}

{% block header_submenu %}
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}
  {{ form_start(form) }}

  {{ form_errors(form) }}

  <div class=\"form-group\">
    {{ form_label(form.objet, 'Objet du message', {'label_attr': {}}) }}
    {{ form_widget(form.objet, {'attr': {}}) }}
    {{ form_errors(form.objet)}}
  </div>

  <div class=\"form-group\">
    {{ form_label(form.recepteur, 'Récepteur', {'label_attr': {}}) }}
    {{ form_widget(form.recepteur, {'attr': {}}) }}
    {{ form_errors(form.recepteur)}}
  </div>

  <div class=\"form-group\">
    {{ form_label(form.contenu, 'Message', {'label_attr': {}}) }}
    {{ form_widget(form.contenu, {'attr': {}}) }}
    {{ form_errors(form.contenu)}}
  </div>

    {{ form_rest(form) }}

    <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\">

    {{ form_end(form) }}
  {% endblock %}";
    }
}
