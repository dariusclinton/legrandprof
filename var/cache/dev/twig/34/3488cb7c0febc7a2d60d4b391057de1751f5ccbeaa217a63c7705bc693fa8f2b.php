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
        $__internal_b001f476d903e09a4fe783f23f3d7cc4824d89482c1538daa404b14ae33657f5 = $this->env->getExtension("native_profiler");
        $__internal_b001f476d903e09a4fe783f23f3d7cc4824d89482c1538daa404b14ae33657f5->enter($__internal_b001f476d903e09a4fe783f23f3d7cc4824d89482c1538daa404b14ae33657f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b001f476d903e09a4fe783f23f3d7cc4824d89482c1538daa404b14ae33657f5->leave($__internal_b001f476d903e09a4fe783f23f3d7cc4824d89482c1538daa404b14ae33657f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_faa82c4284baf84881f519b6c7c613b52ec31927aa776a2834483c1a80d6168d = $this->env->getExtension("native_profiler");
        $__internal_faa82c4284baf84881f519b6c7c613b52ec31927aa776a2834483c1a80d6168d->enter($__internal_faa82c4284baf84881f519b6c7c613b52ec31927aa776a2834483c1a80d6168d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_faa82c4284baf84881f519b6c7c613b52ec31927aa776a2834483c1a80d6168d->leave($__internal_faa82c4284baf84881f519b6c7c613b52ec31927aa776a2834483c1a80d6168d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_940b30638bf97ecb13373aa32b95dbc78dc3a156d81d5341c26deaf97cfe1748 = $this->env->getExtension("native_profiler");
        $__internal_940b30638bf97ecb13373aa32b95dbc78dc3a156d81d5341c26deaf97cfe1748->enter($__internal_940b30638bf97ecb13373aa32b95dbc78dc3a156d81d5341c26deaf97cfe1748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_940b30638bf97ecb13373aa32b95dbc78dc3a156d81d5341c26deaf97cfe1748->leave($__internal_940b30638bf97ecb13373aa32b95dbc78dc3a156d81d5341c26deaf97cfe1748_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcab00da447c76e856cf61d03e4a398dc21221806249a3237df53c72dda9c7dd = $this->env->getExtension("native_profiler");
        $__internal_fcab00da447c76e856cf61d03e4a398dc21221806249a3237df53c72dda9c7dd->enter($__internal_fcab00da447c76e856cf61d03e4a398dc21221806249a3237df53c72dda9c7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fcab00da447c76e856cf61d03e4a398dc21221806249a3237df53c72dda9c7dd->leave($__internal_fcab00da447c76e856cf61d03e4a398dc21221806249a3237df53c72dda9c7dd_prof);

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
