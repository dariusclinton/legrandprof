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
        $__internal_008890a12002dfb6cc2f0cc2dc04beb20cc0032ed989c56d4a648f99baa9b5e6 = $this->env->getExtension("native_profiler");
        $__internal_008890a12002dfb6cc2f0cc2dc04beb20cc0032ed989c56d4a648f99baa9b5e6->enter($__internal_008890a12002dfb6cc2f0cc2dc04beb20cc0032ed989c56d4a648f99baa9b5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_008890a12002dfb6cc2f0cc2dc04beb20cc0032ed989c56d4a648f99baa9b5e6->leave($__internal_008890a12002dfb6cc2f0cc2dc04beb20cc0032ed989c56d4a648f99baa9b5e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_312db4722f682d81a9a2dde49289ba0a4296dd9c2e6c374203c31246e89019fb = $this->env->getExtension("native_profiler");
        $__internal_312db4722f682d81a9a2dde49289ba0a4296dd9c2e6c374203c31246e89019fb->enter($__internal_312db4722f682d81a9a2dde49289ba0a4296dd9c2e6c374203c31246e89019fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_312db4722f682d81a9a2dde49289ba0a4296dd9c2e6c374203c31246e89019fb->leave($__internal_312db4722f682d81a9a2dde49289ba0a4296dd9c2e6c374203c31246e89019fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e01be692b15ac16f35f505a0460058d4b1914f2230f32eb2d26d57cba4e1fb5 = $this->env->getExtension("native_profiler");
        $__internal_7e01be692b15ac16f35f505a0460058d4b1914f2230f32eb2d26d57cba4e1fb5->enter($__internal_7e01be692b15ac16f35f505a0460058d4b1914f2230f32eb2d26d57cba4e1fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7e01be692b15ac16f35f505a0460058d4b1914f2230f32eb2d26d57cba4e1fb5->leave($__internal_7e01be692b15ac16f35f505a0460058d4b1914f2230f32eb2d26d57cba4e1fb5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a7e5c6edddd9b9c3562c8e7c669998907dbd69702a7eb00c6099e610bc7c08a = $this->env->getExtension("native_profiler");
        $__internal_5a7e5c6edddd9b9c3562c8e7c669998907dbd69702a7eb00c6099e610bc7c08a->enter($__internal_5a7e5c6edddd9b9c3562c8e7c669998907dbd69702a7eb00c6099e610bc7c08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5a7e5c6edddd9b9c3562c8e7c669998907dbd69702a7eb00c6099e610bc7c08a->leave($__internal_5a7e5c6edddd9b9c3562c8e7c669998907dbd69702a7eb00c6099e610bc7c08a_prof);

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
