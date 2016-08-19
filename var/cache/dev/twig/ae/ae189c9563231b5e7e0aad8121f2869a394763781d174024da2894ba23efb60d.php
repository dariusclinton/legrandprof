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
        $__internal_bfc35985c89ee079392bd275753a17f1f972d92e2834f340cc9af254cc075517 = $this->env->getExtension("native_profiler");
        $__internal_bfc35985c89ee079392bd275753a17f1f972d92e2834f340cc9af254cc075517->enter($__internal_bfc35985c89ee079392bd275753a17f1f972d92e2834f340cc9af254cc075517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfc35985c89ee079392bd275753a17f1f972d92e2834f340cc9af254cc075517->leave($__internal_bfc35985c89ee079392bd275753a17f1f972d92e2834f340cc9af254cc075517_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cdcb65d286ae90b67262034c598434d7973bd3465e2e48f498fc2a8c4758266 = $this->env->getExtension("native_profiler");
        $__internal_3cdcb65d286ae90b67262034c598434d7973bd3465e2e48f498fc2a8c4758266->enter($__internal_3cdcb65d286ae90b67262034c598434d7973bd3465e2e48f498fc2a8c4758266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_3cdcb65d286ae90b67262034c598434d7973bd3465e2e48f498fc2a8c4758266->leave($__internal_3cdcb65d286ae90b67262034c598434d7973bd3465e2e48f498fc2a8c4758266_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c892f86348ab60de28641d82bf56169ebc201778f27fc7970fa9ecfbfca28f2 = $this->env->getExtension("native_profiler");
        $__internal_1c892f86348ab60de28641d82bf56169ebc201778f27fc7970fa9ecfbfca28f2->enter($__internal_1c892f86348ab60de28641d82bf56169ebc201778f27fc7970fa9ecfbfca28f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_1c892f86348ab60de28641d82bf56169ebc201778f27fc7970fa9ecfbfca28f2->leave($__internal_1c892f86348ab60de28641d82bf56169ebc201778f27fc7970fa9ecfbfca28f2_prof);

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
