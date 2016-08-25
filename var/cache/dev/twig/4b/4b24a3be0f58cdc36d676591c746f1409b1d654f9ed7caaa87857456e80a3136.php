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
        $__internal_7f492994996790736311a88878829ce5ee638aa14609c12875b3d598b0fe9080 = $this->env->getExtension("native_profiler");
        $__internal_7f492994996790736311a88878829ce5ee638aa14609c12875b3d598b0fe9080->enter($__internal_7f492994996790736311a88878829ce5ee638aa14609c12875b3d598b0fe9080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7f492994996790736311a88878829ce5ee638aa14609c12875b3d598b0fe9080->leave($__internal_7f492994996790736311a88878829ce5ee638aa14609c12875b3d598b0fe9080_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4488da6bafbaf8ead518f3a381a131343289413033c1934e4839ad23a3f6976f = $this->env->getExtension("native_profiler");
        $__internal_4488da6bafbaf8ead518f3a381a131343289413033c1934e4839ad23a3f6976f->enter($__internal_4488da6bafbaf8ead518f3a381a131343289413033c1934e4839ad23a3f6976f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4488da6bafbaf8ead518f3a381a131343289413033c1934e4839ad23a3f6976f->leave($__internal_4488da6bafbaf8ead518f3a381a131343289413033c1934e4839ad23a3f6976f_prof);

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
