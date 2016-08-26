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
        $__internal_a274e1611e2a8390dec5d55ff87922882c2331468b72607c82296688e06fcc04 = $this->env->getExtension("native_profiler");
        $__internal_a274e1611e2a8390dec5d55ff87922882c2331468b72607c82296688e06fcc04->enter($__internal_a274e1611e2a8390dec5d55ff87922882c2331468b72607c82296688e06fcc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a274e1611e2a8390dec5d55ff87922882c2331468b72607c82296688e06fcc04->leave($__internal_a274e1611e2a8390dec5d55ff87922882c2331468b72607c82296688e06fcc04_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7080b912cde6927f01650d042e446c5566d9166f4351147ca390ae763e3e774b = $this->env->getExtension("native_profiler");
        $__internal_7080b912cde6927f01650d042e446c5566d9166f4351147ca390ae763e3e774b->enter($__internal_7080b912cde6927f01650d042e446c5566d9166f4351147ca390ae763e3e774b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_7080b912cde6927f01650d042e446c5566d9166f4351147ca390ae763e3e774b->leave($__internal_7080b912cde6927f01650d042e446c5566d9166f4351147ca390ae763e3e774b_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_554c3f7ff5de20b4df2472c593401e1a0d5e72ba4c7a30ef28b1bbe858f0a923 = $this->env->getExtension("native_profiler");
        $__internal_554c3f7ff5de20b4df2472c593401e1a0d5e72ba4c7a30ef28b1bbe858f0a923->enter($__internal_554c3f7ff5de20b4df2472c593401e1a0d5e72ba4c7a30ef28b1bbe858f0a923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_554c3f7ff5de20b4df2472c593401e1a0d5e72ba4c7a30ef28b1bbe858f0a923->leave($__internal_554c3f7ff5de20b4df2472c593401e1a0d5e72ba4c7a30ef28b1bbe858f0a923_prof);

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
