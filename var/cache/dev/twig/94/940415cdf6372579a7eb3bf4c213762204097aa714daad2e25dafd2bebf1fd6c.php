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
        $__internal_5e9791908bbf41dfb8efdd06bebcba90050292efc99a982e6c71116161dd2bcd = $this->env->getExtension("native_profiler");
        $__internal_5e9791908bbf41dfb8efdd06bebcba90050292efc99a982e6c71116161dd2bcd->enter($__internal_5e9791908bbf41dfb8efdd06bebcba90050292efc99a982e6c71116161dd2bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e9791908bbf41dfb8efdd06bebcba90050292efc99a982e6c71116161dd2bcd->leave($__internal_5e9791908bbf41dfb8efdd06bebcba90050292efc99a982e6c71116161dd2bcd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_657955fb7189659dcf985c66722987c96b1e633a9bd284f90c9dc642872446c2 = $this->env->getExtension("native_profiler");
        $__internal_657955fb7189659dcf985c66722987c96b1e633a9bd284f90c9dc642872446c2->enter($__internal_657955fb7189659dcf985c66722987c96b1e633a9bd284f90c9dc642872446c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_657955fb7189659dcf985c66722987c96b1e633a9bd284f90c9dc642872446c2->leave($__internal_657955fb7189659dcf985c66722987c96b1e633a9bd284f90c9dc642872446c2_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_202b6113a784cc1d820ae81f1458cee276187ad46cbf6aba5a74ff7565a2ea0e = $this->env->getExtension("native_profiler");
        $__internal_202b6113a784cc1d820ae81f1458cee276187ad46cbf6aba5a74ff7565a2ea0e->enter($__internal_202b6113a784cc1d820ae81f1458cee276187ad46cbf6aba5a74ff7565a2ea0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_202b6113a784cc1d820ae81f1458cee276187ad46cbf6aba5a74ff7565a2ea0e->leave($__internal_202b6113a784cc1d820ae81f1458cee276187ad46cbf6aba5a74ff7565a2ea0e_prof);

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
