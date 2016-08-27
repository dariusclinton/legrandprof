<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_6a88d2a2f0a77016e5516f783f6a3d0e21113b81a4b628bea429a33880d89069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_586ba2ac6b1dfc87c70ba72760f85ed4ee371e0f2d79b51fcef4b2e6290922aa = $this->env->getExtension("native_profiler");
        $__internal_586ba2ac6b1dfc87c70ba72760f85ed4ee371e0f2d79b51fcef4b2e6290922aa->enter($__internal_586ba2ac6b1dfc87c70ba72760f85ed4ee371e0f2d79b51fcef4b2e6290922aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_586ba2ac6b1dfc87c70ba72760f85ed4ee371e0f2d79b51fcef4b2e6290922aa->leave($__internal_586ba2ac6b1dfc87c70ba72760f85ed4ee371e0f2d79b51fcef4b2e6290922aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96e7f6ed5c6e2366598eed6321e1813dbc1ea66ddc24a2f0feb47c019db92616 = $this->env->getExtension("native_profiler");
        $__internal_96e7f6ed5c6e2366598eed6321e1813dbc1ea66ddc24a2f0feb47c019db92616->enter($__internal_96e7f6ed5c6e2366598eed6321e1813dbc1ea66ddc24a2f0feb47c019db92616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_96e7f6ed5c6e2366598eed6321e1813dbc1ea66ddc24a2f0feb47c019db92616->leave($__internal_96e7f6ed5c6e2366598eed6321e1813dbc1ea66ddc24a2f0feb47c019db92616_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_be4990852ac58c5b8130e123db74bfd60c42c828e25decaf2eff3317e51c465d = $this->env->getExtension("native_profiler");
        $__internal_be4990852ac58c5b8130e123db74bfd60c42c828e25decaf2eff3317e51c465d->enter($__internal_be4990852ac58c5b8130e123db74bfd60c42c828e25decaf2eff3317e51c465d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_be4990852ac58c5b8130e123db74bfd60c42c828e25decaf2eff3317e51c465d->leave($__internal_be4990852ac58c5b8130e123db74bfd60c42c828e25decaf2eff3317e51c465d_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajout d'avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Ajout d'un avis</h1>*/
/* */
/*   {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}*/
/*   */
/* {% endblock %}*/
