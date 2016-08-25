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
        $__internal_9e17af578421a7bba1f384875d5e47ed51dc57d26e32c9dba25339de3ff3b42b = $this->env->getExtension("native_profiler");
        $__internal_9e17af578421a7bba1f384875d5e47ed51dc57d26e32c9dba25339de3ff3b42b->enter($__internal_9e17af578421a7bba1f384875d5e47ed51dc57d26e32c9dba25339de3ff3b42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e17af578421a7bba1f384875d5e47ed51dc57d26e32c9dba25339de3ff3b42b->leave($__internal_9e17af578421a7bba1f384875d5e47ed51dc57d26e32c9dba25339de3ff3b42b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ce4ab6aacca835b8ba66e427e2ed33e4935930b91e38eb07b31e6485c5361a49 = $this->env->getExtension("native_profiler");
        $__internal_ce4ab6aacca835b8ba66e427e2ed33e4935930b91e38eb07b31e6485c5361a49->enter($__internal_ce4ab6aacca835b8ba66e427e2ed33e4935930b91e38eb07b31e6485c5361a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ce4ab6aacca835b8ba66e427e2ed33e4935930b91e38eb07b31e6485c5361a49->leave($__internal_ce4ab6aacca835b8ba66e427e2ed33e4935930b91e38eb07b31e6485c5361a49_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_136bfcaf7664c2077062874d433a745b99142eaa6406fa677c9dd077a7f6badc = $this->env->getExtension("native_profiler");
        $__internal_136bfcaf7664c2077062874d433a745b99142eaa6406fa677c9dd077a7f6badc->enter($__internal_136bfcaf7664c2077062874d433a745b99142eaa6406fa677c9dd077a7f6badc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_136bfcaf7664c2077062874d433a745b99142eaa6406fa677c9dd077a7f6badc->leave($__internal_136bfcaf7664c2077062874d433a745b99142eaa6406fa677c9dd077a7f6badc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf1c5aa05f1c796b1d04e737a9390c11e2599b7396cff9908fd4325389a634ce = $this->env->getExtension("native_profiler");
        $__internal_cf1c5aa05f1c796b1d04e737a9390c11e2599b7396cff9908fd4325389a634ce->enter($__internal_cf1c5aa05f1c796b1d04e737a9390c11e2599b7396cff9908fd4325389a634ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cf1c5aa05f1c796b1d04e737a9390c11e2599b7396cff9908fd4325389a634ce->leave($__internal_cf1c5aa05f1c796b1d04e737a9390c11e2599b7396cff9908fd4325389a634ce_prof);

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
