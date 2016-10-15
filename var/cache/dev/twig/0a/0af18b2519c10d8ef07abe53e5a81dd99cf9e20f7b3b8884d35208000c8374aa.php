<?php

/* LGPUserBundle:Cours:formulaire.html.twig */
class __TwigTemplate_f08931f2d57aeef9f478048c163460d0205a8a65169a5c0356336dd475aec555 extends Twig_Template
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
        $__internal_4eb1a3b9f7b039de2427c461a81207459d66a0598b4f21344fe3a0085460f9bf = $this->env->getExtension("native_profiler");
        $__internal_4eb1a3b9f7b039de2427c461a81207459d66a0598b4f21344fe3a0085460f9bf->enter($__internal_4eb1a3b9f7b039de2427c461a81207459d66a0598b4f21344fe3a0085460f9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Cours:formulaire.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"row\">
    <div class=\"col-md-2\">";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'label', array("label_attr" => array(), "label" => "Classe :"));
        echo "</div>
    <div class=\"col-md-4\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Entrez une classe")));
        echo "</div>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'errors');
        echo "
</div><br>
<div class=\"row\">
    <div class=\"col-md-2\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'label', array("label_attr" => array(), "label" => "Prix /heure :"));
        echo "</div>
    <div class=\"col-md-4\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Entrez le prix d'une heure")));
        echo "</div>
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'errors');
        echo "
</div><br>
<div class=\"row\">
    <div class=\"col-md-2\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cours", array()), 'label', array("label_attr" => array(), "label" => "Intitulé du cours :"));
        echo "</div>
    <div class=\"col-md-4\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cours", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cours", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
  <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Enregistrer\">
</div>
  <br>
";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_4eb1a3b9f7b039de2427c461a81207459d66a0598b4f21344fe3a0085460f9bf->leave($__internal_4eb1a3b9f7b039de2427c461a81207459d66a0598b4f21344fe3a0085460f9bf_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Cours:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  79 => 25,  69 => 18,  65 => 17,  61 => 16,  55 => 13,  51 => 12,  47 => 11,  41 => 8,  37 => 7,  33 => 6,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}

{{ form_errors(form) }}

<div class=\"row\">
    <div class=\"col-md-2\">{{ form_label(form.classe, 'Classe :', {'label_attr': {}}) }}</div>
    <div class=\"col-md-4\">{{ form_widget(form.classe, {'attr': {'class':'form-control', 'placeholder':'Entrez une classe'}}) }}</div>
    {{ form_errors(form.classe) }}
</div><br>
<div class=\"row\">
    <div class=\"col-md-2\">{{ form_label(form.prix, 'Prix /heure :', {'label_attr': {}}) }}</div>
    <div class=\"col-md-4\">{{ form_widget(form.prix, {'attr': {'class':'form-control', \"placeholder\":\"Entrez le prix d'une heure\"}}) }}</div>
    {{ form_errors(form.prix) }}
</div><br>
<div class=\"row\">
    <div class=\"col-md-2\">{{ form_label(form.cours, 'Intitulé du cours :', {'label_attr': {}}) }}</div>
    <div class=\"col-md-4\">{{ form_widget(form.cours, {'attr': {'class':'form-control'}}) }}</div>
    {{ form_errors(form.cours) }}
</div>

<div class=\"form-group\">
  <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Enregistrer\">
</div>
  <br>
{{ form_rest(form) }}

{{ form_end(form) }}";
    }
}
