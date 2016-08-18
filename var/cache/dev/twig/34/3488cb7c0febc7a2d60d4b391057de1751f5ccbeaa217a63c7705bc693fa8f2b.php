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
        $__internal_2b8b59838938a0f1d75f1e7af63cf5cc93414cd6f4ffdad91d81bbbaa7f3b027 = $this->env->getExtension("native_profiler");
        $__internal_2b8b59838938a0f1d75f1e7af63cf5cc93414cd6f4ffdad91d81bbbaa7f3b027->enter($__internal_2b8b59838938a0f1d75f1e7af63cf5cc93414cd6f4ffdad91d81bbbaa7f3b027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b8b59838938a0f1d75f1e7af63cf5cc93414cd6f4ffdad91d81bbbaa7f3b027->leave($__internal_2b8b59838938a0f1d75f1e7af63cf5cc93414cd6f4ffdad91d81bbbaa7f3b027_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b41a5f29ef75078c8e10a4cc46158c79364c703b6d000c439d30815498080c0 = $this->env->getExtension("native_profiler");
        $__internal_0b41a5f29ef75078c8e10a4cc46158c79364c703b6d000c439d30815498080c0->enter($__internal_0b41a5f29ef75078c8e10a4cc46158c79364c703b6d000c439d30815498080c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0b41a5f29ef75078c8e10a4cc46158c79364c703b6d000c439d30815498080c0->leave($__internal_0b41a5f29ef75078c8e10a4cc46158c79364c703b6d000c439d30815498080c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ac6dcf57aa8bd1d7d62e04a2e2d3a48e9495f12b7f78b4a17c2fc0a8a0f5639 = $this->env->getExtension("native_profiler");
        $__internal_7ac6dcf57aa8bd1d7d62e04a2e2d3a48e9495f12b7f78b4a17c2fc0a8a0f5639->enter($__internal_7ac6dcf57aa8bd1d7d62e04a2e2d3a48e9495f12b7f78b4a17c2fc0a8a0f5639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7ac6dcf57aa8bd1d7d62e04a2e2d3a48e9495f12b7f78b4a17c2fc0a8a0f5639->leave($__internal_7ac6dcf57aa8bd1d7d62e04a2e2d3a48e9495f12b7f78b4a17c2fc0a8a0f5639_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_85ce31bf85c6c56ead82e5f5b90c70878e31290cc5de8a40ddae2ea181738673 = $this->env->getExtension("native_profiler");
        $__internal_85ce31bf85c6c56ead82e5f5b90c70878e31290cc5de8a40ddae2ea181738673->enter($__internal_85ce31bf85c6c56ead82e5f5b90c70878e31290cc5de8a40ddae2ea181738673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_85ce31bf85c6c56ead82e5f5b90c70878e31290cc5de8a40ddae2ea181738673->leave($__internal_85ce31bf85c6c56ead82e5f5b90c70878e31290cc5de8a40ddae2ea181738673_prof);

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
