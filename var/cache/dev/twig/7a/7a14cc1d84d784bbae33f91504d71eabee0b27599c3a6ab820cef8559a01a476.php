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
        $__internal_dcf9384c090c720d88fa61b460549bf7d6b873400d2a503ddfe781ae3822ce7d = $this->env->getExtension("native_profiler");
        $__internal_dcf9384c090c720d88fa61b460549bf7d6b873400d2a503ddfe781ae3822ce7d->enter($__internal_dcf9384c090c720d88fa61b460549bf7d6b873400d2a503ddfe781ae3822ce7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dcf9384c090c720d88fa61b460549bf7d6b873400d2a503ddfe781ae3822ce7d->leave($__internal_dcf9384c090c720d88fa61b460549bf7d6b873400d2a503ddfe781ae3822ce7d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc4829e0a4dc3f7f603cf5e4c6d051b5e69f94ad2b4a0e3ac316a62109ffe03d = $this->env->getExtension("native_profiler");
        $__internal_cc4829e0a4dc3f7f603cf5e4c6d051b5e69f94ad2b4a0e3ac316a62109ffe03d->enter($__internal_cc4829e0a4dc3f7f603cf5e4c6d051b5e69f94ad2b4a0e3ac316a62109ffe03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cc4829e0a4dc3f7f603cf5e4c6d051b5e69f94ad2b4a0e3ac316a62109ffe03d->leave($__internal_cc4829e0a4dc3f7f603cf5e4c6d051b5e69f94ad2b4a0e3ac316a62109ffe03d_prof);

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
