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
        $__internal_32a76426733c8823eafcff70d6f4bbe674fec7ee87d4a2ac977469594fed69c6 = $this->env->getExtension("native_profiler");
        $__internal_32a76426733c8823eafcff70d6f4bbe674fec7ee87d4a2ac977469594fed69c6->enter($__internal_32a76426733c8823eafcff70d6f4bbe674fec7ee87d4a2ac977469594fed69c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32a76426733c8823eafcff70d6f4bbe674fec7ee87d4a2ac977469594fed69c6->leave($__internal_32a76426733c8823eafcff70d6f4bbe674fec7ee87d4a2ac977469594fed69c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_671bdebebcf8fe3aa79db877fe51565b3d8128e164db9a93b0d4076ced7767b1 = $this->env->getExtension("native_profiler");
        $__internal_671bdebebcf8fe3aa79db877fe51565b3d8128e164db9a93b0d4076ced7767b1->enter($__internal_671bdebebcf8fe3aa79db877fe51565b3d8128e164db9a93b0d4076ced7767b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_671bdebebcf8fe3aa79db877fe51565b3d8128e164db9a93b0d4076ced7767b1->leave($__internal_671bdebebcf8fe3aa79db877fe51565b3d8128e164db9a93b0d4076ced7767b1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bea334e8f43c62278b046bb72515a3f7be548536c3f340a2d86227085dc232e = $this->env->getExtension("native_profiler");
        $__internal_2bea334e8f43c62278b046bb72515a3f7be548536c3f340a2d86227085dc232e->enter($__internal_2bea334e8f43c62278b046bb72515a3f7be548536c3f340a2d86227085dc232e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2bea334e8f43c62278b046bb72515a3f7be548536c3f340a2d86227085dc232e->leave($__internal_2bea334e8f43c62278b046bb72515a3f7be548536c3f340a2d86227085dc232e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbd8b21b45a87a93defdb6f36aeb3f1790e94ba31793e547d8b79494f0a83eb9 = $this->env->getExtension("native_profiler");
        $__internal_cbd8b21b45a87a93defdb6f36aeb3f1790e94ba31793e547d8b79494f0a83eb9->enter($__internal_cbd8b21b45a87a93defdb6f36aeb3f1790e94ba31793e547d8b79494f0a83eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cbd8b21b45a87a93defdb6f36aeb3f1790e94ba31793e547d8b79494f0a83eb9->leave($__internal_cbd8b21b45a87a93defdb6f36aeb3f1790e94ba31793e547d8b79494f0a83eb9_prof);

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
