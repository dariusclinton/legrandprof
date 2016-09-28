<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_9e738a5cdb0f3384d6e7280cfe3700f2096f9421318985dea485cb3eefbd5728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_9282e3773e5b3d8c155f8d49c29f37b45d7d642fe7a91e6315022ee1d0521780 = $this->env->getExtension("native_profiler");
        $__internal_9282e3773e5b3d8c155f8d49c29f37b45d7d642fe7a91e6315022ee1d0521780->enter($__internal_9282e3773e5b3d8c155f8d49c29f37b45d7d642fe7a91e6315022ee1d0521780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9282e3773e5b3d8c155f8d49c29f37b45d7d642fe7a91e6315022ee1d0521780->leave($__internal_9282e3773e5b3d8c155f8d49c29f37b45d7d642fe7a91e6315022ee1d0521780_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02ec5401bbe43c549231402f8be05115a39831ef4f8e9971af2041253b82d522 = $this->env->getExtension("native_profiler");
        $__internal_02ec5401bbe43c549231402f8be05115a39831ef4f8e9971af2041253b82d522->enter($__internal_02ec5401bbe43c549231402f8be05115a39831ef4f8e9971af2041253b82d522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_02ec5401bbe43c549231402f8be05115a39831ef4f8e9971af2041253b82d522->leave($__internal_02ec5401bbe43c549231402f8be05115a39831ef4f8e9971af2041253b82d522_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
