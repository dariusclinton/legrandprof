<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_73c57671acb59b133f57e4cd04eb5d0c5dfa4676bc399bb2313418ade66175a1 extends Twig_Template
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
        $__internal_73dec7b6270b811603567e5899061b2db9fec05d803c3b609583a6fc57ec9e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dec7b6270b811603567e5899061b2db9fec05d803c3b609583a6fc57ec9e91->enter($__internal_73dec7b6270b811603567e5899061b2db9fec05d803c3b609583a6fc57ec9e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73dec7b6270b811603567e5899061b2db9fec05d803c3b609583a6fc57ec9e91->leave($__internal_73dec7b6270b811603567e5899061b2db9fec05d803c3b609583a6fc57ec9e91_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_249f8178622c4aa09cf9a8ff1b566b3770647cfbe83efc17a693adf4dfa3159a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249f8178622c4aa09cf9a8ff1b566b3770647cfbe83efc17a693adf4dfa3159a->enter($__internal_249f8178622c4aa09cf9a8ff1b566b3770647cfbe83efc17a693adf4dfa3159a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    
    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                <p class=\"text-center\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    
            </div>
        </div>
    </div>
";
        
        $__internal_249f8178622c4aa09cf9a8ff1b566b3770647cfbe83efc17a693adf4dfa3159a->leave($__internal_249f8178622c4aa09cf9a8ff1b566b3770647cfbe83efc17a693adf4dfa3159a_prof);

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
        return array (  46 => 10,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    
    <div class=\"bg-grey dashboard\">
        <div class=\"content-wrapper\">
            <div class=\"container\">
                <p class=\"text-center\">{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
    
            </div>
        </div>
    </div>
{% endblock fos_user_content %}
";
    }
}
