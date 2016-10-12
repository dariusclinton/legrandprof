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
        $__internal_b9ce65a93b64ba269daf156f018c348af691ee7441d2c81e3fa6697a528bacbb = $this->env->getExtension("native_profiler");
        $__internal_b9ce65a93b64ba269daf156f018c348af691ee7441d2c81e3fa6697a528bacbb->enter($__internal_b9ce65a93b64ba269daf156f018c348af691ee7441d2c81e3fa6697a528bacbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9ce65a93b64ba269daf156f018c348af691ee7441d2c81e3fa6697a528bacbb->leave($__internal_b9ce65a93b64ba269daf156f018c348af691ee7441d2c81e3fa6697a528bacbb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0897e876c8cf4f6223cd988d1467a0997f32764a0bd3bcc804156bc79800952 = $this->env->getExtension("native_profiler");
        $__internal_b0897e876c8cf4f6223cd988d1467a0997f32764a0bd3bcc804156bc79800952->enter($__internal_b0897e876c8cf4f6223cd988d1467a0997f32764a0bd3bcc804156bc79800952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b0897e876c8cf4f6223cd988d1467a0997f32764a0bd3bcc804156bc79800952->leave($__internal_b0897e876c8cf4f6223cd988d1467a0997f32764a0bd3bcc804156bc79800952_prof);

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
