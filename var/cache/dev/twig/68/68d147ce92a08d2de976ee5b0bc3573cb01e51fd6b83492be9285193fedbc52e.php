<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4ab49bb795b9cf59c836d91c2c3dbbd61afe0342bba06ccaa56bf3d136d119fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75fff3b68f5b091bb2b4b2356631afc259ca167d51dbb8420592068d339cfdb4 = $this->env->getExtension("native_profiler");
        $__internal_75fff3b68f5b091bb2b4b2356631afc259ca167d51dbb8420592068d339cfdb4->enter($__internal_75fff3b68f5b091bb2b4b2356631afc259ca167d51dbb8420592068d339cfdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75fff3b68f5b091bb2b4b2356631afc259ca167d51dbb8420592068d339cfdb4->leave($__internal_75fff3b68f5b091bb2b4b2356631afc259ca167d51dbb8420592068d339cfdb4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_365bec4564f186beb7b7cd77abf74eeb372193d81cc5f27400aa8c40db717e40 = $this->env->getExtension("native_profiler");
        $__internal_365bec4564f186beb7b7cd77abf74eeb372193d81cc5f27400aa8c40db717e40->enter($__internal_365bec4564f186beb7b7cd77abf74eeb372193d81cc5f27400aa8c40db717e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_365bec4564f186beb7b7cd77abf74eeb372193d81cc5f27400aa8c40db717e40->leave($__internal_365bec4564f186beb7b7cd77abf74eeb372193d81cc5f27400aa8c40db717e40_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_479df4534cdfe38820b1e024d9d9136b17e0c42c051ef3b04724aabc5cdf940d = $this->env->getExtension("native_profiler");
        $__internal_479df4534cdfe38820b1e024d9d9136b17e0c42c051ef3b04724aabc5cdf940d->enter($__internal_479df4534cdfe38820b1e024d9d9136b17e0c42c051ef3b04724aabc5cdf940d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_479df4534cdfe38820b1e024d9d9136b17e0c42c051ef3b04724aabc5cdf940d->leave($__internal_479df4534cdfe38820b1e024d9d9136b17e0c42c051ef3b04724aabc5cdf940d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/* */
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
