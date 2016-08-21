<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4ab49bb795b9cf59c836d91c2c3dbbd61afe0342bba06ccaa56bf3d136d119fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4102e04eee27e61643685c58be56a25b68cd9361b782291ce06f692cd5f12b2e = $this->env->getExtension("native_profiler");
        $__internal_4102e04eee27e61643685c58be56a25b68cd9361b782291ce06f692cd5f12b2e->enter($__internal_4102e04eee27e61643685c58be56a25b68cd9361b782291ce06f692cd5f12b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4102e04eee27e61643685c58be56a25b68cd9361b782291ce06f692cd5f12b2e->leave($__internal_4102e04eee27e61643685c58be56a25b68cd9361b782291ce06f692cd5f12b2e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8fb70366faf817186fb62fd5b9a9eafb8e31ae159a30bd00cf49d25c49f4808 = $this->env->getExtension("native_profiler");
        $__internal_a8fb70366faf817186fb62fd5b9a9eafb8e31ae159a30bd00cf49d25c49f4808->enter($__internal_a8fb70366faf817186fb62fd5b9a9eafb8e31ae159a30bd00cf49d25c49f4808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_a8fb70366faf817186fb62fd5b9a9eafb8e31ae159a30bd00cf49d25c49f4808->leave($__internal_a8fb70366faf817186fb62fd5b9a9eafb8e31ae159a30bd00cf49d25c49f4808_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b05be183cd754f17ee9e281cf5e09bb81edad0f53b3e9d900918f49553d63f1 = $this->env->getExtension("native_profiler");
        $__internal_7b05be183cd754f17ee9e281cf5e09bb81edad0f53b3e9d900918f49553d63f1->enter($__internal_7b05be183cd754f17ee9e281cf5e09bb81edad0f53b3e9d900918f49553d63f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_7b05be183cd754f17ee9e281cf5e09bb81edad0f53b3e9d900918f49553d63f1->leave($__internal_7b05be183cd754f17ee9e281cf5e09bb81edad0f53b3e9d900918f49553d63f1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/* */
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
