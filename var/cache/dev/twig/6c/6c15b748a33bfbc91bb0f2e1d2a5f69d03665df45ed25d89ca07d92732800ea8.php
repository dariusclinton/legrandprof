<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_91769693ae1a41afe4fce843c2f3895b5cf0b27965ec5c7327c89236588a2cbe extends Twig_Template
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
        $__internal_32c9efb82c1af083152901526a1dad5d3610b13e834ed7bd7d5da7f2d16b4a2d = $this->env->getExtension("native_profiler");
        $__internal_32c9efb82c1af083152901526a1dad5d3610b13e834ed7bd7d5da7f2d16b4a2d->enter($__internal_32c9efb82c1af083152901526a1dad5d3610b13e834ed7bd7d5da7f2d16b4a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_32c9efb82c1af083152901526a1dad5d3610b13e834ed7bd7d5da7f2d16b4a2d->leave($__internal_32c9efb82c1af083152901526a1dad5d3610b13e834ed7bd7d5da7f2d16b4a2d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
";
    }
}
