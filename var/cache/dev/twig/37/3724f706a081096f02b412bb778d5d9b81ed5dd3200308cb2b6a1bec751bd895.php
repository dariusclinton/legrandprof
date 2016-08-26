<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_addc6a791de2974e7aa145d72799d3422f9b4b4248c4631977d654914e2cae32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_ecc1f723a063b4b56640642e2ab9881ebe00cefb2790855388625e705c799b12 = $this->env->getExtension("native_profiler");
        $__internal_ecc1f723a063b4b56640642e2ab9881ebe00cefb2790855388625e705c799b12->enter($__internal_ecc1f723a063b4b56640642e2ab9881ebe00cefb2790855388625e705c799b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecc1f723a063b4b56640642e2ab9881ebe00cefb2790855388625e705c799b12->leave($__internal_ecc1f723a063b4b56640642e2ab9881ebe00cefb2790855388625e705c799b12_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2384df5645b603575a1464aa9f5171060fcbf6c0e257a2ef5a83e467ffe8061 = $this->env->getExtension("native_profiler");
        $__internal_b2384df5645b603575a1464aa9f5171060fcbf6c0e257a2ef5a83e467ffe8061->enter($__internal_b2384df5645b603575a1464aa9f5171060fcbf6c0e257a2ef5a83e467ffe8061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_b2384df5645b603575a1464aa9f5171060fcbf6c0e257a2ef5a83e467ffe8061->leave($__internal_b2384df5645b603575a1464aa9f5171060fcbf6c0e257a2ef5a83e467ffe8061_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
