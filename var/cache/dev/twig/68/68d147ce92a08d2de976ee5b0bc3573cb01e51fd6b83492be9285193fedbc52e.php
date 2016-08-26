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
        $__internal_16625a6b681db6e7ef84609f9eed7dd90a79c0b502371754ddc7bf92a560cef7 = $this->env->getExtension("native_profiler");
        $__internal_16625a6b681db6e7ef84609f9eed7dd90a79c0b502371754ddc7bf92a560cef7->enter($__internal_16625a6b681db6e7ef84609f9eed7dd90a79c0b502371754ddc7bf92a560cef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16625a6b681db6e7ef84609f9eed7dd90a79c0b502371754ddc7bf92a560cef7->leave($__internal_16625a6b681db6e7ef84609f9eed7dd90a79c0b502371754ddc7bf92a560cef7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ec47673a53d71633e512f40c2b22b56e1590f1869fe61d548d5b57eba6c84e7 = $this->env->getExtension("native_profiler");
        $__internal_8ec47673a53d71633e512f40c2b22b56e1590f1869fe61d548d5b57eba6c84e7->enter($__internal_8ec47673a53d71633e512f40c2b22b56e1590f1869fe61d548d5b57eba6c84e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_8ec47673a53d71633e512f40c2b22b56e1590f1869fe61d548d5b57eba6c84e7->leave($__internal_8ec47673a53d71633e512f40c2b22b56e1590f1869fe61d548d5b57eba6c84e7_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_007a2f4cc4572672a0e9ff49bc79d45256a9f4d711a3d1de91216062f9b8b4de = $this->env->getExtension("native_profiler");
        $__internal_007a2f4cc4572672a0e9ff49bc79d45256a9f4d711a3d1de91216062f9b8b4de->enter($__internal_007a2f4cc4572672a0e9ff49bc79d45256a9f4d711a3d1de91216062f9b8b4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_007a2f4cc4572672a0e9ff49bc79d45256a9f4d711a3d1de91216062f9b8b4de->leave($__internal_007a2f4cc4572672a0e9ff49bc79d45256a9f4d711a3d1de91216062f9b8b4de_prof);

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
