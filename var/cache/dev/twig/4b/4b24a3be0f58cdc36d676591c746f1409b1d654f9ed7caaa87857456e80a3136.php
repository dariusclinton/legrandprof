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
        $__internal_64aa86694a183bf6cfce38a979df2453df26c22a230f176662ccefefdfc76794 = $this->env->getExtension("native_profiler");
        $__internal_64aa86694a183bf6cfce38a979df2453df26c22a230f176662ccefefdfc76794->enter($__internal_64aa86694a183bf6cfce38a979df2453df26c22a230f176662ccefefdfc76794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_64aa86694a183bf6cfce38a979df2453df26c22a230f176662ccefefdfc76794->leave($__internal_64aa86694a183bf6cfce38a979df2453df26c22a230f176662ccefefdfc76794_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_13e1bbe9be7f87476b35b457f1ed099009054792bb12300b9c105ba36090a5f4 = $this->env->getExtension("native_profiler");
        $__internal_13e1bbe9be7f87476b35b457f1ed099009054792bb12300b9c105ba36090a5f4->enter($__internal_13e1bbe9be7f87476b35b457f1ed099009054792bb12300b9c105ba36090a5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_13e1bbe9be7f87476b35b457f1ed099009054792bb12300b9c105ba36090a5f4->leave($__internal_13e1bbe9be7f87476b35b457f1ed099009054792bb12300b9c105ba36090a5f4_prof);

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
