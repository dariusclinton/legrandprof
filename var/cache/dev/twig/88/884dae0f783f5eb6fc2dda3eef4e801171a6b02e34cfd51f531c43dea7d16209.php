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
        $__internal_49b3758b3cd9673c90d4e719a355033038565eec469f2d5748d371aa047bbff7 = $this->env->getExtension("native_profiler");
        $__internal_49b3758b3cd9673c90d4e719a355033038565eec469f2d5748d371aa047bbff7->enter($__internal_49b3758b3cd9673c90d4e719a355033038565eec469f2d5748d371aa047bbff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49b3758b3cd9673c90d4e719a355033038565eec469f2d5748d371aa047bbff7->leave($__internal_49b3758b3cd9673c90d4e719a355033038565eec469f2d5748d371aa047bbff7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1cbed120e8fcbe4689ab88ca7df7057aa03f3ac4a48417b5cd23c12b9da2a24 = $this->env->getExtension("native_profiler");
        $__internal_e1cbed120e8fcbe4689ab88ca7df7057aa03f3ac4a48417b5cd23c12b9da2a24->enter($__internal_e1cbed120e8fcbe4689ab88ca7df7057aa03f3ac4a48417b5cd23c12b9da2a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e1cbed120e8fcbe4689ab88ca7df7057aa03f3ac4a48417b5cd23c12b9da2a24->leave($__internal_e1cbed120e8fcbe4689ab88ca7df7057aa03f3ac4a48417b5cd23c12b9da2a24_prof);

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
