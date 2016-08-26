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
        $__internal_6565b45000e3f98a79cc812950486372db0c6f4afcb96a8674a9e485150a43c9 = $this->env->getExtension("native_profiler");
        $__internal_6565b45000e3f98a79cc812950486372db0c6f4afcb96a8674a9e485150a43c9->enter($__internal_6565b45000e3f98a79cc812950486372db0c6f4afcb96a8674a9e485150a43c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6565b45000e3f98a79cc812950486372db0c6f4afcb96a8674a9e485150a43c9->leave($__internal_6565b45000e3f98a79cc812950486372db0c6f4afcb96a8674a9e485150a43c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f8d85940f4ceaaa8a79ebd8698526e91f05f46ba4359590656609c2b2da7acc = $this->env->getExtension("native_profiler");
        $__internal_5f8d85940f4ceaaa8a79ebd8698526e91f05f46ba4359590656609c2b2da7acc->enter($__internal_5f8d85940f4ceaaa8a79ebd8698526e91f05f46ba4359590656609c2b2da7acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5f8d85940f4ceaaa8a79ebd8698526e91f05f46ba4359590656609c2b2da7acc->leave($__internal_5f8d85940f4ceaaa8a79ebd8698526e91f05f46ba4359590656609c2b2da7acc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb9ed0641fb249f3f1e2a0a12010ffa01d9b7850e96d23a1bff87bb9ad33d2bd = $this->env->getExtension("native_profiler");
        $__internal_cb9ed0641fb249f3f1e2a0a12010ffa01d9b7850e96d23a1bff87bb9ad33d2bd->enter($__internal_cb9ed0641fb249f3f1e2a0a12010ffa01d9b7850e96d23a1bff87bb9ad33d2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb9ed0641fb249f3f1e2a0a12010ffa01d9b7850e96d23a1bff87bb9ad33d2bd->leave($__internal_cb9ed0641fb249f3f1e2a0a12010ffa01d9b7850e96d23a1bff87bb9ad33d2bd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bcc0b830f1576032fdf29f351fa45f5e95b21becfbc49d2e02edd481ccc4941 = $this->env->getExtension("native_profiler");
        $__internal_5bcc0b830f1576032fdf29f351fa45f5e95b21becfbc49d2e02edd481ccc4941->enter($__internal_5bcc0b830f1576032fdf29f351fa45f5e95b21becfbc49d2e02edd481ccc4941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5bcc0b830f1576032fdf29f351fa45f5e95b21becfbc49d2e02edd481ccc4941->leave($__internal_5bcc0b830f1576032fdf29f351fa45f5e95b21becfbc49d2e02edd481ccc4941_prof);

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
