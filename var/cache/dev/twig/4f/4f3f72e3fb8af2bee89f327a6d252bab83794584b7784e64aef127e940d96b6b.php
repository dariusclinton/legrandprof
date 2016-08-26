<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_86a935adb1bdc7f5667babde57bac0c8d0799aa6e744917caae4b9314b8784ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_67d3e168bd066615aee37d5aaca39ce3aa9ce80a3a825c003bd529046608a122 = $this->env->getExtension("native_profiler");
        $__internal_67d3e168bd066615aee37d5aaca39ce3aa9ce80a3a825c003bd529046608a122->enter($__internal_67d3e168bd066615aee37d5aaca39ce3aa9ce80a3a825c003bd529046608a122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67d3e168bd066615aee37d5aaca39ce3aa9ce80a3a825c003bd529046608a122->leave($__internal_67d3e168bd066615aee37d5aaca39ce3aa9ce80a3a825c003bd529046608a122_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9ea67a54d3f69f4c730fd829b904345afa28ca9c58704e93974722c1af60213 = $this->env->getExtension("native_profiler");
        $__internal_a9ea67a54d3f69f4c730fd829b904345afa28ca9c58704e93974722c1af60213->enter($__internal_a9ea67a54d3f69f4c730fd829b904345afa28ca9c58704e93974722c1af60213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a9ea67a54d3f69f4c730fd829b904345afa28ca9c58704e93974722c1af60213->leave($__internal_a9ea67a54d3f69f4c730fd829b904345afa28ca9c58704e93974722c1af60213_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
