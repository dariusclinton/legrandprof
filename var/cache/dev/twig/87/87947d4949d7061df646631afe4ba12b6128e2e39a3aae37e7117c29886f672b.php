<?php

/* LGPUserBundle:Avis:add.html.twig */
class __TwigTemplate_6a88d2a2f0a77016e5516f783f6a3d0e21113b81a4b628bea429a33880d89069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Avis:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feb97c4b06c8da053a1e15e82d3224867ffd576f2578132fda48e799ca1264fd = $this->env->getExtension("native_profiler");
        $__internal_feb97c4b06c8da053a1e15e82d3224867ffd576f2578132fda48e799ca1264fd->enter($__internal_feb97c4b06c8da053a1e15e82d3224867ffd576f2578132fda48e799ca1264fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feb97c4b06c8da053a1e15e82d3224867ffd576f2578132fda48e799ca1264fd->leave($__internal_feb97c4b06c8da053a1e15e82d3224867ffd576f2578132fda48e799ca1264fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85173de8d53f3eb12ae060081a5a7c18e19ceb37beb76b6bfcb28d0ea8bad657 = $this->env->getExtension("native_profiler");
        $__internal_85173de8d53f3eb12ae060081a5a7c18e19ceb37beb76b6bfcb28d0ea8bad657->enter($__internal_85173de8d53f3eb12ae060081a5a7c18e19ceb37beb76b6bfcb28d0ea8bad657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_85173de8d53f3eb12ae060081a5a7c18e19ceb37beb76b6bfcb28d0ea8bad657->leave($__internal_85173de8d53f3eb12ae060081a5a7c18e19ceb37beb76b6bfcb28d0ea8bad657_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8200d7f3e73d4fe6ddba32b61f7629e45080713dfa9c5d558e3678b2999f532d = $this->env->getExtension("native_profiler");
        $__internal_8200d7f3e73d4fe6ddba32b61f7629e45080713dfa9c5d558e3678b2999f532d->enter($__internal_8200d7f3e73d4fe6ddba32b61f7629e45080713dfa9c5d558e3678b2999f532d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_8200d7f3e73d4fe6ddba32b61f7629e45080713dfa9c5d558e3678b2999f532d->leave($__internal_8200d7f3e73d4fe6ddba32b61f7629e45080713dfa9c5d558e3678b2999f532d_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajout d'avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Ajout d'un avis</h1>*/
/* */
/*   {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}*/
/*   */
/* {% endblock %}*/
