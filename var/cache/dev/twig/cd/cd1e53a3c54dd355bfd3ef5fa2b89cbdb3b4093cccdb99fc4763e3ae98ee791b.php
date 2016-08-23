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
        $__internal_a3d6b47802ee1f01eaa591661abbae20941d324887651aee3fc6c26f86f2a467 = $this->env->getExtension("native_profiler");
        $__internal_a3d6b47802ee1f01eaa591661abbae20941d324887651aee3fc6c26f86f2a467->enter($__internal_a3d6b47802ee1f01eaa591661abbae20941d324887651aee3fc6c26f86f2a467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d6b47802ee1f01eaa591661abbae20941d324887651aee3fc6c26f86f2a467->leave($__internal_a3d6b47802ee1f01eaa591661abbae20941d324887651aee3fc6c26f86f2a467_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d8e1cd218f98b24351b9a72e26d9e27e56754bbb802012a836f5e729bc63c19 = $this->env->getExtension("native_profiler");
        $__internal_7d8e1cd218f98b24351b9a72e26d9e27e56754bbb802012a836f5e729bc63c19->enter($__internal_7d8e1cd218f98b24351b9a72e26d9e27e56754bbb802012a836f5e729bc63c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7d8e1cd218f98b24351b9a72e26d9e27e56754bbb802012a836f5e729bc63c19->leave($__internal_7d8e1cd218f98b24351b9a72e26d9e27e56754bbb802012a836f5e729bc63c19_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_36c261d0bd5c9bc788c888fd392f1d2f199ef687cfb648ca4127044f61d25f58 = $this->env->getExtension("native_profiler");
        $__internal_36c261d0bd5c9bc788c888fd392f1d2f199ef687cfb648ca4127044f61d25f58->enter($__internal_36c261d0bd5c9bc788c888fd392f1d2f199ef687cfb648ca4127044f61d25f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_36c261d0bd5c9bc788c888fd392f1d2f199ef687cfb648ca4127044f61d25f58->leave($__internal_36c261d0bd5c9bc788c888fd392f1d2f199ef687cfb648ca4127044f61d25f58_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bb0bead62940328602f242b90e36a7f7b96e8f022fd7d7daa6ff309f5d78583 = $this->env->getExtension("native_profiler");
        $__internal_9bb0bead62940328602f242b90e36a7f7b96e8f022fd7d7daa6ff309f5d78583->enter($__internal_9bb0bead62940328602f242b90e36a7f7b96e8f022fd7d7daa6ff309f5d78583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9bb0bead62940328602f242b90e36a7f7b96e8f022fd7d7daa6ff309f5d78583->leave($__internal_9bb0bead62940328602f242b90e36a7f7b96e8f022fd7d7daa6ff309f5d78583_prof);

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
