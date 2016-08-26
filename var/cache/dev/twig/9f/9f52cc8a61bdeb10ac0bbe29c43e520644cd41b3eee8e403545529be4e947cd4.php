<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_225c0888c8d9bd7f5f76296f77ed0a56a0831e7eb5b1398311b8df0a873451e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_110dcde8c0032a07b1571452141adf54438741819555c64cfe0d456713eac7e0 = $this->env->getExtension("native_profiler");
        $__internal_110dcde8c0032a07b1571452141adf54438741819555c64cfe0d456713eac7e0->enter($__internal_110dcde8c0032a07b1571452141adf54438741819555c64cfe0d456713eac7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_110dcde8c0032a07b1571452141adf54438741819555c64cfe0d456713eac7e0->leave($__internal_110dcde8c0032a07b1571452141adf54438741819555c64cfe0d456713eac7e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9da54bacd55670efa13fb64a22e991c8cabe2c41b3104ef54ef3a0c68c22657 = $this->env->getExtension("native_profiler");
        $__internal_c9da54bacd55670efa13fb64a22e991c8cabe2c41b3104ef54ef3a0c68c22657->enter($__internal_c9da54bacd55670efa13fb64a22e991c8cabe2c41b3104ef54ef3a0c68c22657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_c9da54bacd55670efa13fb64a22e991c8cabe2c41b3104ef54ef3a0c68c22657->leave($__internal_c9da54bacd55670efa13fb64a22e991c8cabe2c41b3104ef54ef3a0c68c22657_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
