<?php

/* LGPUserBundle:MesDemandesDeCours:edit.html.twig */
class __TwigTemplate_8ed6442a3fadf37ab9b2f42546c39b13bc20f001fa84b30362fc8ec4cdd36c95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:MesDemandesDeCours:edit.html.twig", 1);
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
        $__internal_0daab7f580d653769ec8594d009e4216e5188a40f95e98ac13c0545d1f033810 = $this->env->getExtension("native_profiler");
        $__internal_0daab7f580d653769ec8594d009e4216e5188a40f95e98ac13c0545d1f033810->enter($__internal_0daab7f580d653769ec8594d009e4216e5188a40f95e98ac13c0545d1f033810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:MesDemandesDeCours:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0daab7f580d653769ec8594d009e4216e5188a40f95e98ac13c0545d1f033810->leave($__internal_0daab7f580d653769ec8594d009e4216e5188a40f95e98ac13c0545d1f033810_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3a2f380f4956d442c59472fc83eacce33cb9cd04443906e4caed347e31607dc = $this->env->getExtension("native_profiler");
        $__internal_b3a2f380f4956d442c59472fc83eacce33cb9cd04443906e4caed347e31607dc->enter($__internal_b3a2f380f4956d442c59472fc83eacce33cb9cd04443906e4caed347e31607dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Edition d'une demande de cous - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b3a2f380f4956d442c59472fc83eacce33cb9cd04443906e4caed347e31607dc->leave($__internal_b3a2f380f4956d442c59472fc83eacce33cb9cd04443906e4caed347e31607dc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_88ae9a2b1b690cb3c67b4b669df1aa93894361dcc83a66b74039a29adea5c0ac = $this->env->getExtension("native_profiler");
        $__internal_88ae9a2b1b690cb3c67b4b669df1aa93894361dcc83a66b74039a29adea5c0ac->enter($__internal_88ae9a2b1b690cb3c67b4b669df1aa93894361dcc83a66b74039a29adea5c0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      
      <h1>Edition du cours ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["reservationEnseignement"]) ? $context["reservationEnseignement"] : $this->getContext($context, "reservationEnseignement")), "enseignement", array()), "cours", array()), "intitule", array()), "html", null, true);
        echo "</h1>
      
      ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
      
      ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
      
      <div class=\"form-group\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isFinish", array()), 'row');
        echo "
      </div>
      
      <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "joursDeCours", array()), 'row');
        echo "
      </div>
      
      <div class=\"form-group\">
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "programmeDeCours", array()), 'row');
        echo "
        <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_entree_programme_de_cours\">Ajouter</a>
      </div>
      
      ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        
      <div class=\"form-group\">
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\">
      </div>
      
      ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
  </div>
";
        
        $__internal_88ae9a2b1b690cb3c67b4b669df1aa93894361dcc83a66b74039a29adea5c0ac->leave($__internal_88ae9a2b1b690cb3c67b4b669df1aa93894361dcc83a66b74039a29adea5c0ac_prof);

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
        return array (  108 => 36,  99 => 30,  92 => 26,  85 => 22,  78 => 18,  72 => 15,  67 => 13,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Edition d'une demande de cous - {{ parent() }}
{% endblock %}

{% block body %}
  <div class=\"row\">
    <div class=\"col-md-12\">
      
      <h1>Edition du cours {{ reservationEnseignement.enseignement.cours.intitule }}</h1>
      
      {{ form_start(form) }}
      
      {{ form_errors(form) }}
      
      <div class=\"form-group\">
        {{ form_row(form.isFinish) }}
      </div>
      
      <div class=\"form-group\">
        {{ form_row(form.joursDeCours) }}
      </div>
      
      <div class=\"form-group\">
        {{ form_row(form.programmeDeCours) }}
        <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_entree_programme_de_cours\">Ajouter</a>
      </div>
      
      {{ form_rest(form) }}
        
      <div class=\"form-group\">
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\">
      </div>
      
      {{ form_end(form) }}
    </div>
  </div>
{% endblock %}";
    }
}
