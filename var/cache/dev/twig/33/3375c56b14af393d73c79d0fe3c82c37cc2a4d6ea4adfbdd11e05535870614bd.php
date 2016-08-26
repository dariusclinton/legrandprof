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
        $__internal_da02bff9b68ce04feee47a0bfb1be3d71a3da9d51c235c45416a1fd48f4354fd = $this->env->getExtension("native_profiler");
        $__internal_da02bff9b68ce04feee47a0bfb1be3d71a3da9d51c235c45416a1fd48f4354fd->enter($__internal_da02bff9b68ce04feee47a0bfb1be3d71a3da9d51c235c45416a1fd48f4354fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da02bff9b68ce04feee47a0bfb1be3d71a3da9d51c235c45416a1fd48f4354fd->leave($__internal_da02bff9b68ce04feee47a0bfb1be3d71a3da9d51c235c45416a1fd48f4354fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae548d927c21573dd2e025c3a1c445ecaf9fde875a15b5e4d0d7e28e422339df = $this->env->getExtension("native_profiler");
        $__internal_ae548d927c21573dd2e025c3a1c445ecaf9fde875a15b5e4d0d7e28e422339df->enter($__internal_ae548d927c21573dd2e025c3a1c445ecaf9fde875a15b5e4d0d7e28e422339df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_ae548d927c21573dd2e025c3a1c445ecaf9fde875a15b5e4d0d7e28e422339df->leave($__internal_ae548d927c21573dd2e025c3a1c445ecaf9fde875a15b5e4d0d7e28e422339df_prof);

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
