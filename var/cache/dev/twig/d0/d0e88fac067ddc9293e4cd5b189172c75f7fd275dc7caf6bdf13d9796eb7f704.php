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
        $__internal_22de9e44b95d4e6693afa7e53577d74e6e0f7d0b70e8267060787a6122b59728 = $this->env->getExtension("native_profiler");
        $__internal_22de9e44b95d4e6693afa7e53577d74e6e0f7d0b70e8267060787a6122b59728->enter($__internal_22de9e44b95d4e6693afa7e53577d74e6e0f7d0b70e8267060787a6122b59728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_22de9e44b95d4e6693afa7e53577d74e6e0f7d0b70e8267060787a6122b59728->leave($__internal_22de9e44b95d4e6693afa7e53577d74e6e0f7d0b70e8267060787a6122b59728_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_448bdaa89d062def4869f4a474fa92f77239b5cfde0050113894beae19720f67 = $this->env->getExtension("native_profiler");
        $__internal_448bdaa89d062def4869f4a474fa92f77239b5cfde0050113894beae19720f67->enter($__internal_448bdaa89d062def4869f4a474fa92f77239b5cfde0050113894beae19720f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_448bdaa89d062def4869f4a474fa92f77239b5cfde0050113894beae19720f67->leave($__internal_448bdaa89d062def4869f4a474fa92f77239b5cfde0050113894beae19720f67_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8fbca344881dcddf33ad3cf53fc36e8c7ec2e5e6d47c38867794f5e1dfa4f5f = $this->env->getExtension("native_profiler");
        $__internal_e8fbca344881dcddf33ad3cf53fc36e8c7ec2e5e6d47c38867794f5e1dfa4f5f->enter($__internal_e8fbca344881dcddf33ad3cf53fc36e8c7ec2e5e6d47c38867794f5e1dfa4f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e8fbca344881dcddf33ad3cf53fc36e8c7ec2e5e6d47c38867794f5e1dfa4f5f->leave($__internal_e8fbca344881dcddf33ad3cf53fc36e8c7ec2e5e6d47c38867794f5e1dfa4f5f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0afe345a9b1a36e97e1bb23b243fa63aad94adc5d69c23a0bd11ab7126f99ed3 = $this->env->getExtension("native_profiler");
        $__internal_0afe345a9b1a36e97e1bb23b243fa63aad94adc5d69c23a0bd11ab7126f99ed3->enter($__internal_0afe345a9b1a36e97e1bb23b243fa63aad94adc5d69c23a0bd11ab7126f99ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0afe345a9b1a36e97e1bb23b243fa63aad94adc5d69c23a0bd11ab7126f99ed3->leave($__internal_0afe345a9b1a36e97e1bb23b243fa63aad94adc5d69c23a0bd11ab7126f99ed3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38124ed84817a4fae9375ab5bf50e7d6e962e88862fb2aa13ea00b394328f93a = $this->env->getExtension("native_profiler");
        $__internal_38124ed84817a4fae9375ab5bf50e7d6e962e88862fb2aa13ea00b394328f93a->enter($__internal_38124ed84817a4fae9375ab5bf50e7d6e962e88862fb2aa13ea00b394328f93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_38124ed84817a4fae9375ab5bf50e7d6e962e88862fb2aa13ea00b394328f93a->leave($__internal_38124ed84817a4fae9375ab5bf50e7d6e962e88862fb2aa13ea00b394328f93a_prof);

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
