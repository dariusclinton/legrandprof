<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_dad2cae64d39fce7d188db1e06f2133d500c896dad7c542fea87f74449bf5185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_40c9067fdc5972266abb9a04c702bec671144ef8df9595df2f7898a88f69ed17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c9067fdc5972266abb9a04c702bec671144ef8df9595df2f7898a88f69ed17->enter($__internal_40c9067fdc5972266abb9a04c702bec671144ef8df9595df2f7898a88f69ed17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40c9067fdc5972266abb9a04c702bec671144ef8df9595df2f7898a88f69ed17->leave($__internal_40c9067fdc5972266abb9a04c702bec671144ef8df9595df2f7898a88f69ed17_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eeaf6b2f669e1f9790c6b6122eae1952656b25a325ef255fb05bf9baf9f6e9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeaf6b2f669e1f9790c6b6122eae1952656b25a325ef255fb05bf9baf9f6e9b7->enter($__internal_eeaf6b2f669e1f9790c6b6122eae1952656b25a325ef255fb05bf9baf9f6e9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_eeaf6b2f669e1f9790c6b6122eae1952656b25a325ef255fb05bf9baf9f6e9b7->leave($__internal_eeaf6b2f669e1f9790c6b6122eae1952656b25a325ef255fb05bf9baf9f6e9b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
