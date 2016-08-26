<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_dec20d118871bd98408f381ea9c7af3807da6d00ce8bbfda6746ff9bf8a2618b extends Twig_Template
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
        $__internal_c9cbfc35fa869b91c064f578b04f9d347f6e2d312316de11eb5ef4137391a42f = $this->env->getExtension("native_profiler");
        $__internal_c9cbfc35fa869b91c064f578b04f9d347f6e2d312316de11eb5ef4137391a42f->enter($__internal_c9cbfc35fa869b91c064f578b04f9d347f6e2d312316de11eb5ef4137391a42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c9cbfc35fa869b91c064f578b04f9d347f6e2d312316de11eb5ef4137391a42f->leave($__internal_c9cbfc35fa869b91c064f578b04f9d347f6e2d312316de11eb5ef4137391a42f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
