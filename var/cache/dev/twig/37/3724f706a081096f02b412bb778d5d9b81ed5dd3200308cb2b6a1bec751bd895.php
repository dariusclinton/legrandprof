<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_addc6a791de2974e7aa145d72799d3422f9b4b4248c4631977d654914e2cae32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_84cc6afdc92216e6ada15610c9c8e7407399fe7f73010c8215a43f74a2c7735a = $this->env->getExtension("native_profiler");
        $__internal_84cc6afdc92216e6ada15610c9c8e7407399fe7f73010c8215a43f74a2c7735a->enter($__internal_84cc6afdc92216e6ada15610c9c8e7407399fe7f73010c8215a43f74a2c7735a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84cc6afdc92216e6ada15610c9c8e7407399fe7f73010c8215a43f74a2c7735a->leave($__internal_84cc6afdc92216e6ada15610c9c8e7407399fe7f73010c8215a43f74a2c7735a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85b8e136531d5c3ecdbcced3b89ed18f5ac6b1de1f0314037840a42c9de412ed = $this->env->getExtension("native_profiler");
        $__internal_85b8e136531d5c3ecdbcced3b89ed18f5ac6b1de1f0314037840a42c9de412ed->enter($__internal_85b8e136531d5c3ecdbcced3b89ed18f5ac6b1de1f0314037840a42c9de412ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_85b8e136531d5c3ecdbcced3b89ed18f5ac6b1de1f0314037840a42c9de412ed->leave($__internal_85b8e136531d5c3ecdbcced3b89ed18f5ac6b1de1f0314037840a42c9de412ed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
