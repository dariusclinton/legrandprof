<?php

/* @LGPUser/Registration/register.html.twig */
class __TwigTemplate_7fee79d169dc4609d180808d7c2a6cdfc7cb7aed15a819309c1b79c098c137b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Registration/register.html.twig", 1);
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
        $__internal_5d39a36bef52f0ac6126bab3d49be6d24ed76c7c38f5a5e5b865e4e4399c7ae5 = $this->env->getExtension("native_profiler");
        $__internal_5d39a36bef52f0ac6126bab3d49be6d24ed76c7c38f5a5e5b865e4e4399c7ae5->enter($__internal_5d39a36bef52f0ac6126bab3d49be6d24ed76c7c38f5a5e5b865e4e4399c7ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d39a36bef52f0ac6126bab3d49be6d24ed76c7c38f5a5e5b865e4e4399c7ae5->leave($__internal_5d39a36bef52f0ac6126bab3d49be6d24ed76c7c38f5a5e5b865e4e4399c7ae5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_924c044a7c629e16452fced5924fa31d9ab08ec8bff534f06f7fb51fd61ab371 = $this->env->getExtension("native_profiler");
        $__internal_924c044a7c629e16452fced5924fa31d9ab08ec8bff534f06f7fb51fd61ab371->enter($__internal_924c044a7c629e16452fced5924fa31d9ab08ec8bff534f06f7fb51fd61ab371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_924c044a7c629e16452fced5924fa31d9ab08ec8bff534f06f7fb51fd61ab371->leave($__internal_924c044a7c629e16452fced5924fa31d9ab08ec8bff534f06f7fb51fd61ab371_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/register.html.twig";
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
/*   {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
