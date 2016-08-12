<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bb1c1bf54967360ed20dc62e78f8438e9903667783f15b33fa4378f7dcfc1b35 extends Twig_Template
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
        $__internal_a3e3ba4040673a37a7e88cd9582a5787bf59afb253394016534ca80791975a7f = $this->env->getExtension("native_profiler");
        $__internal_a3e3ba4040673a37a7e88cd9582a5787bf59afb253394016534ca80791975a7f->enter($__internal_a3e3ba4040673a37a7e88cd9582a5787bf59afb253394016534ca80791975a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_a3e3ba4040673a37a7e88cd9582a5787bf59afb253394016534ca80791975a7f->leave($__internal_a3e3ba4040673a37a7e88cd9582a5787bf59afb253394016534ca80791975a7f_prof);

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
