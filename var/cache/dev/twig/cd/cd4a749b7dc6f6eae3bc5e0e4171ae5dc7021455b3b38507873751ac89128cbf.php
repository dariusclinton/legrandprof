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
        $__internal_9fc913720f7af7bc2f248686a9c18f2a8f57dab525d84b6c9eceeab45cc38c09 = $this->env->getExtension("native_profiler");
        $__internal_9fc913720f7af7bc2f248686a9c18f2a8f57dab525d84b6c9eceeab45cc38c09->enter($__internal_9fc913720f7af7bc2f248686a9c18f2a8f57dab525d84b6c9eceeab45cc38c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fc913720f7af7bc2f248686a9c18f2a8f57dab525d84b6c9eceeab45cc38c09->leave($__internal_9fc913720f7af7bc2f248686a9c18f2a8f57dab525d84b6c9eceeab45cc38c09_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_624315ddf319a91a38ad8c021690a699817f6cdf746eb9a6dd2fb6fa9a0304f9 = $this->env->getExtension("native_profiler");
        $__internal_624315ddf319a91a38ad8c021690a699817f6cdf746eb9a6dd2fb6fa9a0304f9->enter($__internal_624315ddf319a91a38ad8c021690a699817f6cdf746eb9a6dd2fb6fa9a0304f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_624315ddf319a91a38ad8c021690a699817f6cdf746eb9a6dd2fb6fa9a0304f9->leave($__internal_624315ddf319a91a38ad8c021690a699817f6cdf746eb9a6dd2fb6fa9a0304f9_prof);

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
