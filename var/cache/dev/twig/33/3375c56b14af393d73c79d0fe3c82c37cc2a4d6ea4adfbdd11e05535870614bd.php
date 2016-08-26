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
        $__internal_ddf43a702f516c96006de942fbad34a7b4c2d7d7220f7ccbfd16767bb1102a92 = $this->env->getExtension("native_profiler");
        $__internal_ddf43a702f516c96006de942fbad34a7b4c2d7d7220f7ccbfd16767bb1102a92->enter($__internal_ddf43a702f516c96006de942fbad34a7b4c2d7d7220f7ccbfd16767bb1102a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddf43a702f516c96006de942fbad34a7b4c2d7d7220f7ccbfd16767bb1102a92->leave($__internal_ddf43a702f516c96006de942fbad34a7b4c2d7d7220f7ccbfd16767bb1102a92_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_435094d317201a0d7579894ab1e755d21ae432a6a5d09fa57109844978b33c90 = $this->env->getExtension("native_profiler");
        $__internal_435094d317201a0d7579894ab1e755d21ae432a6a5d09fa57109844978b33c90->enter($__internal_435094d317201a0d7579894ab1e755d21ae432a6a5d09fa57109844978b33c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_435094d317201a0d7579894ab1e755d21ae432a6a5d09fa57109844978b33c90->leave($__internal_435094d317201a0d7579894ab1e755d21ae432a6a5d09fa57109844978b33c90_prof);

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
