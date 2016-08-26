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
        $__internal_10cf188ea4ab9670fc64cd0770e0af88918e28ebb24314daba5d57804d16b283 = $this->env->getExtension("native_profiler");
        $__internal_10cf188ea4ab9670fc64cd0770e0af88918e28ebb24314daba5d57804d16b283->enter($__internal_10cf188ea4ab9670fc64cd0770e0af88918e28ebb24314daba5d57804d16b283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10cf188ea4ab9670fc64cd0770e0af88918e28ebb24314daba5d57804d16b283->leave($__internal_10cf188ea4ab9670fc64cd0770e0af88918e28ebb24314daba5d57804d16b283_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a20f2ab1c452993abd8158790e0aaffd999f92a9547061b48b7c3e741098e510 = $this->env->getExtension("native_profiler");
        $__internal_a20f2ab1c452993abd8158790e0aaffd999f92a9547061b48b7c3e741098e510->enter($__internal_a20f2ab1c452993abd8158790e0aaffd999f92a9547061b48b7c3e741098e510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_a20f2ab1c452993abd8158790e0aaffd999f92a9547061b48b7c3e741098e510->leave($__internal_a20f2ab1c452993abd8158790e0aaffd999f92a9547061b48b7c3e741098e510_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e42425f12dff4d4c0605ab886fe3a589f2a54fbc784813f611e1c69a7b85448 = $this->env->getExtension("native_profiler");
        $__internal_7e42425f12dff4d4c0605ab886fe3a589f2a54fbc784813f611e1c69a7b85448->enter($__internal_7e42425f12dff4d4c0605ab886fe3a589f2a54fbc784813f611e1c69a7b85448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_7e42425f12dff4d4c0605ab886fe3a589f2a54fbc784813f611e1c69a7b85448->leave($__internal_7e42425f12dff4d4c0605ab886fe3a589f2a54fbc784813f611e1c69a7b85448_prof);

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
