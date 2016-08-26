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
        $__internal_3d3fc09e691670f5c282e6585f2e7062f70efc1cb3bf3eefe2bc158ad7917465 = $this->env->getExtension("native_profiler");
        $__internal_3d3fc09e691670f5c282e6585f2e7062f70efc1cb3bf3eefe2bc158ad7917465->enter($__internal_3d3fc09e691670f5c282e6585f2e7062f70efc1cb3bf3eefe2bc158ad7917465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3fc09e691670f5c282e6585f2e7062f70efc1cb3bf3eefe2bc158ad7917465->leave($__internal_3d3fc09e691670f5c282e6585f2e7062f70efc1cb3bf3eefe2bc158ad7917465_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d09f8e8d3c89c1cd8eb97512159a30443fe59315225acf5706f6d3bc905697bd = $this->env->getExtension("native_profiler");
        $__internal_d09f8e8d3c89c1cd8eb97512159a30443fe59315225acf5706f6d3bc905697bd->enter($__internal_d09f8e8d3c89c1cd8eb97512159a30443fe59315225acf5706f6d3bc905697bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_d09f8e8d3c89c1cd8eb97512159a30443fe59315225acf5706f6d3bc905697bd->leave($__internal_d09f8e8d3c89c1cd8eb97512159a30443fe59315225acf5706f6d3bc905697bd_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b42f4f7633f69f59e64c8f1e6bc42678263c72bbd2c15c791090b5b9002f9e2d = $this->env->getExtension("native_profiler");
        $__internal_b42f4f7633f69f59e64c8f1e6bc42678263c72bbd2c15c791090b5b9002f9e2d->enter($__internal_b42f4f7633f69f59e64c8f1e6bc42678263c72bbd2c15c791090b5b9002f9e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_b42f4f7633f69f59e64c8f1e6bc42678263c72bbd2c15c791090b5b9002f9e2d->leave($__internal_b42f4f7633f69f59e64c8f1e6bc42678263c72bbd2c15c791090b5b9002f9e2d_prof);

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
