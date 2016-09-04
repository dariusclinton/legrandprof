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
        $__internal_330507fea1520773f71a3430217b4d7da131b4c33c46e070560b9691230f2400 = $this->env->getExtension("native_profiler");
        $__internal_330507fea1520773f71a3430217b4d7da131b4c33c46e070560b9691230f2400->enter($__internal_330507fea1520773f71a3430217b4d7da131b4c33c46e070560b9691230f2400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_330507fea1520773f71a3430217b4d7da131b4c33c46e070560b9691230f2400->leave($__internal_330507fea1520773f71a3430217b4d7da131b4c33c46e070560b9691230f2400_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_120c74697e293316ebe8935546257fef09cc2345dea5118a0c770fae20a18d97 = $this->env->getExtension("native_profiler");
        $__internal_120c74697e293316ebe8935546257fef09cc2345dea5118a0c770fae20a18d97->enter($__internal_120c74697e293316ebe8935546257fef09cc2345dea5118a0c770fae20a18d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_120c74697e293316ebe8935546257fef09cc2345dea5118a0c770fae20a18d97->leave($__internal_120c74697e293316ebe8935546257fef09cc2345dea5118a0c770fae20a18d97_prof);

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
