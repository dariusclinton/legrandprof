<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_db14e56c91cba01ca8113b481797ac28913369168c358aeb920a6f3c5c96339e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_12a4cd662728c6241490b555b4c95445dc7522a28156bf9a8b5702fc2ed6f35f = $this->env->getExtension("native_profiler");
        $__internal_12a4cd662728c6241490b555b4c95445dc7522a28156bf9a8b5702fc2ed6f35f->enter($__internal_12a4cd662728c6241490b555b4c95445dc7522a28156bf9a8b5702fc2ed6f35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12a4cd662728c6241490b555b4c95445dc7522a28156bf9a8b5702fc2ed6f35f->leave($__internal_12a4cd662728c6241490b555b4c95445dc7522a28156bf9a8b5702fc2ed6f35f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65bb0c767b4fddba1160853fa6926292c9fc99ebd4b06ce82e2402777e534c03 = $this->env->getExtension("native_profiler");
        $__internal_65bb0c767b4fddba1160853fa6926292c9fc99ebd4b06ce82e2402777e534c03->enter($__internal_65bb0c767b4fddba1160853fa6926292c9fc99ebd4b06ce82e2402777e534c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_65bb0c767b4fddba1160853fa6926292c9fc99ebd4b06ce82e2402777e534c03->leave($__internal_65bb0c767b4fddba1160853fa6926292c9fc99ebd4b06ce82e2402777e534c03_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
