<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ea1010ea581a864e9fe1aa0bc32435a0fdaa2da2559efa6e1c104ca220be309e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec5ef5563946b425099b84e5be986464b877efddb6dd3e31bdd76f6253b5b659 = $this->env->getExtension("native_profiler");
        $__internal_ec5ef5563946b425099b84e5be986464b877efddb6dd3e31bdd76f6253b5b659->enter($__internal_ec5ef5563946b425099b84e5be986464b877efddb6dd3e31bdd76f6253b5b659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ec5ef5563946b425099b84e5be986464b877efddb6dd3e31bdd76f6253b5b659->leave($__internal_ec5ef5563946b425099b84e5be986464b877efddb6dd3e31bdd76f6253b5b659_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_99168c9bc98164119b67f27727c8f663be07d584871aa9c5222bd3c195ab40ba = $this->env->getExtension("native_profiler");
        $__internal_99168c9bc98164119b67f27727c8f663be07d584871aa9c5222bd3c195ab40ba->enter($__internal_99168c9bc98164119b67f27727c8f663be07d584871aa9c5222bd3c195ab40ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_99168c9bc98164119b67f27727c8f663be07d584871aa9c5222bd3c195ab40ba->leave($__internal_99168c9bc98164119b67f27727c8f663be07d584871aa9c5222bd3c195ab40ba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
