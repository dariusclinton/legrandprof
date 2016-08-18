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
        $__internal_fb48282e7cc1c140a90d298ef8c84819098f5f18131ae5f4b4cf8a580a70418c = $this->env->getExtension("native_profiler");
        $__internal_fb48282e7cc1c140a90d298ef8c84819098f5f18131ae5f4b4cf8a580a70418c->enter($__internal_fb48282e7cc1c140a90d298ef8c84819098f5f18131ae5f4b4cf8a580a70418c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb48282e7cc1c140a90d298ef8c84819098f5f18131ae5f4b4cf8a580a70418c->leave($__internal_fb48282e7cc1c140a90d298ef8c84819098f5f18131ae5f4b4cf8a580a70418c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef99daaf51823f25dfd8560c45f60f6d8220d90b7af04715f12cbba0c552cfc5 = $this->env->getExtension("native_profiler");
        $__internal_ef99daaf51823f25dfd8560c45f60f6d8220d90b7af04715f12cbba0c552cfc5->enter($__internal_ef99daaf51823f25dfd8560c45f60f6d8220d90b7af04715f12cbba0c552cfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_ef99daaf51823f25dfd8560c45f60f6d8220d90b7af04715f12cbba0c552cfc5->leave($__internal_ef99daaf51823f25dfd8560c45f60f6d8220d90b7af04715f12cbba0c552cfc5_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4af3a62dd5b0f2ed75bc8bd05cdc39fb6c4741c8ec18ac597557ab625df3067 = $this->env->getExtension("native_profiler");
        $__internal_f4af3a62dd5b0f2ed75bc8bd05cdc39fb6c4741c8ec18ac597557ab625df3067->enter($__internal_f4af3a62dd5b0f2ed75bc8bd05cdc39fb6c4741c8ec18ac597557ab625df3067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_f4af3a62dd5b0f2ed75bc8bd05cdc39fb6c4741c8ec18ac597557ab625df3067->leave($__internal_f4af3a62dd5b0f2ed75bc8bd05cdc39fb6c4741c8ec18ac597557ab625df3067_prof);

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
