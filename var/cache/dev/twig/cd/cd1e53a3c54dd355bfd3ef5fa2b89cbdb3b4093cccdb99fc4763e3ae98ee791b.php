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
        $__internal_490449e5002163920b933e8b6a1cd20cc8ac0cb804fad75c2566ddd77849c645 = $this->env->getExtension("native_profiler");
        $__internal_490449e5002163920b933e8b6a1cd20cc8ac0cb804fad75c2566ddd77849c645->enter($__internal_490449e5002163920b933e8b6a1cd20cc8ac0cb804fad75c2566ddd77849c645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_490449e5002163920b933e8b6a1cd20cc8ac0cb804fad75c2566ddd77849c645->leave($__internal_490449e5002163920b933e8b6a1cd20cc8ac0cb804fad75c2566ddd77849c645_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6a2cd33ba2f6f6461333a18bb2b378a648c1ca3f0e44dc1499c0e0194a2ec35 = $this->env->getExtension("native_profiler");
        $__internal_f6a2cd33ba2f6f6461333a18bb2b378a648c1ca3f0e44dc1499c0e0194a2ec35->enter($__internal_f6a2cd33ba2f6f6461333a18bb2b378a648c1ca3f0e44dc1499c0e0194a2ec35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f6a2cd33ba2f6f6461333a18bb2b378a648c1ca3f0e44dc1499c0e0194a2ec35->leave($__internal_f6a2cd33ba2f6f6461333a18bb2b378a648c1ca3f0e44dc1499c0e0194a2ec35_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d82dc45cd12dd4c49351ffa9574bb4062d8c8a318947205e304e158e1dc4a4f = $this->env->getExtension("native_profiler");
        $__internal_9d82dc45cd12dd4c49351ffa9574bb4062d8c8a318947205e304e158e1dc4a4f->enter($__internal_9d82dc45cd12dd4c49351ffa9574bb4062d8c8a318947205e304e158e1dc4a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9d82dc45cd12dd4c49351ffa9574bb4062d8c8a318947205e304e158e1dc4a4f->leave($__internal_9d82dc45cd12dd4c49351ffa9574bb4062d8c8a318947205e304e158e1dc4a4f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d68e85c162d5339dbdbfbbfa516bc66a4451db6d1ed7b3f8519671b55482d667 = $this->env->getExtension("native_profiler");
        $__internal_d68e85c162d5339dbdbfbbfa516bc66a4451db6d1ed7b3f8519671b55482d667->enter($__internal_d68e85c162d5339dbdbfbbfa516bc66a4451db6d1ed7b3f8519671b55482d667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d68e85c162d5339dbdbfbbfa516bc66a4451db6d1ed7b3f8519671b55482d667->leave($__internal_d68e85c162d5339dbdbfbbfa516bc66a4451db6d1ed7b3f8519671b55482d667_prof);

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
