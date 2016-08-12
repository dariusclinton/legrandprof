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
        $__internal_499231586f9f6144e4c38065108ce51da96478e1c4f0ccf4f5d44834631af507 = $this->env->getExtension("native_profiler");
        $__internal_499231586f9f6144e4c38065108ce51da96478e1c4f0ccf4f5d44834631af507->enter($__internal_499231586f9f6144e4c38065108ce51da96478e1c4f0ccf4f5d44834631af507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_499231586f9f6144e4c38065108ce51da96478e1c4f0ccf4f5d44834631af507->leave($__internal_499231586f9f6144e4c38065108ce51da96478e1c4f0ccf4f5d44834631af507_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7328d2234e267c9beac364e811ae5025c15b93849453e8e10660ea8a2b47c65e = $this->env->getExtension("native_profiler");
        $__internal_7328d2234e267c9beac364e811ae5025c15b93849453e8e10660ea8a2b47c65e->enter($__internal_7328d2234e267c9beac364e811ae5025c15b93849453e8e10660ea8a2b47c65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7328d2234e267c9beac364e811ae5025c15b93849453e8e10660ea8a2b47c65e->leave($__internal_7328d2234e267c9beac364e811ae5025c15b93849453e8e10660ea8a2b47c65e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_db5fdc00d88d7036274c83d45b4a2ad2b835cec1a43ecc14f1e3d9d4ac49b68d = $this->env->getExtension("native_profiler");
        $__internal_db5fdc00d88d7036274c83d45b4a2ad2b835cec1a43ecc14f1e3d9d4ac49b68d->enter($__internal_db5fdc00d88d7036274c83d45b4a2ad2b835cec1a43ecc14f1e3d9d4ac49b68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db5fdc00d88d7036274c83d45b4a2ad2b835cec1a43ecc14f1e3d9d4ac49b68d->leave($__internal_db5fdc00d88d7036274c83d45b4a2ad2b835cec1a43ecc14f1e3d9d4ac49b68d_prof);

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
