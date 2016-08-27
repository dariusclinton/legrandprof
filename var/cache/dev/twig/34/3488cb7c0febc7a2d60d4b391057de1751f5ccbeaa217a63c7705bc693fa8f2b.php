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
        $__internal_9de2388e90ac86ed5b87899ec8465eb04d2e3ca6734b19b2893c26063e0a167e = $this->env->getExtension("native_profiler");
        $__internal_9de2388e90ac86ed5b87899ec8465eb04d2e3ca6734b19b2893c26063e0a167e->enter($__internal_9de2388e90ac86ed5b87899ec8465eb04d2e3ca6734b19b2893c26063e0a167e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9de2388e90ac86ed5b87899ec8465eb04d2e3ca6734b19b2893c26063e0a167e->leave($__internal_9de2388e90ac86ed5b87899ec8465eb04d2e3ca6734b19b2893c26063e0a167e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80445d58f55c1cea189edbd31b52811875cd82d54698da1d97a159636cb729ab = $this->env->getExtension("native_profiler");
        $__internal_80445d58f55c1cea189edbd31b52811875cd82d54698da1d97a159636cb729ab->enter($__internal_80445d58f55c1cea189edbd31b52811875cd82d54698da1d97a159636cb729ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_80445d58f55c1cea189edbd31b52811875cd82d54698da1d97a159636cb729ab->leave($__internal_80445d58f55c1cea189edbd31b52811875cd82d54698da1d97a159636cb729ab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5053625678a13033da5c1fac2a5dbbae6f162eb0c0082f3bae16d4bb9a9aa29f = $this->env->getExtension("native_profiler");
        $__internal_5053625678a13033da5c1fac2a5dbbae6f162eb0c0082f3bae16d4bb9a9aa29f->enter($__internal_5053625678a13033da5c1fac2a5dbbae6f162eb0c0082f3bae16d4bb9a9aa29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5053625678a13033da5c1fac2a5dbbae6f162eb0c0082f3bae16d4bb9a9aa29f->leave($__internal_5053625678a13033da5c1fac2a5dbbae6f162eb0c0082f3bae16d4bb9a9aa29f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f46c9652e72fd740b2c69b25787dacc8fcc79a1fdf70c3528f3542306f65c1b6 = $this->env->getExtension("native_profiler");
        $__internal_f46c9652e72fd740b2c69b25787dacc8fcc79a1fdf70c3528f3542306f65c1b6->enter($__internal_f46c9652e72fd740b2c69b25787dacc8fcc79a1fdf70c3528f3542306f65c1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f46c9652e72fd740b2c69b25787dacc8fcc79a1fdf70c3528f3542306f65c1b6->leave($__internal_f46c9652e72fd740b2c69b25787dacc8fcc79a1fdf70c3528f3542306f65c1b6_prof);

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
