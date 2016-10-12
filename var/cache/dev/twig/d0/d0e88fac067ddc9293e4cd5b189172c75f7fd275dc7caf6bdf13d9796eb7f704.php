<?php

/* ::base.html.twig */
class __TwigTemplate_7a2f2d95223c043aa62cb0a1e1e226295a550e70246b38a27b6b2e05caeedbe6 extends Twig_Template
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
        $__internal_b44a3f17d5310a0763f0ff734fedc3a7008d760f13b76a40d5b5e31ecd840726 = $this->env->getExtension("native_profiler");
        $__internal_b44a3f17d5310a0763f0ff734fedc3a7008d760f13b76a40d5b5e31ecd840726->enter($__internal_b44a3f17d5310a0763f0ff734fedc3a7008d760f13b76a40d5b5e31ecd840726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_b44a3f17d5310a0763f0ff734fedc3a7008d760f13b76a40d5b5e31ecd840726->leave($__internal_b44a3f17d5310a0763f0ff734fedc3a7008d760f13b76a40d5b5e31ecd840726_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f1269e8bc407af0f6378e5f7fdc94b20acfe89d966ddb918f3cbbf80aff99ff = $this->env->getExtension("native_profiler");
        $__internal_8f1269e8bc407af0f6378e5f7fdc94b20acfe89d966ddb918f3cbbf80aff99ff->enter($__internal_8f1269e8bc407af0f6378e5f7fdc94b20acfe89d966ddb918f3cbbf80aff99ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8f1269e8bc407af0f6378e5f7fdc94b20acfe89d966ddb918f3cbbf80aff99ff->leave($__internal_8f1269e8bc407af0f6378e5f7fdc94b20acfe89d966ddb918f3cbbf80aff99ff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8c390abdd4aded388ebd35a166c0fe23a052dfa2c62b44f0eab4bf25de04c36 = $this->env->getExtension("native_profiler");
        $__internal_e8c390abdd4aded388ebd35a166c0fe23a052dfa2c62b44f0eab4bf25de04c36->enter($__internal_e8c390abdd4aded388ebd35a166c0fe23a052dfa2c62b44f0eab4bf25de04c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e8c390abdd4aded388ebd35a166c0fe23a052dfa2c62b44f0eab4bf25de04c36->leave($__internal_e8c390abdd4aded388ebd35a166c0fe23a052dfa2c62b44f0eab4bf25de04c36_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_395963eaed36b075ed95011c049ffc8427b59e7240056894fd2b24e07526e61c = $this->env->getExtension("native_profiler");
        $__internal_395963eaed36b075ed95011c049ffc8427b59e7240056894fd2b24e07526e61c->enter($__internal_395963eaed36b075ed95011c049ffc8427b59e7240056894fd2b24e07526e61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_395963eaed36b075ed95011c049ffc8427b59e7240056894fd2b24e07526e61c->leave($__internal_395963eaed36b075ed95011c049ffc8427b59e7240056894fd2b24e07526e61c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ec4bdfb9df41c06f6d4e81f6722ad64098d0456678ef37f3527ce172c900d5a = $this->env->getExtension("native_profiler");
        $__internal_0ec4bdfb9df41c06f6d4e81f6722ad64098d0456678ef37f3527ce172c900d5a->enter($__internal_0ec4bdfb9df41c06f6d4e81f6722ad64098d0456678ef37f3527ce172c900d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0ec4bdfb9df41c06f6d4e81f6722ad64098d0456678ef37f3527ce172c900d5a->leave($__internal_0ec4bdfb9df41c06f6d4e81f6722ad64098d0456678ef37f3527ce172c900d5a_prof);

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
