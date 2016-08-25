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
        $__internal_a698323c229bbe907eb56af2f5b7d329f9fed85666ac770a9a5e06524c6b9262 = $this->env->getExtension("native_profiler");
        $__internal_a698323c229bbe907eb56af2f5b7d329f9fed85666ac770a9a5e06524c6b9262->enter($__internal_a698323c229bbe907eb56af2f5b7d329f9fed85666ac770a9a5e06524c6b9262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a698323c229bbe907eb56af2f5b7d329f9fed85666ac770a9a5e06524c6b9262->leave($__internal_a698323c229bbe907eb56af2f5b7d329f9fed85666ac770a9a5e06524c6b9262_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4155465acf272c815234175c55b70b372cc107e9f8e5283394cecb265d709dfd = $this->env->getExtension("native_profiler");
        $__internal_4155465acf272c815234175c55b70b372cc107e9f8e5283394cecb265d709dfd->enter($__internal_4155465acf272c815234175c55b70b372cc107e9f8e5283394cecb265d709dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4155465acf272c815234175c55b70b372cc107e9f8e5283394cecb265d709dfd->leave($__internal_4155465acf272c815234175c55b70b372cc107e9f8e5283394cecb265d709dfd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf44fdf57ee7928cc7373e5cfd66b76f7d0db02d16f9ae50c9807fdbf5dc9e89 = $this->env->getExtension("native_profiler");
        $__internal_cf44fdf57ee7928cc7373e5cfd66b76f7d0db02d16f9ae50c9807fdbf5dc9e89->enter($__internal_cf44fdf57ee7928cc7373e5cfd66b76f7d0db02d16f9ae50c9807fdbf5dc9e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf44fdf57ee7928cc7373e5cfd66b76f7d0db02d16f9ae50c9807fdbf5dc9e89->leave($__internal_cf44fdf57ee7928cc7373e5cfd66b76f7d0db02d16f9ae50c9807fdbf5dc9e89_prof);

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
