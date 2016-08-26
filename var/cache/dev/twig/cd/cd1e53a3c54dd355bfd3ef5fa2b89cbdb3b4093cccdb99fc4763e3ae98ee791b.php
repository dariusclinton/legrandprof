<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_45656b21e02fa37b5829467f39206d847fe0e5aa3f1a8baaff385aabd815b134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_f6d059e794bc5edc80053f66440d402b88d920d513ed8ffd529c633199e4e3e2 = $this->env->getExtension("native_profiler");
        $__internal_f6d059e794bc5edc80053f66440d402b88d920d513ed8ffd529c633199e4e3e2->enter($__internal_f6d059e794bc5edc80053f66440d402b88d920d513ed8ffd529c633199e4e3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6d059e794bc5edc80053f66440d402b88d920d513ed8ffd529c633199e4e3e2->leave($__internal_f6d059e794bc5edc80053f66440d402b88d920d513ed8ffd529c633199e4e3e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4fb93856f3bd5f6006777c28c70165a2cfe5ef8183ee90150dfee1900390e4fc = $this->env->getExtension("native_profiler");
        $__internal_4fb93856f3bd5f6006777c28c70165a2cfe5ef8183ee90150dfee1900390e4fc->enter($__internal_4fb93856f3bd5f6006777c28c70165a2cfe5ef8183ee90150dfee1900390e4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4fb93856f3bd5f6006777c28c70165a2cfe5ef8183ee90150dfee1900390e4fc->leave($__internal_4fb93856f3bd5f6006777c28c70165a2cfe5ef8183ee90150dfee1900390e4fc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_57e7f7cb851e6a1762ba13c2777157c2653a8e60c793bad8b9095d7d7fe6bfd6 = $this->env->getExtension("native_profiler");
        $__internal_57e7f7cb851e6a1762ba13c2777157c2653a8e60c793bad8b9095d7d7fe6bfd6->enter($__internal_57e7f7cb851e6a1762ba13c2777157c2653a8e60c793bad8b9095d7d7fe6bfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_57e7f7cb851e6a1762ba13c2777157c2653a8e60c793bad8b9095d7d7fe6bfd6->leave($__internal_57e7f7cb851e6a1762ba13c2777157c2653a8e60c793bad8b9095d7d7fe6bfd6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a85fa352e36b327ec527baa898b44b21e1c82ea246332e4281380320b9576aad = $this->env->getExtension("native_profiler");
        $__internal_a85fa352e36b327ec527baa898b44b21e1c82ea246332e4281380320b9576aad->enter($__internal_a85fa352e36b327ec527baa898b44b21e1c82ea246332e4281380320b9576aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a85fa352e36b327ec527baa898b44b21e1c82ea246332e4281380320b9576aad->leave($__internal_a85fa352e36b327ec527baa898b44b21e1c82ea246332e4281380320b9576aad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
