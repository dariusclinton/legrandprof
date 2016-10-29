<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_3aecda771b3ec8f72d747a96db6cdc44398304f9cb5db475566ed21f51ea1fa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPUserBundle::layout.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
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
        $__internal_794d4510a002c4d292826a7a7ebfb891ab0af1640e225339b5a9bb77b95ef389 = $this->env->getExtension("native_profiler");
        $__internal_794d4510a002c4d292826a7a7ebfb891ab0af1640e225339b5a9bb77b95ef389->enter($__internal_794d4510a002c4d292826a7a7ebfb891ab0af1640e225339b5a9bb77b95ef389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_794d4510a002c4d292826a7a7ebfb891ab0af1640e225339b5a9bb77b95ef389->leave($__internal_794d4510a002c4d292826a7a7ebfb891ab0af1640e225339b5a9bb77b95ef389_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a681ac1e5149e02f3e94ecc920b6e90f191e620ea833faa12f9859ccfed911b = $this->env->getExtension("native_profiler");
        $__internal_0a681ac1e5149e02f3e94ecc920b6e90f191e620ea833faa12f9859ccfed911b->enter($__internal_0a681ac1e5149e02f3e94ecc920b6e90f191e620ea833faa12f9859ccfed911b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Login - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0a681ac1e5149e02f3e94ecc920b6e90f191e620ea833faa12f9859ccfed911b->leave($__internal_0a681ac1e5149e02f3e94ecc920b6e90f191e620ea833faa12f9859ccfed911b_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_323387cbc056b76450f63494daa0f70db942d98f83f139511c02aef966c60602 = $this->env->getExtension("native_profiler");
        $__internal_323387cbc056b76450f63494daa0f70db942d98f83f139511c02aef966c60602->enter($__internal_323387cbc056b76450f63494daa0f70db942d98f83f139511c02aef966c60602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h1>Oups erreur 404 !!! <small>La page demandée est introuvable !!!</small></h1>
                </div>
            </div>

        </div>

    </div>

";
        
        $__internal_323387cbc056b76450f63494daa0f70db942d98f83f139511c02aef966c60602->leave($__internal_323387cbc056b76450f63494daa0f70db942d98f83f139511c02aef966c60602_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
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
    Login - {{ parent() }}
{% endblock %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}

    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <h1>Oups erreur 404 !!! <small>La page demandée est introuvable !!!</small></h1>
                </div>
            </div>

        </div>

    </div>

{% endblock fos_user_content %}";
    }
}
