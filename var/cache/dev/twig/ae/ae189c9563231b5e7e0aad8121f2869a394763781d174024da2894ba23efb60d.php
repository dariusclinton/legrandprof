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
        $__internal_2484b17adfdead4f191bba1ed1de58375c38d598fe87c64516994a89071f0da3 = $this->env->getExtension("native_profiler");
        $__internal_2484b17adfdead4f191bba1ed1de58375c38d598fe87c64516994a89071f0da3->enter($__internal_2484b17adfdead4f191bba1ed1de58375c38d598fe87c64516994a89071f0da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2484b17adfdead4f191bba1ed1de58375c38d598fe87c64516994a89071f0da3->leave($__internal_2484b17adfdead4f191bba1ed1de58375c38d598fe87c64516994a89071f0da3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfa51a1fb24e2cb5261cf2a4126eb32aefa67f1219f23b4838c39264d0865e64 = $this->env->getExtension("native_profiler");
        $__internal_cfa51a1fb24e2cb5261cf2a4126eb32aefa67f1219f23b4838c39264d0865e64->enter($__internal_cfa51a1fb24e2cb5261cf2a4126eb32aefa67f1219f23b4838c39264d0865e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_cfa51a1fb24e2cb5261cf2a4126eb32aefa67f1219f23b4838c39264d0865e64->leave($__internal_cfa51a1fb24e2cb5261cf2a4126eb32aefa67f1219f23b4838c39264d0865e64_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e638adf89355d56c3806de66e4276450aaee8156d3197587ef5e47a2a29b0c76 = $this->env->getExtension("native_profiler");
        $__internal_e638adf89355d56c3806de66e4276450aaee8156d3197587ef5e47a2a29b0c76->enter($__internal_e638adf89355d56c3806de66e4276450aaee8156d3197587ef5e47a2a29b0c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_e638adf89355d56c3806de66e4276450aaee8156d3197587ef5e47a2a29b0c76->leave($__internal_e638adf89355d56c3806de66e4276450aaee8156d3197587ef5e47a2a29b0c76_prof);

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
