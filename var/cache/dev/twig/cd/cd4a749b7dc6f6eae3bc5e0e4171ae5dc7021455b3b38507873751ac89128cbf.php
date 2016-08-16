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
        $__internal_25fc5823e860d10f04a325b1a3a8ad99a5502e77a2bbb31b2a24c43672948019 = $this->env->getExtension("native_profiler");
        $__internal_25fc5823e860d10f04a325b1a3a8ad99a5502e77a2bbb31b2a24c43672948019->enter($__internal_25fc5823e860d10f04a325b1a3a8ad99a5502e77a2bbb31b2a24c43672948019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25fc5823e860d10f04a325b1a3a8ad99a5502e77a2bbb31b2a24c43672948019->leave($__internal_25fc5823e860d10f04a325b1a3a8ad99a5502e77a2bbb31b2a24c43672948019_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ed4514aa9a7c05e10ac09d44b6b475ce19399a4a265274ae9818372e6ae5e07 = $this->env->getExtension("native_profiler");
        $__internal_4ed4514aa9a7c05e10ac09d44b6b475ce19399a4a265274ae9818372e6ae5e07->enter($__internal_4ed4514aa9a7c05e10ac09d44b6b475ce19399a4a265274ae9818372e6ae5e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_4ed4514aa9a7c05e10ac09d44b6b475ce19399a4a265274ae9818372e6ae5e07->leave($__internal_4ed4514aa9a7c05e10ac09d44b6b475ce19399a4a265274ae9818372e6ae5e07_prof);

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
