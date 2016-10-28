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
        $__internal_37ee849d89344c97a25c6c41889ba2ced9b8aefdf373903ff7ff3c4180bfdef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ee849d89344c97a25c6c41889ba2ced9b8aefdf373903ff7ff3c4180bfdef0->enter($__internal_37ee849d89344c97a25c6c41889ba2ced9b8aefdf373903ff7ff3c4180bfdef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_37ee849d89344c97a25c6c41889ba2ced9b8aefdf373903ff7ff3c4180bfdef0->leave($__internal_37ee849d89344c97a25c6c41889ba2ced9b8aefdf373903ff7ff3c4180bfdef0_prof);

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
