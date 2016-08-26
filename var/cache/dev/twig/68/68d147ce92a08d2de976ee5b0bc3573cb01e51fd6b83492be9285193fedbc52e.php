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
        $__internal_3cbebdc14ce995296187467e3058320bdb92944dfb3d637f724b16e08d8e7710 = $this->env->getExtension("native_profiler");
        $__internal_3cbebdc14ce995296187467e3058320bdb92944dfb3d637f724b16e08d8e7710->enter($__internal_3cbebdc14ce995296187467e3058320bdb92944dfb3d637f724b16e08d8e7710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cbebdc14ce995296187467e3058320bdb92944dfb3d637f724b16e08d8e7710->leave($__internal_3cbebdc14ce995296187467e3058320bdb92944dfb3d637f724b16e08d8e7710_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9d294dad42a9045838d636e2e307a9e938619d2dd9e74449a8120d10112dbd5 = $this->env->getExtension("native_profiler");
        $__internal_c9d294dad42a9045838d636e2e307a9e938619d2dd9e74449a8120d10112dbd5->enter($__internal_c9d294dad42a9045838d636e2e307a9e938619d2dd9e74449a8120d10112dbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_c9d294dad42a9045838d636e2e307a9e938619d2dd9e74449a8120d10112dbd5->leave($__internal_c9d294dad42a9045838d636e2e307a9e938619d2dd9e74449a8120d10112dbd5_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec6df37dface8d6435722a2420452ac02abf3e6dad8457134b4d4f7844ac9c6f = $this->env->getExtension("native_profiler");
        $__internal_ec6df37dface8d6435722a2420452ac02abf3e6dad8457134b4d4f7844ac9c6f->enter($__internal_ec6df37dface8d6435722a2420452ac02abf3e6dad8457134b4d4f7844ac9c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_ec6df37dface8d6435722a2420452ac02abf3e6dad8457134b4d4f7844ac9c6f->leave($__internal_ec6df37dface8d6435722a2420452ac02abf3e6dad8457134b4d4f7844ac9c6f_prof);

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
