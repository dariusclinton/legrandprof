<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_58dcd5f5995819cf18255abca3bc7247a0d96ade13c50aea7918fd5f0d392663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_8fdd15e65acbaaddd480d339312f1fcec7f96c15df4c03ce5f6cce31f6ff3dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdd15e65acbaaddd480d339312f1fcec7f96c15df4c03ce5f6cce31f6ff3dbb->enter($__internal_8fdd15e65acbaaddd480d339312f1fcec7f96c15df4c03ce5f6cce31f6ff3dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fdd15e65acbaaddd480d339312f1fcec7f96c15df4c03ce5f6cce31f6ff3dbb->leave($__internal_8fdd15e65acbaaddd480d339312f1fcec7f96c15df4c03ce5f6cce31f6ff3dbb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ca60b786c5a31a26f19e1069fc55a516c24cf6bfcbfc868523929800404e697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca60b786c5a31a26f19e1069fc55a516c24cf6bfcbfc868523929800404e697->enter($__internal_0ca60b786c5a31a26f19e1069fc55a516c24cf6bfcbfc868523929800404e697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_0ca60b786c5a31a26f19e1069fc55a516c24cf6bfcbfc868523929800404e697->leave($__internal_0ca60b786c5a31a26f19e1069fc55a516c24cf6bfcbfc868523929800404e697_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
