<?php

/* LGPUserBundle:Anomalie:formulaire.html.twig */
class __TwigTemplate_cd62f80d3c36b5749b0ad2ffcb2b697aea0c3a61e100815809aa9651c722902f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d8bdef8b003c67b93277bc9e9373e3eb23afcb30b59062f5f873589d7dbe8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8bdef8b003c67b93277bc9e9373e3eb23afcb30b59062f5f873589d7dbe8ac->enter($__internal_7d8bdef8b003c67b93277bc9e9373e3eb23afcb30b59062f5f873589d7dbe8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:formulaire.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"form-group\">
    <div class='row'>
        <div class='col-md-3'>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Objet de l'anomalie"));
        echo "</div>
        <div class='col-md-4'>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'errors');
        echo "
    </div>
</div>

<div class=\"form-group\">
    <div class='row'>
        <div class='col-md-3'>";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Contenu"));
        echo "</div>
        <div class='col-md-4'>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
    </div>
</div>

";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<input type=\"submit\" class=\"btn btn-primary\" value='Soumettre'/>

";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_7d8bdef8b003c67b93277bc9e9373e3eb23afcb30b59062f5f873589d7dbe8ac->leave($__internal_7d8bdef8b003c67b93277bc9e9373e3eb23afcb30b59062f5f873589d7dbe8ac_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Anomalie:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  66 => 21,  59 => 17,  55 => 16,  51 => 15,  42 => 9,  38 => 8,  34 => 7,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}

{{ form_errors(form) }}

<div class=\"form-group\">
    <div class='row'>
        <div class='col-md-3'>{{ form_label(form.objet, \"Objet de l'anomalie\", {'label_attr': {'class': 'control-label'}}) }}</div>
        <div class='col-md-4'>{{ form_widget(form.objet, {'attr': {'class': 'form-control'}}) }}</div>
        {{ form_errors(form.objet) }}
    </div>
</div>

<div class=\"form-group\">
    <div class='row'>
        <div class='col-md-3'>{{ form_label(form.contenu, \"Contenu\", {'label_attr': {'class': 'control-label'}}) }}</div>
        <div class='col-md-4'>{{ form_widget(form.contenu, {'attr': {'class': 'form-control'}}) }}</div>
        {{ form_errors(form.contenu) }}
    </div>
</div>

{{ form_rest(form) }}

<input type=\"submit\" class=\"btn btn-primary\" value='Soumettre'/>

{{ form_end(form) }}";
    }
}
