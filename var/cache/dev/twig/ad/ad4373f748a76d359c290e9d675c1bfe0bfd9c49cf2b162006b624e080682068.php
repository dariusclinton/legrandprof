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
        $__internal_34cb1dfc3f35ae47fd2bcc8db58a7ef2c1022b1b94544c0c93cdb3e55463ebd2 = $this->env->getExtension("native_profiler");
        $__internal_34cb1dfc3f35ae47fd2bcc8db58a7ef2c1022b1b94544c0c93cdb3e55463ebd2->enter($__internal_34cb1dfc3f35ae47fd2bcc8db58a7ef2c1022b1b94544c0c93cdb3e55463ebd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34cb1dfc3f35ae47fd2bcc8db58a7ef2c1022b1b94544c0c93cdb3e55463ebd2->leave($__internal_34cb1dfc3f35ae47fd2bcc8db58a7ef2c1022b1b94544c0c93cdb3e55463ebd2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_226515ce95e830f00e19405f634a930034d91c18080315ff5269ae452a8ff97d = $this->env->getExtension("native_profiler");
        $__internal_226515ce95e830f00e19405f634a930034d91c18080315ff5269ae452a8ff97d->enter($__internal_226515ce95e830f00e19405f634a930034d91c18080315ff5269ae452a8ff97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_226515ce95e830f00e19405f634a930034d91c18080315ff5269ae452a8ff97d->leave($__internal_226515ce95e830f00e19405f634a930034d91c18080315ff5269ae452a8ff97d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cf1d9314002b031984e5e461d126929939ff4764a7b113db81a40cda37a08f1 = $this->env->getExtension("native_profiler");
        $__internal_9cf1d9314002b031984e5e461d126929939ff4764a7b113db81a40cda37a08f1->enter($__internal_9cf1d9314002b031984e5e461d126929939ff4764a7b113db81a40cda37a08f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9cf1d9314002b031984e5e461d126929939ff4764a7b113db81a40cda37a08f1->leave($__internal_9cf1d9314002b031984e5e461d126929939ff4764a7b113db81a40cda37a08f1_prof);

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
