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
        $__internal_50934300069225efc73dd027784ba8ccd93605df7a33f6228a108245daa7bc09 = $this->env->getExtension("native_profiler");
        $__internal_50934300069225efc73dd027784ba8ccd93605df7a33f6228a108245daa7bc09->enter($__internal_50934300069225efc73dd027784ba8ccd93605df7a33f6228a108245daa7bc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_50934300069225efc73dd027784ba8ccd93605df7a33f6228a108245daa7bc09->leave($__internal_50934300069225efc73dd027784ba8ccd93605df7a33f6228a108245daa7bc09_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c917f72fa46e87c754443528caa59c5cca2c28b5b14ff7a5a7a3062db5211ba = $this->env->getExtension("native_profiler");
        $__internal_8c917f72fa46e87c754443528caa59c5cca2c28b5b14ff7a5a7a3062db5211ba->enter($__internal_8c917f72fa46e87c754443528caa59c5cca2c28b5b14ff7a5a7a3062db5211ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8c917f72fa46e87c754443528caa59c5cca2c28b5b14ff7a5a7a3062db5211ba->leave($__internal_8c917f72fa46e87c754443528caa59c5cca2c28b5b14ff7a5a7a3062db5211ba_prof);

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
