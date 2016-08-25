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
        $__internal_aaf83deac654797f4045a071a5e37f885c291dab0ba6525ecb6adfecc99376a3 = $this->env->getExtension("native_profiler");
        $__internal_aaf83deac654797f4045a071a5e37f885c291dab0ba6525ecb6adfecc99376a3->enter($__internal_aaf83deac654797f4045a071a5e37f885c291dab0ba6525ecb6adfecc99376a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaf83deac654797f4045a071a5e37f885c291dab0ba6525ecb6adfecc99376a3->leave($__internal_aaf83deac654797f4045a071a5e37f885c291dab0ba6525ecb6adfecc99376a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a670359d0f2f0214ce87ccabb8b7c2d277b3245ee984ddb8f64f5df368c5e91 = $this->env->getExtension("native_profiler");
        $__internal_3a670359d0f2f0214ce87ccabb8b7c2d277b3245ee984ddb8f64f5df368c5e91->enter($__internal_3a670359d0f2f0214ce87ccabb8b7c2d277b3245ee984ddb8f64f5df368c5e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3a670359d0f2f0214ce87ccabb8b7c2d277b3245ee984ddb8f64f5df368c5e91->leave($__internal_3a670359d0f2f0214ce87ccabb8b7c2d277b3245ee984ddb8f64f5df368c5e91_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_958f45bba453faad99562151992672e20fa908c5e42f7c3f541076fb5dfe713c = $this->env->getExtension("native_profiler");
        $__internal_958f45bba453faad99562151992672e20fa908c5e42f7c3f541076fb5dfe713c->enter($__internal_958f45bba453faad99562151992672e20fa908c5e42f7c3f541076fb5dfe713c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_958f45bba453faad99562151992672e20fa908c5e42f7c3f541076fb5dfe713c->leave($__internal_958f45bba453faad99562151992672e20fa908c5e42f7c3f541076fb5dfe713c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a517fcc6c79555cdd1f8626be633e8346424eecc5923dada6df2a1c411bac326 = $this->env->getExtension("native_profiler");
        $__internal_a517fcc6c79555cdd1f8626be633e8346424eecc5923dada6df2a1c411bac326->enter($__internal_a517fcc6c79555cdd1f8626be633e8346424eecc5923dada6df2a1c411bac326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a517fcc6c79555cdd1f8626be633e8346424eecc5923dada6df2a1c411bac326->leave($__internal_a517fcc6c79555cdd1f8626be633e8346424eecc5923dada6df2a1c411bac326_prof);

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
