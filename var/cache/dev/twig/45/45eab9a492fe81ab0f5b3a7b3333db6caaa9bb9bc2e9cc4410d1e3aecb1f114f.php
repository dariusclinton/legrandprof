<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_cbda278794cabdd7761947d618d06fad8e546c83246d51a558af1f2bf75cf3d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_8d3a3f07fe8776434a67424a268ce9edfd1f567b6568a60ff1a8e15a0477c9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3a3f07fe8776434a67424a268ce9edfd1f567b6568a60ff1a8e15a0477c9de->enter($__internal_8d3a3f07fe8776434a67424a268ce9edfd1f567b6568a60ff1a8e15a0477c9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d3a3f07fe8776434a67424a268ce9edfd1f567b6568a60ff1a8e15a0477c9de->leave($__internal_8d3a3f07fe8776434a67424a268ce9edfd1f567b6568a60ff1a8e15a0477c9de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d1181f4e510399906f854b061f090b6d50fa2a79dd2b53910e2e3b1334820ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1181f4e510399906f854b061f090b6d50fa2a79dd2b53910e2e3b1334820ec->enter($__internal_7d1181f4e510399906f854b061f090b6d50fa2a79dd2b53910e2e3b1334820ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7d1181f4e510399906f854b061f090b6d50fa2a79dd2b53910e2e3b1334820ec->leave($__internal_7d1181f4e510399906f854b061f090b6d50fa2a79dd2b53910e2e3b1334820ec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
