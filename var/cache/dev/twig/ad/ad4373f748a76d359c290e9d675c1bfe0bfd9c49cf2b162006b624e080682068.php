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
        $__internal_8fd2c74be1b68e92f2ed1eed5610e12dd2979767e62f4ff3d41507d673719c84 = $this->env->getExtension("native_profiler");
        $__internal_8fd2c74be1b68e92f2ed1eed5610e12dd2979767e62f4ff3d41507d673719c84->enter($__internal_8fd2c74be1b68e92f2ed1eed5610e12dd2979767e62f4ff3d41507d673719c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fd2c74be1b68e92f2ed1eed5610e12dd2979767e62f4ff3d41507d673719c84->leave($__internal_8fd2c74be1b68e92f2ed1eed5610e12dd2979767e62f4ff3d41507d673719c84_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_143605b7d300898a3c4c139d11c84740a5048fa835ba3e5012f50d4102795e05 = $this->env->getExtension("native_profiler");
        $__internal_143605b7d300898a3c4c139d11c84740a5048fa835ba3e5012f50d4102795e05->enter($__internal_143605b7d300898a3c4c139d11c84740a5048fa835ba3e5012f50d4102795e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_143605b7d300898a3c4c139d11c84740a5048fa835ba3e5012f50d4102795e05->leave($__internal_143605b7d300898a3c4c139d11c84740a5048fa835ba3e5012f50d4102795e05_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e205d42774ee819d30a79c73602d37b008595cd4652e3817bae1a453e25ae3fb = $this->env->getExtension("native_profiler");
        $__internal_e205d42774ee819d30a79c73602d37b008595cd4652e3817bae1a453e25ae3fb->enter($__internal_e205d42774ee819d30a79c73602d37b008595cd4652e3817bae1a453e25ae3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e205d42774ee819d30a79c73602d37b008595cd4652e3817bae1a453e25ae3fb->leave($__internal_e205d42774ee819d30a79c73602d37b008595cd4652e3817bae1a453e25ae3fb_prof);

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
