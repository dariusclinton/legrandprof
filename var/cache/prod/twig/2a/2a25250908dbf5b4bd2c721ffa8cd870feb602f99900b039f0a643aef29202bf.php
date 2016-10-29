<?php

/* LGPUserBundle:MesDemandesDeCours:edit.html.twig */
class __TwigTemplate_526be4cb31e005523b8ed62818a2ca46a9d05afb276aa4e6bda95c435993b10d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:MesDemandesDeCours:edit.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Edition ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reservationEnseignement"]) ? $context["reservationEnseignement"] : null), "enseignement", array()), "affichage", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 border-bottom text-center\">
        <h1 class=\"text-muted\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reservationEnseignement"]) ? $context["reservationEnseignement"] : null), "enseignement", array()), "affichage", array()), "html", null, true);
        echo "</h1>
      </div>
    </div>

    <div class=\"row\">

      ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

      <div class=\"col-md-4\">

        <h3>Status du cours</h3>
        <div class=\"form-group\">
          ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isFinish", array()), 'label', array("label" => "Cours achevé ?"));
        echo "
          ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isFinish", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isFinish", array()), 'errors');
        echo "
        </div>

        <h3>Jours de cours</h3>
        <div class=\"form-group\">
          ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "joursDeCours", array()), 'label', array("label" => " "));
        echo "
          ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "joursDeCours", array()), 'widget');
        echo "
          ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "joursDeCours", array()), 'errors');
        echo "
        </div>

        <h3>Programme de cours</h3>
        <div class=\"form-group\">
          ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "programmeDeCours", array()), 'label', array("label" => " "));
        echo "
          ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "programmeDeCours", array()), "entreesProgrammes", array()), 'widget');
        echo "
          ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "programmeDeCours", array()), "entreesProgrammes", array()), 'errors');
        echo "
          <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_entree_programme_de_cours\">Ajouter</a>
        </div>
      </div>

      <div class=\"col-md-4\">
        <h3>Séances de cours</h3>
        <div class=\"form-group\">
          ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "seancesDeCours", array()), 'label', array("label" => " "));
        echo "
          ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "seancesDeCours", array()), 'widget');
        echo "
          ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "seancesDeCours", array()), 'errors');
        echo "
          <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_seance_de_cours\">Ajouter</a>
        </div>
      </div>

      <div class=\"col-md-4\">
        <h3>Evaluations</h3>
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "evaluations", array()), 'label', array("label" => " "));
        echo "
        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "evaluations", array()), 'widget');
        echo "
        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "evaluations", array()), 'errors');
        echo "
        <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_evaluation\">Ajouter</a>
      </div>

      ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

      <hr>
      <div class=\"col-md-12\">
        <div class=\"form-group\">
          <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Enregistrer\">
        </div>
      </div>

      ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "LGPUserBundle:MesDemandesDeCours:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 79,  168 => 70,  161 => 66,  157 => 65,  153 => 64,  143 => 57,  139 => 56,  135 => 55,  124 => 47,  120 => 46,  116 => 45,  108 => 40,  104 => 39,  100 => 38,  92 => 33,  88 => 32,  84 => 31,  75 => 25,  70 => 23,  61 => 17,  55 => 13,  52 => 12,  45 => 8,  42 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Edition {{ reservationEnseignement.enseignement.affichage }} - {{ parent() }}
{% endblock %}

{% block header_submenu %}
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}


{% block body %}

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 border-bottom text-center\">
        <h1 class=\"text-muted\">{{ reservationEnseignement.enseignement.affichage }}</h1>
      </div>
    </div>

    <div class=\"row\">

      {{ form_start(form) }}

      {{ form_errors(form) }}

      <div class=\"col-md-4\">

        <h3>Status du cours</h3>
        <div class=\"form-group\">
          {{ form_label(form.isFinish, \"Cours achevé ?\") }}
          {{ form_widget(form.isFinish, {'attr': {}}) }}
          {{ form_errors(form.isFinish) }}
        </div>

        <h3>Jours de cours</h3>
        <div class=\"form-group\">
          {{ form_label(form.joursDeCours, \" \") }}
          {{ form_widget(form.joursDeCours) }}
          {{ form_errors(form.joursDeCours) }}
        </div>

        <h3>Programme de cours</h3>
        <div class=\"form-group\">
          {{ form_label(form.programmeDeCours, \" \") }}
          {{ form_widget(form.programmeDeCours.entreesProgrammes) }}
          {{ form_errors(form.programmeDeCours.entreesProgrammes) }}
          <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_entree_programme_de_cours\">Ajouter</a>
        </div>
      </div>

      <div class=\"col-md-4\">
        <h3>Séances de cours</h3>
        <div class=\"form-group\">
          {{ form_label(form.seancesDeCours, \" \") }}
          {{ form_widget(form.seancesDeCours) }}
          {{ form_errors(form.seancesDeCours) }}
          <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_seance_de_cours\">Ajouter</a>
        </div>
      </div>

      <div class=\"col-md-4\">
        <h3>Evaluations</h3>
        {{ form_label(form.evaluations, \" \") }}
        {{ form_widget(form.evaluations) }}
        {{ form_errors(form.evaluations) }}
        <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_evaluation\">Ajouter</a>
      </div>

      {{ form_rest(form) }}

      <hr>
      <div class=\"col-md-12\">
        <div class=\"form-group\">
          <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Enregistrer\">
        </div>
      </div>

      {{ form_end(form) }}

    </div>
  </div>

{% endblock %}";
    }
}
