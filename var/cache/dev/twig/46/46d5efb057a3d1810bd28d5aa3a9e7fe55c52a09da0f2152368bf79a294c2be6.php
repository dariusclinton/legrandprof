<?php

/* @LGPUser/Message/new.html.twig */
class __TwigTemplate_243f9303857d424f6b2421c89580393e76e2d9794191799d155a4a5724da092b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Message/new.html.twig", 1);
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
        $__internal_4a68b5facbf49edf479c1f59c2c93a5574c306a711c9380fda26304d78711435 = $this->env->getExtension("native_profiler");
        $__internal_4a68b5facbf49edf479c1f59c2c93a5574c306a711c9380fda26304d78711435->enter($__internal_4a68b5facbf49edf479c1f59c2c93a5574c306a711c9380fda26304d78711435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Message/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a68b5facbf49edf479c1f59c2c93a5574c306a711c9380fda26304d78711435->leave($__internal_4a68b5facbf49edf479c1f59c2c93a5574c306a711c9380fda26304d78711435_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_516dd819c53b504fff79632eb035dfcdb7cd62fd67974871e1d6da17b94192ed = $this->env->getExtension("native_profiler");
        $__internal_516dd819c53b504fff79632eb035dfcdb7cd62fd67974871e1d6da17b94192ed->enter($__internal_516dd819c53b504fff79632eb035dfcdb7cd62fd67974871e1d6da17b94192ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Envoi de message - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_516dd819c53b504fff79632eb035dfcdb7cd62fd67974871e1d6da17b94192ed->leave($__internal_516dd819c53b504fff79632eb035dfcdb7cd62fd67974871e1d6da17b94192ed_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cefe2ba0f926dd326666f15f160e12e635ca84f82b9a6004d98f623dd76153a = $this->env->getExtension("native_profiler");
        $__internal_7cefe2ba0f926dd326666f15f160e12e635ca84f82b9a6004d98f623dd76153a->enter($__internal_7cefe2ba0f926dd326666f15f160e12e635ca84f82b9a6004d98f623dd76153a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'label', array("label_attr" => array(), "label" => "Objet du message"));
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
        
        $__internal_7cefe2ba0f926dd326666f15f160e12e635ca84f82b9a6004d98f623dd76153a->leave($__internal_7cefe2ba0f926dd326666f15f160e12e635ca84f82b9a6004d98f623dd76153a_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Message/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  113 => 30,  107 => 27,  103 => 26,  99 => 25,  92 => 21,  88 => 20,  84 => 19,  77 => 15,  73 => 14,  69 => 13,  63 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Envoi de message - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {{ form_start(form) }}*/
/* */
/*   {{ form_errors(form) }}*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.objet, 'Objet du message', {'label_attr': {}}) }}*/
/*     {{ form_widget(form.objet, {'attr': {}}) }}*/
/*     {{ form_errors(form.objet)}}*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.recepteur, 'Récepteur', {'label_attr': {}}) }}*/
/*     {{ form_widget(form.recepteur, {'attr': {}}) }}*/
/*     {{ form_errors(form.recepteur)}}*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.contenu, 'Objet du message', {'label_attr': {}}) }}*/
/*     {{ form_widget(form.contenu, {'attr': {}}) }}*/
/*     {{ form_errors(form.contenu)}}*/
/*   </div>*/
/* */
/*     {{ form_rest(form) }}*/
/* */
/*     <input type="submit" value="Envoyer" class="btn btn-primary">*/
/* */
/*     {{ form_end(form) }}*/
/*   {% endblock %}*/
