<?php

/* LGPUserBundle:Message:voir.html.twig */
class __TwigTemplate_08bfc3cd1a826c9627fd6663b632da6fe7b8f7c5537ecbade3f4e8e484aaec4f extends Twig_Template
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
        $__internal_77ab32c6ecb0e8a54fced70345c8e1e9cc2ffd234453de52f18d7ca5b858b23b = $this->env->getExtension("native_profiler");
        $__internal_77ab32c6ecb0e8a54fced70345c8e1e9cc2ffd234453de52f18d7ca5b858b23b->enter($__internal_77ab32c6ecb0e8a54fced70345c8e1e9cc2ffd234453de52f18d7ca5b858b23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:voir.html.twig"));

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
        
        $__internal_77ab32c6ecb0e8a54fced70345c8e1e9cc2ffd234453de52f18d7ca5b858b23b->leave($__internal_77ab32c6ecb0e8a54fced70345c8e1e9cc2ffd234453de52f18d7ca5b858b23b_prof);

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
