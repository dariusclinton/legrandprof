<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c540542da6661f22dd959f9bc2b595fd4127ea0ddbcbb9066e46ee2b63dc1e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92b89fa0239a936e615b6dcf1a328f8ba5f9f773d91d7ff122e22619ebfa7960 = $this->env->getExtension("native_profiler");
        $__internal_92b89fa0239a936e615b6dcf1a328f8ba5f9f773d91d7ff122e22619ebfa7960->enter($__internal_92b89fa0239a936e615b6dcf1a328f8ba5f9f773d91d7ff122e22619ebfa7960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92b89fa0239a936e615b6dcf1a328f8ba5f9f773d91d7ff122e22619ebfa7960->leave($__internal_92b89fa0239a936e615b6dcf1a328f8ba5f9f773d91d7ff122e22619ebfa7960_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c7b21b52746146951298611a0525cfbc4f6d1a5326e83ae340e8d8ca542a32f1 = $this->env->getExtension("native_profiler");
        $__internal_c7b21b52746146951298611a0525cfbc4f6d1a5326e83ae340e8d8ca542a32f1->enter($__internal_c7b21b52746146951298611a0525cfbc4f6d1a5326e83ae340e8d8ca542a32f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7b21b52746146951298611a0525cfbc4f6d1a5326e83ae340e8d8ca542a32f1->leave($__internal_c7b21b52746146951298611a0525cfbc4f6d1a5326e83ae340e8d8ca542a32f1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2aba3ec50fc5876c9c2e14eac24ac924aea89c67095571bbd168aa475a6e2f50 = $this->env->getExtension("native_profiler");
        $__internal_2aba3ec50fc5876c9c2e14eac24ac924aea89c67095571bbd168aa475a6e2f50->enter($__internal_2aba3ec50fc5876c9c2e14eac24ac924aea89c67095571bbd168aa475a6e2f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2aba3ec50fc5876c9c2e14eac24ac924aea89c67095571bbd168aa475a6e2f50->leave($__internal_2aba3ec50fc5876c9c2e14eac24ac924aea89c67095571bbd168aa475a6e2f50_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e906a2d7b782d0b66f6d1d36d95cbfb5bed0282a63629aba5052f90d94ded35d = $this->env->getExtension("native_profiler");
        $__internal_e906a2d7b782d0b66f6d1d36d95cbfb5bed0282a63629aba5052f90d94ded35d->enter($__internal_e906a2d7b782d0b66f6d1d36d95cbfb5bed0282a63629aba5052f90d94ded35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e906a2d7b782d0b66f6d1d36d95cbfb5bed0282a63629aba5052f90d94ded35d->leave($__internal_e906a2d7b782d0b66f6d1d36d95cbfb5bed0282a63629aba5052f90d94ded35d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
