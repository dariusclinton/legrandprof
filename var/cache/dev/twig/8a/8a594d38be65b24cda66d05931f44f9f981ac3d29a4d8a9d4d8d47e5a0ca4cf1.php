<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_084d9869f06e9265f2fc66e7ea1ea902d98247baa65de4650128bb7c254e34bc extends Twig_Template
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
        $__internal_b84346f839f9fadd0378e35f25fecc77d8889976f3be81607958bd7a4fc76e6a = $this->env->getExtension("native_profiler");
        $__internal_b84346f839f9fadd0378e35f25fecc77d8889976f3be81607958bd7a4fc76e6a->enter($__internal_b84346f839f9fadd0378e35f25fecc77d8889976f3be81607958bd7a4fc76e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b84346f839f9fadd0378e35f25fecc77d8889976f3be81607958bd7a4fc76e6a->leave($__internal_b84346f839f9fadd0378e35f25fecc77d8889976f3be81607958bd7a4fc76e6a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5bd525964eb6da90a9593457680fde25f020581a70b36866924f9c78cb1f8844 = $this->env->getExtension("native_profiler");
        $__internal_5bd525964eb6da90a9593457680fde25f020581a70b36866924f9c78cb1f8844->enter($__internal_5bd525964eb6da90a9593457680fde25f020581a70b36866924f9c78cb1f8844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5bd525964eb6da90a9593457680fde25f020581a70b36866924f9c78cb1f8844->leave($__internal_5bd525964eb6da90a9593457680fde25f020581a70b36866924f9c78cb1f8844_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eefbc7f9c61ef30bebe2da00da31ad3e98a6ede1efcadf16d81b838c4f819857 = $this->env->getExtension("native_profiler");
        $__internal_eefbc7f9c61ef30bebe2da00da31ad3e98a6ede1efcadf16d81b838c4f819857->enter($__internal_eefbc7f9c61ef30bebe2da00da31ad3e98a6ede1efcadf16d81b838c4f819857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eefbc7f9c61ef30bebe2da00da31ad3e98a6ede1efcadf16d81b838c4f819857->leave($__internal_eefbc7f9c61ef30bebe2da00da31ad3e98a6ede1efcadf16d81b838c4f819857_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca7ccb09902aa07d760dfccd1a514f7369edff9468ef52e3a5ecbae11cfdc2b4 = $this->env->getExtension("native_profiler");
        $__internal_ca7ccb09902aa07d760dfccd1a514f7369edff9468ef52e3a5ecbae11cfdc2b4->enter($__internal_ca7ccb09902aa07d760dfccd1a514f7369edff9468ef52e3a5ecbae11cfdc2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ca7ccb09902aa07d760dfccd1a514f7369edff9468ef52e3a5ecbae11cfdc2b4->leave($__internal_ca7ccb09902aa07d760dfccd1a514f7369edff9468ef52e3a5ecbae11cfdc2b4_prof);

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
