<?php

/* LGPUserBundle:MesDemandesDeCours:edit.html.twig */
class __TwigTemplate_66a88d01404127d96ea1fc48e42690a0e307e7245606c7390cd3db5dbdaed207 extends Twig_Template
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
        $__internal_ffc1c2d5b315b2eea4ce6430417096fc1a995f9f6be73183786fff185a1154f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc1c2d5b315b2eea4ce6430417096fc1a995f9f6be73183786fff185a1154f9->enter($__internal_ffc1c2d5b315b2eea4ce6430417096fc1a995f9f6be73183786fff185a1154f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:MesDemandesDeCours:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffc1c2d5b315b2eea4ce6430417096fc1a995f9f6be73183786fff185a1154f9->leave($__internal_ffc1c2d5b315b2eea4ce6430417096fc1a995f9f6be73183786fff185a1154f9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa97cde64962c3987ebf17cf7d0832d541a394b0ef6f3760ab762cd1144d3c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa97cde64962c3987ebf17cf7d0832d541a394b0ef6f3760ab762cd1144d3c0a->enter($__internal_fa97cde64962c3987ebf17cf7d0832d541a394b0ef6f3760ab762cd1144d3c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Edition ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reservationEnseignement"]) ? $context["reservationEnseignement"] : $this->getContext($context, "reservationEnseignement")), "enseignement", array()), "affichage", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fa97cde64962c3987ebf17cf7d0832d541a394b0ef6f3760ab762cd1144d3c0a->leave($__internal_fa97cde64962c3987ebf17cf7d0832d541a394b0ef6f3760ab762cd1144d3c0a_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_52dba2ca6db16205b2baef7ec2ea113f632f8ec9ebfdd2322bb2f7c74c6887c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52dba2ca6db16205b2baef7ec2ea113f632f8ec9ebfdd2322bb2f7c74c6887c4->enter($__internal_52dba2ca6db16205b2baef7ec2ea113f632f8ec9ebfdd2322bb2f7c74c6887c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_52dba2ca6db16205b2baef7ec2ea113f632f8ec9ebfdd2322bb2f7c74c6887c4->leave($__internal_52dba2ca6db16205b2baef7ec2ea113f632f8ec9ebfdd2322bb2f7c74c6887c4_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5523ff217779e62093b7a66e6cd005716f2b8af531bbc5e062eab559969aecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5523ff217779e62093b7a66e6cd005716f2b8af531bbc5e062eab559969aecd->enter($__internal_f5523ff217779e62093b7a66e6cd005716f2b8af531bbc5e062eab559969aecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 border-bottom text-center\">
        <h1 class=\"text-muted\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reservationEnseignement"]) ? $context["reservationEnseignement"] : $this->getContext($context, "reservationEnseignement")), "enseignement", array()), "affichage", array()), "html", null, true);
        echo "</h1>
      </div>
    </div>

    <div class=\"row\">

      ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

      ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

      <div class=\"col-md-4\">

        <h3>Status du cours</h3>
        <div class=\"form-group\">
          ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isFinish", array()), 'label', array("label" => "Cours achevé ?"));
        echo "
          ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isFinish", array()), 'widget', array("attr" => array()));
        echo "
          ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isFinish", array()), 'errors');
        echo "
        </div>

        <h3>Jours de cours</h3>
        <div class=\"form-group\">
          ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "joursDeCours", array()), 'label', array("label" => " "));
        echo "
          ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "joursDeCours", array()), 'widget');
        echo "
          ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "joursDeCours", array()), 'errors');
        echo "
        </div>

        <h3>Programme de cours</h3>
        <div class=\"form-group\">
          ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "programmeDeCours", array()), 'label', array("label" => " "));
        echo "
          ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "programmeDeCours", array()), "entreesProgrammes", array()), 'widget');
        echo "
          ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "programmeDeCours", array()), "entreesProgrammes", array()), 'errors');
        echo "
          <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_entree_programme_de_cours\">Ajouter</a>
        </div>
      </div>

      <div class=\"col-md-4\">
        <h3>Séances de cours</h3>
        <div class=\"form-group\">
          ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seancesDeCours", array()), 'label', array("label" => " "));
        echo "
          ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seancesDeCours", array()), 'widget');
        echo "
          ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seancesDeCours", array()), 'errors');
        echo "
          <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_seance_de_cours\">Ajouter</a>
        </div>
      </div>

      <div class=\"col-md-4\">
        <h3>Evaluations</h3>
        ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluations", array()), 'label', array("label" => " "));
        echo "
        ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluations", array()), 'widget');
        echo "
        ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluations", array()), 'errors');
        echo "
        <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_evaluation\">Ajouter</a>
      </div>

      ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

      <hr>
      <div class=\"col-md-12\">
        <div class=\"form-group\">
          <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Enregistrer\">
        </div>
      </div>

      ";
        // line 79
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
  </div>

";
        
        $__internal_f5523ff217779e62093b7a66e6cd005716f2b8af531bbc5e062eab559969aecd->leave($__internal_f5523ff217779e62093b7a66e6cd005716f2b8af531bbc5e062eab559969aecd_prof);

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
        return array (  201 => 79,  189 => 70,  182 => 66,  178 => 65,  174 => 64,  164 => 57,  160 => 56,  156 => 55,  145 => 47,  141 => 46,  137 => 45,  129 => 40,  125 => 39,  121 => 38,  113 => 33,  109 => 32,  105 => 31,  96 => 25,  91 => 23,  82 => 17,  76 => 13,  70 => 12,  60 => 8,  54 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
