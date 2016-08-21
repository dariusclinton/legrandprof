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
        $__internal_c8984a6166fd95bade3e410a9ff44a4afaeee488baa6e3256be9c1cbdf23b5e9 = $this->env->getExtension("native_profiler");
        $__internal_c8984a6166fd95bade3e410a9ff44a4afaeee488baa6e3256be9c1cbdf23b5e9->enter($__internal_c8984a6166fd95bade3e410a9ff44a4afaeee488baa6e3256be9c1cbdf23b5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8984a6166fd95bade3e410a9ff44a4afaeee488baa6e3256be9c1cbdf23b5e9->leave($__internal_c8984a6166fd95bade3e410a9ff44a4afaeee488baa6e3256be9c1cbdf23b5e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7df3fe3d2c604b5118d93b63ba0769caefb5d5d22bfd5083c73db03696585edb = $this->env->getExtension("native_profiler");
        $__internal_7df3fe3d2c604b5118d93b63ba0769caefb5d5d22bfd5083c73db03696585edb->enter($__internal_7df3fe3d2c604b5118d93b63ba0769caefb5d5d22bfd5083c73db03696585edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_7df3fe3d2c604b5118d93b63ba0769caefb5d5d22bfd5083c73db03696585edb->leave($__internal_7df3fe3d2c604b5118d93b63ba0769caefb5d5d22bfd5083c73db03696585edb_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef4d38d305d0ac3b1d403c5a4498c6485f90a67be064e4a9e376220b1a8f94fc = $this->env->getExtension("native_profiler");
        $__internal_ef4d38d305d0ac3b1d403c5a4498c6485f90a67be064e4a9e376220b1a8f94fc->enter($__internal_ef4d38d305d0ac3b1d403c5a4498c6485f90a67be064e4a9e376220b1a8f94fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_ef4d38d305d0ac3b1d403c5a4498c6485f90a67be064e4a9e376220b1a8f94fc->leave($__internal_ef4d38d305d0ac3b1d403c5a4498c6485f90a67be064e4a9e376220b1a8f94fc_prof);

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
