<?php

/* @LGPCourse/Form/course_form_search.html.twig */
class __TwigTemplate_41e2b9b3cef8f27f74ea29707a08c4aac43477970844d4a6c3e023ea6ed21e7d extends Twig_Template
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
        $__internal_7c6b8ef6baea84ae98acacdb3aa24d6f36f9d3b28a4fc27f19e186e24269fb60 = $this->env->getExtension("native_profiler");
        $__internal_7c6b8ef6baea84ae98acacdb3aa24d6f36f9d3b28a4fc27f19e186e24269fb60->enter($__internal_7c6b8ef6baea84ae98acacdb3aa24d6f36f9d3b28a4fc27f19e186e24269fb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCourse/Form/course_form_search.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo " 

<div class=\"column-item-large\">

    ";
        // line 5
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "intitule", array(), "any", true, true)) {
            // line 6
            echo "        <div class=\"form-group\">
            ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'widget', array("attr" => array("class" => "form-control", "list" => "cours", "autocomplete" => "off", "spellcheck" => "off")));
            echo "
        </div>
    ";
        }
        // line 10
        echo "    ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array(), "any", true, true)) {
            // line 11
            echo "        <div class=\"form-group\">
            ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
            echo "
        </div>
    ";
        }
        // line 15
        echo "</div> 
<div class=\"column-item for-btn\">
    <div class=\"form-group\">
        <input type=\"submit\" name=\"\" value=\"Rechercher\" class=\"btn btn-primary btn-block\">
    </div>
</div>


";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_7c6b8ef6baea84ae98acacdb3aa24d6f36f9d3b28a4fc27f19e186e24269fb60->leave($__internal_7c6b8ef6baea84ae98acacdb3aa24d6f36f9d3b28a4fc27f19e186e24269fb60_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCourse/Form/course_form_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  62 => 23,  52 => 15,  46 => 12,  43 => 11,  40 => 10,  34 => 7,  31 => 6,  29 => 5,  22 => 1,);
    }
}
/* {{ form_start(form) }} */
/* */
/* <div class="column-item-large">*/
/* */
/*     {% if form.intitule is defined %}*/
/*         <div class="form-group">*/
/*             {{ form_widget(form.intitule, {'attr': {'class': 'form-control', 'list':'cours', 'autocomplete':'off', 'spellcheck':'off'}}) }}*/
/*         </div>*/
/*     {% endif %}*/
/*     {% if form.ville is defined %}*/
/*         <div class="form-group">*/
/*             {{ form_widget(form.ville, {'attr': {'class': 'form-control', 'autocomplete':'off', 'spellcheck':'off'}}) }}*/
/*         </div>*/
/*     {% endif %}*/
/* </div> */
/* <div class="column-item for-btn">*/
/*     <div class="form-group">*/
/*         <input type="submit" name="" value="Rechercher" class="btn btn-primary btn-block">*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
