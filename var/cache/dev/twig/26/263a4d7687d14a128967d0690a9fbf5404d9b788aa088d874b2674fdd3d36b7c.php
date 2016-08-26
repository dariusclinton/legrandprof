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
        $__internal_a1dd46a44e1b7b8d26222e351c4c4d2c2ff7ffed29637047472f2505e9994d82 = $this->env->getExtension("native_profiler");
        $__internal_a1dd46a44e1b7b8d26222e351c4c4d2c2ff7ffed29637047472f2505e9994d82->enter($__internal_a1dd46a44e1b7b8d26222e351c4c4d2c2ff7ffed29637047472f2505e9994d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1dd46a44e1b7b8d26222e351c4c4d2c2ff7ffed29637047472f2505e9994d82->leave($__internal_a1dd46a44e1b7b8d26222e351c4c4d2c2ff7ffed29637047472f2505e9994d82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc7a9ff97f8efc8a22dca371355904eb915d0c4cc0b3f249f4b470a0e8d5830e = $this->env->getExtension("native_profiler");
        $__internal_fc7a9ff97f8efc8a22dca371355904eb915d0c4cc0b3f249f4b470a0e8d5830e->enter($__internal_fc7a9ff97f8efc8a22dca371355904eb915d0c4cc0b3f249f4b470a0e8d5830e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_fc7a9ff97f8efc8a22dca371355904eb915d0c4cc0b3f249f4b470a0e8d5830e->leave($__internal_fc7a9ff97f8efc8a22dca371355904eb915d0c4cc0b3f249f4b470a0e8d5830e_prof);

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
