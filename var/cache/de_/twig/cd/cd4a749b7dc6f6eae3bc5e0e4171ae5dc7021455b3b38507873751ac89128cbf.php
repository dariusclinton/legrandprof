<?php

/* @LGPCore/layout.html.twig */
class __TwigTemplate_129db1a7c18cdf2c8efd1b285948969fd5157eb8c89b733fd29a1b46cfa64f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LGPCore/layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daaa7eb8bf107bbffe356a8c8808fd59824e38207fbac839bd08f1a5cd8befab = $this->env->getExtension("native_profiler");
        $__internal_daaa7eb8bf107bbffe356a8c8808fd59824e38207fbac839bd08f1a5cd8befab->enter($__internal_daaa7eb8bf107bbffe356a8c8808fd59824e38207fbac839bd08f1a5cd8befab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCore/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daaa7eb8bf107bbffe356a8c8808fd59824e38207fbac839bd08f1a5cd8befab->leave($__internal_daaa7eb8bf107bbffe356a8c8808fd59824e38207fbac839bd08f1a5cd8befab_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_fae633ac5026004312fafb2d2ae4c2c77066988ad14f7dbcbab0c8a6b243957d = $this->env->getExtension("native_profiler");
        $__internal_fae633ac5026004312fafb2d2ae4c2c77066988ad14f7dbcbab0c8a6b243957d->enter($__internal_fae633ac5026004312fafb2d2ae4c2c77066988ad14f7dbcbab0c8a6b243957d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fae633ac5026004312fafb2d2ae4c2c77066988ad14f7dbcbab0c8a6b243957d->leave($__internal_fae633ac5026004312fafb2d2ae4c2c77066988ad14f7dbcbab0c8a6b243957d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c834b0cb5a8cf52b0e7642db0c52cacad67009896619ea1a3a7af5c2edd1691 = $this->env->getExtension("native_profiler");
        $__internal_7c834b0cb5a8cf52b0e7642db0c52cacad67009896619ea1a3a7af5c2edd1691->enter($__internal_7c834b0cb5a8cf52b0e7642db0c52cacad67009896619ea1a3a7af5c2edd1691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
 
";
        
        $__internal_7c834b0cb5a8cf52b0e7642db0c52cacad67009896619ea1a3a7af5c2edd1691->leave($__internal_7c834b0cb5a8cf52b0e7642db0c52cacad67009896619ea1a3a7af5c2edd1691_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     */
/*  */
/* {% endblock %}*/
