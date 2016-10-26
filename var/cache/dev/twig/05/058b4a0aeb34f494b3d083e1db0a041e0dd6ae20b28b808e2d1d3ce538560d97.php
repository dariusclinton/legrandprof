<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_d860cc0a5007687e361823f6440c891125c13f84d0d3cbdc25e6b1415753d0d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e7b7c5fd6173ca0e8315a30d6929cfdf67afb76f9bf8e4216a74a3c00f2212e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7b7c5fd6173ca0e8315a30d6929cfdf67afb76f9bf8e4216a74a3c00f2212e->enter($__internal_7e7b7c5fd6173ca0e8315a30d6929cfdf67afb76f9bf8e4216a74a3c00f2212e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_7e7b7c5fd6173ca0e8315a30d6929cfdf67afb76f9bf8e4216a74a3c00f2212e->leave($__internal_7e7b7c5fd6173ca0e8315a30d6929cfdf67afb76f9bf8e4216a74a3c00f2212e_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
";
    }
}
