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
        $__internal_2e788a84ef06c9bd7b745b0b790bc94a5ab15c03c98da253b72a316579469c0d = $this->env->getExtension("native_profiler");
        $__internal_2e788a84ef06c9bd7b745b0b790bc94a5ab15c03c98da253b72a316579469c0d->enter($__internal_2e788a84ef06c9bd7b745b0b790bc94a5ab15c03c98da253b72a316579469c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e788a84ef06c9bd7b745b0b790bc94a5ab15c03c98da253b72a316579469c0d->leave($__internal_2e788a84ef06c9bd7b745b0b790bc94a5ab15c03c98da253b72a316579469c0d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e15d3fbe60f369fc3ce3d7bae474369e1370cfc9b081e7a1c3a2940574cd8306 = $this->env->getExtension("native_profiler");
        $__internal_e15d3fbe60f369fc3ce3d7bae474369e1370cfc9b081e7a1c3a2940574cd8306->enter($__internal_e15d3fbe60f369fc3ce3d7bae474369e1370cfc9b081e7a1c3a2940574cd8306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e15d3fbe60f369fc3ce3d7bae474369e1370cfc9b081e7a1c3a2940574cd8306->leave($__internal_e15d3fbe60f369fc3ce3d7bae474369e1370cfc9b081e7a1c3a2940574cd8306_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_77eef55ab634989bd7f3244d7e495a8f3b6c264d9f66048510a9c663f822114f = $this->env->getExtension("native_profiler");
        $__internal_77eef55ab634989bd7f3244d7e495a8f3b6c264d9f66048510a9c663f822114f->enter($__internal_77eef55ab634989bd7f3244d7e495a8f3b6c264d9f66048510a9c663f822114f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_77eef55ab634989bd7f3244d7e495a8f3b6c264d9f66048510a9c663f822114f->leave($__internal_77eef55ab634989bd7f3244d7e495a8f3b6c264d9f66048510a9c663f822114f_prof);

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
