<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_b2f1de04198b5b50efa3d8da7c8ed403bf942886bcdf7e1270a98bc7e25d5545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb5f34f98d49bfec92ee8e2a6449f321a087610d8e5462961e2cdf4443e49b72 = $this->env->getExtension("native_profiler");
        $__internal_bb5f34f98d49bfec92ee8e2a6449f321a087610d8e5462961e2cdf4443e49b72->enter($__internal_bb5f34f98d49bfec92ee8e2a6449f321a087610d8e5462961e2cdf4443e49b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_bb5f34f98d49bfec92ee8e2a6449f321a087610d8e5462961e2cdf4443e49b72->leave($__internal_bb5f34f98d49bfec92ee8e2a6449f321a087610d8e5462961e2cdf4443e49b72_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
    }
}
