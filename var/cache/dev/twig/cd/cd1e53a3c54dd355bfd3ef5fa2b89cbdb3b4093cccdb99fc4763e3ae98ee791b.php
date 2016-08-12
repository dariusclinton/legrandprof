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
        $__internal_0f9451a425db2a02a91dc8098308a657afa1477d339c10278b39db9b6454071b = $this->env->getExtension("native_profiler");
        $__internal_0f9451a425db2a02a91dc8098308a657afa1477d339c10278b39db9b6454071b->enter($__internal_0f9451a425db2a02a91dc8098308a657afa1477d339c10278b39db9b6454071b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f9451a425db2a02a91dc8098308a657afa1477d339c10278b39db9b6454071b->leave($__internal_0f9451a425db2a02a91dc8098308a657afa1477d339c10278b39db9b6454071b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a169a2455ae376e87d170586cb17c78b1a734e49dc0cee46028747984c780bf8 = $this->env->getExtension("native_profiler");
        $__internal_a169a2455ae376e87d170586cb17c78b1a734e49dc0cee46028747984c780bf8->enter($__internal_a169a2455ae376e87d170586cb17c78b1a734e49dc0cee46028747984c780bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a169a2455ae376e87d170586cb17c78b1a734e49dc0cee46028747984c780bf8->leave($__internal_a169a2455ae376e87d170586cb17c78b1a734e49dc0cee46028747984c780bf8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c11e34200be1b3c3e0dbcea79c416dd721d77993f0953377e509a1ab98871b1 = $this->env->getExtension("native_profiler");
        $__internal_3c11e34200be1b3c3e0dbcea79c416dd721d77993f0953377e509a1ab98871b1->enter($__internal_3c11e34200be1b3c3e0dbcea79c416dd721d77993f0953377e509a1ab98871b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3c11e34200be1b3c3e0dbcea79c416dd721d77993f0953377e509a1ab98871b1->leave($__internal_3c11e34200be1b3c3e0dbcea79c416dd721d77993f0953377e509a1ab98871b1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_85d963f32da876355f9fba3a8f2f50032a6374f00e1d3e93501fef8e170da3f4 = $this->env->getExtension("native_profiler");
        $__internal_85d963f32da876355f9fba3a8f2f50032a6374f00e1d3e93501fef8e170da3f4->enter($__internal_85d963f32da876355f9fba3a8f2f50032a6374f00e1d3e93501fef8e170da3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_85d963f32da876355f9fba3a8f2f50032a6374f00e1d3e93501fef8e170da3f4->leave($__internal_85d963f32da876355f9fba3a8f2f50032a6374f00e1d3e93501fef8e170da3f4_prof);

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
