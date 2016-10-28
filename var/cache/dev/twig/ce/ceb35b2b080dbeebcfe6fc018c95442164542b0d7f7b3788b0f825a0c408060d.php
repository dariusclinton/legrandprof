<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e50f10a3e4f01324d6a2167bfbfd264c13fca1cb3719702cb6378facc9d7b927 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_f435273d2e70d85163fd8b352815617256bba7a1a47c155565bf9adb1288d53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f435273d2e70d85163fd8b352815617256bba7a1a47c155565bf9adb1288d53d->enter($__internal_f435273d2e70d85163fd8b352815617256bba7a1a47c155565bf9adb1288d53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f435273d2e70d85163fd8b352815617256bba7a1a47c155565bf9adb1288d53d->leave($__internal_f435273d2e70d85163fd8b352815617256bba7a1a47c155565bf9adb1288d53d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f44d0e0f443ff0dae0a4ef00298b5890d6ba83c43bbb184890999f7647bfa58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f44d0e0f443ff0dae0a4ef00298b5890d6ba83c43bbb184890999f7647bfa58->enter($__internal_5f44d0e0f443ff0dae0a4ef00298b5890d6ba83c43bbb184890999f7647bfa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5f44d0e0f443ff0dae0a4ef00298b5890d6ba83c43bbb184890999f7647bfa58->leave($__internal_5f44d0e0f443ff0dae0a4ef00298b5890d6ba83c43bbb184890999f7647bfa58_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
