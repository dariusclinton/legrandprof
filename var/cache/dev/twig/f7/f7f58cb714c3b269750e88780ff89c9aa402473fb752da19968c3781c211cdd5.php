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
        $__internal_c162b4ec9de625958b76d40d7105f9bc327c10cd8e756bcfbdb80cf078ef334e = $this->env->getExtension("native_profiler");
        $__internal_c162b4ec9de625958b76d40d7105f9bc327c10cd8e756bcfbdb80cf078ef334e->enter($__internal_c162b4ec9de625958b76d40d7105f9bc327c10cd8e756bcfbdb80cf078ef334e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_c162b4ec9de625958b76d40d7105f9bc327c10cd8e756bcfbdb80cf078ef334e->leave($__internal_c162b4ec9de625958b76d40d7105f9bc327c10cd8e756bcfbdb80cf078ef334e_prof);

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
