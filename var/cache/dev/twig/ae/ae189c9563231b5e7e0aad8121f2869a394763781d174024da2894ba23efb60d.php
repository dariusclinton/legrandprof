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
        $__internal_2470192b29d223a8a8809b5fe376882ed7a1c5a0a837c0bdae122cb6a8de8e69 = $this->env->getExtension("native_profiler");
        $__internal_2470192b29d223a8a8809b5fe376882ed7a1c5a0a837c0bdae122cb6a8de8e69->enter($__internal_2470192b29d223a8a8809b5fe376882ed7a1c5a0a837c0bdae122cb6a8de8e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2470192b29d223a8a8809b5fe376882ed7a1c5a0a837c0bdae122cb6a8de8e69->leave($__internal_2470192b29d223a8a8809b5fe376882ed7a1c5a0a837c0bdae122cb6a8de8e69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_58aa633e0c84c0f3a04ffe7df844f39830d4d67e4505c69f3c47a1c40b8da072 = $this->env->getExtension("native_profiler");
        $__internal_58aa633e0c84c0f3a04ffe7df844f39830d4d67e4505c69f3c47a1c40b8da072->enter($__internal_58aa633e0c84c0f3a04ffe7df844f39830d4d67e4505c69f3c47a1c40b8da072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_58aa633e0c84c0f3a04ffe7df844f39830d4d67e4505c69f3c47a1c40b8da072->leave($__internal_58aa633e0c84c0f3a04ffe7df844f39830d4d67e4505c69f3c47a1c40b8da072_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_378ea40711c28bf3e6432909144dd8f9eaa65a02360f0e0bdd4797b524091dd7 = $this->env->getExtension("native_profiler");
        $__internal_378ea40711c28bf3e6432909144dd8f9eaa65a02360f0e0bdd4797b524091dd7->enter($__internal_378ea40711c28bf3e6432909144dd8f9eaa65a02360f0e0bdd4797b524091dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_378ea40711c28bf3e6432909144dd8f9eaa65a02360f0e0bdd4797b524091dd7->leave($__internal_378ea40711c28bf3e6432909144dd8f9eaa65a02360f0e0bdd4797b524091dd7_prof);

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
