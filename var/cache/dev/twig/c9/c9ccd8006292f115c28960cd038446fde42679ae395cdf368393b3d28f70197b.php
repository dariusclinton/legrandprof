<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_dafc26c5342b879f08b03c1a2b61d5789976de4b27dcbd5a24b235428589c573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_ae2ac3b6087af58321490b1b7c5f4daf87170a584d0d7c769f117f84570dbe41 = $this->env->getExtension("native_profiler");
        $__internal_ae2ac3b6087af58321490b1b7c5f4daf87170a584d0d7c769f117f84570dbe41->enter($__internal_ae2ac3b6087af58321490b1b7c5f4daf87170a584d0d7c769f117f84570dbe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae2ac3b6087af58321490b1b7c5f4daf87170a584d0d7c769f117f84570dbe41->leave($__internal_ae2ac3b6087af58321490b1b7c5f4daf87170a584d0d7c769f117f84570dbe41_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_75ea3581e049b5c5d2178b85207d1fe5383a19954b15cd1f27025fa21f174450 = $this->env->getExtension("native_profiler");
        $__internal_75ea3581e049b5c5d2178b85207d1fe5383a19954b15cd1f27025fa21f174450->enter($__internal_75ea3581e049b5c5d2178b85207d1fe5383a19954b15cd1f27025fa21f174450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_75ea3581e049b5c5d2178b85207d1fe5383a19954b15cd1f27025fa21f174450->leave($__internal_75ea3581e049b5c5d2178b85207d1fe5383a19954b15cd1f27025fa21f174450_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_695419acd354699fe770d128b414ad367f071c4cbf1829c4b1c6fc38099b4d53 = $this->env->getExtension("native_profiler");
        $__internal_695419acd354699fe770d128b414ad367f071c4cbf1829c4b1c6fc38099b4d53->enter($__internal_695419acd354699fe770d128b414ad367f071c4cbf1829c4b1c6fc38099b4d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_695419acd354699fe770d128b414ad367f071c4cbf1829c4b1c6fc38099b4d53->leave($__internal_695419acd354699fe770d128b414ad367f071c4cbf1829c4b1c6fc38099b4d53_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebc4bd8545e2ba399628ae504e695ced0ceaf1c17bd94f1b518653af1cb3721d = $this->env->getExtension("native_profiler");
        $__internal_ebc4bd8545e2ba399628ae504e695ced0ceaf1c17bd94f1b518653af1cb3721d->enter($__internal_ebc4bd8545e2ba399628ae504e695ced0ceaf1c17bd94f1b518653af1cb3721d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ebc4bd8545e2ba399628ae504e695ced0ceaf1c17bd94f1b518653af1cb3721d->leave($__internal_ebc4bd8545e2ba399628ae504e695ced0ceaf1c17bd94f1b518653af1cb3721d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
