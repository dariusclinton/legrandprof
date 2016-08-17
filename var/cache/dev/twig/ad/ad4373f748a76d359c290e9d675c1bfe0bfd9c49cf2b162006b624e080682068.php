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
        $__internal_5b4fd2b5a4e7fd79277d5fa4dc872fa31363cb75e40ca1cefb0111a0b0614a4a = $this->env->getExtension("native_profiler");
        $__internal_5b4fd2b5a4e7fd79277d5fa4dc872fa31363cb75e40ca1cefb0111a0b0614a4a->enter($__internal_5b4fd2b5a4e7fd79277d5fa4dc872fa31363cb75e40ca1cefb0111a0b0614a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b4fd2b5a4e7fd79277d5fa4dc872fa31363cb75e40ca1cefb0111a0b0614a4a->leave($__internal_5b4fd2b5a4e7fd79277d5fa4dc872fa31363cb75e40ca1cefb0111a0b0614a4a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a246b887b748d5deaef43383c21e5f651a58850d1f4d86ad1548da8f091ef14d = $this->env->getExtension("native_profiler");
        $__internal_a246b887b748d5deaef43383c21e5f651a58850d1f4d86ad1548da8f091ef14d->enter($__internal_a246b887b748d5deaef43383c21e5f651a58850d1f4d86ad1548da8f091ef14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a246b887b748d5deaef43383c21e5f651a58850d1f4d86ad1548da8f091ef14d->leave($__internal_a246b887b748d5deaef43383c21e5f651a58850d1f4d86ad1548da8f091ef14d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3536dbfdace4cd4c1a1c5e1d11dbc510de65727d30904fc0580846376afed3be = $this->env->getExtension("native_profiler");
        $__internal_3536dbfdace4cd4c1a1c5e1d11dbc510de65727d30904fc0580846376afed3be->enter($__internal_3536dbfdace4cd4c1a1c5e1d11dbc510de65727d30904fc0580846376afed3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3536dbfdace4cd4c1a1c5e1d11dbc510de65727d30904fc0580846376afed3be->leave($__internal_3536dbfdace4cd4c1a1c5e1d11dbc510de65727d30904fc0580846376afed3be_prof);

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
