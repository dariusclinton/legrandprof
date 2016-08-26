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
        $__internal_ad919c28b59ae98b83954a7939d757b04e1b800831b2e9276180551c1ac05177 = $this->env->getExtension("native_profiler");
        $__internal_ad919c28b59ae98b83954a7939d757b04e1b800831b2e9276180551c1ac05177->enter($__internal_ad919c28b59ae98b83954a7939d757b04e1b800831b2e9276180551c1ac05177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad919c28b59ae98b83954a7939d757b04e1b800831b2e9276180551c1ac05177->leave($__internal_ad919c28b59ae98b83954a7939d757b04e1b800831b2e9276180551c1ac05177_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68d172e8f54062b15973c26a663a326c29a36bf4d3ade0eb903d9c45c28dbbfe = $this->env->getExtension("native_profiler");
        $__internal_68d172e8f54062b15973c26a663a326c29a36bf4d3ade0eb903d9c45c28dbbfe->enter($__internal_68d172e8f54062b15973c26a663a326c29a36bf4d3ade0eb903d9c45c28dbbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_68d172e8f54062b15973c26a663a326c29a36bf4d3ade0eb903d9c45c28dbbfe->leave($__internal_68d172e8f54062b15973c26a663a326c29a36bf4d3ade0eb903d9c45c28dbbfe_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a67b6dbf316c446755acd11553fea0a3b6c79785862392867cab9f921cb44dd9 = $this->env->getExtension("native_profiler");
        $__internal_a67b6dbf316c446755acd11553fea0a3b6c79785862392867cab9f921cb44dd9->enter($__internal_a67b6dbf316c446755acd11553fea0a3b6c79785862392867cab9f921cb44dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_a67b6dbf316c446755acd11553fea0a3b6c79785862392867cab9f921cb44dd9->leave($__internal_a67b6dbf316c446755acd11553fea0a3b6c79785862392867cab9f921cb44dd9_prof);

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
