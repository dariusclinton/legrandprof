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
        $__internal_b10c53e0f01749a6806d36367a6e4e30c398aa118d71a044f6cb9e7b92f36542 = $this->env->getExtension("native_profiler");
        $__internal_b10c53e0f01749a6806d36367a6e4e30c398aa118d71a044f6cb9e7b92f36542->enter($__internal_b10c53e0f01749a6806d36367a6e4e30c398aa118d71a044f6cb9e7b92f36542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b10c53e0f01749a6806d36367a6e4e30c398aa118d71a044f6cb9e7b92f36542->leave($__internal_b10c53e0f01749a6806d36367a6e4e30c398aa118d71a044f6cb9e7b92f36542_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f604ed8f93efb29dd8dfb591a782775ac2cc2d3f3eba86df6d97bd64f6f7ecc = $this->env->getExtension("native_profiler");
        $__internal_9f604ed8f93efb29dd8dfb591a782775ac2cc2d3f3eba86df6d97bd64f6f7ecc->enter($__internal_9f604ed8f93efb29dd8dfb591a782775ac2cc2d3f3eba86df6d97bd64f6f7ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_9f604ed8f93efb29dd8dfb591a782775ac2cc2d3f3eba86df6d97bd64f6f7ecc->leave($__internal_9f604ed8f93efb29dd8dfb591a782775ac2cc2d3f3eba86df6d97bd64f6f7ecc_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ed8bea80989c679deea55f750add0d3f0241e5c43d1dae63e255fece50ffc85 = $this->env->getExtension("native_profiler");
        $__internal_4ed8bea80989c679deea55f750add0d3f0241e5c43d1dae63e255fece50ffc85->enter($__internal_4ed8bea80989c679deea55f750add0d3f0241e5c43d1dae63e255fece50ffc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_4ed8bea80989c679deea55f750add0d3f0241e5c43d1dae63e255fece50ffc85->leave($__internal_4ed8bea80989c679deea55f750add0d3f0241e5c43d1dae63e255fece50ffc85_prof);

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
