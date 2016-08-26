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
        $__internal_3647e81d8cca259a83f735dc7427fcdb03ab66f54a4d0d2b263d0e660789c945 = $this->env->getExtension("native_profiler");
        $__internal_3647e81d8cca259a83f735dc7427fcdb03ab66f54a4d0d2b263d0e660789c945->enter($__internal_3647e81d8cca259a83f735dc7427fcdb03ab66f54a4d0d2b263d0e660789c945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3647e81d8cca259a83f735dc7427fcdb03ab66f54a4d0d2b263d0e660789c945->leave($__internal_3647e81d8cca259a83f735dc7427fcdb03ab66f54a4d0d2b263d0e660789c945_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c18196555b60dd556a7a761040d0e14844189741fbf5d8a1bf8519409bdc70b6 = $this->env->getExtension("native_profiler");
        $__internal_c18196555b60dd556a7a761040d0e14844189741fbf5d8a1bf8519409bdc70b6->enter($__internal_c18196555b60dd556a7a761040d0e14844189741fbf5d8a1bf8519409bdc70b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c18196555b60dd556a7a761040d0e14844189741fbf5d8a1bf8519409bdc70b6->leave($__internal_c18196555b60dd556a7a761040d0e14844189741fbf5d8a1bf8519409bdc70b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcda7b6025ba8a8bc44386d86df0d9bdfc4fb0c2fbdfa7ba8fd0c8aa1d00497c = $this->env->getExtension("native_profiler");
        $__internal_dcda7b6025ba8a8bc44386d86df0d9bdfc4fb0c2fbdfa7ba8fd0c8aa1d00497c->enter($__internal_dcda7b6025ba8a8bc44386d86df0d9bdfc4fb0c2fbdfa7ba8fd0c8aa1d00497c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dcda7b6025ba8a8bc44386d86df0d9bdfc4fb0c2fbdfa7ba8fd0c8aa1d00497c->leave($__internal_dcda7b6025ba8a8bc44386d86df0d9bdfc4fb0c2fbdfa7ba8fd0c8aa1d00497c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_94f83d4587dd54369388b033d3c7765399ec72672bb6d7d20ab64ff2d0b1945e = $this->env->getExtension("native_profiler");
        $__internal_94f83d4587dd54369388b033d3c7765399ec72672bb6d7d20ab64ff2d0b1945e->enter($__internal_94f83d4587dd54369388b033d3c7765399ec72672bb6d7d20ab64ff2d0b1945e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_94f83d4587dd54369388b033d3c7765399ec72672bb6d7d20ab64ff2d0b1945e->leave($__internal_94f83d4587dd54369388b033d3c7765399ec72672bb6d7d20ab64ff2d0b1945e_prof);

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
