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
        $__internal_4ad84aab4d748ecb724d139217e1ef59cd65d6576a6e1d2b0757c2d43ddd1df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad84aab4d748ecb724d139217e1ef59cd65d6576a6e1d2b0757c2d43ddd1df7->enter($__internal_4ad84aab4d748ecb724d139217e1ef59cd65d6576a6e1d2b0757c2d43ddd1df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:avis_not_read.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))) > 0)) {
            // line 2
            echo "  ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))), "html", null, true);
            echo "
";
        }
        
        $__internal_4ad84aab4d748ecb724d139217e1ef59cd65d6576a6e1d2b0757c2d43ddd1df7->leave($__internal_4ad84aab4d748ecb724d139217e1ef59cd65d6576a6e1d2b0757c2d43ddd1df7_prof);

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
