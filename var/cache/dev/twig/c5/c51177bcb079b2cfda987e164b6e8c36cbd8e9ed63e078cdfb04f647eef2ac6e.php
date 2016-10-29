<?php

/* CoreSphereConsoleBundle:Console:console.html.twig */
class __TwigTemplate_1794557be1f973c292377807e4ab3e73b26534d0386d38d8ae4aff2c01e40aac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba43dfe7e15e902e244454361c3b695ea5888567b049feae1f2c82fdf6533037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba43dfe7e15e902e244454361c3b695ea5888567b049feae1f2c82fdf6533037->enter($__internal_ba43dfe7e15e902e244454361c3b695ea5888567b049feae1f2c82fdf6533037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba43dfe7e15e902e244454361c3b695ea5888567b049feae1f2c82fdf6533037->leave($__internal_ba43dfe7e15e902e244454361c3b695ea5888567b049feae1f2c82fdf6533037_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e9130e3881346a5958a5b228685733811df3cf5b91ac32533dcae20fa9bc33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9130e3881346a5958a5b228685733811df3cf5b91ac32533dcae20fa9bc33b->enter($__internal_9e9130e3881346a5958a5b228685733811df3cf5b91ac32533dcae20fa9bc33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_9e9130e3881346a5958a5b228685733811df3cf5b91ac32533dcae20fa9bc33b->leave($__internal_9e9130e3881346a5958a5b228685733811df3cf5b91ac32533dcae20fa9bc33b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e31c337376a7bc4239f36adcfb2c9b2b95eef7d761721f028326331655179976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31c337376a7bc4239f36adcfb2c9b2b95eef7d761721f028326331655179976->enter($__internal_e31c337376a7bc4239f36adcfb2c9b2b95eef7d761721f028326331655179976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_e31c337376a7bc4239f36adcfb2c9b2b95eef7d761721f028326331655179976->leave($__internal_e31c337376a7bc4239f36adcfb2c9b2b95eef7d761721f028326331655179976_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd179dd8eddb32fcc0ef74b0a0d9cbd40c1e542958d9b8df64e3e99eeed6cba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd179dd8eddb32fcc0ef74b0a0d9cbd40c1e542958d9b8df64e3e99eeed6cba1->enter($__internal_cd179dd8eddb32fcc0ef74b0a0d9cbd40c1e542958d9b8df64e3e99eeed6cba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_cd179dd8eddb32fcc0ef74b0a0d9cbd40c1e542958d9b8df64e3e99eeed6cba1->leave($__internal_cd179dd8eddb32fcc0ef74b0a0d9cbd40c1e542958d9b8df64e3e99eeed6cba1_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f92100c8f1f089f4b99b22ac1f9775d9784e5e4c77bfb001329bf96333e92a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f92100c8f1f089f4b99b22ac1f9775d9784e5e4c77bfb001329bf96333e92a0->enter($__internal_4f92100c8f1f089f4b99b22ac1f9775d9784e5e4c77bfb001329bf96333e92a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/console.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(function () {
            ";
        // line 21
        echo "            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : ";
        // line 23
        echo twig_jsonencode_filter(twig_get_array_keys_filter((isset($context["commands"]) ? $context["commands"] : $this->getContext($context, "commands"))));
        echo ".sort(),
                \"post_path\" : \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console_exec"), "js", null, true);
        echo "\",
                \"environment\" : \"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["environment"]) ? $context["environment"] : $this->getContext($context, "environment")), "js", null, true);
        echo "\",
                \"lang\" : {
                    \"loading\" : \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.loading"), "js", null, true);
        echo "\",
                    \"suggestion_head\" : \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.suggestion_head"), "js", null, true);
        echo "\",
                    \"environment\" : \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "js", null, true);
        echo "\",
                    \"empty_response\" : \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.empty_response"), "js", null, true);
        echo "\",
                    \"welcome_message\" : \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.welcome_message", array("%command%" => "<code class=\"console_command\">list</code>")), "js", null, true);
        echo "\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            ";
        // line 45
        echo "        });
    </script>
";
        
        $__internal_4f92100c8f1f089f4b99b22ac1f9775d9784e5e4c77bfb001329bf96333e92a0->leave($__internal_4f92100c8f1f089f4b99b22ac1f9775d9784e5e4c77bfb001329bf96333e92a0_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:console.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 45,  136 => 31,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  115 => 25,  111 => 24,  107 => 23,  103 => 21,  97 => 17,  92 => 16,  86 => 15,  78 => 12,  75 => 11,  69 => 10,  60 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'CoreSphereConsoleBundle::base.html.twig'  %}

{% block title %}{{ 'coresphere_console.headline.index'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/console.css') }}\" type=\"text/css\" />
{% endblock %}

{% block body %}
    {%  include 'CoreSphereConsoleBundle:Console:terminal.html.twig' %}
    {%  include 'CoreSphereConsoleBundle:Console:htmlTemplates.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/coresphereconsole/js/console.js') }}\"></script>
    <script>
        jQuery(function () {
            {% autoescape 'js' %}
            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : {{ commands|keys|json_encode|raw }}.sort(),
                \"post_path\" : \"{{ path('console_exec') }}\",
                \"environment\" : \"{{ environment }}\",
                \"lang\" : {
                    \"loading\" : \"{{ 'coresphere_console.loading'|trans }}\",
                    \"suggestion_head\" : \"{{ 'coresphere_console.suggestion_head'|trans }}\",
                    \"environment\" : \"{{ 'coresphere_console.environment'|trans }}\",
                    \"empty_response\" : \"{{ 'coresphere_console.empty_response'|trans }}\",
                    \"welcome_message\" : \"{{ 'coresphere_console.welcome_message'|trans({'%command%': '<code class=\\\"console_command\\\">list</code>'}) }}\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            {% endautoescape %}
        });
    </script>
{% endblock %}
";
    }
}
