<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6445f467d7a072fadb83a7153261d776863bfcf96bdff5a9fc1cb92f04270efc extends Twig_Template
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
        $__internal_425c3173fc5898e78b173ce09ef1fee521fa2f094668dd426e25f99df13654ce = $this->env->getExtension("native_profiler");
        $__internal_425c3173fc5898e78b173ce09ef1fee521fa2f094668dd426e25f99df13654ce->enter($__internal_425c3173fc5898e78b173ce09ef1fee521fa2f094668dd426e25f99df13654ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_425c3173fc5898e78b173ce09ef1fee521fa2f094668dd426e25f99df13654ce->leave($__internal_425c3173fc5898e78b173ce09ef1fee521fa2f094668dd426e25f99df13654ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
