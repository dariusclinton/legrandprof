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
        $__internal_d803acaa0de5b1d39a326c4eaa748abee301e57a9b680cb6453d2b4a21e4b31f = $this->env->getExtension("native_profiler");
        $__internal_d803acaa0de5b1d39a326c4eaa748abee301e57a9b680cb6453d2b4a21e4b31f->enter($__internal_d803acaa0de5b1d39a326c4eaa748abee301e57a9b680cb6453d2b4a21e4b31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d803acaa0de5b1d39a326c4eaa748abee301e57a9b680cb6453d2b4a21e4b31f->leave($__internal_d803acaa0de5b1d39a326c4eaa748abee301e57a9b680cb6453d2b4a21e4b31f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20e0e5bc3a94ea2782ce055598f30a77842b0a853d51c42a3733012549513e90 = $this->env->getExtension("native_profiler");
        $__internal_20e0e5bc3a94ea2782ce055598f30a77842b0a853d51c42a3733012549513e90->enter($__internal_20e0e5bc3a94ea2782ce055598f30a77842b0a853d51c42a3733012549513e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_20e0e5bc3a94ea2782ce055598f30a77842b0a853d51c42a3733012549513e90->leave($__internal_20e0e5bc3a94ea2782ce055598f30a77842b0a853d51c42a3733012549513e90_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e67ab47ea75c1344607d8ce3d58624be83c2c3729f817725aa140c7a563b2aa6 = $this->env->getExtension("native_profiler");
        $__internal_e67ab47ea75c1344607d8ce3d58624be83c2c3729f817725aa140c7a563b2aa6->enter($__internal_e67ab47ea75c1344607d8ce3d58624be83c2c3729f817725aa140c7a563b2aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e67ab47ea75c1344607d8ce3d58624be83c2c3729f817725aa140c7a563b2aa6->leave($__internal_e67ab47ea75c1344607d8ce3d58624be83c2c3729f817725aa140c7a563b2aa6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0b4881709789a3f88ba41e3cc719f1964e7186a5669cf52dcfb729ffa358342 = $this->env->getExtension("native_profiler");
        $__internal_a0b4881709789a3f88ba41e3cc719f1964e7186a5669cf52dcfb729ffa358342->enter($__internal_a0b4881709789a3f88ba41e3cc719f1964e7186a5669cf52dcfb729ffa358342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a0b4881709789a3f88ba41e3cc719f1964e7186a5669cf52dcfb729ffa358342->leave($__internal_a0b4881709789a3f88ba41e3cc719f1964e7186a5669cf52dcfb729ffa358342_prof);

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
