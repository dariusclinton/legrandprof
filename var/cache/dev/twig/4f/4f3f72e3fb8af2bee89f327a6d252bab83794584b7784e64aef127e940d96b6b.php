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
        $__internal_1fa706c997ca66a30da5f716e33c3ab45c2aeb8e2cb23d45fe53e496935793ef = $this->env->getExtension("native_profiler");
        $__internal_1fa706c997ca66a30da5f716e33c3ab45c2aeb8e2cb23d45fe53e496935793ef->enter($__internal_1fa706c997ca66a30da5f716e33c3ab45c2aeb8e2cb23d45fe53e496935793ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fa706c997ca66a30da5f716e33c3ab45c2aeb8e2cb23d45fe53e496935793ef->leave($__internal_1fa706c997ca66a30da5f716e33c3ab45c2aeb8e2cb23d45fe53e496935793ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3af585775e43f53ef47b76ea2518b447e995f9170df9a735151701625d49c15 = $this->env->getExtension("native_profiler");
        $__internal_b3af585775e43f53ef47b76ea2518b447e995f9170df9a735151701625d49c15->enter($__internal_b3af585775e43f53ef47b76ea2518b447e995f9170df9a735151701625d49c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_b3af585775e43f53ef47b76ea2518b447e995f9170df9a735151701625d49c15->leave($__internal_b3af585775e43f53ef47b76ea2518b447e995f9170df9a735151701625d49c15_prof);

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
