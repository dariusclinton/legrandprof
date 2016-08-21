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
        $__internal_1580039ff6d8ae6508f1ebee85356bb457b1b72bebafebd9d53b91cb30ec06be = $this->env->getExtension("native_profiler");
        $__internal_1580039ff6d8ae6508f1ebee85356bb457b1b72bebafebd9d53b91cb30ec06be->enter($__internal_1580039ff6d8ae6508f1ebee85356bb457b1b72bebafebd9d53b91cb30ec06be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1580039ff6d8ae6508f1ebee85356bb457b1b72bebafebd9d53b91cb30ec06be->leave($__internal_1580039ff6d8ae6508f1ebee85356bb457b1b72bebafebd9d53b91cb30ec06be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca78f93aa3e7f2ad251baa8b1a187c800e7ad42cef0fcf67659256d58cff571a = $this->env->getExtension("native_profiler");
        $__internal_ca78f93aa3e7f2ad251baa8b1a187c800e7ad42cef0fcf67659256d58cff571a->enter($__internal_ca78f93aa3e7f2ad251baa8b1a187c800e7ad42cef0fcf67659256d58cff571a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ca78f93aa3e7f2ad251baa8b1a187c800e7ad42cef0fcf67659256d58cff571a->leave($__internal_ca78f93aa3e7f2ad251baa8b1a187c800e7ad42cef0fcf67659256d58cff571a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_758685f4ee7431afb16c93113912b494476df57c2afaa82c14bfca12c36d8d84 = $this->env->getExtension("native_profiler");
        $__internal_758685f4ee7431afb16c93113912b494476df57c2afaa82c14bfca12c36d8d84->enter($__internal_758685f4ee7431afb16c93113912b494476df57c2afaa82c14bfca12c36d8d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_758685f4ee7431afb16c93113912b494476df57c2afaa82c14bfca12c36d8d84->leave($__internal_758685f4ee7431afb16c93113912b494476df57c2afaa82c14bfca12c36d8d84_prof);

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
