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
        $__internal_12e7577ceed37ae92ba2694b6ce5cb222fc506d337defe9e5dbb92f7287352e2 = $this->env->getExtension("native_profiler");
        $__internal_12e7577ceed37ae92ba2694b6ce5cb222fc506d337defe9e5dbb92f7287352e2->enter($__internal_12e7577ceed37ae92ba2694b6ce5cb222fc506d337defe9e5dbb92f7287352e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12e7577ceed37ae92ba2694b6ce5cb222fc506d337defe9e5dbb92f7287352e2->leave($__internal_12e7577ceed37ae92ba2694b6ce5cb222fc506d337defe9e5dbb92f7287352e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebbdb9ae1e37f3f57a05d66a2dd8e498a8de9cde05f486d85f598f802b1dc83f = $this->env->getExtension("native_profiler");
        $__internal_ebbdb9ae1e37f3f57a05d66a2dd8e498a8de9cde05f486d85f598f802b1dc83f->enter($__internal_ebbdb9ae1e37f3f57a05d66a2dd8e498a8de9cde05f486d85f598f802b1dc83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_ebbdb9ae1e37f3f57a05d66a2dd8e498a8de9cde05f486d85f598f802b1dc83f->leave($__internal_ebbdb9ae1e37f3f57a05d66a2dd8e498a8de9cde05f486d85f598f802b1dc83f_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5ab76935e0845a8a1f9f9eb5a806fc8e61b7ffe50bf9d9ba923be776cf35d30 = $this->env->getExtension("native_profiler");
        $__internal_e5ab76935e0845a8a1f9f9eb5a806fc8e61b7ffe50bf9d9ba923be776cf35d30->enter($__internal_e5ab76935e0845a8a1f9f9eb5a806fc8e61b7ffe50bf9d9ba923be776cf35d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_e5ab76935e0845a8a1f9f9eb5a806fc8e61b7ffe50bf9d9ba923be776cf35d30->leave($__internal_e5ab76935e0845a8a1f9f9eb5a806fc8e61b7ffe50bf9d9ba923be776cf35d30_prof);

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
