<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9180ba26c5fa1191dab3f944390ab7ae609b946955086166bcf47f990c6200c = $this->env->getExtension("native_profiler");
        $__internal_c9180ba26c5fa1191dab3f944390ab7ae609b946955086166bcf47f990c6200c->enter($__internal_c9180ba26c5fa1191dab3f944390ab7ae609b946955086166bcf47f990c6200c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9180ba26c5fa1191dab3f944390ab7ae609b946955086166bcf47f990c6200c->leave($__internal_c9180ba26c5fa1191dab3f944390ab7ae609b946955086166bcf47f990c6200c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6c41429acd7368486df8e3649e6579ba670c1cff84546d841de2c1caf0630ef = $this->env->getExtension("native_profiler");
        $__internal_b6c41429acd7368486df8e3649e6579ba670c1cff84546d841de2c1caf0630ef->enter($__internal_b6c41429acd7368486df8e3649e6579ba670c1cff84546d841de2c1caf0630ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b6c41429acd7368486df8e3649e6579ba670c1cff84546d841de2c1caf0630ef->leave($__internal_b6c41429acd7368486df8e3649e6579ba670c1cff84546d841de2c1caf0630ef_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bb71299026a37db6260b7f9ce61e824947916f347c9b6b91980c5fec25c217f = $this->env->getExtension("native_profiler");
        $__internal_9bb71299026a37db6260b7f9ce61e824947916f347c9b6b91980c5fec25c217f->enter($__internal_9bb71299026a37db6260b7f9ce61e824947916f347c9b6b91980c5fec25c217f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_9bb71299026a37db6260b7f9ce61e824947916f347c9b6b91980c5fec25c217f->leave($__internal_9bb71299026a37db6260b7f9ce61e824947916f347c9b6b91980c5fec25c217f_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     */
/*  */
/* {% endblock %}*/
