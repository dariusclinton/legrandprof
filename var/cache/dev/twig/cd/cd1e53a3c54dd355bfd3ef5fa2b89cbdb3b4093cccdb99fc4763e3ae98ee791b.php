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
        $__internal_eacf107a39108058d29f7e6316a6fd70a0f82773fb4ed8a7b8a62b2548eb061b = $this->env->getExtension("native_profiler");
        $__internal_eacf107a39108058d29f7e6316a6fd70a0f82773fb4ed8a7b8a62b2548eb061b->enter($__internal_eacf107a39108058d29f7e6316a6fd70a0f82773fb4ed8a7b8a62b2548eb061b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eacf107a39108058d29f7e6316a6fd70a0f82773fb4ed8a7b8a62b2548eb061b->leave($__internal_eacf107a39108058d29f7e6316a6fd70a0f82773fb4ed8a7b8a62b2548eb061b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6b9f2f2845d5e0a327f05a3af756e0b6103e03b11c9d18b5ce200d9539da50a = $this->env->getExtension("native_profiler");
        $__internal_d6b9f2f2845d5e0a327f05a3af756e0b6103e03b11c9d18b5ce200d9539da50a->enter($__internal_d6b9f2f2845d5e0a327f05a3af756e0b6103e03b11c9d18b5ce200d9539da50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d6b9f2f2845d5e0a327f05a3af756e0b6103e03b11c9d18b5ce200d9539da50a->leave($__internal_d6b9f2f2845d5e0a327f05a3af756e0b6103e03b11c9d18b5ce200d9539da50a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fbb451e1670c8b86e3e89c22775e1a45bab5a197ace21e82603770ade13da6a = $this->env->getExtension("native_profiler");
        $__internal_3fbb451e1670c8b86e3e89c22775e1a45bab5a197ace21e82603770ade13da6a->enter($__internal_3fbb451e1670c8b86e3e89c22775e1a45bab5a197ace21e82603770ade13da6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3fbb451e1670c8b86e3e89c22775e1a45bab5a197ace21e82603770ade13da6a->leave($__internal_3fbb451e1670c8b86e3e89c22775e1a45bab5a197ace21e82603770ade13da6a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_679fbac7b2657bf7d42ab1da4d62621a364167aea9c1b4804e5b28e0a7428ee2 = $this->env->getExtension("native_profiler");
        $__internal_679fbac7b2657bf7d42ab1da4d62621a364167aea9c1b4804e5b28e0a7428ee2->enter($__internal_679fbac7b2657bf7d42ab1da4d62621a364167aea9c1b4804e5b28e0a7428ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_679fbac7b2657bf7d42ab1da4d62621a364167aea9c1b4804e5b28e0a7428ee2->leave($__internal_679fbac7b2657bf7d42ab1da4d62621a364167aea9c1b4804e5b28e0a7428ee2_prof);

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
