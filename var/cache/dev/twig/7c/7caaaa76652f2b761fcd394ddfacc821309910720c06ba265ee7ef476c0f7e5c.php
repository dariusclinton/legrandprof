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
        $__internal_de9240aab71b2e7d2ca752f2ee7f097f5eed750c419d355ba6ceb842397f7e8f = $this->env->getExtension("native_profiler");
        $__internal_de9240aab71b2e7d2ca752f2ee7f097f5eed750c419d355ba6ceb842397f7e8f->enter($__internal_de9240aab71b2e7d2ca752f2ee7f097f5eed750c419d355ba6ceb842397f7e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de9240aab71b2e7d2ca752f2ee7f097f5eed750c419d355ba6ceb842397f7e8f->leave($__internal_de9240aab71b2e7d2ca752f2ee7f097f5eed750c419d355ba6ceb842397f7e8f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_843f4dbbc1ac8c52c95dea76076a1587808683e82f150cf982bf198c42577364 = $this->env->getExtension("native_profiler");
        $__internal_843f4dbbc1ac8c52c95dea76076a1587808683e82f150cf982bf198c42577364->enter($__internal_843f4dbbc1ac8c52c95dea76076a1587808683e82f150cf982bf198c42577364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_843f4dbbc1ac8c52c95dea76076a1587808683e82f150cf982bf198c42577364->leave($__internal_843f4dbbc1ac8c52c95dea76076a1587808683e82f150cf982bf198c42577364_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_34a79e6efc407d1dd51424f1b518e2a771763187fbe81400a5701d28c46ff7b4 = $this->env->getExtension("native_profiler");
        $__internal_34a79e6efc407d1dd51424f1b518e2a771763187fbe81400a5701d28c46ff7b4->enter($__internal_34a79e6efc407d1dd51424f1b518e2a771763187fbe81400a5701d28c46ff7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_34a79e6efc407d1dd51424f1b518e2a771763187fbe81400a5701d28c46ff7b4->leave($__internal_34a79e6efc407d1dd51424f1b518e2a771763187fbe81400a5701d28c46ff7b4_prof);

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
