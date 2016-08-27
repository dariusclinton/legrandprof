<?php

/* @LGPUser/layout.html.twig */
class __TwigTemplate_121d417e80f449987b96c0694b6c3f8454776af0ec9692c329704d319b061a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/layout.html.twig", 1);
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
        $__internal_717252935828bd41a6f13e2b2b289d8bbdb0f68442ab533d5f56ce6820248cc1 = $this->env->getExtension("native_profiler");
        $__internal_717252935828bd41a6f13e2b2b289d8bbdb0f68442ab533d5f56ce6820248cc1->enter($__internal_717252935828bd41a6f13e2b2b289d8bbdb0f68442ab533d5f56ce6820248cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_717252935828bd41a6f13e2b2b289d8bbdb0f68442ab533d5f56ce6820248cc1->leave($__internal_717252935828bd41a6f13e2b2b289d8bbdb0f68442ab533d5f56ce6820248cc1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_741fbe15ce78bee476c83dcf6f246869d056b77f72df50286149705b8e1bc912 = $this->env->getExtension("native_profiler");
        $__internal_741fbe15ce78bee476c83dcf6f246869d056b77f72df50286149705b8e1bc912->enter($__internal_741fbe15ce78bee476c83dcf6f246869d056b77f72df50286149705b8e1bc912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_741fbe15ce78bee476c83dcf6f246869d056b77f72df50286149705b8e1bc912->leave($__internal_741fbe15ce78bee476c83dcf6f246869d056b77f72df50286149705b8e1bc912_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b270e2f3414fb8bbcbc6b1d62e7477efcc2afd3fd24054c485b36559a50215e = $this->env->getExtension("native_profiler");
        $__internal_6b270e2f3414fb8bbcbc6b1d62e7477efcc2afd3fd24054c485b36559a50215e->enter($__internal_6b270e2f3414fb8bbcbc6b1d62e7477efcc2afd3fd24054c485b36559a50215e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_6b270e2f3414fb8bbcbc6b1d62e7477efcc2afd3fd24054c485b36559a50215e->leave($__internal_6b270e2f3414fb8bbcbc6b1d62e7477efcc2afd3fd24054c485b36559a50215e_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/layout.html.twig";
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
