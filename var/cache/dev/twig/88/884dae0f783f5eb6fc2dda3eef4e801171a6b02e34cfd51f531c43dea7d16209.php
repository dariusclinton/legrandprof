<?php

/* LGPUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_8289a9aa6768909206d53459e47ae4d0f5ac845c84045bd81222574220bfed7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f2ce87f80808210baec4264f859d3ae8d0834ce57d2599fdca4cf2b6e26264f = $this->env->getExtension("native_profiler");
        $__internal_2f2ce87f80808210baec4264f859d3ae8d0834ce57d2599fdca4cf2b6e26264f->enter($__internal_2f2ce87f80808210baec4264f859d3ae8d0834ce57d2599fdca4cf2b6e26264f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f2ce87f80808210baec4264f859d3ae8d0834ce57d2599fdca4cf2b6e26264f->leave($__internal_2f2ce87f80808210baec4264f859d3ae8d0834ce57d2599fdca4cf2b6e26264f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a27f27f1eecb5325a80780831c533e70ee3c5e0b1c8658a57542132e9ead2757 = $this->env->getExtension("native_profiler");
        $__internal_a27f27f1eecb5325a80780831c533e70ee3c5e0b1c8658a57542132e9ead2757->enter($__internal_a27f27f1eecb5325a80780831c533e70ee3c5e0b1c8658a57542132e9ead2757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a27f27f1eecb5325a80780831c533e70ee3c5e0b1c8658a57542132e9ead2757->leave($__internal_a27f27f1eecb5325a80780831c533e70ee3c5e0b1c8658a57542132e9ead2757_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
";
    }
}
