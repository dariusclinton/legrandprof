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
        $__internal_302b5003cb166a3398dc7d5774c2aad31be76f3132065c2b65a55fe535114f7a = $this->env->getExtension("native_profiler");
        $__internal_302b5003cb166a3398dc7d5774c2aad31be76f3132065c2b65a55fe535114f7a->enter($__internal_302b5003cb166a3398dc7d5774c2aad31be76f3132065c2b65a55fe535114f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_302b5003cb166a3398dc7d5774c2aad31be76f3132065c2b65a55fe535114f7a->leave($__internal_302b5003cb166a3398dc7d5774c2aad31be76f3132065c2b65a55fe535114f7a_prof);

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
