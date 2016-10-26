<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_562bdb9e9df4a0286c8891ae24c7b780ebd95c9c0440d850e07d11a420705637 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPUserBundle::layout.html.twig", "TwigBundle:Exception:error500.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ec867414ebb26b338c9ef940535e37a41c9bec763dc6b3a47e1be49e950b1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec867414ebb26b338c9ef940535e37a41c9bec763dc6b3a47e1be49e950b1b4->enter($__internal_0ec867414ebb26b338c9ef940535e37a41c9bec763dc6b3a47e1be49e950b1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ec867414ebb26b338c9ef940535e37a41c9bec763dc6b3a47e1be49e950b1b4->leave($__internal_0ec867414ebb26b338c9ef940535e37a41c9bec763dc6b3a47e1be49e950b1b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_52db239228ad543c3c1f8d1d03f971129653568d7cdd7f55836ac4d9a0a48384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52db239228ad543c3c1f8d1d03f971129653568d7cdd7f55836ac4d9a0a48384->enter($__internal_52db239228ad543c3c1f8d1d03f971129653568d7cdd7f55836ac4d9a0a48384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    500 - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_52db239228ad543c3c1f8d1d03f971129653568d7cdd7f55836ac4d9a0a48384->leave($__internal_52db239228ad543c3c1f8d1d03f971129653568d7cdd7f55836ac4d9a0a48384_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_832fe46819f82577cfac898eabdb53d989aea06e2df71014a91b762263946e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832fe46819f82577cfac898eabdb53d989aea06e2df71014a91b762263946e0d->enter($__internal_832fe46819f82577cfac898eabdb53d989aea06e2df71014a91b762263946e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h1>Oups erreur 500 !!! <small> Une erreur est survenue sur le serveur !!!</small></h1>
                </div>
            </div>

        </div>

    </div>

";
        
        $__internal_832fe46819f82577cfac898eabdb53d989aea06e2df71014a91b762263946e0d->leave($__internal_832fe46819f82577cfac898eabdb53d989aea06e2df71014a91b762263946e0d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'LGPUserBundle::layout.html.twig' %}

{% block title %}
    500 - {{ parent() }}
{% endblock %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}

    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h1>Oups erreur 500 !!! <small> Une erreur est survenue sur le serveur !!!</small></h1>
                </div>
            </div>

        </div>

    </div>

{% endblock fos_user_content %}";
    }
}
