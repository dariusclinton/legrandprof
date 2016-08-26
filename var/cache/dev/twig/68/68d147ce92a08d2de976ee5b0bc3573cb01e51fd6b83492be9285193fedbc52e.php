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
        $__internal_c57cfbdb8854a83c63ae9d816c532ec27d0592691e6c87237992e69847f161a4 = $this->env->getExtension("native_profiler");
        $__internal_c57cfbdb8854a83c63ae9d816c532ec27d0592691e6c87237992e69847f161a4->enter($__internal_c57cfbdb8854a83c63ae9d816c532ec27d0592691e6c87237992e69847f161a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c57cfbdb8854a83c63ae9d816c532ec27d0592691e6c87237992e69847f161a4->leave($__internal_c57cfbdb8854a83c63ae9d816c532ec27d0592691e6c87237992e69847f161a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_683787bfbf3cd7af1cac8e18124c7ae0fd3e6a68d4e33c862fb04f483df4e4bd = $this->env->getExtension("native_profiler");
        $__internal_683787bfbf3cd7af1cac8e18124c7ae0fd3e6a68d4e33c862fb04f483df4e4bd->enter($__internal_683787bfbf3cd7af1cac8e18124c7ae0fd3e6a68d4e33c862fb04f483df4e4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_683787bfbf3cd7af1cac8e18124c7ae0fd3e6a68d4e33c862fb04f483df4e4bd->leave($__internal_683787bfbf3cd7af1cac8e18124c7ae0fd3e6a68d4e33c862fb04f483df4e4bd_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e92fed819421b34fbabc62b88718a91216eee3afa13000ca3b130c67e5f40d7c = $this->env->getExtension("native_profiler");
        $__internal_e92fed819421b34fbabc62b88718a91216eee3afa13000ca3b130c67e5f40d7c->enter($__internal_e92fed819421b34fbabc62b88718a91216eee3afa13000ca3b130c67e5f40d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_e92fed819421b34fbabc62b88718a91216eee3afa13000ca3b130c67e5f40d7c->leave($__internal_e92fed819421b34fbabc62b88718a91216eee3afa13000ca3b130c67e5f40d7c_prof);

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
