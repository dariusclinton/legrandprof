<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_ab7d8ab7690ad087adb8c2924316d3d8566ff3aee919ecf6938f4ce5e9d89669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_643bb0e19d46f352b59bbc84223eeca159aae407c4253cf53518445b5ceccc51 = $this->env->getExtension("native_profiler");
        $__internal_643bb0e19d46f352b59bbc84223eeca159aae407c4253cf53518445b5ceccc51->enter($__internal_643bb0e19d46f352b59bbc84223eeca159aae407c4253cf53518445b5ceccc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_643bb0e19d46f352b59bbc84223eeca159aae407c4253cf53518445b5ceccc51->leave($__internal_643bb0e19d46f352b59bbc84223eeca159aae407c4253cf53518445b5ceccc51_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c0c5333203170370a3b496e9c77a013037b6d99dd2cb89e7849c9afe5f6fca9 = $this->env->getExtension("native_profiler");
        $__internal_4c0c5333203170370a3b496e9c77a013037b6d99dd2cb89e7849c9afe5f6fca9->enter($__internal_4c0c5333203170370a3b496e9c77a013037b6d99dd2cb89e7849c9afe5f6fca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4c0c5333203170370a3b496e9c77a013037b6d99dd2cb89e7849c9afe5f6fca9->leave($__internal_4c0c5333203170370a3b496e9c77a013037b6d99dd2cb89e7849c9afe5f6fca9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
