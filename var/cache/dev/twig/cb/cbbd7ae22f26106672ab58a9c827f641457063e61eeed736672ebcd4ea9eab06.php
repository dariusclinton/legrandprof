<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_80a7730cacec30effed7e81faca6284b070ad7a7ccd0ac2f3fb7e58b437c93d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_cc8bed6c755f5744106e1019a1284610654093d44ae7e674930cf00465a5e41a = $this->env->getExtension("native_profiler");
        $__internal_cc8bed6c755f5744106e1019a1284610654093d44ae7e674930cf00465a5e41a->enter($__internal_cc8bed6c755f5744106e1019a1284610654093d44ae7e674930cf00465a5e41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc8bed6c755f5744106e1019a1284610654093d44ae7e674930cf00465a5e41a->leave($__internal_cc8bed6c755f5744106e1019a1284610654093d44ae7e674930cf00465a5e41a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_854f5451408a4746cc79aa448d59b39b1e72515dd032f56a18a553b985259841 = $this->env->getExtension("native_profiler");
        $__internal_854f5451408a4746cc79aa448d59b39b1e72515dd032f56a18a553b985259841->enter($__internal_854f5451408a4746cc79aa448d59b39b1e72515dd032f56a18a553b985259841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_854f5451408a4746cc79aa448d59b39b1e72515dd032f56a18a553b985259841->leave($__internal_854f5451408a4746cc79aa448d59b39b1e72515dd032f56a18a553b985259841_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
";
    }
}
