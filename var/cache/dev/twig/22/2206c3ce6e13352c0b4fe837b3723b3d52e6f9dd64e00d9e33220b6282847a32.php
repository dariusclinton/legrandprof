<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_21e7d64afd2e234bf7df19b792f74fe7ae1364bc8a8aeea915cb7592c5b32c5b extends Twig_Template
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
        $__internal_a7d4591c8957a1cae0d050756512f4366e47061c3203cca46006417c911d30a8 = $this->env->getExtension("native_profiler");
        $__internal_a7d4591c8957a1cae0d050756512f4366e47061c3203cca46006417c911d30a8->enter($__internal_a7d4591c8957a1cae0d050756512f4366e47061c3203cca46006417c911d30a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7d4591c8957a1cae0d050756512f4366e47061c3203cca46006417c911d30a8->leave($__internal_a7d4591c8957a1cae0d050756512f4366e47061c3203cca46006417c911d30a8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b634f272b2985c54a8a8689599dc0d77765bb5d7f461d1d3179e58797edda1cf = $this->env->getExtension("native_profiler");
        $__internal_b634f272b2985c54a8a8689599dc0d77765bb5d7f461d1d3179e58797edda1cf->enter($__internal_b634f272b2985c54a8a8689599dc0d77765bb5d7f461d1d3179e58797edda1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b634f272b2985c54a8a8689599dc0d77765bb5d7f461d1d3179e58797edda1cf->leave($__internal_b634f272b2985c54a8a8689599dc0d77765bb5d7f461d1d3179e58797edda1cf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f365c095aa25b55b6cd392a591423bd381aec03cc090e11f075040e97771f5af = $this->env->getExtension("native_profiler");
        $__internal_f365c095aa25b55b6cd392a591423bd381aec03cc090e11f075040e97771f5af->enter($__internal_f365c095aa25b55b6cd392a591423bd381aec03cc090e11f075040e97771f5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f365c095aa25b55b6cd392a591423bd381aec03cc090e11f075040e97771f5af->leave($__internal_f365c095aa25b55b6cd392a591423bd381aec03cc090e11f075040e97771f5af_prof);

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
