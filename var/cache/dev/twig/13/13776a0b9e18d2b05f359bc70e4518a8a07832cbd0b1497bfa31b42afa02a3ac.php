<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8536f341ff3076cf2ceaab09e7329f7e4ae6a5d54a03520aa948c5d0ace2f058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_f6bd2245ac7fbc99e93f7339fc702b1f2c02e9b4ea0fece7d31c0a196f8d09d0 = $this->env->getExtension("native_profiler");
        $__internal_f6bd2245ac7fbc99e93f7339fc702b1f2c02e9b4ea0fece7d31c0a196f8d09d0->enter($__internal_f6bd2245ac7fbc99e93f7339fc702b1f2c02e9b4ea0fece7d31c0a196f8d09d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6bd2245ac7fbc99e93f7339fc702b1f2c02e9b4ea0fece7d31c0a196f8d09d0->leave($__internal_f6bd2245ac7fbc99e93f7339fc702b1f2c02e9b4ea0fece7d31c0a196f8d09d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8828faedb705bc65c44edeea81ce7d5fde5a8f9b51a41454228becae5f290033 = $this->env->getExtension("native_profiler");
        $__internal_8828faedb705bc65c44edeea81ce7d5fde5a8f9b51a41454228becae5f290033->enter($__internal_8828faedb705bc65c44edeea81ce7d5fde5a8f9b51a41454228becae5f290033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_8828faedb705bc65c44edeea81ce7d5fde5a8f9b51a41454228becae5f290033->leave($__internal_8828faedb705bc65c44edeea81ce7d5fde5a8f9b51a41454228becae5f290033_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
