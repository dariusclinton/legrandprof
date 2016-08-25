<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d9179b78c97a5ff52afc8861ccae44918e832eaf0c1d4832bc57c8c124ed0b78 extends Twig_Template
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
        $__internal_c3d9fed014b221cbffadc6d479adb6432b088d28c5964dbf56cc413bcab97f70 = $this->env->getExtension("native_profiler");
        $__internal_c3d9fed014b221cbffadc6d479adb6432b088d28c5964dbf56cc413bcab97f70->enter($__internal_c3d9fed014b221cbffadc6d479adb6432b088d28c5964dbf56cc413bcab97f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c3d9fed014b221cbffadc6d479adb6432b088d28c5964dbf56cc413bcab97f70->leave($__internal_c3d9fed014b221cbffadc6d479adb6432b088d28c5964dbf56cc413bcab97f70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
