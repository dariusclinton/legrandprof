<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a9726e6d020e42e487c531aea7c293bf9878ac3d55d1fba467f08e4b556d14a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_f7478000b53deaea6101e1902a01a03eaeeded81d815b3b6031a9a7f8e8550bd = $this->env->getExtension("native_profiler");
        $__internal_f7478000b53deaea6101e1902a01a03eaeeded81d815b3b6031a9a7f8e8550bd->enter($__internal_f7478000b53deaea6101e1902a01a03eaeeded81d815b3b6031a9a7f8e8550bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7478000b53deaea6101e1902a01a03eaeeded81d815b3b6031a9a7f8e8550bd->leave($__internal_f7478000b53deaea6101e1902a01a03eaeeded81d815b3b6031a9a7f8e8550bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_518ddd419ac09db6568e788155b0a009f299c66ff7be0960c722d13b95371f81 = $this->env->getExtension("native_profiler");
        $__internal_518ddd419ac09db6568e788155b0a009f299c66ff7be0960c722d13b95371f81->enter($__internal_518ddd419ac09db6568e788155b0a009f299c66ff7be0960c722d13b95371f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_518ddd419ac09db6568e788155b0a009f299c66ff7be0960c722d13b95371f81->leave($__internal_518ddd419ac09db6568e788155b0a009f299c66ff7be0960c722d13b95371f81_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
