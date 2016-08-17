<?php

/* LGPCoreBundle::layout.html.twig */
class __TwigTemplate_d8476ffaff311cac05480954028647d69a878986b7f77f43ea02fe43d90920dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "LGPCoreBundle::layout.html.twig", 2);
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
        $__internal_33a7d5249322375c088542aec1d8c64da33a076300aa2235896608601b878968 = $this->env->getExtension("native_profiler");
        $__internal_33a7d5249322375c088542aec1d8c64da33a076300aa2235896608601b878968->enter($__internal_33a7d5249322375c088542aec1d8c64da33a076300aa2235896608601b878968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33a7d5249322375c088542aec1d8c64da33a076300aa2235896608601b878968->leave($__internal_33a7d5249322375c088542aec1d8c64da33a076300aa2235896608601b878968_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_920c1fc737b2b1f0b49c87b5c92390e77e705580f78bc1b6338d75aeb41614cf = $this->env->getExtension("native_profiler");
        $__internal_920c1fc737b2b1f0b49c87b5c92390e77e705580f78bc1b6338d75aeb41614cf->enter($__internal_920c1fc737b2b1f0b49c87b5c92390e77e705580f78bc1b6338d75aeb41614cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_920c1fc737b2b1f0b49c87b5c92390e77e705580f78bc1b6338d75aeb41614cf->leave($__internal_920c1fc737b2b1f0b49c87b5c92390e77e705580f78bc1b6338d75aeb41614cf_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle::layout.html.twig";
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
