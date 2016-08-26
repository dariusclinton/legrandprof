<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_77561ebfd065ae127418de65663460602243aa631c602c07b6aacb8bf31583d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_ed99968da393e954f404a3881a48ac2ee93f9d8757d70b2ca6685c2cab6bda4e = $this->env->getExtension("native_profiler");
        $__internal_ed99968da393e954f404a3881a48ac2ee93f9d8757d70b2ca6685c2cab6bda4e->enter($__internal_ed99968da393e954f404a3881a48ac2ee93f9d8757d70b2ca6685c2cab6bda4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed99968da393e954f404a3881a48ac2ee93f9d8757d70b2ca6685c2cab6bda4e->leave($__internal_ed99968da393e954f404a3881a48ac2ee93f9d8757d70b2ca6685c2cab6bda4e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81907988fa436e2c5af3985994372929799e60c67de91747f73e790344ca8ad1 = $this->env->getExtension("native_profiler");
        $__internal_81907988fa436e2c5af3985994372929799e60c67de91747f73e790344ca8ad1->enter($__internal_81907988fa436e2c5af3985994372929799e60c67de91747f73e790344ca8ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_81907988fa436e2c5af3985994372929799e60c67de91747f73e790344ca8ad1->leave($__internal_81907988fa436e2c5af3985994372929799e60c67de91747f73e790344ca8ad1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
