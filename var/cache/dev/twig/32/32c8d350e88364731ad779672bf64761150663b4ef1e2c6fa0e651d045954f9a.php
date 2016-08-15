<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_08c026bc5f5dd304b8d7a168b1a754d022946a6930df95269c575ccd25bddedc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_30d53e921861e9d0d3c69d881008c2400c9c2cca680836dbf599f835c2ac9e7c = $this->env->getExtension("native_profiler");
        $__internal_30d53e921861e9d0d3c69d881008c2400c9c2cca680836dbf599f835c2ac9e7c->enter($__internal_30d53e921861e9d0d3c69d881008c2400c9c2cca680836dbf599f835c2ac9e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30d53e921861e9d0d3c69d881008c2400c9c2cca680836dbf599f835c2ac9e7c->leave($__internal_30d53e921861e9d0d3c69d881008c2400c9c2cca680836dbf599f835c2ac9e7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e13189b8b7f8bd62232eb548cfe45947436dc3cd117d86d136ca7982ef8dcee = $this->env->getExtension("native_profiler");
        $__internal_6e13189b8b7f8bd62232eb548cfe45947436dc3cd117d86d136ca7982ef8dcee->enter($__internal_6e13189b8b7f8bd62232eb548cfe45947436dc3cd117d86d136ca7982ef8dcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_6e13189b8b7f8bd62232eb548cfe45947436dc3cd117d86d136ca7982ef8dcee->leave($__internal_6e13189b8b7f8bd62232eb548cfe45947436dc3cd117d86d136ca7982ef8dcee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
