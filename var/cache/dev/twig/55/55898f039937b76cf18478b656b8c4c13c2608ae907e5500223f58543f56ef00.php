<?php

/* LGPUserBundle::layout.html.twig */
class __TwigTemplate_b8bb6847961a74b725e4024b1332655d5ce1b2491f04a550b3538b79739e54a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle::layout.html.twig", 1);
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
        $__internal_623ee888e64793796b2d719595c1718e65422a6a6b1c03bff5eeb2d554357276 = $this->env->getExtension("native_profiler");
        $__internal_623ee888e64793796b2d719595c1718e65422a6a6b1c03bff5eeb2d554357276->enter($__internal_623ee888e64793796b2d719595c1718e65422a6a6b1c03bff5eeb2d554357276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_623ee888e64793796b2d719595c1718e65422a6a6b1c03bff5eeb2d554357276->leave($__internal_623ee888e64793796b2d719595c1718e65422a6a6b1c03bff5eeb2d554357276_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b70c29d53ec02e93429e18d5fe484e93377d664ba520c236c27ecb5de40a3e9e = $this->env->getExtension("native_profiler");
        $__internal_b70c29d53ec02e93429e18d5fe484e93377d664ba520c236c27ecb5de40a3e9e->enter($__internal_b70c29d53ec02e93429e18d5fe484e93377d664ba520c236c27ecb5de40a3e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_b70c29d53ec02e93429e18d5fe484e93377d664ba520c236c27ecb5de40a3e9e->leave($__internal_b70c29d53ec02e93429e18d5fe484e93377d664ba520c236c27ecb5de40a3e9e_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_666bd255495117124f85becfb457bd524ff2a0a3a6e51123cb55c31ef19331b0 = $this->env->getExtension("native_profiler");
        $__internal_666bd255495117124f85becfb457bd524ff2a0a3a6e51123cb55c31ef19331b0->enter($__internal_666bd255495117124f85becfb457bd524ff2a0a3a6e51123cb55c31ef19331b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_666bd255495117124f85becfb457bd524ff2a0a3a6e51123cb55c31ef19331b0->leave($__internal_666bd255495117124f85becfb457bd524ff2a0a3a6e51123cb55c31ef19331b0_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle::layout.html.twig";
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
