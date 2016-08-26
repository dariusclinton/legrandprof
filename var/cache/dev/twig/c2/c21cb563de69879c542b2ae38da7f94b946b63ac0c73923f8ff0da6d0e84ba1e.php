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
        $__internal_7f13ae6ba0439135b8b4202a65bda896562cd5f4db56393e8edf9e952af1f4ec = $this->env->getExtension("native_profiler");
        $__internal_7f13ae6ba0439135b8b4202a65bda896562cd5f4db56393e8edf9e952af1f4ec->enter($__internal_7f13ae6ba0439135b8b4202a65bda896562cd5f4db56393e8edf9e952af1f4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f13ae6ba0439135b8b4202a65bda896562cd5f4db56393e8edf9e952af1f4ec->leave($__internal_7f13ae6ba0439135b8b4202a65bda896562cd5f4db56393e8edf9e952af1f4ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cdef6fb831b3119172d1457b71201a7000e41696702fdbb38e28cf0b0bd2972 = $this->env->getExtension("native_profiler");
        $__internal_9cdef6fb831b3119172d1457b71201a7000e41696702fdbb38e28cf0b0bd2972->enter($__internal_9cdef6fb831b3119172d1457b71201a7000e41696702fdbb38e28cf0b0bd2972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9cdef6fb831b3119172d1457b71201a7000e41696702fdbb38e28cf0b0bd2972->leave($__internal_9cdef6fb831b3119172d1457b71201a7000e41696702fdbb38e28cf0b0bd2972_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4603cd650248363159751ad045276bec4ce496d85fce906b73668c3e1be0b518 = $this->env->getExtension("native_profiler");
        $__internal_4603cd650248363159751ad045276bec4ce496d85fce906b73668c3e1be0b518->enter($__internal_4603cd650248363159751ad045276bec4ce496d85fce906b73668c3e1be0b518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_4603cd650248363159751ad045276bec4ce496d85fce906b73668c3e1be0b518->leave($__internal_4603cd650248363159751ad045276bec4ce496d85fce906b73668c3e1be0b518_prof);

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
