<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_80464fbf5868c0c8865ff25d806c3d60bd8e2ff3da8e6d052d8dd565e21d7503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_08f8ba9a3b6a24c66cec2bda3def47c234311c2fc4bc26bf0cd8d368d3ba9fc4 = $this->env->getExtension("native_profiler");
        $__internal_08f8ba9a3b6a24c66cec2bda3def47c234311c2fc4bc26bf0cd8d368d3ba9fc4->enter($__internal_08f8ba9a3b6a24c66cec2bda3def47c234311c2fc4bc26bf0cd8d368d3ba9fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08f8ba9a3b6a24c66cec2bda3def47c234311c2fc4bc26bf0cd8d368d3ba9fc4->leave($__internal_08f8ba9a3b6a24c66cec2bda3def47c234311c2fc4bc26bf0cd8d368d3ba9fc4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98472af9cfadcb0f67dbf8d1fc1eea8efd6c2c1340443756b599876a792eeade = $this->env->getExtension("native_profiler");
        $__internal_98472af9cfadcb0f67dbf8d1fc1eea8efd6c2c1340443756b599876a792eeade->enter($__internal_98472af9cfadcb0f67dbf8d1fc1eea8efd6c2c1340443756b599876a792eeade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_98472af9cfadcb0f67dbf8d1fc1eea8efd6c2c1340443756b599876a792eeade->leave($__internal_98472af9cfadcb0f67dbf8d1fc1eea8efd6c2c1340443756b599876a792eeade_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
