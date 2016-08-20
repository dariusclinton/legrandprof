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
        $__internal_fa2f0cda591cbfec91409c2a5b0859a4577c0c001c2a1b0d734be26ae2bde52b = $this->env->getExtension("native_profiler");
        $__internal_fa2f0cda591cbfec91409c2a5b0859a4577c0c001c2a1b0d734be26ae2bde52b->enter($__internal_fa2f0cda591cbfec91409c2a5b0859a4577c0c001c2a1b0d734be26ae2bde52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa2f0cda591cbfec91409c2a5b0859a4577c0c001c2a1b0d734be26ae2bde52b->leave($__internal_fa2f0cda591cbfec91409c2a5b0859a4577c0c001c2a1b0d734be26ae2bde52b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3e9426643b52fd7f573fac987302cd5e580d6a85a3eb8138fd12e5d48cbefa0 = $this->env->getExtension("native_profiler");
        $__internal_a3e9426643b52fd7f573fac987302cd5e580d6a85a3eb8138fd12e5d48cbefa0->enter($__internal_a3e9426643b52fd7f573fac987302cd5e580d6a85a3eb8138fd12e5d48cbefa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a3e9426643b52fd7f573fac987302cd5e580d6a85a3eb8138fd12e5d48cbefa0->leave($__internal_a3e9426643b52fd7f573fac987302cd5e580d6a85a3eb8138fd12e5d48cbefa0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e44f561ebcdd1de54dcdfff1399cdccb2ed2dde6414eddb23227569a912005ca = $this->env->getExtension("native_profiler");
        $__internal_e44f561ebcdd1de54dcdfff1399cdccb2ed2dde6414eddb23227569a912005ca->enter($__internal_e44f561ebcdd1de54dcdfff1399cdccb2ed2dde6414eddb23227569a912005ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e44f561ebcdd1de54dcdfff1399cdccb2ed2dde6414eddb23227569a912005ca->leave($__internal_e44f561ebcdd1de54dcdfff1399cdccb2ed2dde6414eddb23227569a912005ca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c623db7665c33e85a0b24b0897b6a4e996306bb829b139d830db4d38b1aecfb4 = $this->env->getExtension("native_profiler");
        $__internal_c623db7665c33e85a0b24b0897b6a4e996306bb829b139d830db4d38b1aecfb4->enter($__internal_c623db7665c33e85a0b24b0897b6a4e996306bb829b139d830db4d38b1aecfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c623db7665c33e85a0b24b0897b6a4e996306bb829b139d830db4d38b1aecfb4->leave($__internal_c623db7665c33e85a0b24b0897b6a4e996306bb829b139d830db4d38b1aecfb4_prof);

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
