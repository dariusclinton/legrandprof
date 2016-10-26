<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_89082482984e85a4dd4fa6e955985170d3f2e6fac33e2680d8445dee8e74ab39 extends Twig_Template
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
        $__internal_301767d7b4dc836613ca0b8e4a9203b1c665cb16beeea3792e470c290af93e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301767d7b4dc836613ca0b8e4a9203b1c665cb16beeea3792e470c290af93e63->enter($__internal_301767d7b4dc836613ca0b8e4a9203b1c665cb16beeea3792e470c290af93e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_301767d7b4dc836613ca0b8e4a9203b1c665cb16beeea3792e470c290af93e63->leave($__internal_301767d7b4dc836613ca0b8e4a9203b1c665cb16beeea3792e470c290af93e63_prof);

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
