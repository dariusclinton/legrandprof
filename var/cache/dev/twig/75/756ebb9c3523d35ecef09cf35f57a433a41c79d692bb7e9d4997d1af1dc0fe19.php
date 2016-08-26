<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_8abc73121578602db70dc8d8a316baa6bf22a7ce574a16865d42ea618f1c0d94 extends Twig_Template
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
        $__internal_f64ffe11f3c5ac9ae53836a3a3eea8d059889fe07027573c2d351f8b06f0b243 = $this->env->getExtension("native_profiler");
        $__internal_f64ffe11f3c5ac9ae53836a3a3eea8d059889fe07027573c2d351f8b06f0b243->enter($__internal_f64ffe11f3c5ac9ae53836a3a3eea8d059889fe07027573c2d351f8b06f0b243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3\">
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

          ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

          ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
          
        <div class=\"form-group\">
            <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-default\"/>
        </div>

        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
</div>
";
        
        $__internal_f64ffe11f3c5ac9ae53836a3a3eea8d059889fe07027573c2d351f8b06f0b243->leave($__internal_f64ffe11f3c5ac9ae53836a3a3eea8d059889fe07027573c2d351f8b06f0b243_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  49 => 15,  43 => 12,  37 => 9,  32 => 7,  27 => 5,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/*   <div class="col-md-6 col-md-offset-3">*/
/*     {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/*           {{ form_errors(form) }}*/
/* */
/*           {{ form_widget(form) }}*/
/*           */
/*         <div class="form-group">*/
/*             <input type="submit" value="{{ 'registration.submit'|trans }}" class="btn btn-default"/>*/
/*         </div>*/
/* */
/*         {{ form_rest(form) }}*/
/*     {{ form_end(form) }}*/
/*   </div>*/
/* </div>*/
/* */
