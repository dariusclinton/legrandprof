<?php

/* LGPUserBundle:Avis:avis_not_read.html.twig */
class __TwigTemplate_d7ff04cea2be11e1ba7a944f289876b295195f4f7ae521e7de44a1588b9a1901 extends Twig_Template
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
        $__internal_03e12e1e189fbeddd65d27e260332a9bf9d5e41fd7ad22650ef068816a4cf9ae = $this->env->getExtension("native_profiler");
        $__internal_03e12e1e189fbeddd65d27e260332a9bf9d5e41fd7ad22650ef068816a4cf9ae->enter($__internal_03e12e1e189fbeddd65d27e260332a9bf9d5e41fd7ad22650ef068816a4cf9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:avis_not_read.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))) > 0)) {
            // line 2
            echo "  ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis"))), "html", null, true);
            echo "
";
        }
        
        $__internal_03e12e1e189fbeddd65d27e260332a9bf9d5e41fd7ad22650ef068816a4cf9ae->leave($__internal_03e12e1e189fbeddd65d27e260332a9bf9d5e41fd7ad22650ef068816a4cf9ae_prof);

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
