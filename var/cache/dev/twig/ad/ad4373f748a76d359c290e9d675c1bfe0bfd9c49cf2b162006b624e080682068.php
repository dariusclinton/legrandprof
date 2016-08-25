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
        $__internal_a068fd0bc977e09889db504959cec428140b505cc179b8e8c3d08c2d34bbb2e0 = $this->env->getExtension("native_profiler");
        $__internal_a068fd0bc977e09889db504959cec428140b505cc179b8e8c3d08c2d34bbb2e0->enter($__internal_a068fd0bc977e09889db504959cec428140b505cc179b8e8c3d08c2d34bbb2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a068fd0bc977e09889db504959cec428140b505cc179b8e8c3d08c2d34bbb2e0->leave($__internal_a068fd0bc977e09889db504959cec428140b505cc179b8e8c3d08c2d34bbb2e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ede157f81bd91cbf71303d27e3e6670219c143ae6156164cef109f18ed826cf2 = $this->env->getExtension("native_profiler");
        $__internal_ede157f81bd91cbf71303d27e3e6670219c143ae6156164cef109f18ed826cf2->enter($__internal_ede157f81bd91cbf71303d27e3e6670219c143ae6156164cef109f18ed826cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ede157f81bd91cbf71303d27e3e6670219c143ae6156164cef109f18ed826cf2->leave($__internal_ede157f81bd91cbf71303d27e3e6670219c143ae6156164cef109f18ed826cf2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7978eecab072adc2f235bebf754615931b342c10670c72e7479030aed1bae649 = $this->env->getExtension("native_profiler");
        $__internal_7978eecab072adc2f235bebf754615931b342c10670c72e7479030aed1bae649->enter($__internal_7978eecab072adc2f235bebf754615931b342c10670c72e7479030aed1bae649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7978eecab072adc2f235bebf754615931b342c10670c72e7479030aed1bae649->leave($__internal_7978eecab072adc2f235bebf754615931b342c10670c72e7479030aed1bae649_prof);

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
