<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4d7378bbf6b1ae594a260ee0ca57afbaea467696fdaf24151374392056a69f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_201596210cf2a686d4a498d77ac495c888bc43c3942088a657ecb6a3eb9a31e3 = $this->env->getExtension("native_profiler");
        $__internal_201596210cf2a686d4a498d77ac495c888bc43c3942088a657ecb6a3eb9a31e3->enter($__internal_201596210cf2a686d4a498d77ac495c888bc43c3942088a657ecb6a3eb9a31e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_201596210cf2a686d4a498d77ac495c888bc43c3942088a657ecb6a3eb9a31e3->leave($__internal_201596210cf2a686d4a498d77ac495c888bc43c3942088a657ecb6a3eb9a31e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d016c112f798c11e35e894bbf0785d1f739374ad90e945e24f556a1a6be9c833 = $this->env->getExtension("native_profiler");
        $__internal_d016c112f798c11e35e894bbf0785d1f739374ad90e945e24f556a1a6be9c833->enter($__internal_d016c112f798c11e35e894bbf0785d1f739374ad90e945e24f556a1a6be9c833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d016c112f798c11e35e894bbf0785d1f739374ad90e945e24f556a1a6be9c833->leave($__internal_d016c112f798c11e35e894bbf0785d1f739374ad90e945e24f556a1a6be9c833_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
