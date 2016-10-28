<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_f36f6b3f0efc2f3cfb54356b97ea80ec285666a76e4eb7c6e6e67a864a0f2a5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ebd5a0accd869b129ef456949cbec9040027072980f1070cc341a78a60c4a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ebd5a0accd869b129ef456949cbec9040027072980f1070cc341a78a60c4a27->enter($__internal_8ebd5a0accd869b129ef456949cbec9040027072980f1070cc341a78a60c4a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ebd5a0accd869b129ef456949cbec9040027072980f1070cc341a78a60c4a27->leave($__internal_8ebd5a0accd869b129ef456949cbec9040027072980f1070cc341a78a60c4a27_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8491868cccf9ae06b2e50d16818f71f1a427ca7ae9de7d4cd4fb9f60eb6cee1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8491868cccf9ae06b2e50d16818f71f1a427ca7ae9de7d4cd4fb9f60eb6cee1a->enter($__internal_8491868cccf9ae06b2e50d16818f71f1a427ca7ae9de7d4cd4fb9f60eb6cee1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"bg-grey\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\"><div style=\"padding-bottom:100px;padding-top:100px\"><p class=\"text-center alert-success\" style=\"padding:20px;\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
            ";
        // line 11
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 12
            echo "            <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    ";
        }
        
        $__internal_8491868cccf9ae06b2e50d16818f71f1a427ca7ae9de7d4cd4fb9f60eb6cee1a->leave($__internal_8491868cccf9ae06b2e50d16818f71f1a427ca7ae9de7d4cd4fb9f60eb6cee1a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  50 => 11,  46 => 10,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <div class=\"bg-grey\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\"><div style=\"padding-bottom:100px;padding-top:100px\"><p class=\"text-center alert-success\" style=\"padding:20px;\">{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
            {% if targetUrl %}
            <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    {% endif %}
{% endblock fos_user_content %}
";
    }
}
