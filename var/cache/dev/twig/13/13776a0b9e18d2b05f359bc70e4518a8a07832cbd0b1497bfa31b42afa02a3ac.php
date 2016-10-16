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
        $__internal_d0f30e630fcf1b161347c593fbac18b712f3301be4b2a683bd0872d535c8d312 = $this->env->getExtension("native_profiler");
        $__internal_d0f30e630fcf1b161347c593fbac18b712f3301be4b2a683bd0872d535c8d312->enter($__internal_d0f30e630fcf1b161347c593fbac18b712f3301be4b2a683bd0872d535c8d312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0f30e630fcf1b161347c593fbac18b712f3301be4b2a683bd0872d535c8d312->leave($__internal_d0f30e630fcf1b161347c593fbac18b712f3301be4b2a683bd0872d535c8d312_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50af6eee169079f6d0fe37d4300bcb5b06d2d458e1004dbc8796b740a2dbd9b4 = $this->env->getExtension("native_profiler");
        $__internal_50af6eee169079f6d0fe37d4300bcb5b06d2d458e1004dbc8796b740a2dbd9b4->enter($__internal_50af6eee169079f6d0fe37d4300bcb5b06d2d458e1004dbc8796b740a2dbd9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_50af6eee169079f6d0fe37d4300bcb5b06d2d458e1004dbc8796b740a2dbd9b4->leave($__internal_50af6eee169079f6d0fe37d4300bcb5b06d2d458e1004dbc8796b740a2dbd9b4_prof);

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
