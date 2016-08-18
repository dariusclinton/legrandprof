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
        $__internal_4e5da5a96845311536482229b24ab196670f59fe1c89858168cd02147e8df1b3 = $this->env->getExtension("native_profiler");
        $__internal_4e5da5a96845311536482229b24ab196670f59fe1c89858168cd02147e8df1b3->enter($__internal_4e5da5a96845311536482229b24ab196670f59fe1c89858168cd02147e8df1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e5da5a96845311536482229b24ab196670f59fe1c89858168cd02147e8df1b3->leave($__internal_4e5da5a96845311536482229b24ab196670f59fe1c89858168cd02147e8df1b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03df7f30d855fbe749d01c9f77669f1c9d6b64bdef48bea2716679a157e77e03 = $this->env->getExtension("native_profiler");
        $__internal_03df7f30d855fbe749d01c9f77669f1c9d6b64bdef48bea2716679a157e77e03->enter($__internal_03df7f30d855fbe749d01c9f77669f1c9d6b64bdef48bea2716679a157e77e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_03df7f30d855fbe749d01c9f77669f1c9d6b64bdef48bea2716679a157e77e03->leave($__internal_03df7f30d855fbe749d01c9f77669f1c9d6b64bdef48bea2716679a157e77e03_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_425e557a6d9180cb539ccc8aba6c529cb23f942f76b727cbfe36d0ec26fb5534 = $this->env->getExtension("native_profiler");
        $__internal_425e557a6d9180cb539ccc8aba6c529cb23f942f76b727cbfe36d0ec26fb5534->enter($__internal_425e557a6d9180cb539ccc8aba6c529cb23f942f76b727cbfe36d0ec26fb5534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_425e557a6d9180cb539ccc8aba6c529cb23f942f76b727cbfe36d0ec26fb5534->leave($__internal_425e557a6d9180cb539ccc8aba6c529cb23f942f76b727cbfe36d0ec26fb5534_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1a95b2da6140de7d7f85c40b9ada9889af3f308308c51d32d919e79d20c55cf = $this->env->getExtension("native_profiler");
        $__internal_e1a95b2da6140de7d7f85c40b9ada9889af3f308308c51d32d919e79d20c55cf->enter($__internal_e1a95b2da6140de7d7f85c40b9ada9889af3f308308c51d32d919e79d20c55cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e1a95b2da6140de7d7f85c40b9ada9889af3f308308c51d32d919e79d20c55cf->leave($__internal_e1a95b2da6140de7d7f85c40b9ada9889af3f308308c51d32d919e79d20c55cf_prof);

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
