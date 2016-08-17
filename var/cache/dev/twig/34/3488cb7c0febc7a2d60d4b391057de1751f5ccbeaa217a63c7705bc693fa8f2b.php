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
        $__internal_3e0b3595f924f86daff63c81b50863cdd2962b2c18d75a1b4a3404a8d7ccc133 = $this->env->getExtension("native_profiler");
        $__internal_3e0b3595f924f86daff63c81b50863cdd2962b2c18d75a1b4a3404a8d7ccc133->enter($__internal_3e0b3595f924f86daff63c81b50863cdd2962b2c18d75a1b4a3404a8d7ccc133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e0b3595f924f86daff63c81b50863cdd2962b2c18d75a1b4a3404a8d7ccc133->leave($__internal_3e0b3595f924f86daff63c81b50863cdd2962b2c18d75a1b4a3404a8d7ccc133_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df23f6929c6e053c2d83ce93e69c6b3a8c63ca3cc6ac3d0a48bb9d919a0f3d44 = $this->env->getExtension("native_profiler");
        $__internal_df23f6929c6e053c2d83ce93e69c6b3a8c63ca3cc6ac3d0a48bb9d919a0f3d44->enter($__internal_df23f6929c6e053c2d83ce93e69c6b3a8c63ca3cc6ac3d0a48bb9d919a0f3d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_df23f6929c6e053c2d83ce93e69c6b3a8c63ca3cc6ac3d0a48bb9d919a0f3d44->leave($__internal_df23f6929c6e053c2d83ce93e69c6b3a8c63ca3cc6ac3d0a48bb9d919a0f3d44_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f88b5e26c74aa4ec3b97678cd1a298f3078ad9c787fda87b9c28a7ab2799d0fe = $this->env->getExtension("native_profiler");
        $__internal_f88b5e26c74aa4ec3b97678cd1a298f3078ad9c787fda87b9c28a7ab2799d0fe->enter($__internal_f88b5e26c74aa4ec3b97678cd1a298f3078ad9c787fda87b9c28a7ab2799d0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f88b5e26c74aa4ec3b97678cd1a298f3078ad9c787fda87b9c28a7ab2799d0fe->leave($__internal_f88b5e26c74aa4ec3b97678cd1a298f3078ad9c787fda87b9c28a7ab2799d0fe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_efea59ec35b8cef69f58baf0d5e5738effae6a6e13c94d66e82929b5616c82ef = $this->env->getExtension("native_profiler");
        $__internal_efea59ec35b8cef69f58baf0d5e5738effae6a6e13c94d66e82929b5616c82ef->enter($__internal_efea59ec35b8cef69f58baf0d5e5738effae6a6e13c94d66e82929b5616c82ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_efea59ec35b8cef69f58baf0d5e5738effae6a6e13c94d66e82929b5616c82ef->leave($__internal_efea59ec35b8cef69f58baf0d5e5738effae6a6e13c94d66e82929b5616c82ef_prof);

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
