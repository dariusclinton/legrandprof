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
        $__internal_404c7b30f4228239f9f3d778b8f941203d7f4ac2d2c49f5342f4536d0f1a0950 = $this->env->getExtension("native_profiler");
        $__internal_404c7b30f4228239f9f3d778b8f941203d7f4ac2d2c49f5342f4536d0f1a0950->enter($__internal_404c7b30f4228239f9f3d778b8f941203d7f4ac2d2c49f5342f4536d0f1a0950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_404c7b30f4228239f9f3d778b8f941203d7f4ac2d2c49f5342f4536d0f1a0950->leave($__internal_404c7b30f4228239f9f3d778b8f941203d7f4ac2d2c49f5342f4536d0f1a0950_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20b545ae0787e3ff58639140516a98419b77f3b37e9d435c1fa9be4de8293097 = $this->env->getExtension("native_profiler");
        $__internal_20b545ae0787e3ff58639140516a98419b77f3b37e9d435c1fa9be4de8293097->enter($__internal_20b545ae0787e3ff58639140516a98419b77f3b37e9d435c1fa9be4de8293097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_20b545ae0787e3ff58639140516a98419b77f3b37e9d435c1fa9be4de8293097->leave($__internal_20b545ae0787e3ff58639140516a98419b77f3b37e9d435c1fa9be4de8293097_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c9b82f2735b2cc9082a2564d850de764152729cd33b7b3ee36287c477d1ce2d = $this->env->getExtension("native_profiler");
        $__internal_4c9b82f2735b2cc9082a2564d850de764152729cd33b7b3ee36287c477d1ce2d->enter($__internal_4c9b82f2735b2cc9082a2564d850de764152729cd33b7b3ee36287c477d1ce2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4c9b82f2735b2cc9082a2564d850de764152729cd33b7b3ee36287c477d1ce2d->leave($__internal_4c9b82f2735b2cc9082a2564d850de764152729cd33b7b3ee36287c477d1ce2d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0213705831f13b33e669401c4484f203479a115f92959d25e63e554767ddc5b = $this->env->getExtension("native_profiler");
        $__internal_a0213705831f13b33e669401c4484f203479a115f92959d25e63e554767ddc5b->enter($__internal_a0213705831f13b33e669401c4484f203479a115f92959d25e63e554767ddc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a0213705831f13b33e669401c4484f203479a115f92959d25e63e554767ddc5b->leave($__internal_a0213705831f13b33e669401c4484f203479a115f92959d25e63e554767ddc5b_prof);

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
