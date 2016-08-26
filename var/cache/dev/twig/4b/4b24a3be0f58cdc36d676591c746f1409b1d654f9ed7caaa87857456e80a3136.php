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
        $__internal_ba5427cb5b53c46f348bf0c2303ed66ee46ec72cb67b578d3943c1ed2bc05deb = $this->env->getExtension("native_profiler");
        $__internal_ba5427cb5b53c46f348bf0c2303ed66ee46ec72cb67b578d3943c1ed2bc05deb->enter($__internal_ba5427cb5b53c46f348bf0c2303ed66ee46ec72cb67b578d3943c1ed2bc05deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ba5427cb5b53c46f348bf0c2303ed66ee46ec72cb67b578d3943c1ed2bc05deb->leave($__internal_ba5427cb5b53c46f348bf0c2303ed66ee46ec72cb67b578d3943c1ed2bc05deb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0cad6ffab329ff04a245b40301f90e211c5cb15dfe84abbbbc39ec56edc98146 = $this->env->getExtension("native_profiler");
        $__internal_0cad6ffab329ff04a245b40301f90e211c5cb15dfe84abbbbc39ec56edc98146->enter($__internal_0cad6ffab329ff04a245b40301f90e211c5cb15dfe84abbbbc39ec56edc98146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0cad6ffab329ff04a245b40301f90e211c5cb15dfe84abbbbc39ec56edc98146->leave($__internal_0cad6ffab329ff04a245b40301f90e211c5cb15dfe84abbbbc39ec56edc98146_prof);

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
