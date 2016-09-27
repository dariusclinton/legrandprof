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
        $__internal_528cb1f54ade47b926a96ae517089e6c996e5b6b890e82e1609beb813723792a = $this->env->getExtension("native_profiler");
        $__internal_528cb1f54ade47b926a96ae517089e6c996e5b6b890e82e1609beb813723792a->enter($__internal_528cb1f54ade47b926a96ae517089e6c996e5b6b890e82e1609beb813723792a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_528cb1f54ade47b926a96ae517089e6c996e5b6b890e82e1609beb813723792a->leave($__internal_528cb1f54ade47b926a96ae517089e6c996e5b6b890e82e1609beb813723792a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0919a5c2dfa50fd0d5f6e934adf9bb9fdcfddd5d45ae9c6688ddf4bda72c53e4 = $this->env->getExtension("native_profiler");
        $__internal_0919a5c2dfa50fd0d5f6e934adf9bb9fdcfddd5d45ae9c6688ddf4bda72c53e4->enter($__internal_0919a5c2dfa50fd0d5f6e934adf9bb9fdcfddd5d45ae9c6688ddf4bda72c53e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0919a5c2dfa50fd0d5f6e934adf9bb9fdcfddd5d45ae9c6688ddf4bda72c53e4->leave($__internal_0919a5c2dfa50fd0d5f6e934adf9bb9fdcfddd5d45ae9c6688ddf4bda72c53e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7e622b7eb6a37cbe3d012ea779685606718fb89661f92c348fc84a49a89f531 = $this->env->getExtension("native_profiler");
        $__internal_d7e622b7eb6a37cbe3d012ea779685606718fb89661f92c348fc84a49a89f531->enter($__internal_d7e622b7eb6a37cbe3d012ea779685606718fb89661f92c348fc84a49a89f531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d7e622b7eb6a37cbe3d012ea779685606718fb89661f92c348fc84a49a89f531->leave($__internal_d7e622b7eb6a37cbe3d012ea779685606718fb89661f92c348fc84a49a89f531_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb49f6efbc3313e92b61781b82bf6746b651c54e9844bd3e85a8f1c50c250eb7 = $this->env->getExtension("native_profiler");
        $__internal_cb49f6efbc3313e92b61781b82bf6746b651c54e9844bd3e85a8f1c50c250eb7->enter($__internal_cb49f6efbc3313e92b61781b82bf6746b651c54e9844bd3e85a8f1c50c250eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cb49f6efbc3313e92b61781b82bf6746b651c54e9844bd3e85a8f1c50c250eb7->leave($__internal_cb49f6efbc3313e92b61781b82bf6746b651c54e9844bd3e85a8f1c50c250eb7_prof);

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
