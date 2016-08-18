<?php

/* @LGPCore/layout.html.twig */
class __TwigTemplate_129db1a7c18cdf2c8efd1b285948969fd5157eb8c89b733fd29a1b46cfa64f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LGPCore/layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5571af68779d1eef6702be75b1d225c651dde1bd96425d40d6d032b40abfc8ae = $this->env->getExtension("native_profiler");
        $__internal_5571af68779d1eef6702be75b1d225c651dde1bd96425d40d6d032b40abfc8ae->enter($__internal_5571af68779d1eef6702be75b1d225c651dde1bd96425d40d6d032b40abfc8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5571af68779d1eef6702be75b1d225c651dde1bd96425d40d6d032b40abfc8ae->leave($__internal_5571af68779d1eef6702be75b1d225c651dde1bd96425d40d6d032b40abfc8ae_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b49f28cda67b957fe6f4e10b28c5d2b34fb44637d384fb9fc465f2288dc7e804 = $this->env->getExtension("native_profiler");
        $__internal_b49f28cda67b957fe6f4e10b28c5d2b34fb44637d384fb9fc465f2288dc7e804->enter($__internal_b49f28cda67b957fe6f4e10b28c5d2b34fb44637d384fb9fc465f2288dc7e804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_b49f28cda67b957fe6f4e10b28c5d2b34fb44637d384fb9fc465f2288dc7e804->leave($__internal_b49f28cda67b957fe6f4e10b28c5d2b34fb44637d384fb9fc465f2288dc7e804_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
