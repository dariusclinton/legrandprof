<?php

/* @LGPUser/Registration/register.html.twig */
class __TwigTemplate_7fee79d169dc4609d180808d7c2a6cdfc7cb7aed15a819309c1b79c098c137b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Registration/register.html.twig", 1);
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
        $__internal_da76b116b2585bc0f89d460644a6d5367c64ccb7fe67849008f0741eeab6a7b4 = $this->env->getExtension("native_profiler");
        $__internal_da76b116b2585bc0f89d460644a6d5367c64ccb7fe67849008f0741eeab6a7b4->enter($__internal_da76b116b2585bc0f89d460644a6d5367c64ccb7fe67849008f0741eeab6a7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da76b116b2585bc0f89d460644a6d5367c64ccb7fe67849008f0741eeab6a7b4->leave($__internal_da76b116b2585bc0f89d460644a6d5367c64ccb7fe67849008f0741eeab6a7b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a98c4e7d245e05e329ae95f58dfbf4998884e571a3fe59b5f5fc761ad9411bdd = $this->env->getExtension("native_profiler");
        $__internal_a98c4e7d245e05e329ae95f58dfbf4998884e571a3fe59b5f5fc761ad9411bdd->enter($__internal_a98c4e7d245e05e329ae95f58dfbf4998884e571a3fe59b5f5fc761ad9411bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "  ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@LGPUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a98c4e7d245e05e329ae95f58dfbf4998884e571a3fe59b5f5fc761ad9411bdd->leave($__internal_a98c4e7d245e05e329ae95f58dfbf4998884e571a3fe59b5f5fc761ad9411bdd_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Registration/register.html.twig";
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
