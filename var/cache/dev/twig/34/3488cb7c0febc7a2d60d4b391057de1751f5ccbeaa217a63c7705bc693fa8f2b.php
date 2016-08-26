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
        $__internal_0fe0ba65c1c04d768375c3cc50ded15c794ab93d398a8e954be56d4d54253ce2 = $this->env->getExtension("native_profiler");
        $__internal_0fe0ba65c1c04d768375c3cc50ded15c794ab93d398a8e954be56d4d54253ce2->enter($__internal_0fe0ba65c1c04d768375c3cc50ded15c794ab93d398a8e954be56d4d54253ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe0ba65c1c04d768375c3cc50ded15c794ab93d398a8e954be56d4d54253ce2->leave($__internal_0fe0ba65c1c04d768375c3cc50ded15c794ab93d398a8e954be56d4d54253ce2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dbab612aeb85202d2cbc690e387ccbfd5aed1a42baee91e65648ab495f2b11db = $this->env->getExtension("native_profiler");
        $__internal_dbab612aeb85202d2cbc690e387ccbfd5aed1a42baee91e65648ab495f2b11db->enter($__internal_dbab612aeb85202d2cbc690e387ccbfd5aed1a42baee91e65648ab495f2b11db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dbab612aeb85202d2cbc690e387ccbfd5aed1a42baee91e65648ab495f2b11db->leave($__internal_dbab612aeb85202d2cbc690e387ccbfd5aed1a42baee91e65648ab495f2b11db_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_575b701417b1a9c5fcf72a69b7e6ef004fcbf50a5c1bc472daf02d23b8a58363 = $this->env->getExtension("native_profiler");
        $__internal_575b701417b1a9c5fcf72a69b7e6ef004fcbf50a5c1bc472daf02d23b8a58363->enter($__internal_575b701417b1a9c5fcf72a69b7e6ef004fcbf50a5c1bc472daf02d23b8a58363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_575b701417b1a9c5fcf72a69b7e6ef004fcbf50a5c1bc472daf02d23b8a58363->leave($__internal_575b701417b1a9c5fcf72a69b7e6ef004fcbf50a5c1bc472daf02d23b8a58363_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_75f71903cb96f54c3c5ac5671e0b1532052e31d064e29d63067740b687622358 = $this->env->getExtension("native_profiler");
        $__internal_75f71903cb96f54c3c5ac5671e0b1532052e31d064e29d63067740b687622358->enter($__internal_75f71903cb96f54c3c5ac5671e0b1532052e31d064e29d63067740b687622358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_75f71903cb96f54c3c5ac5671e0b1532052e31d064e29d63067740b687622358->leave($__internal_75f71903cb96f54c3c5ac5671e0b1532052e31d064e29d63067740b687622358_prof);

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
