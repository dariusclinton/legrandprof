<?php

/* @LGPUser/Avis/update.html.twig */
class __TwigTemplate_955b54a18d8a4ef0ae1b19e13e7af0dde5d84259786d02f20247146380ab4be3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Avis/update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06cd5b3b49f18ab71004e33e5a111660decf4dc1af276429ace466431aa2eed3 = $this->env->getExtension("native_profiler");
        $__internal_06cd5b3b49f18ab71004e33e5a111660decf4dc1af276429ace466431aa2eed3->enter($__internal_06cd5b3b49f18ab71004e33e5a111660decf4dc1af276429ace466431aa2eed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06cd5b3b49f18ab71004e33e5a111660decf4dc1af276429ace466431aa2eed3->leave($__internal_06cd5b3b49f18ab71004e33e5a111660decf4dc1af276429ace466431aa2eed3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7b786d50f129f1cf08a78625f934555353b8af44442d8e78e457ec07dd94508 = $this->env->getExtension("native_profiler");
        $__internal_b7b786d50f129f1cf08a78625f934555353b8af44442d8e78e457ec07dd94508->enter($__internal_b7b786d50f129f1cf08a78625f934555353b8af44442d8e78e457ec07dd94508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b7b786d50f129f1cf08a78625f934555353b8af44442d8e78e457ec07dd94508->leave($__internal_b7b786d50f129f1cf08a78625f934555353b8af44442d8e78e457ec07dd94508_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e98ca85a7f3ca7c299d0ca703e39fa2ee049e6c86dea3c74251dfafd9ccc18bb = $this->env->getExtension("native_profiler");
        $__internal_e98ca85a7f3ca7c299d0ca703e39fa2ee049e6c86dea3c74251dfafd9ccc18bb->enter($__internal_e98ca85a7f3ca7c299d0ca703e39fa2ee049e6c86dea3c74251dfafd9ccc18bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_e98ca85a7f3ca7c299d0ca703e39fa2ee049e6c86dea3c74251dfafd9ccc18bb->leave($__internal_e98ca85a7f3ca7c299d0ca703e39fa2ee049e6c86dea3c74251dfafd9ccc18bb_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Avis/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modification d'un avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Modification d'un avis</h1>*/
/* */
/*   {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}*/
/*   */
/* {% endblock %}*/
