<?php

/* LGPUserBundle:Avis:voir.html.twig */
class __TwigTemplate_b89a4fa6cb7db3c538f96cbd48d85e8f63e4625b3ad8cb3d0e27771f85dec260 extends Twig_Template
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
        $__internal_d8483f400eeec54804b7800567c7eca17941db6699036287587c1134e994c0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8483f400eeec54804b7800567c7eca17941db6699036287587c1134e994c0ba->enter($__internal_d8483f400eeec54804b7800567c7eca17941db6699036287587c1134e994c0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:voir.html.twig"));

        // line 1
        echo "<h3>Note: </h3>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")), "note", array()), "html", null, true);
        echo "
<h3>Commentaire</h3>
<p>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")), "commentaire", array()), "html", null, true);
        echo "</p>";
        
        $__internal_d8483f400eeec54804b7800567c7eca17941db6699036287587c1134e994c0ba->leave($__internal_d8483f400eeec54804b7800567c7eca17941db6699036287587c1134e994c0ba_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<h3>Note: </h3>{{ avis.note }}
<h3>Commentaire</h3>
<p>{{ avis.commentaire }}</p>";
    }
}
