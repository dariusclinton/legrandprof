<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4ab49bb795b9cf59c836d91c2c3dbbd61afe0342bba06ccaa56bf3d136d119fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_29f45fa98d8300a4cfdda6f159a0044228d7edbbfb44ccd41aca675b4bccb16a = $this->env->getExtension("native_profiler");
        $__internal_29f45fa98d8300a4cfdda6f159a0044228d7edbbfb44ccd41aca675b4bccb16a->enter($__internal_29f45fa98d8300a4cfdda6f159a0044228d7edbbfb44ccd41aca675b4bccb16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29f45fa98d8300a4cfdda6f159a0044228d7edbbfb44ccd41aca675b4bccb16a->leave($__internal_29f45fa98d8300a4cfdda6f159a0044228d7edbbfb44ccd41aca675b4bccb16a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b67141514677e46a9def112748adebf62453599f1769f976d4c3b5f331a0ddc5 = $this->env->getExtension("native_profiler");
        $__internal_b67141514677e46a9def112748adebf62453599f1769f976d4c3b5f331a0ddc5->enter($__internal_b67141514677e46a9def112748adebf62453599f1769f976d4c3b5f331a0ddc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_b67141514677e46a9def112748adebf62453599f1769f976d4c3b5f331a0ddc5->leave($__internal_b67141514677e46a9def112748adebf62453599f1769f976d4c3b5f331a0ddc5_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5386adc902ad4d5f9c76a34177474cd4a740cbe85566db2ce14f5b0a4a5418f5 = $this->env->getExtension("native_profiler");
        $__internal_5386adc902ad4d5f9c76a34177474cd4a740cbe85566db2ce14f5b0a4a5418f5->enter($__internal_5386adc902ad4d5f9c76a34177474cd4a740cbe85566db2ce14f5b0a4a5418f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_5386adc902ad4d5f9c76a34177474cd4a740cbe85566db2ce14f5b0a4a5418f5->leave($__internal_5386adc902ad4d5f9c76a34177474cd4a740cbe85566db2ce14f5b0a4a5418f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
