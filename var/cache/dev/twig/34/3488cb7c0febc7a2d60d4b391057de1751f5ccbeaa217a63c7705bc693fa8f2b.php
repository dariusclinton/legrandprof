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
        $__internal_2f782688294830cf453cb88befbc1a1c770caf9e95ee575d1549fa1c507800ff = $this->env->getExtension("native_profiler");
        $__internal_2f782688294830cf453cb88befbc1a1c770caf9e95ee575d1549fa1c507800ff->enter($__internal_2f782688294830cf453cb88befbc1a1c770caf9e95ee575d1549fa1c507800ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f782688294830cf453cb88befbc1a1c770caf9e95ee575d1549fa1c507800ff->leave($__internal_2f782688294830cf453cb88befbc1a1c770caf9e95ee575d1549fa1c507800ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f968c14550d2a50a96b029fd01b85a617b3097d390788f345a255ff102f4c1c = $this->env->getExtension("native_profiler");
        $__internal_3f968c14550d2a50a96b029fd01b85a617b3097d390788f345a255ff102f4c1c->enter($__internal_3f968c14550d2a50a96b029fd01b85a617b3097d390788f345a255ff102f4c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3f968c14550d2a50a96b029fd01b85a617b3097d390788f345a255ff102f4c1c->leave($__internal_3f968c14550d2a50a96b029fd01b85a617b3097d390788f345a255ff102f4c1c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7d936f84d39d14695889fd44a1df5d2e4d8f51f858a8b7b23ce739ac9c2a40b = $this->env->getExtension("native_profiler");
        $__internal_a7d936f84d39d14695889fd44a1df5d2e4d8f51f858a8b7b23ce739ac9c2a40b->enter($__internal_a7d936f84d39d14695889fd44a1df5d2e4d8f51f858a8b7b23ce739ac9c2a40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a7d936f84d39d14695889fd44a1df5d2e4d8f51f858a8b7b23ce739ac9c2a40b->leave($__internal_a7d936f84d39d14695889fd44a1df5d2e4d8f51f858a8b7b23ce739ac9c2a40b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a049d2ea1621ddbf5bad6127cb6842b9f3fbe529a63c7429c936850ea6613a24 = $this->env->getExtension("native_profiler");
        $__internal_a049d2ea1621ddbf5bad6127cb6842b9f3fbe529a63c7429c936850ea6613a24->enter($__internal_a049d2ea1621ddbf5bad6127cb6842b9f3fbe529a63c7429c936850ea6613a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a049d2ea1621ddbf5bad6127cb6842b9f3fbe529a63c7429c936850ea6613a24->leave($__internal_a049d2ea1621ddbf5bad6127cb6842b9f3fbe529a63c7429c936850ea6613a24_prof);

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
