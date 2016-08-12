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
        $__internal_0018282656d46cc7a3b597331ab8770e61f9e7901123807b6e04454b144932f5 = $this->env->getExtension("native_profiler");
        $__internal_0018282656d46cc7a3b597331ab8770e61f9e7901123807b6e04454b144932f5->enter($__internal_0018282656d46cc7a3b597331ab8770e61f9e7901123807b6e04454b144932f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0018282656d46cc7a3b597331ab8770e61f9e7901123807b6e04454b144932f5->leave($__internal_0018282656d46cc7a3b597331ab8770e61f9e7901123807b6e04454b144932f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3306c87fbf524024f0ece7b92eece5cc5bf97d09e2b997ed35f23785f341d654 = $this->env->getExtension("native_profiler");
        $__internal_3306c87fbf524024f0ece7b92eece5cc5bf97d09e2b997ed35f23785f341d654->enter($__internal_3306c87fbf524024f0ece7b92eece5cc5bf97d09e2b997ed35f23785f341d654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3306c87fbf524024f0ece7b92eece5cc5bf97d09e2b997ed35f23785f341d654->leave($__internal_3306c87fbf524024f0ece7b92eece5cc5bf97d09e2b997ed35f23785f341d654_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8275b7a4b1b4435deca57c2de51ff264fbf46a9528ff51821cd5f903c60b1fbe = $this->env->getExtension("native_profiler");
        $__internal_8275b7a4b1b4435deca57c2de51ff264fbf46a9528ff51821cd5f903c60b1fbe->enter($__internal_8275b7a4b1b4435deca57c2de51ff264fbf46a9528ff51821cd5f903c60b1fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8275b7a4b1b4435deca57c2de51ff264fbf46a9528ff51821cd5f903c60b1fbe->leave($__internal_8275b7a4b1b4435deca57c2de51ff264fbf46a9528ff51821cd5f903c60b1fbe_prof);

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
