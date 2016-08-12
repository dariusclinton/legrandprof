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
        $__internal_94e89ebbe8986435cf1cbfbab1ca97315d000a455699e67e568637ffe28078cd = $this->env->getExtension("native_profiler");
        $__internal_94e89ebbe8986435cf1cbfbab1ca97315d000a455699e67e568637ffe28078cd->enter($__internal_94e89ebbe8986435cf1cbfbab1ca97315d000a455699e67e568637ffe28078cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_94e89ebbe8986435cf1cbfbab1ca97315d000a455699e67e568637ffe28078cd->leave($__internal_94e89ebbe8986435cf1cbfbab1ca97315d000a455699e67e568637ffe28078cd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6baa8cbde3de2ba9931f03eeb0000126639b6aff60245846d94259577378223f = $this->env->getExtension("native_profiler");
        $__internal_6baa8cbde3de2ba9931f03eeb0000126639b6aff60245846d94259577378223f->enter($__internal_6baa8cbde3de2ba9931f03eeb0000126639b6aff60245846d94259577378223f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6baa8cbde3de2ba9931f03eeb0000126639b6aff60245846d94259577378223f->leave($__internal_6baa8cbde3de2ba9931f03eeb0000126639b6aff60245846d94259577378223f_prof);

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
