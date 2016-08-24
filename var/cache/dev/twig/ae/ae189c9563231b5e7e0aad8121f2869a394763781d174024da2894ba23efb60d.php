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
        $__internal_3deca365c59346753c05be2c28f8e982d5794c1ec0060bcac83d62c48b920ab6 = $this->env->getExtension("native_profiler");
        $__internal_3deca365c59346753c05be2c28f8e982d5794c1ec0060bcac83d62c48b920ab6->enter($__internal_3deca365c59346753c05be2c28f8e982d5794c1ec0060bcac83d62c48b920ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3deca365c59346753c05be2c28f8e982d5794c1ec0060bcac83d62c48b920ab6->leave($__internal_3deca365c59346753c05be2c28f8e982d5794c1ec0060bcac83d62c48b920ab6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_432c04ca66e74d377841f57f734e325d61f261d40254820512a384f067cfe212 = $this->env->getExtension("native_profiler");
        $__internal_432c04ca66e74d377841f57f734e325d61f261d40254820512a384f067cfe212->enter($__internal_432c04ca66e74d377841f57f734e325d61f261d40254820512a384f067cfe212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_432c04ca66e74d377841f57f734e325d61f261d40254820512a384f067cfe212->leave($__internal_432c04ca66e74d377841f57f734e325d61f261d40254820512a384f067cfe212_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cac5224514059795e9f3d3ae9a6f1fd65a4bb81a743ae375edd679dd936c6f0f = $this->env->getExtension("native_profiler");
        $__internal_cac5224514059795e9f3d3ae9a6f1fd65a4bb81a743ae375edd679dd936c6f0f->enter($__internal_cac5224514059795e9f3d3ae9a6f1fd65a4bb81a743ae375edd679dd936c6f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_cac5224514059795e9f3d3ae9a6f1fd65a4bb81a743ae375edd679dd936c6f0f->leave($__internal_cac5224514059795e9f3d3ae9a6f1fd65a4bb81a743ae375edd679dd936c6f0f_prof);

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
