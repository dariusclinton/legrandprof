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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2452989a7e32def316a8bc789b7294f8d4339b03f61f90889446c4578732a453 = $this->env->getExtension("native_profiler");
        $__internal_2452989a7e32def316a8bc789b7294f8d4339b03f61f90889446c4578732a453->enter($__internal_2452989a7e32def316a8bc789b7294f8d4339b03f61f90889446c4578732a453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2452989a7e32def316a8bc789b7294f8d4339b03f61f90889446c4578732a453->leave($__internal_2452989a7e32def316a8bc789b7294f8d4339b03f61f90889446c4578732a453_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dad89d691cf25ef6b9ade9f7909646a4143b2e8565fd430a606fabc38fb01ca3 = $this->env->getExtension("native_profiler");
        $__internal_dad89d691cf25ef6b9ade9f7909646a4143b2e8565fd430a606fabc38fb01ca3->enter($__internal_dad89d691cf25ef6b9ade9f7909646a4143b2e8565fd430a606fabc38fb01ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Envoi de message - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dad89d691cf25ef6b9ade9f7909646a4143b2e8565fd430a606fabc38fb01ca3->leave($__internal_dad89d691cf25ef6b9ade9f7909646a4143b2e8565fd430a606fabc38fb01ca3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cf7f2f0269847f4be22d8422f1eaae9fd2fc52eab2a91842aa3f75747dfdf99 = $this->env->getExtension("native_profiler");
        $__internal_3cf7f2f0269847f4be22d8422f1eaae9fd2fc52eab2a91842aa3f75747dfdf99->enter($__internal_3cf7f2f0269847f4be22d8422f1eaae9fd2fc52eab2a91842aa3f75747dfdf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

  ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  <div class=\"form-group\">
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'label', array("label_attr" => array(), "label" => "Objet du message"));
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'widget', array("attr" => array()));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'errors');
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recepteur", array()), 'label', array("label_attr" => array(), "label" => "Récepteur"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recepteur", array()), 'widget', array("attr" => array()));
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recepteur", array()), 'errors');
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'label', array("label_attr" => array(), "label" => "Message"));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array()));
        echo "
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
  </div>

    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\">

    ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  ";
        
        $__internal_3cf7f2f0269847f4be22d8422f1eaae9fd2fc52eab2a91842aa3f75747dfdf99->leave($__internal_3cf7f2f0269847f4be22d8422f1eaae9fd2fc52eab2a91842aa3f75747dfdf99_prof);

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
        return array (  120 => 34,  113 => 30,  107 => 27,  103 => 26,  99 => 25,  92 => 21,  88 => 20,  84 => 19,  77 => 15,  73 => 14,  69 => 13,  63 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Envoi de message - {{ parent() }}
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
