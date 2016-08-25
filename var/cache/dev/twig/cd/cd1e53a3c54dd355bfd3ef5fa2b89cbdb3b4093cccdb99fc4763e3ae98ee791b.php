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
        $__internal_50fbf30b89db8aac7ec99a9631b5d819ae6d26ad4b6ee111a9b23b4d9f6b116a = $this->env->getExtension("native_profiler");
        $__internal_50fbf30b89db8aac7ec99a9631b5d819ae6d26ad4b6ee111a9b23b4d9f6b116a->enter($__internal_50fbf30b89db8aac7ec99a9631b5d819ae6d26ad4b6ee111a9b23b4d9f6b116a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50fbf30b89db8aac7ec99a9631b5d819ae6d26ad4b6ee111a9b23b4d9f6b116a->leave($__internal_50fbf30b89db8aac7ec99a9631b5d819ae6d26ad4b6ee111a9b23b4d9f6b116a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_675a65cf14ad423e33681b3f4a10dfde1e7ee01796e77c7fed78f9006435aae8 = $this->env->getExtension("native_profiler");
        $__internal_675a65cf14ad423e33681b3f4a10dfde1e7ee01796e77c7fed78f9006435aae8->enter($__internal_675a65cf14ad423e33681b3f4a10dfde1e7ee01796e77c7fed78f9006435aae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_675a65cf14ad423e33681b3f4a10dfde1e7ee01796e77c7fed78f9006435aae8->leave($__internal_675a65cf14ad423e33681b3f4a10dfde1e7ee01796e77c7fed78f9006435aae8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_428b29714a67b214be4d7360627da00131c1b57d29181d17ba1f1a650e0094bf = $this->env->getExtension("native_profiler");
        $__internal_428b29714a67b214be4d7360627da00131c1b57d29181d17ba1f1a650e0094bf->enter($__internal_428b29714a67b214be4d7360627da00131c1b57d29181d17ba1f1a650e0094bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_428b29714a67b214be4d7360627da00131c1b57d29181d17ba1f1a650e0094bf->leave($__internal_428b29714a67b214be4d7360627da00131c1b57d29181d17ba1f1a650e0094bf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_98cc0a14a242e2ad27fd1f52d38cbbd058be5519fe4589d2e69ae91e74da9049 = $this->env->getExtension("native_profiler");
        $__internal_98cc0a14a242e2ad27fd1f52d38cbbd058be5519fe4589d2e69ae91e74da9049->enter($__internal_98cc0a14a242e2ad27fd1f52d38cbbd058be5519fe4589d2e69ae91e74da9049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_98cc0a14a242e2ad27fd1f52d38cbbd058be5519fe4589d2e69ae91e74da9049->leave($__internal_98cc0a14a242e2ad27fd1f52d38cbbd058be5519fe4589d2e69ae91e74da9049_prof);

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
