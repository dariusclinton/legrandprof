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
        $__internal_6a9ca50c736b0980a506d308c318c85e5c47614c65123343ade1cbcf1023471b = $this->env->getExtension("native_profiler");
        $__internal_6a9ca50c736b0980a506d308c318c85e5c47614c65123343ade1cbcf1023471b->enter($__internal_6a9ca50c736b0980a506d308c318c85e5c47614c65123343ade1cbcf1023471b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a9ca50c736b0980a506d308c318c85e5c47614c65123343ade1cbcf1023471b->leave($__internal_6a9ca50c736b0980a506d308c318c85e5c47614c65123343ade1cbcf1023471b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf67b19f8d5f8c20fd1d16c3fbad91eccc7adac489fd538f092975aa668fce6a = $this->env->getExtension("native_profiler");
        $__internal_cf67b19f8d5f8c20fd1d16c3fbad91eccc7adac489fd538f092975aa668fce6a->enter($__internal_cf67b19f8d5f8c20fd1d16c3fbad91eccc7adac489fd538f092975aa668fce6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_cf67b19f8d5f8c20fd1d16c3fbad91eccc7adac489fd538f092975aa668fce6a->leave($__internal_cf67b19f8d5f8c20fd1d16c3fbad91eccc7adac489fd538f092975aa668fce6a_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2041dbb46ec3d0f5bfbfd33c835d9872ba87c60e84427e1785428ca14dfce05b = $this->env->getExtension("native_profiler");
        $__internal_2041dbb46ec3d0f5bfbfd33c835d9872ba87c60e84427e1785428ca14dfce05b->enter($__internal_2041dbb46ec3d0f5bfbfd33c835d9872ba87c60e84427e1785428ca14dfce05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_2041dbb46ec3d0f5bfbfd33c835d9872ba87c60e84427e1785428ca14dfce05b->leave($__internal_2041dbb46ec3d0f5bfbfd33c835d9872ba87c60e84427e1785428ca14dfce05b_prof);

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
