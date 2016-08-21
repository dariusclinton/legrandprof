<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b8bb6847961a74b725e4024b1332655d5ce1b2491f04a550b3538b79739e54a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e9dfef92f245edf114fe2c7f2daef4afb6c5fee615dde15d7c19e1bf66df8ad = $this->env->getExtension("native_profiler");
        $__internal_2e9dfef92f245edf114fe2c7f2daef4afb6c5fee615dde15d7c19e1bf66df8ad->enter($__internal_2e9dfef92f245edf114fe2c7f2daef4afb6c5fee615dde15d7c19e1bf66df8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e9dfef92f245edf114fe2c7f2daef4afb6c5fee615dde15d7c19e1bf66df8ad->leave($__internal_2e9dfef92f245edf114fe2c7f2daef4afb6c5fee615dde15d7c19e1bf66df8ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_75ffe28186bd56fea02967319431741cbf584891358bc36861988f3b1c4f99e8 = $this->env->getExtension("native_profiler");
        $__internal_75ffe28186bd56fea02967319431741cbf584891358bc36861988f3b1c4f99e8->enter($__internal_75ffe28186bd56fea02967319431741cbf584891358bc36861988f3b1c4f99e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_75ffe28186bd56fea02967319431741cbf584891358bc36861988f3b1c4f99e8->leave($__internal_75ffe28186bd56fea02967319431741cbf584891358bc36861988f3b1c4f99e8_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aac02e2758cf6abfecb7a71776bff6d4e53f5310c4fb04e1be60ca4808681753 = $this->env->getExtension("native_profiler");
        $__internal_aac02e2758cf6abfecb7a71776bff6d4e53f5310c4fb04e1be60ca4808681753->enter($__internal_aac02e2758cf6abfecb7a71776bff6d4e53f5310c4fb04e1be60ca4808681753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
  ";
        
        $__internal_aac02e2758cf6abfecb7a71776bff6d4e53f5310c4fb04e1be60ca4808681753->leave($__internal_aac02e2758cf6abfecb7a71776bff6d4e53f5310c4fb04e1be60ca4808681753_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  47 => 9,  44 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/* */
/*   {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
