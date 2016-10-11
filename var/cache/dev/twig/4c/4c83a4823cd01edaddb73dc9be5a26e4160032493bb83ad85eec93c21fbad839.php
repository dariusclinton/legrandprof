<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3ef93532d91729998b6ad105b8b1910dccd9deb93c6d57f5c15943077c5dac20 extends Twig_Template
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
        $__internal_ef41e43e6fabf882e1bc39b147d9332bd694d88cc06da5790124a1d6a03a4bf9 = $this->env->getExtension("native_profiler");
        $__internal_ef41e43e6fabf882e1bc39b147d9332bd694d88cc06da5790124a1d6a03a4bf9->enter($__internal_ef41e43e6fabf882e1bc39b147d9332bd694d88cc06da5790124a1d6a03a4bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef41e43e6fabf882e1bc39b147d9332bd694d88cc06da5790124a1d6a03a4bf9->leave($__internal_ef41e43e6fabf882e1bc39b147d9332bd694d88cc06da5790124a1d6a03a4bf9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bd888d7273b1eed6ba8b19d52bdaf0b2f025c564d60d7b175980ddd52a8bd54 = $this->env->getExtension("native_profiler");
        $__internal_4bd888d7273b1eed6ba8b19d52bdaf0b2f025c564d60d7b175980ddd52a8bd54->enter($__internal_4bd888d7273b1eed6ba8b19d52bdaf0b2f025c564d60d7b175980ddd52a8bd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4bd888d7273b1eed6ba8b19d52bdaf0b2f025c564d60d7b175980ddd52a8bd54->leave($__internal_4bd888d7273b1eed6ba8b19d52bdaf0b2f025c564d60d7b175980ddd52a8bd54_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_90806d5ce6f1f86674375663e25371c69acbfe327ff77b8bd25021712454a2f1 = $this->env->getExtension("native_profiler");
        $__internal_90806d5ce6f1f86674375663e25371c69acbfe327ff77b8bd25021712454a2f1->enter($__internal_90806d5ce6f1f86674375663e25371c69acbfe327ff77b8bd25021712454a2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_90806d5ce6f1f86674375663e25371c69acbfe327ff77b8bd25021712454a2f1->leave($__internal_90806d5ce6f1f86674375663e25371c69acbfe327ff77b8bd25021712454a2f1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_95146e7fdde6ece81214b347c756188f8b992995a0ed2c3182b80bcdd78a5ebd = $this->env->getExtension("native_profiler");
        $__internal_95146e7fdde6ece81214b347c756188f8b992995a0ed2c3182b80bcdd78a5ebd->enter($__internal_95146e7fdde6ece81214b347c756188f8b992995a0ed2c3182b80bcdd78a5ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_95146e7fdde6ece81214b347c756188f8b992995a0ed2c3182b80bcdd78a5ebd->leave($__internal_95146e7fdde6ece81214b347c756188f8b992995a0ed2c3182b80bcdd78a5ebd_prof);

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

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
