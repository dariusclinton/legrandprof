<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_57a580726f6f38382b614b6cee9b7d20d12470429cc0ae9d2ecf1aac06549105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_3c9c9b4a0344456c19a9d413d27ccfe238fd007f883f377b19739ab50c0c5337 = $this->env->getExtension("native_profiler");
        $__internal_3c9c9b4a0344456c19a9d413d27ccfe238fd007f883f377b19739ab50c0c5337->enter($__internal_3c9c9b4a0344456c19a9d413d27ccfe238fd007f883f377b19739ab50c0c5337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c9c9b4a0344456c19a9d413d27ccfe238fd007f883f377b19739ab50c0c5337->leave($__internal_3c9c9b4a0344456c19a9d413d27ccfe238fd007f883f377b19739ab50c0c5337_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22443ee25462ef97533ae24f7d653f1c8ba232b9dc30d192d63008b43d5bba08 = $this->env->getExtension("native_profiler");
        $__internal_22443ee25462ef97533ae24f7d653f1c8ba232b9dc30d192d63008b43d5bba08->enter($__internal_22443ee25462ef97533ae24f7d653f1c8ba232b9dc30d192d63008b43d5bba08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_22443ee25462ef97533ae24f7d653f1c8ba232b9dc30d192d63008b43d5bba08->leave($__internal_22443ee25462ef97533ae24f7d653f1c8ba232b9dc30d192d63008b43d5bba08_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
