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
        $__internal_cd1c19f964c9a12771f856d8cbcd45382868d6d32b3ffe09ca5f487e457d9eda = $this->env->getExtension("native_profiler");
        $__internal_cd1c19f964c9a12771f856d8cbcd45382868d6d32b3ffe09ca5f487e457d9eda->enter($__internal_cd1c19f964c9a12771f856d8cbcd45382868d6d32b3ffe09ca5f487e457d9eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd1c19f964c9a12771f856d8cbcd45382868d6d32b3ffe09ca5f487e457d9eda->leave($__internal_cd1c19f964c9a12771f856d8cbcd45382868d6d32b3ffe09ca5f487e457d9eda_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6400618883b4a72f8ea0b6c83b762f856ca1c51ee5d6bf6ebafce7df4c620f0 = $this->env->getExtension("native_profiler");
        $__internal_b6400618883b4a72f8ea0b6c83b762f856ca1c51ee5d6bf6ebafce7df4c620f0->enter($__internal_b6400618883b4a72f8ea0b6c83b762f856ca1c51ee5d6bf6ebafce7df4c620f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_b6400618883b4a72f8ea0b6c83b762f856ca1c51ee5d6bf6ebafce7df4c620f0->leave($__internal_b6400618883b4a72f8ea0b6c83b762f856ca1c51ee5d6bf6ebafce7df4c620f0_prof);

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
