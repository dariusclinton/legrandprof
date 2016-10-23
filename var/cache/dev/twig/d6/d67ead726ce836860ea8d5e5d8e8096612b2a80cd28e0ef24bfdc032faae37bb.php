<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_b74cf5ee09b5b19c480d94479ebd62aac023901b8e2148ff1899eff44d007b0f extends Twig_Template
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
        $__internal_ce33de12c0e60f23f90d555de5dd3f6d494b3978ede8979c387d6ba6556bdd93 = $this->env->getExtension("native_profiler");
        $__internal_ce33de12c0e60f23f90d555de5dd3f6d494b3978ede8979c387d6ba6556bdd93->enter($__internal_ce33de12c0e60f23f90d555de5dd3f6d494b3978ede8979c387d6ba6556bdd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_ce33de12c0e60f23f90d555de5dd3f6d494b3978ede8979c387d6ba6556bdd93->leave($__internal_ce33de12c0e60f23f90d555de5dd3f6d494b3978ede8979c387d6ba6556bdd93_prof);

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
