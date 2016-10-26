<?php

/* LGPUserBundle:Message:voir.html.twig */
class __TwigTemplate_3366b3484befc51abf66cbb5ee25774cc5a078b780183bd3782f4d3543a9e46b extends Twig_Template
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
        $__internal_986bc146e3906229de1cdcf178aaa4b1770c96d138bce3554d5c9658c515a643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986bc146e3906229de1cdcf178aaa4b1770c96d138bce3554d5c9658c515a643->enter($__internal_986bc146e3906229de1cdcf178aaa4b1770c96d138bce3554d5c9658c515a643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:voir.html.twig"));

        // line 1
        echo "
<div class=\"message-title\">
    <h4><i>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "expediteur", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "expediteur", array()), "nom", array()), "html", null, true);
        echo "</i></h4>
</div>
<div class=\"message-content\">
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "contenu", array()), "html", null, true);
        echo "</p>
</div>

";
        
        $__internal_986bc146e3906229de1cdcf178aaa4b1770c96d138bce3554d5c9658c515a643->leave($__internal_986bc146e3906229de1cdcf178aaa4b1770c96d138bce3554d5c9658c515a643_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Message:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "
<div class=\"message-title\">
    <h4><i>{{ message.expediteur.prenoms }} {{ message.expediteur.nom }}</i></h4>
</div>
<div class=\"message-content\">
    <p>{{ message.contenu }}</p>
</div>

";
    }
}
