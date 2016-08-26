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
        $__internal_b87443a92410185d7c4eef392f690fa2ebd36fd2433b7be9313b953d9fbb0417 = $this->env->getExtension("native_profiler");
        $__internal_b87443a92410185d7c4eef392f690fa2ebd36fd2433b7be9313b953d9fbb0417->enter($__internal_b87443a92410185d7c4eef392f690fa2ebd36fd2433b7be9313b953d9fbb0417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b87443a92410185d7c4eef392f690fa2ebd36fd2433b7be9313b953d9fbb0417->leave($__internal_b87443a92410185d7c4eef392f690fa2ebd36fd2433b7be9313b953d9fbb0417_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6bcd116fd37d4ffe55e10379f800275b0ad4f9667840d78e3ca9e775f9263948 = $this->env->getExtension("native_profiler");
        $__internal_6bcd116fd37d4ffe55e10379f800275b0ad4f9667840d78e3ca9e775f9263948->enter($__internal_6bcd116fd37d4ffe55e10379f800275b0ad4f9667840d78e3ca9e775f9263948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6bcd116fd37d4ffe55e10379f800275b0ad4f9667840d78e3ca9e775f9263948->leave($__internal_6bcd116fd37d4ffe55e10379f800275b0ad4f9667840d78e3ca9e775f9263948_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b865a1997ca207a42a8be9168c0fb0fb382be197fd4e440a6c362f0958ea1c6f = $this->env->getExtension("native_profiler");
        $__internal_b865a1997ca207a42a8be9168c0fb0fb382be197fd4e440a6c362f0958ea1c6f->enter($__internal_b865a1997ca207a42a8be9168c0fb0fb382be197fd4e440a6c362f0958ea1c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b865a1997ca207a42a8be9168c0fb0fb382be197fd4e440a6c362f0958ea1c6f->leave($__internal_b865a1997ca207a42a8be9168c0fb0fb382be197fd4e440a6c362f0958ea1c6f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ccb32c370b1a098870bd73fcb13a3fd17f3cca367d766c1fc856588ab72d76e = $this->env->getExtension("native_profiler");
        $__internal_1ccb32c370b1a098870bd73fcb13a3fd17f3cca367d766c1fc856588ab72d76e->enter($__internal_1ccb32c370b1a098870bd73fcb13a3fd17f3cca367d766c1fc856588ab72d76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1ccb32c370b1a098870bd73fcb13a3fd17f3cca367d766c1fc856588ab72d76e->leave($__internal_1ccb32c370b1a098870bd73fcb13a3fd17f3cca367d766c1fc856588ab72d76e_prof);

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
