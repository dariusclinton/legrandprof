<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_2bdbb70e2a1c877fa248404006573ab42dcbdadcf20918b56371727ae9018878 extends Twig_Template
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
        $__internal_4bef52e519036605868b3cb1bf46524b7d607144dc88c25b454c92a225f46aaa = $this->env->getExtension("native_profiler");
        $__internal_4bef52e519036605868b3cb1bf46524b7d607144dc88c25b454c92a225f46aaa->enter($__internal_4bef52e519036605868b3cb1bf46524b7d607144dc88c25b454c92a225f46aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bef52e519036605868b3cb1bf46524b7d607144dc88c25b454c92a225f46aaa->leave($__internal_4bef52e519036605868b3cb1bf46524b7d607144dc88c25b454c92a225f46aaa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8850547a834a78a82c6b6a0f12940ddb6a66ade2b0f0c5a94e5cfd125f5e798 = $this->env->getExtension("native_profiler");
        $__internal_f8850547a834a78a82c6b6a0f12940ddb6a66ade2b0f0c5a94e5cfd125f5e798->enter($__internal_f8850547a834a78a82c6b6a0f12940ddb6a66ade2b0f0c5a94e5cfd125f5e798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_f8850547a834a78a82c6b6a0f12940ddb6a66ade2b0f0c5a94e5cfd125f5e798->leave($__internal_f8850547a834a78a82c6b6a0f12940ddb6a66ade2b0f0c5a94e5cfd125f5e798_prof);

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
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
