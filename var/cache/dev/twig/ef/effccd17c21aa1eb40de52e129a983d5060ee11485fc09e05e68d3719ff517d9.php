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
        $__internal_b45f3da0903b9c4ddbb580cbaa971f2363dab51c108433391ee2e9d984369d51 = $this->env->getExtension("native_profiler");
        $__internal_b45f3da0903b9c4ddbb580cbaa971f2363dab51c108433391ee2e9d984369d51->enter($__internal_b45f3da0903b9c4ddbb580cbaa971f2363dab51c108433391ee2e9d984369d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45f3da0903b9c4ddbb580cbaa971f2363dab51c108433391ee2e9d984369d51->leave($__internal_b45f3da0903b9c4ddbb580cbaa971f2363dab51c108433391ee2e9d984369d51_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bda519de1a2e9b5cd9bd2a273c75e34f9ada8037500b4b09a1ee19fd5148c78 = $this->env->getExtension("native_profiler");
        $__internal_4bda519de1a2e9b5cd9bd2a273c75e34f9ada8037500b4b09a1ee19fd5148c78->enter($__internal_4bda519de1a2e9b5cd9bd2a273c75e34f9ada8037500b4b09a1ee19fd5148c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_4bda519de1a2e9b5cd9bd2a273c75e34f9ada8037500b4b09a1ee19fd5148c78->leave($__internal_4bda519de1a2e9b5cd9bd2a273c75e34f9ada8037500b4b09a1ee19fd5148c78_prof);

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
