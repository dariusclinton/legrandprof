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
        $__internal_85adcca1839f4cd48345ff08b14494942704388e1943613796cc886ea5e868b4 = $this->env->getExtension("native_profiler");
        $__internal_85adcca1839f4cd48345ff08b14494942704388e1943613796cc886ea5e868b4->enter($__internal_85adcca1839f4cd48345ff08b14494942704388e1943613796cc886ea5e868b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85adcca1839f4cd48345ff08b14494942704388e1943613796cc886ea5e868b4->leave($__internal_85adcca1839f4cd48345ff08b14494942704388e1943613796cc886ea5e868b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12702f76a77e1a4d8d70e3300417b21df98382696fda4e9388e86656350027bb = $this->env->getExtension("native_profiler");
        $__internal_12702f76a77e1a4d8d70e3300417b21df98382696fda4e9388e86656350027bb->enter($__internal_12702f76a77e1a4d8d70e3300417b21df98382696fda4e9388e86656350027bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_12702f76a77e1a4d8d70e3300417b21df98382696fda4e9388e86656350027bb->leave($__internal_12702f76a77e1a4d8d70e3300417b21df98382696fda4e9388e86656350027bb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c28344f13ae6bb19532b192b9be82773db557a11dbafc1f44e3c4898fa1ff66b = $this->env->getExtension("native_profiler");
        $__internal_c28344f13ae6bb19532b192b9be82773db557a11dbafc1f44e3c4898fa1ff66b->enter($__internal_c28344f13ae6bb19532b192b9be82773db557a11dbafc1f44e3c4898fa1ff66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c28344f13ae6bb19532b192b9be82773db557a11dbafc1f44e3c4898fa1ff66b->leave($__internal_c28344f13ae6bb19532b192b9be82773db557a11dbafc1f44e3c4898fa1ff66b_prof);

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
