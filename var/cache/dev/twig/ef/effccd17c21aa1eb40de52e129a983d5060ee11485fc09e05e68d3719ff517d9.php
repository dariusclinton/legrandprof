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
        $__internal_74d1a480f05319285683eae9edb7cb338a237dbde4fdcb9686db59d653a85474 = $this->env->getExtension("native_profiler");
        $__internal_74d1a480f05319285683eae9edb7cb338a237dbde4fdcb9686db59d653a85474->enter($__internal_74d1a480f05319285683eae9edb7cb338a237dbde4fdcb9686db59d653a85474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74d1a480f05319285683eae9edb7cb338a237dbde4fdcb9686db59d653a85474->leave($__internal_74d1a480f05319285683eae9edb7cb338a237dbde4fdcb9686db59d653a85474_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ebfcad67d72ceddf167ca6b043be8947310b96e6552167bac23ce0818ce5ca4 = $this->env->getExtension("native_profiler");
        $__internal_3ebfcad67d72ceddf167ca6b043be8947310b96e6552167bac23ce0818ce5ca4->enter($__internal_3ebfcad67d72ceddf167ca6b043be8947310b96e6552167bac23ce0818ce5ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_3ebfcad67d72ceddf167ca6b043be8947310b96e6552167bac23ce0818ce5ca4->leave($__internal_3ebfcad67d72ceddf167ca6b043be8947310b96e6552167bac23ce0818ce5ca4_prof);

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
