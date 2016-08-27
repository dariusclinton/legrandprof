<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f9aef295c967d1ddf5e2df7b04c8b8833814a8e3b8c395bf8630cc6369c32ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_aa23735dd9ac40aa94ad4c914ad9837e461f2c0c241c30bcb8cbb8d006aef637 = $this->env->getExtension("native_profiler");
        $__internal_aa23735dd9ac40aa94ad4c914ad9837e461f2c0c241c30bcb8cbb8d006aef637->enter($__internal_aa23735dd9ac40aa94ad4c914ad9837e461f2c0c241c30bcb8cbb8d006aef637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa23735dd9ac40aa94ad4c914ad9837e461f2c0c241c30bcb8cbb8d006aef637->leave($__internal_aa23735dd9ac40aa94ad4c914ad9837e461f2c0c241c30bcb8cbb8d006aef637_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a41356f1e790146d27032684f25c196f1591194b3ef342776acc0d6c9c774381 = $this->env->getExtension("native_profiler");
        $__internal_a41356f1e790146d27032684f25c196f1591194b3ef342776acc0d6c9c774381->enter($__internal_a41356f1e790146d27032684f25c196f1591194b3ef342776acc0d6c9c774381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a41356f1e790146d27032684f25c196f1591194b3ef342776acc0d6c9c774381->leave($__internal_a41356f1e790146d27032684f25c196f1591194b3ef342776acc0d6c9c774381_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/*   {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
