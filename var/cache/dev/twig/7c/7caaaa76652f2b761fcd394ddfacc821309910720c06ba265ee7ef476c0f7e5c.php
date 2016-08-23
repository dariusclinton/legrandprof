<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1cc0d6ce3c44e79033fcf1e9aa9249caf8107f3da3f5d440d1538baab78954b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_705b90f2ad227e00a7cc88d59a3d7fdd63a25ae862a635ac11c08faceef477b8 = $this->env->getExtension("native_profiler");
        $__internal_705b90f2ad227e00a7cc88d59a3d7fdd63a25ae862a635ac11c08faceef477b8->enter($__internal_705b90f2ad227e00a7cc88d59a3d7fdd63a25ae862a635ac11c08faceef477b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_705b90f2ad227e00a7cc88d59a3d7fdd63a25ae862a635ac11c08faceef477b8->leave($__internal_705b90f2ad227e00a7cc88d59a3d7fdd63a25ae862a635ac11c08faceef477b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ce48e99ece0e2e1050a7129df94cae157c9f18ea10fec2179d6197bd0379986 = $this->env->getExtension("native_profiler");
        $__internal_4ce48e99ece0e2e1050a7129df94cae157c9f18ea10fec2179d6197bd0379986->enter($__internal_4ce48e99ece0e2e1050a7129df94cae157c9f18ea10fec2179d6197bd0379986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4ce48e99ece0e2e1050a7129df94cae157c9f18ea10fec2179d6197bd0379986->leave($__internal_4ce48e99ece0e2e1050a7129df94cae157c9f18ea10fec2179d6197bd0379986_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59f8748abe72b5c3e41b1eb660f8587a9e87676b821f3e23c6db4533758367dd = $this->env->getExtension("native_profiler");
        $__internal_59f8748abe72b5c3e41b1eb660f8587a9e87676b821f3e23c6db4533758367dd->enter($__internal_59f8748abe72b5c3e41b1eb660f8587a9e87676b821f3e23c6db4533758367dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_59f8748abe72b5c3e41b1eb660f8587a9e87676b821f3e23c6db4533758367dd->leave($__internal_59f8748abe72b5c3e41b1eb660f8587a9e87676b821f3e23c6db4533758367dd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
