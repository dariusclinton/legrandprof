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
        $__internal_4db1a0bd2ec99607c7aae36639afc76d31c71cca68fbc08f40ede0e05dafa7dc = $this->env->getExtension("native_profiler");
        $__internal_4db1a0bd2ec99607c7aae36639afc76d31c71cca68fbc08f40ede0e05dafa7dc->enter($__internal_4db1a0bd2ec99607c7aae36639afc76d31c71cca68fbc08f40ede0e05dafa7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4db1a0bd2ec99607c7aae36639afc76d31c71cca68fbc08f40ede0e05dafa7dc->leave($__internal_4db1a0bd2ec99607c7aae36639afc76d31c71cca68fbc08f40ede0e05dafa7dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b90156d7ee9d68f8d8f8ca697adc59ba3d97da57a903e8cce553c23def00046 = $this->env->getExtension("native_profiler");
        $__internal_6b90156d7ee9d68f8d8f8ca697adc59ba3d97da57a903e8cce553c23def00046->enter($__internal_6b90156d7ee9d68f8d8f8ca697adc59ba3d97da57a903e8cce553c23def00046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6b90156d7ee9d68f8d8f8ca697adc59ba3d97da57a903e8cce553c23def00046->leave($__internal_6b90156d7ee9d68f8d8f8ca697adc59ba3d97da57a903e8cce553c23def00046_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_72412734b595a93f1dc3b03807fce83ac642b0d92ac385a1e9f757b4bbdb9053 = $this->env->getExtension("native_profiler");
        $__internal_72412734b595a93f1dc3b03807fce83ac642b0d92ac385a1e9f757b4bbdb9053->enter($__internal_72412734b595a93f1dc3b03807fce83ac642b0d92ac385a1e9f757b4bbdb9053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_72412734b595a93f1dc3b03807fce83ac642b0d92ac385a1e9f757b4bbdb9053->leave($__internal_72412734b595a93f1dc3b03807fce83ac642b0d92ac385a1e9f757b4bbdb9053_prof);

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
