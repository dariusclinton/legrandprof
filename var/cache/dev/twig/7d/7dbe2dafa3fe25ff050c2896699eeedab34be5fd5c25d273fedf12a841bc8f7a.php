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
        $__internal_1a06df19637a34a46fc988acc424cd258d33a7c696ba56f1b2bbc0b13f7985dd = $this->env->getExtension("native_profiler");
        $__internal_1a06df19637a34a46fc988acc424cd258d33a7c696ba56f1b2bbc0b13f7985dd->enter($__internal_1a06df19637a34a46fc988acc424cd258d33a7c696ba56f1b2bbc0b13f7985dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a06df19637a34a46fc988acc424cd258d33a7c696ba56f1b2bbc0b13f7985dd->leave($__internal_1a06df19637a34a46fc988acc424cd258d33a7c696ba56f1b2bbc0b13f7985dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f632c62a7b8724bdd67053bd7268cf670a0b9cad2317f04e045e9634c8d317c1 = $this->env->getExtension("native_profiler");
        $__internal_f632c62a7b8724bdd67053bd7268cf670a0b9cad2317f04e045e9634c8d317c1->enter($__internal_f632c62a7b8724bdd67053bd7268cf670a0b9cad2317f04e045e9634c8d317c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f632c62a7b8724bdd67053bd7268cf670a0b9cad2317f04e045e9634c8d317c1->leave($__internal_f632c62a7b8724bdd67053bd7268cf670a0b9cad2317f04e045e9634c8d317c1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a701f6745cf83e814bda709218b47c88f9f60cbe859be11d4d2fdb4d598c2f8e = $this->env->getExtension("native_profiler");
        $__internal_a701f6745cf83e814bda709218b47c88f9f60cbe859be11d4d2fdb4d598c2f8e->enter($__internal_a701f6745cf83e814bda709218b47c88f9f60cbe859be11d4d2fdb4d598c2f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a701f6745cf83e814bda709218b47c88f9f60cbe859be11d4d2fdb4d598c2f8e->leave($__internal_a701f6745cf83e814bda709218b47c88f9f60cbe859be11d4d2fdb4d598c2f8e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff017a45f7d43f3965fb27d5b0b60c20ed5972684baafd03c460fe79e09d6bb1 = $this->env->getExtension("native_profiler");
        $__internal_ff017a45f7d43f3965fb27d5b0b60c20ed5972684baafd03c460fe79e09d6bb1->enter($__internal_ff017a45f7d43f3965fb27d5b0b60c20ed5972684baafd03c460fe79e09d6bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ff017a45f7d43f3965fb27d5b0b60c20ed5972684baafd03c460fe79e09d6bb1->leave($__internal_ff017a45f7d43f3965fb27d5b0b60c20ed5972684baafd03c460fe79e09d6bb1_prof);

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
