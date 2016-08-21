<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5b3448eb9145abee8be5c169870831eefa9a3549feab7708148b97cf49702500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_3a2873440143293f9c13d7660181ea0cfb12bdaa466c880c48da5a5cfd293d41 = $this->env->getExtension("native_profiler");
        $__internal_3a2873440143293f9c13d7660181ea0cfb12bdaa466c880c48da5a5cfd293d41->enter($__internal_3a2873440143293f9c13d7660181ea0cfb12bdaa466c880c48da5a5cfd293d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a2873440143293f9c13d7660181ea0cfb12bdaa466c880c48da5a5cfd293d41->leave($__internal_3a2873440143293f9c13d7660181ea0cfb12bdaa466c880c48da5a5cfd293d41_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ffed71c886b43f8387f945a86293cffc41d4f6c37cb17a24824bb37bcd727c3f = $this->env->getExtension("native_profiler");
        $__internal_ffed71c886b43f8387f945a86293cffc41d4f6c37cb17a24824bb37bcd727c3f->enter($__internal_ffed71c886b43f8387f945a86293cffc41d4f6c37cb17a24824bb37bcd727c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ffed71c886b43f8387f945a86293cffc41d4f6c37cb17a24824bb37bcd727c3f->leave($__internal_ffed71c886b43f8387f945a86293cffc41d4f6c37cb17a24824bb37bcd727c3f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7af5a4f751aa434914cde69d9add30d50d7a85598e6bdd535c600d990f2e82c = $this->env->getExtension("native_profiler");
        $__internal_d7af5a4f751aa434914cde69d9add30d50d7a85598e6bdd535c600d990f2e82c->enter($__internal_d7af5a4f751aa434914cde69d9add30d50d7a85598e6bdd535c600d990f2e82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d7af5a4f751aa434914cde69d9add30d50d7a85598e6bdd535c600d990f2e82c->leave($__internal_d7af5a4f751aa434914cde69d9add30d50d7a85598e6bdd535c600d990f2e82c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b18fe851b13776d542836aeed80e24a04426e26505526bb8dffd63c4fcfa5f1 = $this->env->getExtension("native_profiler");
        $__internal_3b18fe851b13776d542836aeed80e24a04426e26505526bb8dffd63c4fcfa5f1->enter($__internal_3b18fe851b13776d542836aeed80e24a04426e26505526bb8dffd63c4fcfa5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3b18fe851b13776d542836aeed80e24a04426e26505526bb8dffd63c4fcfa5f1->leave($__internal_3b18fe851b13776d542836aeed80e24a04426e26505526bb8dffd63c4fcfa5f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
