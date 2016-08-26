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
        $__internal_62516eb4e08be162c7ca462fb26c1048f05a24c89acab2339060b7bfebb8b364 = $this->env->getExtension("native_profiler");
        $__internal_62516eb4e08be162c7ca462fb26c1048f05a24c89acab2339060b7bfebb8b364->enter($__internal_62516eb4e08be162c7ca462fb26c1048f05a24c89acab2339060b7bfebb8b364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Avis:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62516eb4e08be162c7ca462fb26c1048f05a24c89acab2339060b7bfebb8b364->leave($__internal_62516eb4e08be162c7ca462fb26c1048f05a24c89acab2339060b7bfebb8b364_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd56e5694bce44ec87b9a95f57c1163fd1d9cc518a62071b8ffeccc3138dbeda = $this->env->getExtension("native_profiler");
        $__internal_bd56e5694bce44ec87b9a95f57c1163fd1d9cc518a62071b8ffeccc3138dbeda->enter($__internal_bd56e5694bce44ec87b9a95f57c1163fd1d9cc518a62071b8ffeccc3138dbeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajout d'avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bd56e5694bce44ec87b9a95f57c1163fd1d9cc518a62071b8ffeccc3138dbeda->leave($__internal_bd56e5694bce44ec87b9a95f57c1163fd1d9cc518a62071b8ffeccc3138dbeda_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f3bd63495a8be368a15c9306613c8d06b9a0cce83a7bfa034747482bd129381 = $this->env->getExtension("native_profiler");
        $__internal_6f3bd63495a8be368a15c9306613c8d06b9a0cce83a7bfa034747482bd129381->enter($__internal_6f3bd63495a8be368a15c9306613c8d06b9a0cce83a7bfa034747482bd129381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Ajout d'un avis</h1>

  ";
        // line 10
        $this->loadTemplate("LGPUserBundle:Avis:formulaire.html.twig", "LGPUserBundle:Avis:add.html.twig", 10)->display($context);
        // line 11
        echo "  
";
        
        $__internal_6f3bd63495a8be368a15c9306613c8d06b9a0cce83a7bfa034747482bd129381->leave($__internal_6f3bd63495a8be368a15c9306613c8d06b9a0cce83a7bfa034747482bd129381_prof);

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
