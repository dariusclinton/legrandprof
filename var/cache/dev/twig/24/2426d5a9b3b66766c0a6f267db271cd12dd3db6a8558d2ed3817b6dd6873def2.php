<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b5f1ed0932088ff8c4b5ffcc028a1ccdbb6933b32917acd1998a711e2e051dd2 extends Twig_Template
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
        $__internal_5441014f576d723f60aa9df5bb485e1f22cc7db02570df11c1bda8eb50e28d96 = $this->env->getExtension("native_profiler");
        $__internal_5441014f576d723f60aa9df5bb485e1f22cc7db02570df11c1bda8eb50e28d96->enter($__internal_5441014f576d723f60aa9df5bb485e1f22cc7db02570df11c1bda8eb50e28d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5441014f576d723f60aa9df5bb485e1f22cc7db02570df11c1bda8eb50e28d96->leave($__internal_5441014f576d723f60aa9df5bb485e1f22cc7db02570df11c1bda8eb50e28d96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
