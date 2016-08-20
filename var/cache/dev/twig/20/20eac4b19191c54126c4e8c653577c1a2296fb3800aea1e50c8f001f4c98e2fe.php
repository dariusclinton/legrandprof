<?php

/* base.html.twig */
class __TwigTemplate_07e59192eb905907e6fafe1e40d079c5d535cc051e569b6414a97f546e436d49 extends Twig_Template
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
        $__internal_416bcc9f68dc17644f67fa00108639742da6cc045eb385f27c1877753fd98fd7 = $this->env->getExtension("native_profiler");
        $__internal_416bcc9f68dc17644f67fa00108639742da6cc045eb385f27c1877753fd98fd7->enter($__internal_416bcc9f68dc17644f67fa00108639742da6cc045eb385f27c1877753fd98fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_416bcc9f68dc17644f67fa00108639742da6cc045eb385f27c1877753fd98fd7->leave($__internal_416bcc9f68dc17644f67fa00108639742da6cc045eb385f27c1877753fd98fd7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_737f849c7d615ef52c84e3136d194035582d5897a4d2f77726aa623d384a42a2 = $this->env->getExtension("native_profiler");
        $__internal_737f849c7d615ef52c84e3136d194035582d5897a4d2f77726aa623d384a42a2->enter($__internal_737f849c7d615ef52c84e3136d194035582d5897a4d2f77726aa623d384a42a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_737f849c7d615ef52c84e3136d194035582d5897a4d2f77726aa623d384a42a2->leave($__internal_737f849c7d615ef52c84e3136d194035582d5897a4d2f77726aa623d384a42a2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08e94d0ac0f70a5682294ca67552641481ce74bf70b65366b549bdf53011c665 = $this->env->getExtension("native_profiler");
        $__internal_08e94d0ac0f70a5682294ca67552641481ce74bf70b65366b549bdf53011c665->enter($__internal_08e94d0ac0f70a5682294ca67552641481ce74bf70b65366b549bdf53011c665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_08e94d0ac0f70a5682294ca67552641481ce74bf70b65366b549bdf53011c665->leave($__internal_08e94d0ac0f70a5682294ca67552641481ce74bf70b65366b549bdf53011c665_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d26d624a7ce212a929cb8e0537e25a0e3dc527ee9eea9f7954442b57e25c7ef3 = $this->env->getExtension("native_profiler");
        $__internal_d26d624a7ce212a929cb8e0537e25a0e3dc527ee9eea9f7954442b57e25c7ef3->enter($__internal_d26d624a7ce212a929cb8e0537e25a0e3dc527ee9eea9f7954442b57e25c7ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d26d624a7ce212a929cb8e0537e25a0e3dc527ee9eea9f7954442b57e25c7ef3->leave($__internal_d26d624a7ce212a929cb8e0537e25a0e3dc527ee9eea9f7954442b57e25c7ef3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_766641ff8ee791ee9a7acc72d8cc7e131f78d5c7bb8ea7dee053c95f732b04eb = $this->env->getExtension("native_profiler");
        $__internal_766641ff8ee791ee9a7acc72d8cc7e131f78d5c7bb8ea7dee053c95f732b04eb->enter($__internal_766641ff8ee791ee9a7acc72d8cc7e131f78d5c7bb8ea7dee053c95f732b04eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_766641ff8ee791ee9a7acc72d8cc7e131f78d5c7bb8ea7dee053c95f732b04eb->leave($__internal_766641ff8ee791ee9a7acc72d8cc7e131f78d5c7bb8ea7dee053c95f732b04eb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
