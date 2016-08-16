<?php

/* LGPCourseBundle:Form:form_search.html.twig */
class __TwigTemplate_2777c88148b438653ab82adea884ca6f27bb0c409ab28b8b0b2fb57b8fb71832 extends Twig_Template
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
        $__internal_67a46f70735d7210b56fd54796c3d9c474cc5f93193b50cb6f91ac31e7d60cc5 = $this->env->getExtension("native_profiler");
        $__internal_67a46f70735d7210b56fd54796c3d9c474cc5f93193b50cb6f91ac31e7d60cc5->enter($__internal_67a46f70735d7210b56fd54796c3d9c474cc5f93193b50cb6f91ac31e7d60cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Form:form_search.html.twig"));

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
        
        $__internal_67a46f70735d7210b56fd54796c3d9c474cc5f93193b50cb6f91ac31e7d60cc5->leave($__internal_67a46f70735d7210b56fd54796c3d9c474cc5f93193b50cb6f91ac31e7d60cc5_prof);

    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Form:form_search.html.twig";
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
