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
        $__internal_3069df6a1a3a5b2c396f4464b39c4981ae3ec12be17f2813d2023aa6276a486a = $this->env->getExtension("native_profiler");
        $__internal_3069df6a1a3a5b2c396f4464b39c4981ae3ec12be17f2813d2023aa6276a486a->enter($__internal_3069df6a1a3a5b2c396f4464b39c4981ae3ec12be17f2813d2023aa6276a486a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3069df6a1a3a5b2c396f4464b39c4981ae3ec12be17f2813d2023aa6276a486a->leave($__internal_3069df6a1a3a5b2c396f4464b39c4981ae3ec12be17f2813d2023aa6276a486a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d2cca12ec40f762ef02b9938519ecb179a8953a4d2f28bbedca0078b34c9c20 = $this->env->getExtension("native_profiler");
        $__internal_9d2cca12ec40f762ef02b9938519ecb179a8953a4d2f28bbedca0078b34c9c20->enter($__internal_9d2cca12ec40f762ef02b9938519ecb179a8953a4d2f28bbedca0078b34c9c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_9d2cca12ec40f762ef02b9938519ecb179a8953a4d2f28bbedca0078b34c9c20->leave($__internal_9d2cca12ec40f762ef02b9938519ecb179a8953a4d2f28bbedca0078b34c9c20_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea08fad80b2f72c0aa91035f32e0bd6bbf226153f704a7b79e0ef94e6eed439b = $this->env->getExtension("native_profiler");
        $__internal_ea08fad80b2f72c0aa91035f32e0bd6bbf226153f704a7b79e0ef94e6eed439b->enter($__internal_ea08fad80b2f72c0aa91035f32e0bd6bbf226153f704a7b79e0ef94e6eed439b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_ea08fad80b2f72c0aa91035f32e0bd6bbf226153f704a7b79e0ef94e6eed439b->leave($__internal_ea08fad80b2f72c0aa91035f32e0bd6bbf226153f704a7b79e0ef94e6eed439b_prof);

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
