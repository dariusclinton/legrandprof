<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f6c388e1ff598ae8cdd76f78715350d8d833f74ac52e3ec995756e9846cc60af extends Twig_Template
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
        $__internal_0c88968f8c1a030c51390eb13848f5ecdeb3edbcc29786866af8471ec974aea7 = $this->env->getExtension("native_profiler");
        $__internal_0c88968f8c1a030c51390eb13848f5ecdeb3edbcc29786866af8471ec974aea7->enter($__internal_0c88968f8c1a030c51390eb13848f5ecdeb3edbcc29786866af8471ec974aea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0c88968f8c1a030c51390eb13848f5ecdeb3edbcc29786866af8471ec974aea7->leave($__internal_0c88968f8c1a030c51390eb13848f5ecdeb3edbcc29786866af8471ec974aea7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
