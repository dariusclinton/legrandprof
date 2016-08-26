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
        $__internal_2c5be2b19bf048bdaee6582297004cfcff691be76f9f2dc9298173b85a1a04fa = $this->env->getExtension("native_profiler");
        $__internal_2c5be2b19bf048bdaee6582297004cfcff691be76f9f2dc9298173b85a1a04fa->enter($__internal_2c5be2b19bf048bdaee6582297004cfcff691be76f9f2dc9298173b85a1a04fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c5be2b19bf048bdaee6582297004cfcff691be76f9f2dc9298173b85a1a04fa->leave($__internal_2c5be2b19bf048bdaee6582297004cfcff691be76f9f2dc9298173b85a1a04fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8fe91c67e4bedf0033de507be3b5c73e70701fca10b55bf4fdb0b26315fb568 = $this->env->getExtension("native_profiler");
        $__internal_f8fe91c67e4bedf0033de507be3b5c73e70701fca10b55bf4fdb0b26315fb568->enter($__internal_f8fe91c67e4bedf0033de507be3b5c73e70701fca10b55bf4fdb0b26315fb568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_f8fe91c67e4bedf0033de507be3b5c73e70701fca10b55bf4fdb0b26315fb568->leave($__internal_f8fe91c67e4bedf0033de507be3b5c73e70701fca10b55bf4fdb0b26315fb568_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c45982eff01999c8dad3a8c9aad284117e4d96e0c23346e6571dbe5dffc5a6a = $this->env->getExtension("native_profiler");
        $__internal_5c45982eff01999c8dad3a8c9aad284117e4d96e0c23346e6571dbe5dffc5a6a->enter($__internal_5c45982eff01999c8dad3a8c9aad284117e4d96e0c23346e6571dbe5dffc5a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_5c45982eff01999c8dad3a8c9aad284117e4d96e0c23346e6571dbe5dffc5a6a->leave($__internal_5c45982eff01999c8dad3a8c9aad284117e4d96e0c23346e6571dbe5dffc5a6a_prof);

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
