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
        $__internal_27e4d8199ddc61ed146e987ffe7f9c981bf13456a147167ff3137882352b1834 = $this->env->getExtension("native_profiler");
        $__internal_27e4d8199ddc61ed146e987ffe7f9c981bf13456a147167ff3137882352b1834->enter($__internal_27e4d8199ddc61ed146e987ffe7f9c981bf13456a147167ff3137882352b1834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27e4d8199ddc61ed146e987ffe7f9c981bf13456a147167ff3137882352b1834->leave($__internal_27e4d8199ddc61ed146e987ffe7f9c981bf13456a147167ff3137882352b1834_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_338d12d55a0e5d4ecc782e4889f62242c3911c44b5ece1dc8a5e3850784b02c0 = $this->env->getExtension("native_profiler");
        $__internal_338d12d55a0e5d4ecc782e4889f62242c3911c44b5ece1dc8a5e3850784b02c0->enter($__internal_338d12d55a0e5d4ecc782e4889f62242c3911c44b5ece1dc8a5e3850784b02c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_338d12d55a0e5d4ecc782e4889f62242c3911c44b5ece1dc8a5e3850784b02c0->leave($__internal_338d12d55a0e5d4ecc782e4889f62242c3911c44b5ece1dc8a5e3850784b02c0_prof);

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
