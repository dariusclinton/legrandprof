<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_45656b21e02fa37b5829467f39206d847fe0e5aa3f1a8baaff385aabd815b134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fca2ac525a3834b38ff2c771b7f5349791b42283f8c51f30c3ed8c510670424c = $this->env->getExtension("native_profiler");
        $__internal_fca2ac525a3834b38ff2c771b7f5349791b42283f8c51f30c3ed8c510670424c->enter($__internal_fca2ac525a3834b38ff2c771b7f5349791b42283f8c51f30c3ed8c510670424c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fca2ac525a3834b38ff2c771b7f5349791b42283f8c51f30c3ed8c510670424c->leave($__internal_fca2ac525a3834b38ff2c771b7f5349791b42283f8c51f30c3ed8c510670424c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00843398111df76448a865068ca8e2a225e1cc864c9bdf5e92922a9c9ef559e9 = $this->env->getExtension("native_profiler");
        $__internal_00843398111df76448a865068ca8e2a225e1cc864c9bdf5e92922a9c9ef559e9->enter($__internal_00843398111df76448a865068ca8e2a225e1cc864c9bdf5e92922a9c9ef559e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_00843398111df76448a865068ca8e2a225e1cc864c9bdf5e92922a9c9ef559e9->leave($__internal_00843398111df76448a865068ca8e2a225e1cc864c9bdf5e92922a9c9ef559e9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a0844b5ae74b5611dc021f4b3a4112753b93a6129db0c7bb88813c96ba2325a = $this->env->getExtension("native_profiler");
        $__internal_6a0844b5ae74b5611dc021f4b3a4112753b93a6129db0c7bb88813c96ba2325a->enter($__internal_6a0844b5ae74b5611dc021f4b3a4112753b93a6129db0c7bb88813c96ba2325a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6a0844b5ae74b5611dc021f4b3a4112753b93a6129db0c7bb88813c96ba2325a->leave($__internal_6a0844b5ae74b5611dc021f4b3a4112753b93a6129db0c7bb88813c96ba2325a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d97e1dec764d4d2eb888c189c1c9553c8e9c589b86fb35d2dc36026f82675f7 = $this->env->getExtension("native_profiler");
        $__internal_1d97e1dec764d4d2eb888c189c1c9553c8e9c589b86fb35d2dc36026f82675f7->enter($__internal_1d97e1dec764d4d2eb888c189c1c9553c8e9c589b86fb35d2dc36026f82675f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1d97e1dec764d4d2eb888c189c1c9553c8e9c589b86fb35d2dc36026f82675f7->leave($__internal_1d97e1dec764d4d2eb888c189c1c9553c8e9c589b86fb35d2dc36026f82675f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
