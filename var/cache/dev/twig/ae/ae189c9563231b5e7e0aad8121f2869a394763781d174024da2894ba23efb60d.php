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
        $__internal_c01cddcf212e1f3ef25e7af841253cd34a765e1d0eedfd321557294cb6520179 = $this->env->getExtension("native_profiler");
        $__internal_c01cddcf212e1f3ef25e7af841253cd34a765e1d0eedfd321557294cb6520179->enter($__internal_c01cddcf212e1f3ef25e7af841253cd34a765e1d0eedfd321557294cb6520179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c01cddcf212e1f3ef25e7af841253cd34a765e1d0eedfd321557294cb6520179->leave($__internal_c01cddcf212e1f3ef25e7af841253cd34a765e1d0eedfd321557294cb6520179_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94750bed30f2635612880d5641b9f7533debf2b2a90ea8b25a1e3bea6e793102 = $this->env->getExtension("native_profiler");
        $__internal_94750bed30f2635612880d5641b9f7533debf2b2a90ea8b25a1e3bea6e793102->enter($__internal_94750bed30f2635612880d5641b9f7533debf2b2a90ea8b25a1e3bea6e793102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_94750bed30f2635612880d5641b9f7533debf2b2a90ea8b25a1e3bea6e793102->leave($__internal_94750bed30f2635612880d5641b9f7533debf2b2a90ea8b25a1e3bea6e793102_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbd428e8096ed1fc8e6d0dedfcb74f4c129e2089b28e6e7d0c8598da40982677 = $this->env->getExtension("native_profiler");
        $__internal_bbd428e8096ed1fc8e6d0dedfcb74f4c129e2089b28e6e7d0c8598da40982677->enter($__internal_bbd428e8096ed1fc8e6d0dedfcb74f4c129e2089b28e6e7d0c8598da40982677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_bbd428e8096ed1fc8e6d0dedfcb74f4c129e2089b28e6e7d0c8598da40982677->leave($__internal_bbd428e8096ed1fc8e6d0dedfcb74f4c129e2089b28e6e7d0c8598da40982677_prof);

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
