<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_ee785a962a6416587d11b8ba40dc3a889c38db4830819c0a2ec689e7b66e3165 extends Twig_Template
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
        $__internal_e6639bd37fb5281c46dc64771bade36234facf08565c7fd8d7b339fbb351425e = $this->env->getExtension("native_profiler");
        $__internal_e6639bd37fb5281c46dc64771bade36234facf08565c7fd8d7b339fbb351425e->enter($__internal_e6639bd37fb5281c46dc64771bade36234facf08565c7fd8d7b339fbb351425e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e6639bd37fb5281c46dc64771bade36234facf08565c7fd8d7b339fbb351425e->leave($__internal_e6639bd37fb5281c46dc64771bade36234facf08565c7fd8d7b339fbb351425e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b2ac4b50c70e5d0272bd5b27b53754740630492bd53cd8f13358c3f7e7a6dda = $this->env->getExtension("native_profiler");
        $__internal_9b2ac4b50c70e5d0272bd5b27b53754740630492bd53cd8f13358c3f7e7a6dda->enter($__internal_9b2ac4b50c70e5d0272bd5b27b53754740630492bd53cd8f13358c3f7e7a6dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9b2ac4b50c70e5d0272bd5b27b53754740630492bd53cd8f13358c3f7e7a6dda->leave($__internal_9b2ac4b50c70e5d0272bd5b27b53754740630492bd53cd8f13358c3f7e7a6dda_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
