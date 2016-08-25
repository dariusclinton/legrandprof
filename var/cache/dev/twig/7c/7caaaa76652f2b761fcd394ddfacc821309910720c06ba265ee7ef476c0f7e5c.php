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
        $__internal_b6c2fbdbe5756a1c3c3d062937fb9eaa8b17424146e671c584dc7e1894ef250d = $this->env->getExtension("native_profiler");
        $__internal_b6c2fbdbe5756a1c3c3d062937fb9eaa8b17424146e671c584dc7e1894ef250d->enter($__internal_b6c2fbdbe5756a1c3c3d062937fb9eaa8b17424146e671c584dc7e1894ef250d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6c2fbdbe5756a1c3c3d062937fb9eaa8b17424146e671c584dc7e1894ef250d->leave($__internal_b6c2fbdbe5756a1c3c3d062937fb9eaa8b17424146e671c584dc7e1894ef250d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd279bb788e05dfb6fec7aee8b958eb52901017a60a560d0ec422b8a09405aee = $this->env->getExtension("native_profiler");
        $__internal_cd279bb788e05dfb6fec7aee8b958eb52901017a60a560d0ec422b8a09405aee->enter($__internal_cd279bb788e05dfb6fec7aee8b958eb52901017a60a560d0ec422b8a09405aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cd279bb788e05dfb6fec7aee8b958eb52901017a60a560d0ec422b8a09405aee->leave($__internal_cd279bb788e05dfb6fec7aee8b958eb52901017a60a560d0ec422b8a09405aee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f466ab2ad4f881ef38702f2929b115be724bd51a88d9a9080b921d82d4a41d2a = $this->env->getExtension("native_profiler");
        $__internal_f466ab2ad4f881ef38702f2929b115be724bd51a88d9a9080b921d82d4a41d2a->enter($__internal_f466ab2ad4f881ef38702f2929b115be724bd51a88d9a9080b921d82d4a41d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f466ab2ad4f881ef38702f2929b115be724bd51a88d9a9080b921d82d4a41d2a->leave($__internal_f466ab2ad4f881ef38702f2929b115be724bd51a88d9a9080b921d82d4a41d2a_prof);

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
