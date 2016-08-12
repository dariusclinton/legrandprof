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
        $__internal_4368b6c5feb3e93727e8773557c86e766f3618ad9dc388997124345354c4d9fb = $this->env->getExtension("native_profiler");
        $__internal_4368b6c5feb3e93727e8773557c86e766f3618ad9dc388997124345354c4d9fb->enter($__internal_4368b6c5feb3e93727e8773557c86e766f3618ad9dc388997124345354c4d9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4368b6c5feb3e93727e8773557c86e766f3618ad9dc388997124345354c4d9fb->leave($__internal_4368b6c5feb3e93727e8773557c86e766f3618ad9dc388997124345354c4d9fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1a0f1163d77ce46086eccd939821a8966601a91227269029081e666a8aad39d = $this->env->getExtension("native_profiler");
        $__internal_c1a0f1163d77ce46086eccd939821a8966601a91227269029081e666a8aad39d->enter($__internal_c1a0f1163d77ce46086eccd939821a8966601a91227269029081e666a8aad39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c1a0f1163d77ce46086eccd939821a8966601a91227269029081e666a8aad39d->leave($__internal_c1a0f1163d77ce46086eccd939821a8966601a91227269029081e666a8aad39d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fd92a046d6b5e1a7f69458cf478899443105a151f4ed584c4151c8c3eff0d22 = $this->env->getExtension("native_profiler");
        $__internal_8fd92a046d6b5e1a7f69458cf478899443105a151f4ed584c4151c8c3eff0d22->enter($__internal_8fd92a046d6b5e1a7f69458cf478899443105a151f4ed584c4151c8c3eff0d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8fd92a046d6b5e1a7f69458cf478899443105a151f4ed584c4151c8c3eff0d22->leave($__internal_8fd92a046d6b5e1a7f69458cf478899443105a151f4ed584c4151c8c3eff0d22_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_44e230eb9ef520a30e0927aa5c6f6b427f14f4b8896b815fcfc2a525846fac4d = $this->env->getExtension("native_profiler");
        $__internal_44e230eb9ef520a30e0927aa5c6f6b427f14f4b8896b815fcfc2a525846fac4d->enter($__internal_44e230eb9ef520a30e0927aa5c6f6b427f14f4b8896b815fcfc2a525846fac4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_44e230eb9ef520a30e0927aa5c6f6b427f14f4b8896b815fcfc2a525846fac4d->leave($__internal_44e230eb9ef520a30e0927aa5c6f6b427f14f4b8896b815fcfc2a525846fac4d_prof);

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
