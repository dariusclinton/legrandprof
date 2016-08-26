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
        $__internal_8c0af46a9e54183dd6f3164d072ccbe2d458aa2571554e70aa69511528b034eb = $this->env->getExtension("native_profiler");
        $__internal_8c0af46a9e54183dd6f3164d072ccbe2d458aa2571554e70aa69511528b034eb->enter($__internal_8c0af46a9e54183dd6f3164d072ccbe2d458aa2571554e70aa69511528b034eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c0af46a9e54183dd6f3164d072ccbe2d458aa2571554e70aa69511528b034eb->leave($__internal_8c0af46a9e54183dd6f3164d072ccbe2d458aa2571554e70aa69511528b034eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77785a2b072d7919b3bca9486d4ef6894632e90b2a51c90e8a8ad73224ed3d47 = $this->env->getExtension("native_profiler");
        $__internal_77785a2b072d7919b3bca9486d4ef6894632e90b2a51c90e8a8ad73224ed3d47->enter($__internal_77785a2b072d7919b3bca9486d4ef6894632e90b2a51c90e8a8ad73224ed3d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_77785a2b072d7919b3bca9486d4ef6894632e90b2a51c90e8a8ad73224ed3d47->leave($__internal_77785a2b072d7919b3bca9486d4ef6894632e90b2a51c90e8a8ad73224ed3d47_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a17df6dede3c89d7c5ddc64cbe1a74f3727384b4d00969d90961f5ec10ece4a9 = $this->env->getExtension("native_profiler");
        $__internal_a17df6dede3c89d7c5ddc64cbe1a74f3727384b4d00969d90961f5ec10ece4a9->enter($__internal_a17df6dede3c89d7c5ddc64cbe1a74f3727384b4d00969d90961f5ec10ece4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_a17df6dede3c89d7c5ddc64cbe1a74f3727384b4d00969d90961f5ec10ece4a9->leave($__internal_a17df6dede3c89d7c5ddc64cbe1a74f3727384b4d00969d90961f5ec10ece4a9_prof);

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
