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
        $__internal_2b5251c6c7f48561cb329be8451c1cc3852eed746a2fca0bb0ae857a1b6bc3f1 = $this->env->getExtension("native_profiler");
        $__internal_2b5251c6c7f48561cb329be8451c1cc3852eed746a2fca0bb0ae857a1b6bc3f1->enter($__internal_2b5251c6c7f48561cb329be8451c1cc3852eed746a2fca0bb0ae857a1b6bc3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b5251c6c7f48561cb329be8451c1cc3852eed746a2fca0bb0ae857a1b6bc3f1->leave($__internal_2b5251c6c7f48561cb329be8451c1cc3852eed746a2fca0bb0ae857a1b6bc3f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e327144ae112676ff915b84eef3006e0d18bc3b6e1f24e9d645a22bb6a38c8b7 = $this->env->getExtension("native_profiler");
        $__internal_e327144ae112676ff915b84eef3006e0d18bc3b6e1f24e9d645a22bb6a38c8b7->enter($__internal_e327144ae112676ff915b84eef3006e0d18bc3b6e1f24e9d645a22bb6a38c8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e327144ae112676ff915b84eef3006e0d18bc3b6e1f24e9d645a22bb6a38c8b7->leave($__internal_e327144ae112676ff915b84eef3006e0d18bc3b6e1f24e9d645a22bb6a38c8b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a54e18fc5c408ccfc9c37a7fc649a680ea5520c39f86e314b4dd6f96753e7e28 = $this->env->getExtension("native_profiler");
        $__internal_a54e18fc5c408ccfc9c37a7fc649a680ea5520c39f86e314b4dd6f96753e7e28->enter($__internal_a54e18fc5c408ccfc9c37a7fc649a680ea5520c39f86e314b4dd6f96753e7e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a54e18fc5c408ccfc9c37a7fc649a680ea5520c39f86e314b4dd6f96753e7e28->leave($__internal_a54e18fc5c408ccfc9c37a7fc649a680ea5520c39f86e314b4dd6f96753e7e28_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba244c6ed520e97a62a1a6dcfce092af8fe036d04e6bce3ce2bac92d41e484e2 = $this->env->getExtension("native_profiler");
        $__internal_ba244c6ed520e97a62a1a6dcfce092af8fe036d04e6bce3ce2bac92d41e484e2->enter($__internal_ba244c6ed520e97a62a1a6dcfce092af8fe036d04e6bce3ce2bac92d41e484e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ba244c6ed520e97a62a1a6dcfce092af8fe036d04e6bce3ce2bac92d41e484e2->leave($__internal_ba244c6ed520e97a62a1a6dcfce092af8fe036d04e6bce3ce2bac92d41e484e2_prof);

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
