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
        $__internal_47f4c2f37b831e311aa3629fb77b096e45ace5aa246bd0f33f840f63d1632eba = $this->env->getExtension("native_profiler");
        $__internal_47f4c2f37b831e311aa3629fb77b096e45ace5aa246bd0f33f840f63d1632eba->enter($__internal_47f4c2f37b831e311aa3629fb77b096e45ace5aa246bd0f33f840f63d1632eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47f4c2f37b831e311aa3629fb77b096e45ace5aa246bd0f33f840f63d1632eba->leave($__internal_47f4c2f37b831e311aa3629fb77b096e45ace5aa246bd0f33f840f63d1632eba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c17ef9e93e63720529c0fafe49140f460e3b7cd167891b3b0bc42cbfa4b7ad0a = $this->env->getExtension("native_profiler");
        $__internal_c17ef9e93e63720529c0fafe49140f460e3b7cd167891b3b0bc42cbfa4b7ad0a->enter($__internal_c17ef9e93e63720529c0fafe49140f460e3b7cd167891b3b0bc42cbfa4b7ad0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c17ef9e93e63720529c0fafe49140f460e3b7cd167891b3b0bc42cbfa4b7ad0a->leave($__internal_c17ef9e93e63720529c0fafe49140f460e3b7cd167891b3b0bc42cbfa4b7ad0a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bafc545058ea4b5a0a343f84936b60675f719ed9aac1718b94a805aecde7bc2c = $this->env->getExtension("native_profiler");
        $__internal_bafc545058ea4b5a0a343f84936b60675f719ed9aac1718b94a805aecde7bc2c->enter($__internal_bafc545058ea4b5a0a343f84936b60675f719ed9aac1718b94a805aecde7bc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bafc545058ea4b5a0a343f84936b60675f719ed9aac1718b94a805aecde7bc2c->leave($__internal_bafc545058ea4b5a0a343f84936b60675f719ed9aac1718b94a805aecde7bc2c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e74b23af6438fe010c2e52baff5b814e51b231c51eeb63d628a4fb66d49d4f39 = $this->env->getExtension("native_profiler");
        $__internal_e74b23af6438fe010c2e52baff5b814e51b231c51eeb63d628a4fb66d49d4f39->enter($__internal_e74b23af6438fe010c2e52baff5b814e51b231c51eeb63d628a4fb66d49d4f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e74b23af6438fe010c2e52baff5b814e51b231c51eeb63d628a4fb66d49d4f39->leave($__internal_e74b23af6438fe010c2e52baff5b814e51b231c51eeb63d628a4fb66d49d4f39_prof);

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
