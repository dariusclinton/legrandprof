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
        $__internal_ea73caeb01a17fe1f708be152f7df0d68439aea65574663da88dcc5e1c125a06 = $this->env->getExtension("native_profiler");
        $__internal_ea73caeb01a17fe1f708be152f7df0d68439aea65574663da88dcc5e1c125a06->enter($__internal_ea73caeb01a17fe1f708be152f7df0d68439aea65574663da88dcc5e1c125a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea73caeb01a17fe1f708be152f7df0d68439aea65574663da88dcc5e1c125a06->leave($__internal_ea73caeb01a17fe1f708be152f7df0d68439aea65574663da88dcc5e1c125a06_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e5d5fd7fd0dd9f9342bf68f54126670e9356c5a95856b9c8560592aac633483b = $this->env->getExtension("native_profiler");
        $__internal_e5d5fd7fd0dd9f9342bf68f54126670e9356c5a95856b9c8560592aac633483b->enter($__internal_e5d5fd7fd0dd9f9342bf68f54126670e9356c5a95856b9c8560592aac633483b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e5d5fd7fd0dd9f9342bf68f54126670e9356c5a95856b9c8560592aac633483b->leave($__internal_e5d5fd7fd0dd9f9342bf68f54126670e9356c5a95856b9c8560592aac633483b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_91a1b44598ba794527c3c8415b0cbbfbe5d7f3d47c402d99e61562f57749dcdf = $this->env->getExtension("native_profiler");
        $__internal_91a1b44598ba794527c3c8415b0cbbfbe5d7f3d47c402d99e61562f57749dcdf->enter($__internal_91a1b44598ba794527c3c8415b0cbbfbe5d7f3d47c402d99e61562f57749dcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_91a1b44598ba794527c3c8415b0cbbfbe5d7f3d47c402d99e61562f57749dcdf->leave($__internal_91a1b44598ba794527c3c8415b0cbbfbe5d7f3d47c402d99e61562f57749dcdf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_df2d54e7425e1348981c18bb2d9cb7496d4023b709a39253e15cfd9c22096eb6 = $this->env->getExtension("native_profiler");
        $__internal_df2d54e7425e1348981c18bb2d9cb7496d4023b709a39253e15cfd9c22096eb6->enter($__internal_df2d54e7425e1348981c18bb2d9cb7496d4023b709a39253e15cfd9c22096eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_df2d54e7425e1348981c18bb2d9cb7496d4023b709a39253e15cfd9c22096eb6->leave($__internal_df2d54e7425e1348981c18bb2d9cb7496d4023b709a39253e15cfd9c22096eb6_prof);

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
