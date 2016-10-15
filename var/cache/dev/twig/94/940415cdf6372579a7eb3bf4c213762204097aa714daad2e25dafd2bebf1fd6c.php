<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ee86c1b812daa1b8919bc96f64bd46b59ee60439d571371340153864df40814b extends Twig_Template
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
        $__internal_4ea1894df958709cdfed3c2b826091d190e12d76f1be39b76ee99b66348da3ac = $this->env->getExtension("native_profiler");
        $__internal_4ea1894df958709cdfed3c2b826091d190e12d76f1be39b76ee99b66348da3ac->enter($__internal_4ea1894df958709cdfed3c2b826091d190e12d76f1be39b76ee99b66348da3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ea1894df958709cdfed3c2b826091d190e12d76f1be39b76ee99b66348da3ac->leave($__internal_4ea1894df958709cdfed3c2b826091d190e12d76f1be39b76ee99b66348da3ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa1e815bebce8483252cb7dcc0e448fca00be9274d8575275148e3498a8b9543 = $this->env->getExtension("native_profiler");
        $__internal_aa1e815bebce8483252cb7dcc0e448fca00be9274d8575275148e3498a8b9543->enter($__internal_aa1e815bebce8483252cb7dcc0e448fca00be9274d8575275148e3498a8b9543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_aa1e815bebce8483252cb7dcc0e448fca00be9274d8575275148e3498a8b9543->leave($__internal_aa1e815bebce8483252cb7dcc0e448fca00be9274d8575275148e3498a8b9543_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_227d3a729e1ee61b63e942ea7dd24436ee834a94f6812d1ae99c93901bd35b18 = $this->env->getExtension("native_profiler");
        $__internal_227d3a729e1ee61b63e942ea7dd24436ee834a94f6812d1ae99c93901bd35b18->enter($__internal_227d3a729e1ee61b63e942ea7dd24436ee834a94f6812d1ae99c93901bd35b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_227d3a729e1ee61b63e942ea7dd24436ee834a94f6812d1ae99c93901bd35b18->leave($__internal_227d3a729e1ee61b63e942ea7dd24436ee834a94f6812d1ae99c93901bd35b18_prof);

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
