<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_6ae302768f7d95243c2f9f9a31f8a91a1d925b474d93316330c060c569095be0 extends Twig_Template
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
        $__internal_a8a98670e3ecf6b028cbeea84e1f1a4094639fd98cebc8fa29897b4a1798b319 = $this->env->getExtension("native_profiler");
        $__internal_a8a98670e3ecf6b028cbeea84e1f1a4094639fd98cebc8fa29897b4a1798b319->enter($__internal_a8a98670e3ecf6b028cbeea84e1f1a4094639fd98cebc8fa29897b4a1798b319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_a8a98670e3ecf6b028cbeea84e1f1a4094639fd98cebc8fa29897b4a1798b319->leave($__internal_a8a98670e3ecf6b028cbeea84e1f1a4094639fd98cebc8fa29897b4a1798b319_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
