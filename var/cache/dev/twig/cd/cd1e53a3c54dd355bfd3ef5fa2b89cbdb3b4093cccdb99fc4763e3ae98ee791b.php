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
        $__internal_137d280a58d8ed2e1f6c5e2a655c59d896e5899054afc4126628c68844fac23f = $this->env->getExtension("native_profiler");
        $__internal_137d280a58d8ed2e1f6c5e2a655c59d896e5899054afc4126628c68844fac23f->enter($__internal_137d280a58d8ed2e1f6c5e2a655c59d896e5899054afc4126628c68844fac23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_137d280a58d8ed2e1f6c5e2a655c59d896e5899054afc4126628c68844fac23f->leave($__internal_137d280a58d8ed2e1f6c5e2a655c59d896e5899054afc4126628c68844fac23f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bdfe2d6f959660bffe4f562b93145b385f5dd420acf8fa7d21ed7a657433ecb8 = $this->env->getExtension("native_profiler");
        $__internal_bdfe2d6f959660bffe4f562b93145b385f5dd420acf8fa7d21ed7a657433ecb8->enter($__internal_bdfe2d6f959660bffe4f562b93145b385f5dd420acf8fa7d21ed7a657433ecb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bdfe2d6f959660bffe4f562b93145b385f5dd420acf8fa7d21ed7a657433ecb8->leave($__internal_bdfe2d6f959660bffe4f562b93145b385f5dd420acf8fa7d21ed7a657433ecb8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_29c97f25bdecbdfbeca6c7ee29dca86596b4df8fa8ee726d2a03ee06a3cf5808 = $this->env->getExtension("native_profiler");
        $__internal_29c97f25bdecbdfbeca6c7ee29dca86596b4df8fa8ee726d2a03ee06a3cf5808->enter($__internal_29c97f25bdecbdfbeca6c7ee29dca86596b4df8fa8ee726d2a03ee06a3cf5808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_29c97f25bdecbdfbeca6c7ee29dca86596b4df8fa8ee726d2a03ee06a3cf5808->leave($__internal_29c97f25bdecbdfbeca6c7ee29dca86596b4df8fa8ee726d2a03ee06a3cf5808_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_361966b6452dd4abc8e37644952d72b52d39e22bddcd7958655e96cdb13ec095 = $this->env->getExtension("native_profiler");
        $__internal_361966b6452dd4abc8e37644952d72b52d39e22bddcd7958655e96cdb13ec095->enter($__internal_361966b6452dd4abc8e37644952d72b52d39e22bddcd7958655e96cdb13ec095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_361966b6452dd4abc8e37644952d72b52d39e22bddcd7958655e96cdb13ec095->leave($__internal_361966b6452dd4abc8e37644952d72b52d39e22bddcd7958655e96cdb13ec095_prof);

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
