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
        $__internal_9a5d90e558b796fed51148b45405f1f0f21b6c668f94cff1786f528e0008dabe = $this->env->getExtension("native_profiler");
        $__internal_9a5d90e558b796fed51148b45405f1f0f21b6c668f94cff1786f528e0008dabe->enter($__internal_9a5d90e558b796fed51148b45405f1f0f21b6c668f94cff1786f528e0008dabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a5d90e558b796fed51148b45405f1f0f21b6c668f94cff1786f528e0008dabe->leave($__internal_9a5d90e558b796fed51148b45405f1f0f21b6c668f94cff1786f528e0008dabe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_278adda48111a55aef0afe6cd99742024a2d56bdab3b2a64e1d0f3ef6ce3b1e7 = $this->env->getExtension("native_profiler");
        $__internal_278adda48111a55aef0afe6cd99742024a2d56bdab3b2a64e1d0f3ef6ce3b1e7->enter($__internal_278adda48111a55aef0afe6cd99742024a2d56bdab3b2a64e1d0f3ef6ce3b1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_278adda48111a55aef0afe6cd99742024a2d56bdab3b2a64e1d0f3ef6ce3b1e7->leave($__internal_278adda48111a55aef0afe6cd99742024a2d56bdab3b2a64e1d0f3ef6ce3b1e7_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1df1ea602b9dcb4dd349dbc3b8d6b8930872b6dc2400d65e13e54b44d092ef1 = $this->env->getExtension("native_profiler");
        $__internal_d1df1ea602b9dcb4dd349dbc3b8d6b8930872b6dc2400d65e13e54b44d092ef1->enter($__internal_d1df1ea602b9dcb4dd349dbc3b8d6b8930872b6dc2400d65e13e54b44d092ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_d1df1ea602b9dcb4dd349dbc3b8d6b8930872b6dc2400d65e13e54b44d092ef1->leave($__internal_d1df1ea602b9dcb4dd349dbc3b8d6b8930872b6dc2400d65e13e54b44d092ef1_prof);

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
