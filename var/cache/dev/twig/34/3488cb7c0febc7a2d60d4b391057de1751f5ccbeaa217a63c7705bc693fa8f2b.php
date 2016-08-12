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
        $__internal_dbe998f93c753368694da28654667de8350894f595b9b531f84114ad6b09c70a = $this->env->getExtension("native_profiler");
        $__internal_dbe998f93c753368694da28654667de8350894f595b9b531f84114ad6b09c70a->enter($__internal_dbe998f93c753368694da28654667de8350894f595b9b531f84114ad6b09c70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbe998f93c753368694da28654667de8350894f595b9b531f84114ad6b09c70a->leave($__internal_dbe998f93c753368694da28654667de8350894f595b9b531f84114ad6b09c70a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff79d01727d675a157196fb504423f972fa932f4bd9407039b0e0215e908272d = $this->env->getExtension("native_profiler");
        $__internal_ff79d01727d675a157196fb504423f972fa932f4bd9407039b0e0215e908272d->enter($__internal_ff79d01727d675a157196fb504423f972fa932f4bd9407039b0e0215e908272d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ff79d01727d675a157196fb504423f972fa932f4bd9407039b0e0215e908272d->leave($__internal_ff79d01727d675a157196fb504423f972fa932f4bd9407039b0e0215e908272d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7fd68071f384548262d522cedb070a7f5b9c01dccce42c8cce8d00cf20ad673 = $this->env->getExtension("native_profiler");
        $__internal_e7fd68071f384548262d522cedb070a7f5b9c01dccce42c8cce8d00cf20ad673->enter($__internal_e7fd68071f384548262d522cedb070a7f5b9c01dccce42c8cce8d00cf20ad673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e7fd68071f384548262d522cedb070a7f5b9c01dccce42c8cce8d00cf20ad673->leave($__internal_e7fd68071f384548262d522cedb070a7f5b9c01dccce42c8cce8d00cf20ad673_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1074a5824431a5b8bab8dd962da95bce8e6a84061c8f0d9fe0ea8ef0bab3df18 = $this->env->getExtension("native_profiler");
        $__internal_1074a5824431a5b8bab8dd962da95bce8e6a84061c8f0d9fe0ea8ef0bab3df18->enter($__internal_1074a5824431a5b8bab8dd962da95bce8e6a84061c8f0d9fe0ea8ef0bab3df18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1074a5824431a5b8bab8dd962da95bce8e6a84061c8f0d9fe0ea8ef0bab3df18->leave($__internal_1074a5824431a5b8bab8dd962da95bce8e6a84061c8f0d9fe0ea8ef0bab3df18_prof);

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
