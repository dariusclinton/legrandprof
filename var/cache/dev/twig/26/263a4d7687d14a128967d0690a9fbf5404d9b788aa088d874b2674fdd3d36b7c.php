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
        $__internal_cc28e03efad4db5f7241740f7e97864ae6f5310be8703345d3f110944dee8890 = $this->env->getExtension("native_profiler");
        $__internal_cc28e03efad4db5f7241740f7e97864ae6f5310be8703345d3f110944dee8890->enter($__internal_cc28e03efad4db5f7241740f7e97864ae6f5310be8703345d3f110944dee8890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc28e03efad4db5f7241740f7e97864ae6f5310be8703345d3f110944dee8890->leave($__internal_cc28e03efad4db5f7241740f7e97864ae6f5310be8703345d3f110944dee8890_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e6d9ecbb42b43cdcbb9b4ac3261e35ba67550617e0b885ee27e978ef2fbf98e = $this->env->getExtension("native_profiler");
        $__internal_8e6d9ecbb42b43cdcbb9b4ac3261e35ba67550617e0b885ee27e978ef2fbf98e->enter($__internal_8e6d9ecbb42b43cdcbb9b4ac3261e35ba67550617e0b885ee27e978ef2fbf98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_8e6d9ecbb42b43cdcbb9b4ac3261e35ba67550617e0b885ee27e978ef2fbf98e->leave($__internal_8e6d9ecbb42b43cdcbb9b4ac3261e35ba67550617e0b885ee27e978ef2fbf98e_prof);

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
