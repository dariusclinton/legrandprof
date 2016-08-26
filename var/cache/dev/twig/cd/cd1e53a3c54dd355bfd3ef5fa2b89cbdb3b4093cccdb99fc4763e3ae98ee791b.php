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
        $__internal_570cc51d0e9fafaa1702d27cbedd825d95ae803ea316c554b830d79bf1a3b06c = $this->env->getExtension("native_profiler");
        $__internal_570cc51d0e9fafaa1702d27cbedd825d95ae803ea316c554b830d79bf1a3b06c->enter($__internal_570cc51d0e9fafaa1702d27cbedd825d95ae803ea316c554b830d79bf1a3b06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_570cc51d0e9fafaa1702d27cbedd825d95ae803ea316c554b830d79bf1a3b06c->leave($__internal_570cc51d0e9fafaa1702d27cbedd825d95ae803ea316c554b830d79bf1a3b06c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b7a75156bae6975e4290c029aa8adec818cf74fd873d478b3c08082c22e0b78 = $this->env->getExtension("native_profiler");
        $__internal_5b7a75156bae6975e4290c029aa8adec818cf74fd873d478b3c08082c22e0b78->enter($__internal_5b7a75156bae6975e4290c029aa8adec818cf74fd873d478b3c08082c22e0b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5b7a75156bae6975e4290c029aa8adec818cf74fd873d478b3c08082c22e0b78->leave($__internal_5b7a75156bae6975e4290c029aa8adec818cf74fd873d478b3c08082c22e0b78_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0398b91ca879debb8e5648295c3054ad394c1dbef7b6c6e0ed45a45e4cfe0bbf = $this->env->getExtension("native_profiler");
        $__internal_0398b91ca879debb8e5648295c3054ad394c1dbef7b6c6e0ed45a45e4cfe0bbf->enter($__internal_0398b91ca879debb8e5648295c3054ad394c1dbef7b6c6e0ed45a45e4cfe0bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0398b91ca879debb8e5648295c3054ad394c1dbef7b6c6e0ed45a45e4cfe0bbf->leave($__internal_0398b91ca879debb8e5648295c3054ad394c1dbef7b6c6e0ed45a45e4cfe0bbf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_51a8a14b875d8ca241f57ea7b47923d34083dac5d9fcbf5ec73a53871ab4fb80 = $this->env->getExtension("native_profiler");
        $__internal_51a8a14b875d8ca241f57ea7b47923d34083dac5d9fcbf5ec73a53871ab4fb80->enter($__internal_51a8a14b875d8ca241f57ea7b47923d34083dac5d9fcbf5ec73a53871ab4fb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_51a8a14b875d8ca241f57ea7b47923d34083dac5d9fcbf5ec73a53871ab4fb80->leave($__internal_51a8a14b875d8ca241f57ea7b47923d34083dac5d9fcbf5ec73a53871ab4fb80_prof);

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
