<?php

/* LGPUserBundle:Indisponibilite:formulaire.html.twig */
class __TwigTemplate_ecb5398735f76861d32a449428d2b28e49e2bdd47621c92b94fda5be9143c3ec extends Twig_Template
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
        $__internal_6d4ffb317acbd72b942dd6d34cf5c58b9662dba760b8c2df993eea109a9483c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4ffb317acbd72b942dd6d34cf5c58b9662dba760b8c2df993eea109a9483c4->enter($__internal_6d4ffb317acbd72b942dd6d34cf5c58b9662dba760b8c2df993eea109a9483c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Indisponibilite:formulaire.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'label', array("label_attr" => array(), "label" => "Date de début"));
        echo " : </div>
        <div class=\"col-md-4\">
            <div class=\"row\">
                <div class=\"col-md-4 no-padding\">";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), "day", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4 no-padding\">";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), "month", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4 no-padding\">";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), "year", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'errors');
        echo "
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'label', array("label_attr" => array(), "label" => "Date de fin"));
        echo " : </div>
        <div class=\"col-md-4\">
            <div class=\"row\">
                <div class=\"col-md-4 no-padding\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), "day", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "jour")));
        echo "</div>
                <div class=\"col-md-4 no-padding\">";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), "month", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                <div class=\"col-md-4 no-padding\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), "year", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
            </div>
            ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'errors');
        echo "
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'label', array("label_attr" => array(), "label" => "Motif"));
        echo " : </div>
        <div class=\"col-md-4\">
            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'errors');
        echo "
        </div>
    </div>
</div>

";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\">

";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_6d4ffb317acbd72b942dd6d34cf5c58b9662dba760b8c2df993eea109a9483c4->leave($__internal_6d4ffb317acbd72b942dd6d34cf5c58b9662dba760b8c2df993eea109a9483c4_prof);

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
        return array (  121 => 49,  114 => 45,  109 => 43,  101 => 38,  97 => 37,  92 => 35,  82 => 28,  77 => 26,  73 => 25,  69 => 24,  63 => 21,  53 => 14,  48 => 12,  44 => 11,  40 => 10,  34 => 7,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}

{{ form_errors(form) }}

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">{{ form_label(form.dateDebut, 'Date de début', {'label_attr': {}}) }} : </div>
        <div class=\"col-md-4\">
            <div class=\"row\">
                <div class=\"col-md-4 no-padding\">{{ form_widget(form.dateDebut.day, {'attr': {'class':'form-control'}}) }}</div>
                <div class=\"col-md-4 no-padding\">{{ form_widget(form.dateDebut.month, {'attr': {'class':'form-control'}}) }}</div>
                <div class=\"col-md-4 no-padding\">{{ form_widget(form.dateDebut.year, {'attr': {'class':'form-control'}}) }}</div>
            </div>
            {{ form_errors(form.dateDebut) }}
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">{{ form_label(form.dateFin, 'Date de fin', {'label_attr': {}}) }} : </div>
        <div class=\"col-md-4\">
            <div class=\"row\">
                <div class=\"col-md-4 no-padding\">{{ form_widget(form.dateFin.day, {'attr': {'class':'form-control','placeholder':'jour'}}) }}</div>
                <div class=\"col-md-4 no-padding\">{{ form_widget(form.dateFin.month, {'attr': {'class':'form-control'}}) }}</div>
                <div class=\"col-md-4 no-padding\">{{ form_widget(form.dateFin.year, {'attr': {'class':'form-control'}}) }}</div>
            </div>
            {{ form_errors(form.dateFin) }}
        </div>
    </div>
</div>

<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-3\">{{ form_label(form.motif, 'Motif', {'label_attr': {}}) }} : </div>
        <div class=\"col-md-4\">
            {{ form_widget(form.motif, {'attr': {'class':'form-control'}}) }}
            {{ form_errors(form.motif) }}
        </div>
    </div>
</div>

{{ form_widget(form) }}

{{ form_rest(form) }}

<input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\">

{{ form_end(form) }}";
    }
}
