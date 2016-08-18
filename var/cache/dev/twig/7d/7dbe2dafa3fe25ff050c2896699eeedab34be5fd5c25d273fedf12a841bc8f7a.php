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
        $__internal_fa8d18035eda0aa6436717c34a19299008e47ff0e803fcad3a283d767f5f3047 = $this->env->getExtension("native_profiler");
        $__internal_fa8d18035eda0aa6436717c34a19299008e47ff0e803fcad3a283d767f5f3047->enter($__internal_fa8d18035eda0aa6436717c34a19299008e47ff0e803fcad3a283d767f5f3047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa8d18035eda0aa6436717c34a19299008e47ff0e803fcad3a283d767f5f3047->leave($__internal_fa8d18035eda0aa6436717c34a19299008e47ff0e803fcad3a283d767f5f3047_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_faad0025c30a6dfaa1cefd96e4dc014a6a9daa0637cb15c384f78733bfb4ccad = $this->env->getExtension("native_profiler");
        $__internal_faad0025c30a6dfaa1cefd96e4dc014a6a9daa0637cb15c384f78733bfb4ccad->enter($__internal_faad0025c30a6dfaa1cefd96e4dc014a6a9daa0637cb15c384f78733bfb4ccad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_faad0025c30a6dfaa1cefd96e4dc014a6a9daa0637cb15c384f78733bfb4ccad->leave($__internal_faad0025c30a6dfaa1cefd96e4dc014a6a9daa0637cb15c384f78733bfb4ccad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15afcd2b20bb235eb8e0b12025a84bc17e33536f522a369015ba761daa0275d8 = $this->env->getExtension("native_profiler");
        $__internal_15afcd2b20bb235eb8e0b12025a84bc17e33536f522a369015ba761daa0275d8->enter($__internal_15afcd2b20bb235eb8e0b12025a84bc17e33536f522a369015ba761daa0275d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_15afcd2b20bb235eb8e0b12025a84bc17e33536f522a369015ba761daa0275d8->leave($__internal_15afcd2b20bb235eb8e0b12025a84bc17e33536f522a369015ba761daa0275d8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36c7b64f61aa7482af02c73cd9beb3d56c9593ebc12fe689ecc66520e7caff80 = $this->env->getExtension("native_profiler");
        $__internal_36c7b64f61aa7482af02c73cd9beb3d56c9593ebc12fe689ecc66520e7caff80->enter($__internal_36c7b64f61aa7482af02c73cd9beb3d56c9593ebc12fe689ecc66520e7caff80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_36c7b64f61aa7482af02c73cd9beb3d56c9593ebc12fe689ecc66520e7caff80->leave($__internal_36c7b64f61aa7482af02c73cd9beb3d56c9593ebc12fe689ecc66520e7caff80_prof);

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
