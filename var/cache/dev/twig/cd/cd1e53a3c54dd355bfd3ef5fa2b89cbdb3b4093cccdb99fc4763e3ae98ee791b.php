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
        $__internal_cff07f177c9423bbb4bde8f1d0e69a893461e01cbd7d84a90f817a486bca239d = $this->env->getExtension("native_profiler");
        $__internal_cff07f177c9423bbb4bde8f1d0e69a893461e01cbd7d84a90f817a486bca239d->enter($__internal_cff07f177c9423bbb4bde8f1d0e69a893461e01cbd7d84a90f817a486bca239d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cff07f177c9423bbb4bde8f1d0e69a893461e01cbd7d84a90f817a486bca239d->leave($__internal_cff07f177c9423bbb4bde8f1d0e69a893461e01cbd7d84a90f817a486bca239d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_15eab7ef532dc6a775f1281d3e30c56147b4148f75b5407a196a41b25cffd336 = $this->env->getExtension("native_profiler");
        $__internal_15eab7ef532dc6a775f1281d3e30c56147b4148f75b5407a196a41b25cffd336->enter($__internal_15eab7ef532dc6a775f1281d3e30c56147b4148f75b5407a196a41b25cffd336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_15eab7ef532dc6a775f1281d3e30c56147b4148f75b5407a196a41b25cffd336->leave($__internal_15eab7ef532dc6a775f1281d3e30c56147b4148f75b5407a196a41b25cffd336_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ec29a6765c12c751de95a9a347075502d881e6029cd9284959d647a95d9ab18 = $this->env->getExtension("native_profiler");
        $__internal_6ec29a6765c12c751de95a9a347075502d881e6029cd9284959d647a95d9ab18->enter($__internal_6ec29a6765c12c751de95a9a347075502d881e6029cd9284959d647a95d9ab18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6ec29a6765c12c751de95a9a347075502d881e6029cd9284959d647a95d9ab18->leave($__internal_6ec29a6765c12c751de95a9a347075502d881e6029cd9284959d647a95d9ab18_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_93a74f0a5a165f8beb2b069e38e49ed7eb12a954224180999e1f40cbb724caf7 = $this->env->getExtension("native_profiler");
        $__internal_93a74f0a5a165f8beb2b069e38e49ed7eb12a954224180999e1f40cbb724caf7->enter($__internal_93a74f0a5a165f8beb2b069e38e49ed7eb12a954224180999e1f40cbb724caf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_93a74f0a5a165f8beb2b069e38e49ed7eb12a954224180999e1f40cbb724caf7->leave($__internal_93a74f0a5a165f8beb2b069e38e49ed7eb12a954224180999e1f40cbb724caf7_prof);

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
