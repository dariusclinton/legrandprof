<?php

/* LGPUserBundle:Avis:avis_not_read.html.twig */
class __TwigTemplate_13957eca25186e919b8f4685f402ea11899bb02bf4d4a239f89c69203d1f2e89 extends Twig_Template
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
        $__internal_9772c04ca4c1eb573e11b9ad7f570bba925396ff3af4a7d2da523d82635082d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9772c04ca4c1eb573e11b9ad7f570bba925396ff3af4a7d2da523d82635082d0->enter($__internal_9772c04ca4c1eb573e11b9ad7f570bba925396ff3af4a7d2da523d82635082d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:avis_not_read.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))) > 0)) {
            // line 2
            echo "  ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))), "html", null, true);
            echo "
";
        }
        
        $__internal_9772c04ca4c1eb573e11b9ad7f570bba925396ff3af4a7d2da523d82635082d0->leave($__internal_9772c04ca4c1eb573e11b9ad7f570bba925396ff3af4a7d2da523d82635082d0_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:avis_not_read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if avis|length > 0 %}
  {{ avis | length }}
{% endif %}";
    }
}
