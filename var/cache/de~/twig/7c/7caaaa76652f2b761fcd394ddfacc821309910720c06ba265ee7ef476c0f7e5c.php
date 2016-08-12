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
        $__internal_303460b8a45e053906597a4b78b7a01eb0f9cdbe746a8f7774398882d0a36231 = $this->env->getExtension("native_profiler");
        $__internal_303460b8a45e053906597a4b78b7a01eb0f9cdbe746a8f7774398882d0a36231->enter($__internal_303460b8a45e053906597a4b78b7a01eb0f9cdbe746a8f7774398882d0a36231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_303460b8a45e053906597a4b78b7a01eb0f9cdbe746a8f7774398882d0a36231->leave($__internal_303460b8a45e053906597a4b78b7a01eb0f9cdbe746a8f7774398882d0a36231_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c880c1b5148be9291a9bfe49a428ae031c954dee8ccb6047899f47f6c44e81f3 = $this->env->getExtension("native_profiler");
        $__internal_c880c1b5148be9291a9bfe49a428ae031c954dee8ccb6047899f47f6c44e81f3->enter($__internal_c880c1b5148be9291a9bfe49a428ae031c954dee8ccb6047899f47f6c44e81f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c880c1b5148be9291a9bfe49a428ae031c954dee8ccb6047899f47f6c44e81f3->leave($__internal_c880c1b5148be9291a9bfe49a428ae031c954dee8ccb6047899f47f6c44e81f3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_511d878e55daf6becb746c93975100974b15050be647e4f070f286a7eddf6d21 = $this->env->getExtension("native_profiler");
        $__internal_511d878e55daf6becb746c93975100974b15050be647e4f070f286a7eddf6d21->enter($__internal_511d878e55daf6becb746c93975100974b15050be647e4f070f286a7eddf6d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_511d878e55daf6becb746c93975100974b15050be647e4f070f286a7eddf6d21->leave($__internal_511d878e55daf6becb746c93975100974b15050be647e4f070f286a7eddf6d21_prof);

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
