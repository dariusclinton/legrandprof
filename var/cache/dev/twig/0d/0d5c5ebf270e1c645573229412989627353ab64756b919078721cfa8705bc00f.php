<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_af09c501d0ec5384c113b3acfd8b26d19e865a5601875ecfd16a3461ad329fbf extends Twig_Template
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
        $__internal_c2289ce49fb7b48fe6962e3c70f69e7d3c921fcdd602b489451eb1ea6ab87f2c = $this->env->getExtension("native_profiler");
        $__internal_c2289ce49fb7b48fe6962e3c70f69e7d3c921fcdd602b489451eb1ea6ab87f2c->enter($__internal_c2289ce49fb7b48fe6962e3c70f69e7d3c921fcdd602b489451eb1ea6ab87f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_c2289ce49fb7b48fe6962e3c70f69e7d3c921fcdd602b489451eb1ea6ab87f2c->leave($__internal_c2289ce49fb7b48fe6962e3c70f69e7d3c921fcdd602b489451eb1ea6ab87f2c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
