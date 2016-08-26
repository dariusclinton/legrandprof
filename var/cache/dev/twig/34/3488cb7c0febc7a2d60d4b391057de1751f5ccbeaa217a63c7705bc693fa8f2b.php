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
        $__internal_99c606886971e6c5670c79e8c0db312a2cf721d141331cdb7e8eafb79faec668 = $this->env->getExtension("native_profiler");
        $__internal_99c606886971e6c5670c79e8c0db312a2cf721d141331cdb7e8eafb79faec668->enter($__internal_99c606886971e6c5670c79e8c0db312a2cf721d141331cdb7e8eafb79faec668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99c606886971e6c5670c79e8c0db312a2cf721d141331cdb7e8eafb79faec668->leave($__internal_99c606886971e6c5670c79e8c0db312a2cf721d141331cdb7e8eafb79faec668_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2315d863f6462cc4b9ab327cc1cfe6035289ea2bb02c4260f5b060c7aa8a9098 = $this->env->getExtension("native_profiler");
        $__internal_2315d863f6462cc4b9ab327cc1cfe6035289ea2bb02c4260f5b060c7aa8a9098->enter($__internal_2315d863f6462cc4b9ab327cc1cfe6035289ea2bb02c4260f5b060c7aa8a9098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2315d863f6462cc4b9ab327cc1cfe6035289ea2bb02c4260f5b060c7aa8a9098->leave($__internal_2315d863f6462cc4b9ab327cc1cfe6035289ea2bb02c4260f5b060c7aa8a9098_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a4ccbaa67767c2775f6ee19ad08347366e87a7b104e3939fb453ca162704837 = $this->env->getExtension("native_profiler");
        $__internal_9a4ccbaa67767c2775f6ee19ad08347366e87a7b104e3939fb453ca162704837->enter($__internal_9a4ccbaa67767c2775f6ee19ad08347366e87a7b104e3939fb453ca162704837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9a4ccbaa67767c2775f6ee19ad08347366e87a7b104e3939fb453ca162704837->leave($__internal_9a4ccbaa67767c2775f6ee19ad08347366e87a7b104e3939fb453ca162704837_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd237a018f9014587599c1eea6ced66c50ce58a3293dd4943b7e91a821daed51 = $this->env->getExtension("native_profiler");
        $__internal_cd237a018f9014587599c1eea6ced66c50ce58a3293dd4943b7e91a821daed51->enter($__internal_cd237a018f9014587599c1eea6ced66c50ce58a3293dd4943b7e91a821daed51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cd237a018f9014587599c1eea6ced66c50ce58a3293dd4943b7e91a821daed51->leave($__internal_cd237a018f9014587599c1eea6ced66c50ce58a3293dd4943b7e91a821daed51_prof);

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
