<?php

/* LGPUserBundle:Cours:formulaire.html.twig */
class __TwigTemplate_313c4460d703d5e99a9c4994ef83120af41b23dffc12071ad245e28ebaf7f012 extends Twig_Template
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
        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

<div class=\"row\">
    <div class=\"col-md-2\">";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classe", array()), 'label', array("label_attr" => array(), "label" => "Classe :"));
        echo "</div>
    <div class=\"col-md-4\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classe", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Entrez une classe")));
        echo "</div>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classe", array()), 'errors');
        echo "
</div><br>
<div class=\"row\">
    <div class=\"col-md-2\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix", array()), 'label', array("label_attr" => array(), "label" => "Prix /heure :"));
        echo "</div>
    <div class=\"col-md-4\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Entrez le prix d'une heure")));
        echo "</div>
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix", array()), 'errors');
        echo "
</div><br>
<div class=\"row\">
    <div class=\"col-md-2\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cours", array()), 'label', array("label_attr" => array(), "label" => "Intitulé du cours :"));
        echo "</div>
    <div class=\"col-md-4\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cours", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cours", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
  <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Enregistrer\">
</div>
  <br>
";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
        return array (  81 => 27,  76 => 25,  66 => 18,  62 => 17,  58 => 16,  52 => 13,  48 => 12,  44 => 11,  38 => 8,  34 => 7,  30 => 6,  24 => 3,  19 => 1,);
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
