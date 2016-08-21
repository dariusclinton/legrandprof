<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d2e0bf86933bb4a5256da87dc6cd5ac08ca8fbd4e9efb517221a095eb5080bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5082861c9464cb173741dc952fb94c4b27b08dc8645184f37a781f949eeaf642 = $this->env->getExtension("native_profiler");
        $__internal_5082861c9464cb173741dc952fb94c4b27b08dc8645184f37a781f949eeaf642->enter($__internal_5082861c9464cb173741dc952fb94c4b27b08dc8645184f37a781f949eeaf642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5082861c9464cb173741dc952fb94c4b27b08dc8645184f37a781f949eeaf642->leave($__internal_5082861c9464cb173741dc952fb94c4b27b08dc8645184f37a781f949eeaf642_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_808ac150c1639cad2a4362eaf2164cd145cc4537c5fce3bbee97e3df77a6b6d1 = $this->env->getExtension("native_profiler");
        $__internal_808ac150c1639cad2a4362eaf2164cd145cc4537c5fce3bbee97e3df77a6b6d1->enter($__internal_808ac150c1639cad2a4362eaf2164cd145cc4537c5fce3bbee97e3df77a6b6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_808ac150c1639cad2a4362eaf2164cd145cc4537c5fce3bbee97e3df77a6b6d1->leave($__internal_808ac150c1639cad2a4362eaf2164cd145cc4537c5fce3bbee97e3df77a6b6d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_245e3e683b621517e4639699fc31714d323fddc481319a2bfdebd9bf0428086c = $this->env->getExtension("native_profiler");
        $__internal_245e3e683b621517e4639699fc31714d323fddc481319a2bfdebd9bf0428086c->enter($__internal_245e3e683b621517e4639699fc31714d323fddc481319a2bfdebd9bf0428086c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_245e3e683b621517e4639699fc31714d323fddc481319a2bfdebd9bf0428086c->leave($__internal_245e3e683b621517e4639699fc31714d323fddc481319a2bfdebd9bf0428086c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
