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
        $__internal_e82b5c02c69a39b9338212af2aaf68492910247e09ccb70cf8131676932ae6bb = $this->env->getExtension("native_profiler");
        $__internal_e82b5c02c69a39b9338212af2aaf68492910247e09ccb70cf8131676932ae6bb->enter($__internal_e82b5c02c69a39b9338212af2aaf68492910247e09ccb70cf8131676932ae6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e82b5c02c69a39b9338212af2aaf68492910247e09ccb70cf8131676932ae6bb->leave($__internal_e82b5c02c69a39b9338212af2aaf68492910247e09ccb70cf8131676932ae6bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4060ced8c2ce8bae263d961081d6a50db5c0df547566d4352ec4c90c05fedbcf = $this->env->getExtension("native_profiler");
        $__internal_4060ced8c2ce8bae263d961081d6a50db5c0df547566d4352ec4c90c05fedbcf->enter($__internal_4060ced8c2ce8bae263d961081d6a50db5c0df547566d4352ec4c90c05fedbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4060ced8c2ce8bae263d961081d6a50db5c0df547566d4352ec4c90c05fedbcf->leave($__internal_4060ced8c2ce8bae263d961081d6a50db5c0df547566d4352ec4c90c05fedbcf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff9b6f27de9880b33f56dbdb4142e35b3c9ff99fd7396ea167a97004ae6e93e8 = $this->env->getExtension("native_profiler");
        $__internal_ff9b6f27de9880b33f56dbdb4142e35b3c9ff99fd7396ea167a97004ae6e93e8->enter($__internal_ff9b6f27de9880b33f56dbdb4142e35b3c9ff99fd7396ea167a97004ae6e93e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff9b6f27de9880b33f56dbdb4142e35b3c9ff99fd7396ea167a97004ae6e93e8->leave($__internal_ff9b6f27de9880b33f56dbdb4142e35b3c9ff99fd7396ea167a97004ae6e93e8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b1c833fa1babe03d97dbca3e8c948f3cd4cf00b69b4a8a25aca5a1a1bc7ec45 = $this->env->getExtension("native_profiler");
        $__internal_2b1c833fa1babe03d97dbca3e8c948f3cd4cf00b69b4a8a25aca5a1a1bc7ec45->enter($__internal_2b1c833fa1babe03d97dbca3e8c948f3cd4cf00b69b4a8a25aca5a1a1bc7ec45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2b1c833fa1babe03d97dbca3e8c948f3cd4cf00b69b4a8a25aca5a1a1bc7ec45->leave($__internal_2b1c833fa1babe03d97dbca3e8c948f3cd4cf00b69b4a8a25aca5a1a1bc7ec45_prof);

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
