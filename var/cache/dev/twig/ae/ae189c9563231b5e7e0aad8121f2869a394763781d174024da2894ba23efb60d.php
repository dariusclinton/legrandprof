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
        $__internal_b43300b10552d2c2802886ba663bc9e64aa9d9fca31c08b47567aac3dfd2cdb5 = $this->env->getExtension("native_profiler");
        $__internal_b43300b10552d2c2802886ba663bc9e64aa9d9fca31c08b47567aac3dfd2cdb5->enter($__internal_b43300b10552d2c2802886ba663bc9e64aa9d9fca31c08b47567aac3dfd2cdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b43300b10552d2c2802886ba663bc9e64aa9d9fca31c08b47567aac3dfd2cdb5->leave($__internal_b43300b10552d2c2802886ba663bc9e64aa9d9fca31c08b47567aac3dfd2cdb5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c350429c512fadf87d186b3ce53ed5dacb430825b9cd6be97fef8e818946c40 = $this->env->getExtension("native_profiler");
        $__internal_4c350429c512fadf87d186b3ce53ed5dacb430825b9cd6be97fef8e818946c40->enter($__internal_4c350429c512fadf87d186b3ce53ed5dacb430825b9cd6be97fef8e818946c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_4c350429c512fadf87d186b3ce53ed5dacb430825b9cd6be97fef8e818946c40->leave($__internal_4c350429c512fadf87d186b3ce53ed5dacb430825b9cd6be97fef8e818946c40_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c505ead14ba1167d395f5a8e45f46c9b6a71ce19807f0f971f2375a8f7763656 = $this->env->getExtension("native_profiler");
        $__internal_c505ead14ba1167d395f5a8e45f46c9b6a71ce19807f0f971f2375a8f7763656->enter($__internal_c505ead14ba1167d395f5a8e45f46c9b6a71ce19807f0f971f2375a8f7763656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_c505ead14ba1167d395f5a8e45f46c9b6a71ce19807f0f971f2375a8f7763656->leave($__internal_c505ead14ba1167d395f5a8e45f46c9b6a71ce19807f0f971f2375a8f7763656_prof);

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
