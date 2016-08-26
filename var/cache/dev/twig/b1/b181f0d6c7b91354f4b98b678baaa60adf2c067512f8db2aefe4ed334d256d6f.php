<?php

/* LGPUserBundle:Avis:formulaire.html.twig */
class __TwigTemplate_5c56b11deacaf9ca73c7eb8b377acc4008fbc36e2df56b0f3ef241aeeedbc900 extends Twig_Template
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
        $__internal_935d73394b33e1eebef6e7fee854f8665e555fae8382fe5b6e470f64ecaf21fc = $this->env->getExtension("native_profiler");
        $__internal_935d73394b33e1eebef6e7fee854f8665e555fae8382fe5b6e470f64ecaf21fc->enter($__internal_935d73394b33e1eebef6e7fee854f8665e555fae8382fe5b6e470f64ecaf21fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:formulaire.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'label', array("label_attr" => array(), "label" => "Note /5"));
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget', array("attr" => array()));
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'errors');
        echo "

";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'label', array("label_attr" => array(), "label" => "Commentaire"));
        echo "
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array()));
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "

";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prof", array()), 'label', array("label_attr" => array(), "label" => "Veuillez choisir le prof"));
        echo "
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prof", array()), 'widget', array("attr" => array()));
        echo "
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prof", array()), 'errors');
        echo "

";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\">

";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_935d73394b33e1eebef6e7fee854f8665e555fae8382fe5b6e470f64ecaf21fc->leave($__internal_935d73394b33e1eebef6e7fee854f8665e555fae8382fe5b6e470f64ecaf21fc_prof);

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
        return array (  77 => 20,  70 => 16,  65 => 14,  61 => 13,  57 => 12,  52 => 10,  48 => 9,  44 => 8,  39 => 6,  35 => 5,  31 => 4,  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(form) }}*/
/* {{ form_errors(form) }}*/
/* */
/* {{ form_label(form.note, 'Note /5', {'label_attr': {}}) }}*/
/* {{ form_widget(form.note, {'attr': {}}) }}*/
/* {{ form_errors(form.note) }}*/
/* */
/* {{ form_label(form.commentaire, 'Commentaire', {'label_attr': {}}) }}*/
/* {{ form_widget(form.commentaire, {'attr': {}}) }}*/
/* {{ form_errors(form.commentaire) }}*/
/* */
/* {{ form_label(form.prof, 'Veuillez choisir le prof', {'label_attr': {}}) }}*/
/* {{ form_widget(form.prof, {'attr': {}}) }}*/
/* {{ form_errors(form.prof) }}*/
/* */
/* {{ form_rest(form) }}*/
/* */
/* <input type="submit" class="btn btn-primary" value="Valider">*/
/* */
/* {{ form_end(form) }}*/
