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
        $__internal_6743863683ae76df39d329baba5bccf21376f7106c09855dfe9c75e0b3cae546 = $this->env->getExtension("native_profiler");
        $__internal_6743863683ae76df39d329baba5bccf21376f7106c09855dfe9c75e0b3cae546->enter($__internal_6743863683ae76df39d329baba5bccf21376f7106c09855dfe9c75e0b3cae546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6743863683ae76df39d329baba5bccf21376f7106c09855dfe9c75e0b3cae546->leave($__internal_6743863683ae76df39d329baba5bccf21376f7106c09855dfe9c75e0b3cae546_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e0cd047c3ae8edfc690c69a32bbed3ca73d381af5eed42da44ae69d025e100d = $this->env->getExtension("native_profiler");
        $__internal_9e0cd047c3ae8edfc690c69a32bbed3ca73d381af5eed42da44ae69d025e100d->enter($__internal_9e0cd047c3ae8edfc690c69a32bbed3ca73d381af5eed42da44ae69d025e100d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_9e0cd047c3ae8edfc690c69a32bbed3ca73d381af5eed42da44ae69d025e100d->leave($__internal_9e0cd047c3ae8edfc690c69a32bbed3ca73d381af5eed42da44ae69d025e100d_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdd7b94050d3bbde2e8361fca2e0558d59226de6c1b1c1013ef94fe2b2a6315e = $this->env->getExtension("native_profiler");
        $__internal_bdd7b94050d3bbde2e8361fca2e0558d59226de6c1b1c1013ef94fe2b2a6315e->enter($__internal_bdd7b94050d3bbde2e8361fca2e0558d59226de6c1b1c1013ef94fe2b2a6315e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_bdd7b94050d3bbde2e8361fca2e0558d59226de6c1b1c1013ef94fe2b2a6315e->leave($__internal_bdd7b94050d3bbde2e8361fca2e0558d59226de6c1b1c1013ef94fe2b2a6315e_prof);

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
