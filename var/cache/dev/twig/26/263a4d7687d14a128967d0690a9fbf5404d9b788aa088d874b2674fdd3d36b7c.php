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
        $__internal_4a69308888d1efa85cd32b80631adec118152429b76453ef2d99bdb856e2b346 = $this->env->getExtension("native_profiler");
        $__internal_4a69308888d1efa85cd32b80631adec118152429b76453ef2d99bdb856e2b346->enter($__internal_4a69308888d1efa85cd32b80631adec118152429b76453ef2d99bdb856e2b346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a69308888d1efa85cd32b80631adec118152429b76453ef2d99bdb856e2b346->leave($__internal_4a69308888d1efa85cd32b80631adec118152429b76453ef2d99bdb856e2b346_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44850cf65fdb95fe5a5f332697933e45e0bb0884dcd1468cb71f099ab42a0780 = $this->env->getExtension("native_profiler");
        $__internal_44850cf65fdb95fe5a5f332697933e45e0bb0884dcd1468cb71f099ab42a0780->enter($__internal_44850cf65fdb95fe5a5f332697933e45e0bb0884dcd1468cb71f099ab42a0780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_44850cf65fdb95fe5a5f332697933e45e0bb0884dcd1468cb71f099ab42a0780->leave($__internal_44850cf65fdb95fe5a5f332697933e45e0bb0884dcd1468cb71f099ab42a0780_prof);

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
