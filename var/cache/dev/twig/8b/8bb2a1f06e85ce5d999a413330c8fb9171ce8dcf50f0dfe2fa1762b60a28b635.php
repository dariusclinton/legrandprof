<?php

/* LGPCourseBundle:Form:course_form_search.html.twig */
class __TwigTemplate_293fa80ecd89c47dc591020c097074e33ef065d4e98d5ad21f654ea797c25f6c extends Twig_Template
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
        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo " 

<div class=\"column-item-large\">

    <div class=\"form-group\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "intitule", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Que voulez-vous apprendre ?", "list" => "cours", "autocomplete" => "off", "spellcheck" => "off")));
        echo "
    </div>

</div> 
<div class=\"column-item for-btn\">
    <div class=\"form-group\">
    \t<input type=\"submit\" name=\"\" value=\"Rechercher\" class=\"btn btn-primary btn-block\">
    </div>
</div>


";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Form:course_form_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  41 => 17,  27 => 6,  19 => 1,);
    }
}
/* {{ form_start(form) }} */
/* */
/* <div class="column-item-large">*/
/* */
/*     <div class="form-group">*/
/*         {{ form_widget(form.intitule, {'attr': {'class': 'form-control','placeholder':'Que voulez-vous apprendre ?', 'list':'cours', 'autocomplete':'off', 'spellcheck':'off'}}) }}*/
/*     </div>*/
/* */
/* </div> */
/* <div class="column-item for-btn">*/
/*     <div class="form-group">*/
/*     	<input type="submit" name="" value="Rechercher" class="btn btn-primary btn-block">*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
