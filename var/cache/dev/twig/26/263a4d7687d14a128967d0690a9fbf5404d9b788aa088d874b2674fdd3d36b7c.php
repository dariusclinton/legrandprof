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
        $__internal_04fdb0b7fa3fe2287654f200d2754bae949c5d47fa9c49739b540bfc661c3dbf = $this->env->getExtension("native_profiler");
        $__internal_04fdb0b7fa3fe2287654f200d2754bae949c5d47fa9c49739b540bfc661c3dbf->enter($__internal_04fdb0b7fa3fe2287654f200d2754bae949c5d47fa9c49739b540bfc661c3dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04fdb0b7fa3fe2287654f200d2754bae949c5d47fa9c49739b540bfc661c3dbf->leave($__internal_04fdb0b7fa3fe2287654f200d2754bae949c5d47fa9c49739b540bfc661c3dbf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0868a067c80a90c57fc232ee1c9de6eb6fac260dd004712b34e15102e30c57e = $this->env->getExtension("native_profiler");
        $__internal_a0868a067c80a90c57fc232ee1c9de6eb6fac260dd004712b34e15102e30c57e->enter($__internal_a0868a067c80a90c57fc232ee1c9de6eb6fac260dd004712b34e15102e30c57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_a0868a067c80a90c57fc232ee1c9de6eb6fac260dd004712b34e15102e30c57e->leave($__internal_a0868a067c80a90c57fc232ee1c9de6eb6fac260dd004712b34e15102e30c57e_prof);

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
