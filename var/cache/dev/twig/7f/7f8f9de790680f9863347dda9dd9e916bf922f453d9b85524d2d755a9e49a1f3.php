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
        $__internal_43c02296fa97513c9c45ae4652b66e79dad4cfb03e658bcf97de4f9e7da4d397 = $this->env->getExtension("native_profiler");
        $__internal_43c02296fa97513c9c45ae4652b66e79dad4cfb03e658bcf97de4f9e7da4d397->enter($__internal_43c02296fa97513c9c45ae4652b66e79dad4cfb03e658bcf97de4f9e7da4d397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43c02296fa97513c9c45ae4652b66e79dad4cfb03e658bcf97de4f9e7da4d397->leave($__internal_43c02296fa97513c9c45ae4652b66e79dad4cfb03e658bcf97de4f9e7da4d397_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50c79b40026654ec1efa319f636cc5a3261cb1c18dcfe36916b6f78af388647f = $this->env->getExtension("native_profiler");
        $__internal_50c79b40026654ec1efa319f636cc5a3261cb1c18dcfe36916b6f78af388647f->enter($__internal_50c79b40026654ec1efa319f636cc5a3261cb1c18dcfe36916b6f78af388647f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_50c79b40026654ec1efa319f636cc5a3261cb1c18dcfe36916b6f78af388647f->leave($__internal_50c79b40026654ec1efa319f636cc5a3261cb1c18dcfe36916b6f78af388647f_prof);

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
