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
        $__internal_1d4233b4a40a292d8bef43d4e5ace58e6c101975485399438f74d072b24d360d = $this->env->getExtension("native_profiler");
        $__internal_1d4233b4a40a292d8bef43d4e5ace58e6c101975485399438f74d072b24d360d->enter($__internal_1d4233b4a40a292d8bef43d4e5ace58e6c101975485399438f74d072b24d360d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1d4233b4a40a292d8bef43d4e5ace58e6c101975485399438f74d072b24d360d->leave($__internal_1d4233b4a40a292d8bef43d4e5ace58e6c101975485399438f74d072b24d360d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2185b6ac195385934936e13ac7c46ccc244691e651a5e58855f2c3436745c760 = $this->env->getExtension("native_profiler");
        $__internal_2185b6ac195385934936e13ac7c46ccc244691e651a5e58855f2c3436745c760->enter($__internal_2185b6ac195385934936e13ac7c46ccc244691e651a5e58855f2c3436745c760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2185b6ac195385934936e13ac7c46ccc244691e651a5e58855f2c3436745c760->leave($__internal_2185b6ac195385934936e13ac7c46ccc244691e651a5e58855f2c3436745c760_prof);

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
