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
        $__internal_895fe19fe7015bfa9e019cb429a23268909d27d5faa183e760b978d9ddc17741 = $this->env->getExtension("native_profiler");
        $__internal_895fe19fe7015bfa9e019cb429a23268909d27d5faa183e760b978d9ddc17741->enter($__internal_895fe19fe7015bfa9e019cb429a23268909d27d5faa183e760b978d9ddc17741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_895fe19fe7015bfa9e019cb429a23268909d27d5faa183e760b978d9ddc17741->leave($__internal_895fe19fe7015bfa9e019cb429a23268909d27d5faa183e760b978d9ddc17741_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98f6900f2502ba3961fdbe66b7f24c250c5f1c6691316d19f5d89368278c2c21 = $this->env->getExtension("native_profiler");
        $__internal_98f6900f2502ba3961fdbe66b7f24c250c5f1c6691316d19f5d89368278c2c21->enter($__internal_98f6900f2502ba3961fdbe66b7f24c250c5f1c6691316d19f5d89368278c2c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_98f6900f2502ba3961fdbe66b7f24c250c5f1c6691316d19f5d89368278c2c21->leave($__internal_98f6900f2502ba3961fdbe66b7f24c250c5f1c6691316d19f5d89368278c2c21_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_171be3bf6ee2515ad8871237596258927c778a16b93ebe96a0eff279c776a808 = $this->env->getExtension("native_profiler");
        $__internal_171be3bf6ee2515ad8871237596258927c778a16b93ebe96a0eff279c776a808->enter($__internal_171be3bf6ee2515ad8871237596258927c778a16b93ebe96a0eff279c776a808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_171be3bf6ee2515ad8871237596258927c778a16b93ebe96a0eff279c776a808->leave($__internal_171be3bf6ee2515ad8871237596258927c778a16b93ebe96a0eff279c776a808_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9390d356fc8ef4e42c5fcc9bb584042d5967037cf41cc450a28146145c2c54af = $this->env->getExtension("native_profiler");
        $__internal_9390d356fc8ef4e42c5fcc9bb584042d5967037cf41cc450a28146145c2c54af->enter($__internal_9390d356fc8ef4e42c5fcc9bb584042d5967037cf41cc450a28146145c2c54af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9390d356fc8ef4e42c5fcc9bb584042d5967037cf41cc450a28146145c2c54af->leave($__internal_9390d356fc8ef4e42c5fcc9bb584042d5967037cf41cc450a28146145c2c54af_prof);

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
