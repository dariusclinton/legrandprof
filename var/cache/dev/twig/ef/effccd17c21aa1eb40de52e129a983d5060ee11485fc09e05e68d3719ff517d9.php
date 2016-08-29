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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee1ace980a57d51d964e01e94a320caf2b3fd7c049de3d3e458d2bb846db3526 = $this->env->getExtension("native_profiler");
        $__internal_ee1ace980a57d51d964e01e94a320caf2b3fd7c049de3d3e458d2bb846db3526->enter($__internal_ee1ace980a57d51d964e01e94a320caf2b3fd7c049de3d3e458d2bb846db3526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee1ace980a57d51d964e01e94a320caf2b3fd7c049de3d3e458d2bb846db3526->leave($__internal_ee1ace980a57d51d964e01e94a320caf2b3fd7c049de3d3e458d2bb846db3526_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0e52649186d74945aee969f2c5813d1dde448826c2746f8218f890e6c90e2ee = $this->env->getExtension("native_profiler");
        $__internal_d0e52649186d74945aee969f2c5813d1dde448826c2746f8218f890e6c90e2ee->enter($__internal_d0e52649186d74945aee969f2c5813d1dde448826c2746f8218f890e6c90e2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_d0e52649186d74945aee969f2c5813d1dde448826c2746f8218f890e6c90e2ee->leave($__internal_d0e52649186d74945aee969f2c5813d1dde448826c2746f8218f890e6c90e2ee_prof);

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
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
