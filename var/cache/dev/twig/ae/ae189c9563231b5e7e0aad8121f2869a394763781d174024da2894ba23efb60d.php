<?php

/* @LGPUser/layout.html.twig */
class __TwigTemplate_121d417e80f449987b96c0694b6c3f8454776af0ec9692c329704d319b061a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f185d9914113019c7988a8339d19946befe1731724f30aa7ceb590f22c62649 = $this->env->getExtension("native_profiler");
        $__internal_0f185d9914113019c7988a8339d19946befe1731724f30aa7ceb590f22c62649->enter($__internal_0f185d9914113019c7988a8339d19946befe1731724f30aa7ceb590f22c62649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f185d9914113019c7988a8339d19946befe1731724f30aa7ceb590f22c62649->leave($__internal_0f185d9914113019c7988a8339d19946befe1731724f30aa7ceb590f22c62649_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_259692cd53581bc194100c5b058bfc447874bf05f43d1aba670b0422cc151dd1 = $this->env->getExtension("native_profiler");
        $__internal_259692cd53581bc194100c5b058bfc447874bf05f43d1aba670b0422cc151dd1->enter($__internal_259692cd53581bc194100c5b058bfc447874bf05f43d1aba670b0422cc151dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_259692cd53581bc194100c5b058bfc447874bf05f43d1aba670b0422cc151dd1->leave($__internal_259692cd53581bc194100c5b058bfc447874bf05f43d1aba670b0422cc151dd1_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f910d6e0208ebcc00ddeebdffb7289910dceb22672d67a289343581c2afad2c1 = $this->env->getExtension("native_profiler");
        $__internal_f910d6e0208ebcc00ddeebdffb7289910dceb22672d67a289343581c2afad2c1->enter($__internal_f910d6e0208ebcc00ddeebdffb7289910dceb22672d67a289343581c2afad2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_f910d6e0208ebcc00ddeebdffb7289910dceb22672d67a289343581c2afad2c1->leave($__internal_f910d6e0208ebcc00ddeebdffb7289910dceb22672d67a289343581c2afad2c1_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/* */
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
