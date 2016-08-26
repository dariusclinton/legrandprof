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
        $__internal_744c07f07a25ddda97cb89de6c6fb017dffa04647a1f432bcf793a1332aa1fb5 = $this->env->getExtension("native_profiler");
        $__internal_744c07f07a25ddda97cb89de6c6fb017dffa04647a1f432bcf793a1332aa1fb5->enter($__internal_744c07f07a25ddda97cb89de6c6fb017dffa04647a1f432bcf793a1332aa1fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_744c07f07a25ddda97cb89de6c6fb017dffa04647a1f432bcf793a1332aa1fb5->leave($__internal_744c07f07a25ddda97cb89de6c6fb017dffa04647a1f432bcf793a1332aa1fb5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92e20b75cd4a819637a2a755cd63186c1bbdb50177757a6ff34afc2dd05fd931 = $this->env->getExtension("native_profiler");
        $__internal_92e20b75cd4a819637a2a755cd63186c1bbdb50177757a6ff34afc2dd05fd931->enter($__internal_92e20b75cd4a819637a2a755cd63186c1bbdb50177757a6ff34afc2dd05fd931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_92e20b75cd4a819637a2a755cd63186c1bbdb50177757a6ff34afc2dd05fd931->leave($__internal_92e20b75cd4a819637a2a755cd63186c1bbdb50177757a6ff34afc2dd05fd931_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13e7a7a7920f755ba4ef761d173b05fddab8f42cea4a329be89e7ded95d7e706 = $this->env->getExtension("native_profiler");
        $__internal_13e7a7a7920f755ba4ef761d173b05fddab8f42cea4a329be89e7ded95d7e706->enter($__internal_13e7a7a7920f755ba4ef761d173b05fddab8f42cea4a329be89e7ded95d7e706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_13e7a7a7920f755ba4ef761d173b05fddab8f42cea4a329be89e7ded95d7e706->leave($__internal_13e7a7a7920f755ba4ef761d173b05fddab8f42cea4a329be89e7ded95d7e706_prof);

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
