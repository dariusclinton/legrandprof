<?php

/* LGPUserBundle:Avis:voir.html.twig */
class __TwigTemplate_f17da733bd7ba47fef836983e6a778666da6c4c3ec552ec026e2ee7cf005531e extends Twig_Template
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
        $__internal_64965027eb3ed7d88ce2f41a46c46defa9b6cf827f378e147f134f4446e3be15 = $this->env->getExtension("native_profiler");
        $__internal_64965027eb3ed7d88ce2f41a46c46defa9b6cf827f378e147f134f4446e3be15->enter($__internal_64965027eb3ed7d88ce2f41a46c46defa9b6cf827f378e147f134f4446e3be15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:voir.html.twig"));

        // line 1
        echo "<h3>Note: </h3>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")), "note", array()), "html", null, true);
        echo "
<h3>Commentaire</h3>
<p>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["avis"]) ? $context["avis"] : $this->getContext($context, "avis")), "commentaire", array()), "html", null, true);
        echo "</p>";
        
        $__internal_64965027eb3ed7d88ce2f41a46c46defa9b6cf827f378e147f134f4446e3be15->leave($__internal_64965027eb3ed7d88ce2f41a46c46defa9b6cf827f378e147f134f4446e3be15_prof);

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
