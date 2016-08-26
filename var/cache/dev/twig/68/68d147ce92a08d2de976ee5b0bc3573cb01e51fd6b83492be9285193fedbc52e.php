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
        $__internal_6532d5b3b4a87a53beca91e49920beb97ddfbfa0a4f6dfbb008e0547b6299454 = $this->env->getExtension("native_profiler");
        $__internal_6532d5b3b4a87a53beca91e49920beb97ddfbfa0a4f6dfbb008e0547b6299454->enter($__internal_6532d5b3b4a87a53beca91e49920beb97ddfbfa0a4f6dfbb008e0547b6299454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6532d5b3b4a87a53beca91e49920beb97ddfbfa0a4f6dfbb008e0547b6299454->leave($__internal_6532d5b3b4a87a53beca91e49920beb97ddfbfa0a4f6dfbb008e0547b6299454_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e14003b399024e8c9809ed38d89b39a61c7e28d22203d654675486a3dc35e5b = $this->env->getExtension("native_profiler");
        $__internal_0e14003b399024e8c9809ed38d89b39a61c7e28d22203d654675486a3dc35e5b->enter($__internal_0e14003b399024e8c9809ed38d89b39a61c7e28d22203d654675486a3dc35e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_0e14003b399024e8c9809ed38d89b39a61c7e28d22203d654675486a3dc35e5b->leave($__internal_0e14003b399024e8c9809ed38d89b39a61c7e28d22203d654675486a3dc35e5b_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_317df1f27428677f219bb7f7ed02ac6fbdffe0ae5c31177ecb8ae474655a85c9 = $this->env->getExtension("native_profiler");
        $__internal_317df1f27428677f219bb7f7ed02ac6fbdffe0ae5c31177ecb8ae474655a85c9->enter($__internal_317df1f27428677f219bb7f7ed02ac6fbdffe0ae5c31177ecb8ae474655a85c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_317df1f27428677f219bb7f7ed02ac6fbdffe0ae5c31177ecb8ae474655a85c9->leave($__internal_317df1f27428677f219bb7f7ed02ac6fbdffe0ae5c31177ecb8ae474655a85c9_prof);

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
