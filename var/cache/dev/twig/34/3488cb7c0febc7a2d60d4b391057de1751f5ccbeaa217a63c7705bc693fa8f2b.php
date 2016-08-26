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
        $__internal_069401a6d46bd24221c74acb4ef51f3c5713b0d60ce4d16f19043246266cc3c5 = $this->env->getExtension("native_profiler");
        $__internal_069401a6d46bd24221c74acb4ef51f3c5713b0d60ce4d16f19043246266cc3c5->enter($__internal_069401a6d46bd24221c74acb4ef51f3c5713b0d60ce4d16f19043246266cc3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_069401a6d46bd24221c74acb4ef51f3c5713b0d60ce4d16f19043246266cc3c5->leave($__internal_069401a6d46bd24221c74acb4ef51f3c5713b0d60ce4d16f19043246266cc3c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_834e7b59de16389e5b6c735a7216d0cadb69d051e52404bc10ebc257299bb057 = $this->env->getExtension("native_profiler");
        $__internal_834e7b59de16389e5b6c735a7216d0cadb69d051e52404bc10ebc257299bb057->enter($__internal_834e7b59de16389e5b6c735a7216d0cadb69d051e52404bc10ebc257299bb057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_834e7b59de16389e5b6c735a7216d0cadb69d051e52404bc10ebc257299bb057->leave($__internal_834e7b59de16389e5b6c735a7216d0cadb69d051e52404bc10ebc257299bb057_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fdc17689c956255b8f9a3da97c5f8956195e879dabe48519bb0288f10b49d17 = $this->env->getExtension("native_profiler");
        $__internal_5fdc17689c956255b8f9a3da97c5f8956195e879dabe48519bb0288f10b49d17->enter($__internal_5fdc17689c956255b8f9a3da97c5f8956195e879dabe48519bb0288f10b49d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5fdc17689c956255b8f9a3da97c5f8956195e879dabe48519bb0288f10b49d17->leave($__internal_5fdc17689c956255b8f9a3da97c5f8956195e879dabe48519bb0288f10b49d17_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_88472f6901e87c85028a79a859a9334a3ae15fc95280534d69d6bb9e21f5a0cd = $this->env->getExtension("native_profiler");
        $__internal_88472f6901e87c85028a79a859a9334a3ae15fc95280534d69d6bb9e21f5a0cd->enter($__internal_88472f6901e87c85028a79a859a9334a3ae15fc95280534d69d6bb9e21f5a0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_88472f6901e87c85028a79a859a9334a3ae15fc95280534d69d6bb9e21f5a0cd->leave($__internal_88472f6901e87c85028a79a859a9334a3ae15fc95280534d69d6bb9e21f5a0cd_prof);

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
