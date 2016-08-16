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
        $__internal_c8cbb4ef840c39b07a1adef077df085f08bc0a3203e524612b7db6e59f652c95 = $this->env->getExtension("native_profiler");
        $__internal_c8cbb4ef840c39b07a1adef077df085f08bc0a3203e524612b7db6e59f652c95->enter($__internal_c8cbb4ef840c39b07a1adef077df085f08bc0a3203e524612b7db6e59f652c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8cbb4ef840c39b07a1adef077df085f08bc0a3203e524612b7db6e59f652c95->leave($__internal_c8cbb4ef840c39b07a1adef077df085f08bc0a3203e524612b7db6e59f652c95_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_205c9d8ba77ee14d45ee36c96eefbf8163849b8e9e0463316fa30767f2dcaf95 = $this->env->getExtension("native_profiler");
        $__internal_205c9d8ba77ee14d45ee36c96eefbf8163849b8e9e0463316fa30767f2dcaf95->enter($__internal_205c9d8ba77ee14d45ee36c96eefbf8163849b8e9e0463316fa30767f2dcaf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_205c9d8ba77ee14d45ee36c96eefbf8163849b8e9e0463316fa30767f2dcaf95->leave($__internal_205c9d8ba77ee14d45ee36c96eefbf8163849b8e9e0463316fa30767f2dcaf95_prof);

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
