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
        $__internal_15d91d919d074b3096edd2391f93e427ac2aed9741ee408e741e6b1ed60a44af = $this->env->getExtension("native_profiler");
        $__internal_15d91d919d074b3096edd2391f93e427ac2aed9741ee408e741e6b1ed60a44af->enter($__internal_15d91d919d074b3096edd2391f93e427ac2aed9741ee408e741e6b1ed60a44af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15d91d919d074b3096edd2391f93e427ac2aed9741ee408e741e6b1ed60a44af->leave($__internal_15d91d919d074b3096edd2391f93e427ac2aed9741ee408e741e6b1ed60a44af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_63de01e27d9b2b0a3c028131854fbe8d943381c7f7d07dfa3d87f45ea9a176fd = $this->env->getExtension("native_profiler");
        $__internal_63de01e27d9b2b0a3c028131854fbe8d943381c7f7d07dfa3d87f45ea9a176fd->enter($__internal_63de01e27d9b2b0a3c028131854fbe8d943381c7f7d07dfa3d87f45ea9a176fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_63de01e27d9b2b0a3c028131854fbe8d943381c7f7d07dfa3d87f45ea9a176fd->leave($__internal_63de01e27d9b2b0a3c028131854fbe8d943381c7f7d07dfa3d87f45ea9a176fd_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_493e6b5ca6ef0cc9e78565e645bb85a2810738eb8b86f649565d029ebaa7dee9 = $this->env->getExtension("native_profiler");
        $__internal_493e6b5ca6ef0cc9e78565e645bb85a2810738eb8b86f649565d029ebaa7dee9->enter($__internal_493e6b5ca6ef0cc9e78565e645bb85a2810738eb8b86f649565d029ebaa7dee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_493e6b5ca6ef0cc9e78565e645bb85a2810738eb8b86f649565d029ebaa7dee9->leave($__internal_493e6b5ca6ef0cc9e78565e645bb85a2810738eb8b86f649565d029ebaa7dee9_prof);

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
