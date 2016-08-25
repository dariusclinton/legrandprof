<?php

/* LGPUserBundle:Indisponibilite:formulaire.html.twig */
class __TwigTemplate_415fdec509bdf6125f03201e895c7829cb93e376df8313192683a430ab113aad extends Twig_Template
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
        $__internal_f2405df26106e97e6f17c65b0dc8e511669e06f3fe1e79ee57744a92a66bf009 = $this->env->getExtension("native_profiler");
        $__internal_f2405df26106e97e6f17c65b0dc8e511669e06f3fe1e79ee57744a92a66bf009->enter($__internal_f2405df26106e97e6f17c65b0dc8e511669e06f3fe1e79ee57744a92a66bf009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:formulaire.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"form-group\">
  ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'label', array("label_attr" => array(), "label" => "Date de début"));
        echo "
  ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'widget', array("attr" => array()));
        echo "
  ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'label', array("label_attr" => array(), "label" => "Date de fin"));
        echo "
  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'widget', array("attr" => array()));
        echo "
  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'errors');
        echo "
</div>

<div class=\"form-group\">
  ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'label', array("label_attr" => array(), "label" => "Motif"));
        echo "
  ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'widget', array("attr" => array()));
        echo "
  ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'errors');
        echo "
</div>

";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary\">

";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_f2405df26106e97e6f17c65b0dc8e511669e06f3fe1e79ee57744a92a66bf009->leave($__internal_f2405df26106e97e6f17c65b0dc8e511669e06f3fe1e79ee57744a92a66bf009_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Indisponibilite:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  82 => 25,  77 => 23,  71 => 20,  67 => 19,  63 => 18,  56 => 14,  52 => 13,  48 => 12,  41 => 8,  37 => 7,  33 => 6,  27 => 3,  22 => 1,);
    }
}
/* {{ form_start(form) }}*/
/* */
/* {{ form_errors(form) }}*/
/* */
/* <div class="form-group">*/
/*   {{ form_label(form.dateDebut, 'Date de début', {'label_attr': {}}) }}*/
/*   {{ form_widget(form.dateDebut, {'attr': {}}) }}*/
/*   {{ form_errors(form.dateDebut) }}*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   {{ form_label(form.dateFin, 'Date de fin', {'label_attr': {}}) }}*/
/*   {{ form_widget(form.dateFin, {'attr': {}}) }}*/
/*   {{ form_errors(form.dateFin) }}*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   {{ form_label(form.motif, 'Motif', {'label_attr': {}}) }}*/
/*   {{ form_widget(form.motif, {'attr': {}}) }}*/
/*   {{ form_errors(form.motif) }}*/
/* </div>*/
/* */
/* {{ form_widget(form) }}*/
/* */
/* {{ form_rest(form) }}*/
/* */
/* <input type="submit" value="Ajouter" class="btn btn-primary">*/
/* */
/* {{ form_end(form) }}*/
