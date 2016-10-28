<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_2dbc892f83c6fe05caae3b3ec23c0d8e214874fcc371171030cbb740b6ea8b96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_8e820b97fbdb5b2e2f2a683af806205f5ec9c5cd2483714cdfd3cc3559e1382b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e820b97fbdb5b2e2f2a683af806205f5ec9c5cd2483714cdfd3cc3559e1382b->enter($__internal_8e820b97fbdb5b2e2f2a683af806205f5ec9c5cd2483714cdfd3cc3559e1382b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e820b97fbdb5b2e2f2a683af806205f5ec9c5cd2483714cdfd3cc3559e1382b->leave($__internal_8e820b97fbdb5b2e2f2a683af806205f5ec9c5cd2483714cdfd3cc3559e1382b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6fe5d1d896c6dbc05ac7a457f9047d28354b262d9734a5df3115dd95804ba29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6fe5d1d896c6dbc05ac7a457f9047d28354b262d9734a5df3115dd95804ba29->enter($__internal_b6fe5d1d896c6dbc05ac7a457f9047d28354b262d9734a5df3115dd95804ba29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b6fe5d1d896c6dbc05ac7a457f9047d28354b262d9734a5df3115dd95804ba29->leave($__internal_b6fe5d1d896c6dbc05ac7a457f9047d28354b262d9734a5df3115dd95804ba29_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
