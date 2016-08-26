<?php

/* @LGPCore/layout.html.twig */
class __TwigTemplate_129db1a7c18cdf2c8efd1b285948969fd5157eb8c89b733fd29a1b46cfa64f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LGPCore/layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87a779459df8cb81dcd00eb004628238647848150e62af58a8a84301573343ef = $this->env->getExtension("native_profiler");
        $__internal_87a779459df8cb81dcd00eb004628238647848150e62af58a8a84301573343ef->enter($__internal_87a779459df8cb81dcd00eb004628238647848150e62af58a8a84301573343ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87a779459df8cb81dcd00eb004628238647848150e62af58a8a84301573343ef->leave($__internal_87a779459df8cb81dcd00eb004628238647848150e62af58a8a84301573343ef_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_15bd5f36e2b2468b4c3932dafea60ff16fb6038ad38f522a6922332ca1c5e373 = $this->env->getExtension("native_profiler");
        $__internal_15bd5f36e2b2468b4c3932dafea60ff16fb6038ad38f522a6922332ca1c5e373->enter($__internal_15bd5f36e2b2468b4c3932dafea60ff16fb6038ad38f522a6922332ca1c5e373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "


";
        
        $__internal_15bd5f36e2b2468b4c3932dafea60ff16fb6038ad38f522a6922332ca1c5e373->leave($__internal_15bd5f36e2b2468b4c3932dafea60ff16fb6038ad38f522a6922332ca1c5e373_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
