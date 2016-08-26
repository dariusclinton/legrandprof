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
        $__internal_d38e2391d242ca41596505a252e6de9e8395f53eecf7187c1f0202aa85990981 = $this->env->getExtension("native_profiler");
        $__internal_d38e2391d242ca41596505a252e6de9e8395f53eecf7187c1f0202aa85990981->enter($__internal_d38e2391d242ca41596505a252e6de9e8395f53eecf7187c1f0202aa85990981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d38e2391d242ca41596505a252e6de9e8395f53eecf7187c1f0202aa85990981->leave($__internal_d38e2391d242ca41596505a252e6de9e8395f53eecf7187c1f0202aa85990981_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a8a0e40c4028304e3f8c7754f68e2aacd79faffa16ee8f7836a5f13612e8e43 = $this->env->getExtension("native_profiler");
        $__internal_1a8a0e40c4028304e3f8c7754f68e2aacd79faffa16ee8f7836a5f13612e8e43->enter($__internal_1a8a0e40c4028304e3f8c7754f68e2aacd79faffa16ee8f7836a5f13612e8e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_1a8a0e40c4028304e3f8c7754f68e2aacd79faffa16ee8f7836a5f13612e8e43->leave($__internal_1a8a0e40c4028304e3f8c7754f68e2aacd79faffa16ee8f7836a5f13612e8e43_prof);

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
