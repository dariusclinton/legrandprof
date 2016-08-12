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
        $__internal_761c1d332dfc08bab0338601cd927333b76ea25339de16247845c861c6e4035b = $this->env->getExtension("native_profiler");
        $__internal_761c1d332dfc08bab0338601cd927333b76ea25339de16247845c861c6e4035b->enter($__internal_761c1d332dfc08bab0338601cd927333b76ea25339de16247845c861c6e4035b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_761c1d332dfc08bab0338601cd927333b76ea25339de16247845c861c6e4035b->leave($__internal_761c1d332dfc08bab0338601cd927333b76ea25339de16247845c861c6e4035b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_138e3becac6c19f449c4da0de564ccc0499e483d8f961dedddbd54a5446681d0 = $this->env->getExtension("native_profiler");
        $__internal_138e3becac6c19f449c4da0de564ccc0499e483d8f961dedddbd54a5446681d0->enter($__internal_138e3becac6c19f449c4da0de564ccc0499e483d8f961dedddbd54a5446681d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_138e3becac6c19f449c4da0de564ccc0499e483d8f961dedddbd54a5446681d0->leave($__internal_138e3becac6c19f449c4da0de564ccc0499e483d8f961dedddbd54a5446681d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16dd385e73a881ddc43a0dc935edb0aab2bfe273366f5c533fa713a1394a9eb1 = $this->env->getExtension("native_profiler");
        $__internal_16dd385e73a881ddc43a0dc935edb0aab2bfe273366f5c533fa713a1394a9eb1->enter($__internal_16dd385e73a881ddc43a0dc935edb0aab2bfe273366f5c533fa713a1394a9eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_16dd385e73a881ddc43a0dc935edb0aab2bfe273366f5c533fa713a1394a9eb1->leave($__internal_16dd385e73a881ddc43a0dc935edb0aab2bfe273366f5c533fa713a1394a9eb1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a1d459855c817a18b7cc19b34f5ffbb9b9f7580b728d5a88851e0bb064996ea = $this->env->getExtension("native_profiler");
        $__internal_4a1d459855c817a18b7cc19b34f5ffbb9b9f7580b728d5a88851e0bb064996ea->enter($__internal_4a1d459855c817a18b7cc19b34f5ffbb9b9f7580b728d5a88851e0bb064996ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4a1d459855c817a18b7cc19b34f5ffbb9b9f7580b728d5a88851e0bb064996ea->leave($__internal_4a1d459855c817a18b7cc19b34f5ffbb9b9f7580b728d5a88851e0bb064996ea_prof);

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
