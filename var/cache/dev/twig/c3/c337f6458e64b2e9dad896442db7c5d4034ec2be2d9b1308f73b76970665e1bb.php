<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3d2574fcb41d093ffb89a54df4fe379566191610c21ee683b823d8d3c8f96f9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_46dda0108a3ed2567287ef51b9001b64b1291f9f7e48fb6a02c5a0cb210b6dea = $this->env->getExtension("native_profiler");
        $__internal_46dda0108a3ed2567287ef51b9001b64b1291f9f7e48fb6a02c5a0cb210b6dea->enter($__internal_46dda0108a3ed2567287ef51b9001b64b1291f9f7e48fb6a02c5a0cb210b6dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46dda0108a3ed2567287ef51b9001b64b1291f9f7e48fb6a02c5a0cb210b6dea->leave($__internal_46dda0108a3ed2567287ef51b9001b64b1291f9f7e48fb6a02c5a0cb210b6dea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bcb618117c3cec80c68fd33c459687fdd0fce0f291c239115a83ef261966b45 = $this->env->getExtension("native_profiler");
        $__internal_1bcb618117c3cec80c68fd33c459687fdd0fce0f291c239115a83ef261966b45->enter($__internal_1bcb618117c3cec80c68fd33c459687fdd0fce0f291c239115a83ef261966b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1bcb618117c3cec80c68fd33c459687fdd0fce0f291c239115a83ef261966b45->leave($__internal_1bcb618117c3cec80c68fd33c459687fdd0fce0f291c239115a83ef261966b45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
