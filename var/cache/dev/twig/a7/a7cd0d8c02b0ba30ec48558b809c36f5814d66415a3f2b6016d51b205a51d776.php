<?php

/* LGPUserBundle:Avis:formulaire.html.twig */
class __TwigTemplate_6f2a143df1b399d4bae36c50efa2d49f456a2371905e90671c591c341fea1f61 extends Twig_Template
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
        $__internal_571a556a33780beb0995bf4bb59f4f13e2dcfe7281c94d7616b844b25e7c2ad1 = $this->env->getExtension("native_profiler");
        $__internal_571a556a33780beb0995bf4bb59f4f13e2dcfe7281c94d7616b844b25e7c2ad1->enter($__internal_571a556a33780beb0995bf4bb59f4f13e2dcfe7281c94d7616b844b25e7c2ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:formulaire.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<div class='row'>
    <div class='col-md-3'>";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'label', array("label_attr" => array(), "label" => "Note /5"));
        echo " : </div>
    <div class='col-md-4'>
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget', array("attr" => array()));
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'errors');
        echo "
    </div>
</div>
    <br>
<div class='row'>
    <div class='col-md-3'>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'label', array("label_attr" => array(), "label" => "Commentaire"));
        echo "</div>
    <div class='col-md-4'>
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array()));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
    </div>
</div>
    <br>
<div class='row'>
";
        // line 21
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prof", array(), "any", true, true)) {
            // line 22
            echo "    <div class='col-md-3'>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prof", array()), 'label', array("label_attr" => array(), "label" => "Veuillez choisir le prof"));
            echo "</div>
    <div class='col-md-4'>
        ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prof", array()), 'widget', array("attr" => array()));
            echo "
        ";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prof", array()), 'errors');
            echo "
    </div>
";
        }
        // line 28
        echo "</div><br>
";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\">

";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_571a556a33780beb0995bf4bb59f4f13e2dcfe7281c94d7616b844b25e7c2ad1->leave($__internal_571a556a33780beb0995bf4bb59f4f13e2dcfe7281c94d7616b844b25e7c2ad1_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  87 => 29,  84 => 28,  78 => 25,  74 => 24,  68 => 22,  66 => 21,  58 => 16,  54 => 15,  49 => 13,  41 => 8,  37 => 7,  32 => 5,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}

{{ form_errors(form) }}
<div class='row'>
    <div class='col-md-3'>{{ form_label(form.note, 'Note /5', {'label_attr': {}}) }} : </div>
    <div class='col-md-4'>
        {{ form_widget(form.note, {'attr': {}}) }}
        {{ form_errors(form.note) }}
    </div>
</div>
    <br>
<div class='row'>
    <div class='col-md-3'>{{ form_label(form.commentaire, 'Commentaire', {'label_attr': {}}) }}</div>
    <div class='col-md-4'>
        {{ form_widget(form.commentaire, {'attr': {}}) }}
        {{ form_errors(form.commentaire) }}
    </div>
</div>
    <br>
<div class='row'>
{% if form.prof is defined %}
    <div class='col-md-3'>{{ form_label(form.prof, 'Veuillez choisir le prof', {'label_attr': {}}) }}</div>
    <div class='col-md-4'>
        {{ form_widget(form.prof, {'attr': {}}) }}
        {{ form_errors(form.prof) }}
    </div>
{% endif %}
</div><br>
{{ form_rest(form) }}

<input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\">

{{ form_end(form) }}";
    }
}
