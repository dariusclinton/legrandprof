<?php

/* @LGPCourse/Form/form_search.html.twig */
class __TwigTemplate_bf8a42de4bc8017c6d5d843dc4cd6e0f8c214e1ed2331ab9f8e2a2d5e4cf553b extends Twig_Template
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
        $__internal_de47bc68f5b18f0cc1cdb1abf36065bcb5f2fb28b2c549d668d2b2aa3296d40b = $this->env->getExtension("native_profiler");
        $__internal_de47bc68f5b18f0cc1cdb1abf36065bcb5f2fb28b2c549d668d2b2aa3296d40b->enter($__internal_de47bc68f5b18f0cc1cdb1abf36065bcb5f2fb28b2c549d668d2b2aa3296d40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCourse/Form/form_search.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo " 

<div class=\"column-item-large\">

    <div class=\"form-group\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Que voulez-vous apprendre ?", "list" => "cours", "autocomplete" => "off")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_de47bc68f5b18f0cc1cdb1abf36065bcb5f2fb28b2c549d668d2b2aa3296d40b->leave($__internal_de47bc68f5b18f0cc1cdb1abf36065bcb5f2fb28b2c549d668d2b2aa3296d40b_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCourse/Form/form_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  44 => 17,  30 => 6,  22 => 1,);
    }
}
/* {{ form_start(form) }} */
/* */
/* <div class="column-item-large">*/
/* */
/*     <div class="form-group">*/
/*         {{ form_widget(form.intitule, {'attr': {'class': 'form-control','placeholder':'Que voulez-vous apprendre ?', 'list':'cours', 'autocomplete':'off'}}) }}*/
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
