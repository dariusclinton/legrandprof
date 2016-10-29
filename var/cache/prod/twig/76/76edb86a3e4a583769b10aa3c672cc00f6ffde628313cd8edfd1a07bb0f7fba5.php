<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_f95344bcbaa21d6af6716ef9912e35ca68a53b1e790c6facc99d19e45544812f extends Twig_Template
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
        // line 2
        echo "
<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3\">
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

          ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

          ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
          
        <div class=\"form-group\">
            <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-default\"/>
        </div>

        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
  </div>
</div>
";
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
        return array (  50 => 16,  46 => 15,  40 => 12,  34 => 9,  29 => 7,  24 => 5,  19 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3\">
    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

          {{ form_errors(form) }}

          {{ form_widget(form) }}
          
        <div class=\"form-group\">
            <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" class=\"btn btn-default\"/>
        </div>

        {{ form_rest(form) }}
    {{ form_end(form) }}
  </div>
</div>
";
    }
}
