<?php

/* LGPUserBundle::layout.html.twig */
class __TwigTemplate_ee86c1b812daa1b8919bc96f64bd46b59ee60439d571371340153864df40814b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle::layout.html.twig", 1);
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
        $__internal_c83b793d1aae40301c6fdcfd9f8e68e10e0131bce90a6c6ad65cc472438d25d1 = $this->env->getExtension("native_profiler");
        $__internal_c83b793d1aae40301c6fdcfd9f8e68e10e0131bce90a6c6ad65cc472438d25d1->enter($__internal_c83b793d1aae40301c6fdcfd9f8e68e10e0131bce90a6c6ad65cc472438d25d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c83b793d1aae40301c6fdcfd9f8e68e10e0131bce90a6c6ad65cc472438d25d1->leave($__internal_c83b793d1aae40301c6fdcfd9f8e68e10e0131bce90a6c6ad65cc472438d25d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8eb830d633afd75f5848d005572ebee38b8cbe8509c6567787469bf9b496caf = $this->env->getExtension("native_profiler");
        $__internal_d8eb830d633afd75f5848d005572ebee38b8cbe8509c6567787469bf9b496caf->enter($__internal_d8eb830d633afd75f5848d005572ebee38b8cbe8509c6567787469bf9b496caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_d8eb830d633afd75f5848d005572ebee38b8cbe8509c6567787469bf9b496caf->leave($__internal_d8eb830d633afd75f5848d005572ebee38b8cbe8509c6567787469bf9b496caf_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5b6337d546696898444f83c12f8e6cf1b0cc491d9fc5ff455d820395873ad29 = $this->env->getExtension("native_profiler");
        $__internal_e5b6337d546696898444f83c12f8e6cf1b0cc491d9fc5ff455d820395873ad29->enter($__internal_e5b6337d546696898444f83c12f8e6cf1b0cc491d9fc5ff455d820395873ad29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_e5b6337d546696898444f83c12f8e6cf1b0cc491d9fc5ff455d820395873ad29->leave($__internal_e5b6337d546696898444f83c12f8e6cf1b0cc491d9fc5ff455d820395873ad29_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'LGPCoreBundle::layout.html.twig' %}

{% block body %}

  {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}
  {% block fos_user_content %}

  {% endblock fos_user_content %}

{% endblock %}
";
    }
}
