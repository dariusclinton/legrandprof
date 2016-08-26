<?php

/* ::base.html.twig */
class __TwigTemplate_8fa811fc65623047773a627e091d7f138fe251551514b074c0f87dfe051c38a9 extends Twig_Template
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
        $__internal_596b358af9956a24174584698f8cc867fd4a9f0657fa267ab65c80bc5f47be51 = $this->env->getExtension("native_profiler");
        $__internal_596b358af9956a24174584698f8cc867fd4a9f0657fa267ab65c80bc5f47be51->enter($__internal_596b358af9956a24174584698f8cc867fd4a9f0657fa267ab65c80bc5f47be51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_596b358af9956a24174584698f8cc867fd4a9f0657fa267ab65c80bc5f47be51->leave($__internal_596b358af9956a24174584698f8cc867fd4a9f0657fa267ab65c80bc5f47be51_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c88addc28c75563f7bbda46c0a05f0d10843885875e22aa243bcf3098066b000 = $this->env->getExtension("native_profiler");
        $__internal_c88addc28c75563f7bbda46c0a05f0d10843885875e22aa243bcf3098066b000->enter($__internal_c88addc28c75563f7bbda46c0a05f0d10843885875e22aa243bcf3098066b000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c88addc28c75563f7bbda46c0a05f0d10843885875e22aa243bcf3098066b000->leave($__internal_c88addc28c75563f7bbda46c0a05f0d10843885875e22aa243bcf3098066b000_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60ea719468947be601d3253c73b5a843d4e969ae5b047a7198d7d2ed7c6186af = $this->env->getExtension("native_profiler");
        $__internal_60ea719468947be601d3253c73b5a843d4e969ae5b047a7198d7d2ed7c6186af->enter($__internal_60ea719468947be601d3253c73b5a843d4e969ae5b047a7198d7d2ed7c6186af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_60ea719468947be601d3253c73b5a843d4e969ae5b047a7198d7d2ed7c6186af->leave($__internal_60ea719468947be601d3253c73b5a843d4e969ae5b047a7198d7d2ed7c6186af_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6f52eda1c2d81bbd2121a7dfeeb1c01643928014fc46b6ae92776201863f541 = $this->env->getExtension("native_profiler");
        $__internal_e6f52eda1c2d81bbd2121a7dfeeb1c01643928014fc46b6ae92776201863f541->enter($__internal_e6f52eda1c2d81bbd2121a7dfeeb1c01643928014fc46b6ae92776201863f541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e6f52eda1c2d81bbd2121a7dfeeb1c01643928014fc46b6ae92776201863f541->leave($__internal_e6f52eda1c2d81bbd2121a7dfeeb1c01643928014fc46b6ae92776201863f541_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_50de71f6dcbc1ba4a4349f0718a78e7a9751317966b20b77e088ae9d8d7aebb0 = $this->env->getExtension("native_profiler");
        $__internal_50de71f6dcbc1ba4a4349f0718a78e7a9751317966b20b77e088ae9d8d7aebb0->enter($__internal_50de71f6dcbc1ba4a4349f0718a78e7a9751317966b20b77e088ae9d8d7aebb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_50de71f6dcbc1ba4a4349f0718a78e7a9751317966b20b77e088ae9d8d7aebb0->leave($__internal_50de71f6dcbc1ba4a4349f0718a78e7a9751317966b20b77e088ae9d8d7aebb0_prof);

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
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
