<?php

/* LGPUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_08cd9a76bcabcb870141491fd25f1e574b7ed2845c453fd9819e9ed6e84c8b3e extends Twig_Template
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
        $__internal_dd0ee65adebd684b8bb095833dae7d3ca42131f5ce0cb0b373df1759814f061a = $this->env->getExtension("native_profiler");
        $__internal_dd0ee65adebd684b8bb095833dae7d3ca42131f5ce0cb0b373df1759814f061a->enter($__internal_dd0ee65adebd684b8bb095833dae7d3ca42131f5ce0cb0b373df1759814f061a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_dd0ee65adebd684b8bb095833dae7d3ca42131f5ce0cb0b373df1759814f061a->leave($__internal_dd0ee65adebd684b8bb095833dae7d3ca42131f5ce0cb0b373df1759814f061a_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
";
    }
}