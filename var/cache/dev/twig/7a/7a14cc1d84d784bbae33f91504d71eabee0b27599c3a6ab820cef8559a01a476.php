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
        $__internal_6b911c4c4ddb8de6ead8169132dd1327300bfb4d53e578ac16eb5ad099a7caff = $this->env->getExtension("native_profiler");
        $__internal_6b911c4c4ddb8de6ead8169132dd1327300bfb4d53e578ac16eb5ad099a7caff->enter($__internal_6b911c4c4ddb8de6ead8169132dd1327300bfb4d53e578ac16eb5ad099a7caff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6b911c4c4ddb8de6ead8169132dd1327300bfb4d53e578ac16eb5ad099a7caff->leave($__internal_6b911c4c4ddb8de6ead8169132dd1327300bfb4d53e578ac16eb5ad099a7caff_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_67faf44268fc091cb14fc10aca61504313550fa615b71493a1002629565a49bd = $this->env->getExtension("native_profiler");
        $__internal_67faf44268fc091cb14fc10aca61504313550fa615b71493a1002629565a49bd->enter($__internal_67faf44268fc091cb14fc10aca61504313550fa615b71493a1002629565a49bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_67faf44268fc091cb14fc10aca61504313550fa615b71493a1002629565a49bd->leave($__internal_67faf44268fc091cb14fc10aca61504313550fa615b71493a1002629565a49bd_prof);

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
