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
        $__internal_2193c73ca036c1b34f449aab8178e96beadf22d6baadc07546be6079daa585f3 = $this->env->getExtension("native_profiler");
        $__internal_2193c73ca036c1b34f449aab8178e96beadf22d6baadc07546be6079daa585f3->enter($__internal_2193c73ca036c1b34f449aab8178e96beadf22d6baadc07546be6079daa585f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2193c73ca036c1b34f449aab8178e96beadf22d6baadc07546be6079daa585f3->leave($__internal_2193c73ca036c1b34f449aab8178e96beadf22d6baadc07546be6079daa585f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_137176730ad1f9a3b8946f5d38cd1e96132df5a6ab03f49eacdfe8199961e922 = $this->env->getExtension("native_profiler");
        $__internal_137176730ad1f9a3b8946f5d38cd1e96132df5a6ab03f49eacdfe8199961e922->enter($__internal_137176730ad1f9a3b8946f5d38cd1e96132df5a6ab03f49eacdfe8199961e922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_137176730ad1f9a3b8946f5d38cd1e96132df5a6ab03f49eacdfe8199961e922->leave($__internal_137176730ad1f9a3b8946f5d38cd1e96132df5a6ab03f49eacdfe8199961e922_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dd9b5923bc88fc029bd794c25bcbb5fbcd20c22f79b2e212b2701c42d4d9108 = $this->env->getExtension("native_profiler");
        $__internal_7dd9b5923bc88fc029bd794c25bcbb5fbcd20c22f79b2e212b2701c42d4d9108->enter($__internal_7dd9b5923bc88fc029bd794c25bcbb5fbcd20c22f79b2e212b2701c42d4d9108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7dd9b5923bc88fc029bd794c25bcbb5fbcd20c22f79b2e212b2701c42d4d9108->leave($__internal_7dd9b5923bc88fc029bd794c25bcbb5fbcd20c22f79b2e212b2701c42d4d9108_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab02565f3803097d0b60bc4945b23bcf311f90c042475d60f8848b604faf8c36 = $this->env->getExtension("native_profiler");
        $__internal_ab02565f3803097d0b60bc4945b23bcf311f90c042475d60f8848b604faf8c36->enter($__internal_ab02565f3803097d0b60bc4945b23bcf311f90c042475d60f8848b604faf8c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ab02565f3803097d0b60bc4945b23bcf311f90c042475d60f8848b604faf8c36->leave($__internal_ab02565f3803097d0b60bc4945b23bcf311f90c042475d60f8848b604faf8c36_prof);

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
