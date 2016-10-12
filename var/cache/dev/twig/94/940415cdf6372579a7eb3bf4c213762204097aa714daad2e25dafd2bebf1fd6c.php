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
        $__internal_acc020807e8875b4804843eebf345740270bc98063f5f354d53d43c8a9b84a92 = $this->env->getExtension("native_profiler");
        $__internal_acc020807e8875b4804843eebf345740270bc98063f5f354d53d43c8a9b84a92->enter($__internal_acc020807e8875b4804843eebf345740270bc98063f5f354d53d43c8a9b84a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acc020807e8875b4804843eebf345740270bc98063f5f354d53d43c8a9b84a92->leave($__internal_acc020807e8875b4804843eebf345740270bc98063f5f354d53d43c8a9b84a92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_536703d339b296a2e311532d204bea4b6ce6e567cd21dd67094982509dac2da7 = $this->env->getExtension("native_profiler");
        $__internal_536703d339b296a2e311532d204bea4b6ce6e567cd21dd67094982509dac2da7->enter($__internal_536703d339b296a2e311532d204bea4b6ce6e567cd21dd67094982509dac2da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_536703d339b296a2e311532d204bea4b6ce6e567cd21dd67094982509dac2da7->leave($__internal_536703d339b296a2e311532d204bea4b6ce6e567cd21dd67094982509dac2da7_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d21e9dee84de79bf7ae61436c8cfb73c48230e2a11597c8873bff8bea3193524 = $this->env->getExtension("native_profiler");
        $__internal_d21e9dee84de79bf7ae61436c8cfb73c48230e2a11597c8873bff8bea3193524->enter($__internal_d21e9dee84de79bf7ae61436c8cfb73c48230e2a11597c8873bff8bea3193524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_d21e9dee84de79bf7ae61436c8cfb73c48230e2a11597c8873bff8bea3193524->leave($__internal_d21e9dee84de79bf7ae61436c8cfb73c48230e2a11597c8873bff8bea3193524_prof);

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
