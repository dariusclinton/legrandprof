<?php

/* ::base.html.twig */
class __TwigTemplate_734375ac28020a4cdcb39809fb73a29360f8b2dd0e33f70c9b36dd8be88275b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30c99dd888f987f1b4f61cd15ede03a31c3cee2441168677256d5ae3aa828092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c99dd888f987f1b4f61cd15ede03a31c3cee2441168677256d5ae3aa828092->enter($__internal_30c99dd888f987f1b4f61cd15ede03a31c3cee2441168677256d5ae3aa828092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_30c99dd888f987f1b4f61cd15ede03a31c3cee2441168677256d5ae3aa828092->leave($__internal_30c99dd888f987f1b4f61cd15ede03a31c3cee2441168677256d5ae3aa828092_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c22874a4d5e22e4c3508e5c1f1dc02bbc4216628952da7e787bdff341f3a019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c22874a4d5e22e4c3508e5c1f1dc02bbc4216628952da7e787bdff341f3a019->enter($__internal_1c22874a4d5e22e4c3508e5c1f1dc02bbc4216628952da7e787bdff341f3a019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1c22874a4d5e22e4c3508e5c1f1dc02bbc4216628952da7e787bdff341f3a019->leave($__internal_1c22874a4d5e22e4c3508e5c1f1dc02bbc4216628952da7e787bdff341f3a019_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_595b217183f3acacf7872a1289c6baa6b35b991a578c6083ce5dedbac18a0ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595b217183f3acacf7872a1289c6baa6b35b991a578c6083ce5dedbac18a0ce4->enter($__internal_595b217183f3acacf7872a1289c6baa6b35b991a578c6083ce5dedbac18a0ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_595b217183f3acacf7872a1289c6baa6b35b991a578c6083ce5dedbac18a0ce4->leave($__internal_595b217183f3acacf7872a1289c6baa6b35b991a578c6083ce5dedbac18a0ce4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3fa3e9c0cbd47beb4736410e21d1465e7b24d1e0e14d9e540cb319c81341061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fa3e9c0cbd47beb4736410e21d1465e7b24d1e0e14d9e540cb319c81341061->enter($__internal_d3fa3e9c0cbd47beb4736410e21d1465e7b24d1e0e14d9e540cb319c81341061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d3fa3e9c0cbd47beb4736410e21d1465e7b24d1e0e14d9e540cb319c81341061->leave($__internal_d3fa3e9c0cbd47beb4736410e21d1465e7b24d1e0e14d9e540cb319c81341061_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bcff82dd6303766a5095e93f05042b9f201d1609940ffddd3b2be21671215f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcff82dd6303766a5095e93f05042b9f201d1609940ffddd3b2be21671215f9b->enter($__internal_bcff82dd6303766a5095e93f05042b9f201d1609940ffddd3b2be21671215f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bcff82dd6303766a5095e93f05042b9f201d1609940ffddd3b2be21671215f9b->leave($__internal_bcff82dd6303766a5095e93f05042b9f201d1609940ffddd3b2be21671215f9b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
