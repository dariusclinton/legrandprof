<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_5c31ffb428f5cb9cfa3cf1ef0f00bd1b88920ba06c21bddad4b05cecda47ed65 extends Twig_Template
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
        $__internal_e3cbefe07dfa4df68df49810f1c211dddcfe18f082181f1fb6ec59fd574301d9 = $this->env->getExtension("native_profiler");
        $__internal_e3cbefe07dfa4df68df49810f1c211dddcfe18f082181f1fb6ec59fd574301d9->enter($__internal_e3cbefe07dfa4df68df49810f1c211dddcfe18f082181f1fb6ec59fd574301d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e3cbefe07dfa4df68df49810f1c211dddcfe18f082181f1fb6ec59fd574301d9->leave($__internal_e3cbefe07dfa4df68df49810f1c211dddcfe18f082181f1fb6ec59fd574301d9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
";
    }
}