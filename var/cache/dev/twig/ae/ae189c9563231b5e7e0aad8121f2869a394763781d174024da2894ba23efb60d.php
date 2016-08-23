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
        $__internal_98a7b45941e9b6a1ec15b18bdb6a2350c426dc2d8caaaba3d50c93575c320661 = $this->env->getExtension("native_profiler");
        $__internal_98a7b45941e9b6a1ec15b18bdb6a2350c426dc2d8caaaba3d50c93575c320661->enter($__internal_98a7b45941e9b6a1ec15b18bdb6a2350c426dc2d8caaaba3d50c93575c320661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98a7b45941e9b6a1ec15b18bdb6a2350c426dc2d8caaaba3d50c93575c320661->leave($__internal_98a7b45941e9b6a1ec15b18bdb6a2350c426dc2d8caaaba3d50c93575c320661_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_303fada97699d867b6f10610bb07211fe02be43ce057146fd00817c34231e2c6 = $this->env->getExtension("native_profiler");
        $__internal_303fada97699d867b6f10610bb07211fe02be43ce057146fd00817c34231e2c6->enter($__internal_303fada97699d867b6f10610bb07211fe02be43ce057146fd00817c34231e2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_303fada97699d867b6f10610bb07211fe02be43ce057146fd00817c34231e2c6->leave($__internal_303fada97699d867b6f10610bb07211fe02be43ce057146fd00817c34231e2c6_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6704e3e2849940cd8f778aad011e15e36eb94fe3280fd03c50b779be0eadcdd5 = $this->env->getExtension("native_profiler");
        $__internal_6704e3e2849940cd8f778aad011e15e36eb94fe3280fd03c50b779be0eadcdd5->enter($__internal_6704e3e2849940cd8f778aad011e15e36eb94fe3280fd03c50b779be0eadcdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_6704e3e2849940cd8f778aad011e15e36eb94fe3280fd03c50b779be0eadcdd5->leave($__internal_6704e3e2849940cd8f778aad011e15e36eb94fe3280fd03c50b779be0eadcdd5_prof);

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
