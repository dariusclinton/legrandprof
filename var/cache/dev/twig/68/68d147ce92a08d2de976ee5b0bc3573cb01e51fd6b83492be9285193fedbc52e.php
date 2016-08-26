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
        $__internal_0c232923f1b38617cfbb19c02339a1b924d737a24f9dba3dc393ae50e9acec30 = $this->env->getExtension("native_profiler");
        $__internal_0c232923f1b38617cfbb19c02339a1b924d737a24f9dba3dc393ae50e9acec30->enter($__internal_0c232923f1b38617cfbb19c02339a1b924d737a24f9dba3dc393ae50e9acec30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c232923f1b38617cfbb19c02339a1b924d737a24f9dba3dc393ae50e9acec30->leave($__internal_0c232923f1b38617cfbb19c02339a1b924d737a24f9dba3dc393ae50e9acec30_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91291f0696fee46170dbe6062fbf13862cdb435584677711e462b46e15428404 = $this->env->getExtension("native_profiler");
        $__internal_91291f0696fee46170dbe6062fbf13862cdb435584677711e462b46e15428404->enter($__internal_91291f0696fee46170dbe6062fbf13862cdb435584677711e462b46e15428404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_91291f0696fee46170dbe6062fbf13862cdb435584677711e462b46e15428404->leave($__internal_91291f0696fee46170dbe6062fbf13862cdb435584677711e462b46e15428404_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3d572d1d7151266cd4ffec521b7275b9748a95121242ace6eadf2442d40c444 = $this->env->getExtension("native_profiler");
        $__internal_a3d572d1d7151266cd4ffec521b7275b9748a95121242ace6eadf2442d40c444->enter($__internal_a3d572d1d7151266cd4ffec521b7275b9748a95121242ace6eadf2442d40c444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_a3d572d1d7151266cd4ffec521b7275b9748a95121242ace6eadf2442d40c444->leave($__internal_a3d572d1d7151266cd4ffec521b7275b9748a95121242ace6eadf2442d40c444_prof);

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
