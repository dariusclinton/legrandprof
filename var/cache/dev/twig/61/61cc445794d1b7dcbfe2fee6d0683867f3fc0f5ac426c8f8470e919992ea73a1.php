<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_adf58caf2faa3ecd77c2870ab26923cb74084390351474d5e7bca72ff74dad8a extends Twig_Template
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
        $__internal_74e4a3c2304d8e780db3dedce8c8701c5dd3ec09a4d37a19eac778c94119a54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e4a3c2304d8e780db3dedce8c8701c5dd3ec09a4d37a19eac778c94119a54b->enter($__internal_74e4a3c2304d8e780db3dedce8c8701c5dd3ec09a4d37a19eac778c94119a54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3\">
    ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

          ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

          ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
          
        <div class=\"form-group\">
            <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-default\"/>
        </div>

        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
</div>
";
        
        $__internal_74e4a3c2304d8e780db3dedce8c8701c5dd3ec09a4d37a19eac778c94119a54b->leave($__internal_74e4a3c2304d8e780db3dedce8c8701c5dd3ec09a4d37a19eac778c94119a54b_prof);

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
