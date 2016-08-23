<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a365c43e2283cc114ef69c3c9bced7663943658741742b5854409f8c840b4449 extends Twig_Template
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
        $__internal_987e91ac8e44c73eb8bdece693f642862ff3e03cb092519233238aad76ad3db9 = $this->env->getExtension("native_profiler");
        $__internal_987e91ac8e44c73eb8bdece693f642862ff3e03cb092519233238aad76ad3db9->enter($__internal_987e91ac8e44c73eb8bdece693f642862ff3e03cb092519233238aad76ad3db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_987e91ac8e44c73eb8bdece693f642862ff3e03cb092519233238aad76ad3db9->leave($__internal_987e91ac8e44c73eb8bdece693f642862ff3e03cb092519233238aad76ad3db9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
