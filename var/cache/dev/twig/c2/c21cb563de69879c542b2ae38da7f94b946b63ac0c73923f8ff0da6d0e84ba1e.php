<?php

/* @LGPUser/Avis/update.html.twig */
class __TwigTemplate_955b54a18d8a4ef0ae1b19e13e7af0dde5d84259786d02f20247146380ab4be3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Avis/update.html.twig", 1);
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
        $__internal_c92976cf531346606e59f4e512f847a0961656b2045ad2fb76ace6e276af416e = $this->env->getExtension("native_profiler");
        $__internal_c92976cf531346606e59f4e512f847a0961656b2045ad2fb76ace6e276af416e->enter($__internal_c92976cf531346606e59f4e512f847a0961656b2045ad2fb76ace6e276af416e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Avis/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c92976cf531346606e59f4e512f847a0961656b2045ad2fb76ace6e276af416e->leave($__internal_c92976cf531346606e59f4e512f847a0961656b2045ad2fb76ace6e276af416e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bb09c765399c7f67a41669458c082d1ea16bcdd75c2df59c9903316cc2cc9c4 = $this->env->getExtension("native_profiler");
        $__internal_8bb09c765399c7f67a41669458c082d1ea16bcdd75c2df59c9903316cc2cc9c4->enter($__internal_8bb09c765399c7f67a41669458c082d1ea16bcdd75c2df59c9903316cc2cc9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modification d'un avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8bb09c765399c7f67a41669458c082d1ea16bcdd75c2df59c9903316cc2cc9c4->leave($__internal_8bb09c765399c7f67a41669458c082d1ea16bcdd75c2df59c9903316cc2cc9c4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_10d08d7696a25b0269a42951e72bf75b3e1e587928c073adb31a65e0d4948a0c = $this->env->getExtension("native_profiler");
        $__internal_10d08d7696a25b0269a42951e72bf75b3e1e587928c073adb31a65e0d4948a0c->enter($__internal_10d08d7696a25b0269a42951e72bf75b3e1e587928c073adb31a65e0d4948a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Modification d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "@LGPUser/Avis/update.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_10d08d7696a25b0269a42951e72bf75b3e1e587928c073adb31a65e0d4948a0c->leave($__internal_10d08d7696a25b0269a42951e72bf75b3e1e587928c073adb31a65e0d4948a0c_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Avis/update.html.twig";
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
/*   Modification d'un avis - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Modification d'un avis</h1>*/
/* */
/*   {% include 'LGPUserBundle:Avis:formulaire.html.twig'%}*/
/*   */
/* {% endblock %}*/
