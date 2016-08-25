<?php

/* LGPCourseBundle:Form:course_form_search.html.twig */
class __TwigTemplate_2b29d8a43ac7b2f8d2c09fc5ad4f9cd5623eecd1568b4390f41b61af857c4a76 extends Twig_Template
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

    ";
        // line 5
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "intitule", array(), "any", true, true)) {
            // line 6
            echo "        <div class=\"form-group\">
            ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "intitule", array()), 'widget', array("attr" => array("class" => "form-control", "list" => "cours", "autocomplete" => "off", "spellcheck" => "off")));
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "spellcheck" => "off")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
        // line 24
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
        return array (  63 => 24,  59 => 23,  49 => 15,  43 => 12,  40 => 11,  37 => 10,  31 => 7,  28 => 6,  26 => 5,  19 => 1,);
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
