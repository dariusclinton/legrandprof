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
        $__internal_44e9b49ec2c84a60cfaa8cb460364675238f3f59de1a382881a75e79a94cd5c1 = $this->env->getExtension("native_profiler");
        $__internal_44e9b49ec2c84a60cfaa8cb460364675238f3f59de1a382881a75e79a94cd5c1->enter($__internal_44e9b49ec2c84a60cfaa8cb460364675238f3f59de1a382881a75e79a94cd5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44e9b49ec2c84a60cfaa8cb460364675238f3f59de1a382881a75e79a94cd5c1->leave($__internal_44e9b49ec2c84a60cfaa8cb460364675238f3f59de1a382881a75e79a94cd5c1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_293bb45730f599542174c65708f529b8103b8870d48213f31ef5d2550f9777f3 = $this->env->getExtension("native_profiler");
        $__internal_293bb45730f599542174c65708f529b8103b8870d48213f31ef5d2550f9777f3->enter($__internal_293bb45730f599542174c65708f529b8103b8870d48213f31ef5d2550f9777f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_293bb45730f599542174c65708f529b8103b8870d48213f31ef5d2550f9777f3->leave($__internal_293bb45730f599542174c65708f529b8103b8870d48213f31ef5d2550f9777f3_prof);

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
