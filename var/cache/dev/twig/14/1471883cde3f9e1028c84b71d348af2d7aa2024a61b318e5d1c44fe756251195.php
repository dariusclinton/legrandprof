<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_1c933f1cbfdfaf07b56dd1fbf434cbddc19fd55f5a2d572d1023c1cdd7b7e0d7 extends Twig_Template
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
        $__internal_4c709dd5f80f98403b50f90a7345ef9a82b7c26fb7739a76229e27990adb326c = $this->env->getExtension("native_profiler");
        $__internal_4c709dd5f80f98403b50f90a7345ef9a82b7c26fb7739a76229e27990adb326c->enter($__internal_4c709dd5f80f98403b50f90a7345ef9a82b7c26fb7739a76229e27990adb326c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4c709dd5f80f98403b50f90a7345ef9a82b7c26fb7739a76229e27990adb326c->leave($__internal_4c709dd5f80f98403b50f90a7345ef9a82b7c26fb7739a76229e27990adb326c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
