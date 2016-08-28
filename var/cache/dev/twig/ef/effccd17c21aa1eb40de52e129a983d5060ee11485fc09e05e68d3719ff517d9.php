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
        $__internal_57d36c2f98a4d70f0f34d9bb771e255f3c545612a4a7a34c1691d9bea757584f = $this->env->getExtension("native_profiler");
        $__internal_57d36c2f98a4d70f0f34d9bb771e255f3c545612a4a7a34c1691d9bea757584f->enter($__internal_57d36c2f98a4d70f0f34d9bb771e255f3c545612a4a7a34c1691d9bea757584f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57d36c2f98a4d70f0f34d9bb771e255f3c545612a4a7a34c1691d9bea757584f->leave($__internal_57d36c2f98a4d70f0f34d9bb771e255f3c545612a4a7a34c1691d9bea757584f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_68a58993984e67c9b83995034ac06f416bfe62e07aff5cecc282bc4017a1ebea = $this->env->getExtension("native_profiler");
        $__internal_68a58993984e67c9b83995034ac06f416bfe62e07aff5cecc282bc4017a1ebea->enter($__internal_68a58993984e67c9b83995034ac06f416bfe62e07aff5cecc282bc4017a1ebea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_68a58993984e67c9b83995034ac06f416bfe62e07aff5cecc282bc4017a1ebea->leave($__internal_68a58993984e67c9b83995034ac06f416bfe62e07aff5cecc282bc4017a1ebea_prof);

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
