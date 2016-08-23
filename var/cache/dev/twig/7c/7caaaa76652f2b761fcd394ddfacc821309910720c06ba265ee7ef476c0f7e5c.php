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
        $__internal_23dc9eb882a1dff40ce1f25e09c716b906b8ec9b4a52819b8eabf6c50f5d6a1f = $this->env->getExtension("native_profiler");
        $__internal_23dc9eb882a1dff40ce1f25e09c716b906b8ec9b4a52819b8eabf6c50f5d6a1f->enter($__internal_23dc9eb882a1dff40ce1f25e09c716b906b8ec9b4a52819b8eabf6c50f5d6a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23dc9eb882a1dff40ce1f25e09c716b906b8ec9b4a52819b8eabf6c50f5d6a1f->leave($__internal_23dc9eb882a1dff40ce1f25e09c716b906b8ec9b4a52819b8eabf6c50f5d6a1f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e80ad5826675d84c2f8ce367b3f74d7cef85946a13dcd6be2eab572558360ba9 = $this->env->getExtension("native_profiler");
        $__internal_e80ad5826675d84c2f8ce367b3f74d7cef85946a13dcd6be2eab572558360ba9->enter($__internal_e80ad5826675d84c2f8ce367b3f74d7cef85946a13dcd6be2eab572558360ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e80ad5826675d84c2f8ce367b3f74d7cef85946a13dcd6be2eab572558360ba9->leave($__internal_e80ad5826675d84c2f8ce367b3f74d7cef85946a13dcd6be2eab572558360ba9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9c1b290f467fe589df544cf3817789acc6d18e1adf0ee88b1eadb0179c3f343 = $this->env->getExtension("native_profiler");
        $__internal_f9c1b290f467fe589df544cf3817789acc6d18e1adf0ee88b1eadb0179c3f343->enter($__internal_f9c1b290f467fe589df544cf3817789acc6d18e1adf0ee88b1eadb0179c3f343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f9c1b290f467fe589df544cf3817789acc6d18e1adf0ee88b1eadb0179c3f343->leave($__internal_f9c1b290f467fe589df544cf3817789acc6d18e1adf0ee88b1eadb0179c3f343_prof);

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
