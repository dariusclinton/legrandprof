<?php

/* @LGPUser/Avis/formulaire.html.twig */
class __TwigTemplate_65bf22d00413b9c0cb1d0c1a461f1123d1aea6ad6e7a357015cb17a35b70aaa2 extends Twig_Template
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
        $__internal_eb25061aa199f3725ca9f82b8934e2b283a34df6a55a272cb9985cb03db7f1ae = $this->env->getExtension("native_profiler");
        $__internal_eb25061aa199f3725ca9f82b8934e2b283a34df6a55a272cb9985cb03db7f1ae->enter($__internal_eb25061aa199f3725ca9f82b8934e2b283a34df6a55a272cb9985cb03db7f1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/formulaire.html.twig"));

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
        
        $__internal_eb25061aa199f3725ca9f82b8934e2b283a34df6a55a272cb9985cb03db7f1ae->leave($__internal_eb25061aa199f3725ca9f82b8934e2b283a34df6a55a272cb9985cb03db7f1ae_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Avis/formulaire.html.twig";
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
