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
        $__internal_346be2f7266e952c3a021a23496887e2ca6c78057e2c57b0af74e175f92dca19 = $this->env->getExtension("native_profiler");
        $__internal_346be2f7266e952c3a021a23496887e2ca6c78057e2c57b0af74e175f92dca19->enter($__internal_346be2f7266e952c3a021a23496887e2ca6c78057e2c57b0af74e175f92dca19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_346be2f7266e952c3a021a23496887e2ca6c78057e2c57b0af74e175f92dca19->leave($__internal_346be2f7266e952c3a021a23496887e2ca6c78057e2c57b0af74e175f92dca19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00434632c5e506735b3427dff0b5d962907a0bccd5578fdd72f10d4206edbba2 = $this->env->getExtension("native_profiler");
        $__internal_00434632c5e506735b3427dff0b5d962907a0bccd5578fdd72f10d4206edbba2->enter($__internal_00434632c5e506735b3427dff0b5d962907a0bccd5578fdd72f10d4206edbba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_00434632c5e506735b3427dff0b5d962907a0bccd5578fdd72f10d4206edbba2->leave($__internal_00434632c5e506735b3427dff0b5d962907a0bccd5578fdd72f10d4206edbba2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_97f6372535f8c8389b92fbbe4e8b2dfcb564a8cde27997d4effc661b9062072d = $this->env->getExtension("native_profiler");
        $__internal_97f6372535f8c8389b92fbbe4e8b2dfcb564a8cde27997d4effc661b9062072d->enter($__internal_97f6372535f8c8389b92fbbe4e8b2dfcb564a8cde27997d4effc661b9062072d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_97f6372535f8c8389b92fbbe4e8b2dfcb564a8cde27997d4effc661b9062072d->leave($__internal_97f6372535f8c8389b92fbbe4e8b2dfcb564a8cde27997d4effc661b9062072d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_15adcd940ad3018f88e4280900b51c9ae66cb2fcba79191702f960e0dd23316e = $this->env->getExtension("native_profiler");
        $__internal_15adcd940ad3018f88e4280900b51c9ae66cb2fcba79191702f960e0dd23316e->enter($__internal_15adcd940ad3018f88e4280900b51c9ae66cb2fcba79191702f960e0dd23316e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_15adcd940ad3018f88e4280900b51c9ae66cb2fcba79191702f960e0dd23316e->leave($__internal_15adcd940ad3018f88e4280900b51c9ae66cb2fcba79191702f960e0dd23316e_prof);

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
