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
        $__internal_e4e4903641d8f7f94859361c279f27deef4a96290886b73a5dd3a656275d81ff = $this->env->getExtension("native_profiler");
        $__internal_e4e4903641d8f7f94859361c279f27deef4a96290886b73a5dd3a656275d81ff->enter($__internal_e4e4903641d8f7f94859361c279f27deef4a96290886b73a5dd3a656275d81ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e4e4903641d8f7f94859361c279f27deef4a96290886b73a5dd3a656275d81ff->leave($__internal_e4e4903641d8f7f94859361c279f27deef4a96290886b73a5dd3a656275d81ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3293b015534dbfc401cf1f983ac9a4f6b8456b35388a38d40352fb58b3563c1a = $this->env->getExtension("native_profiler");
        $__internal_3293b015534dbfc401cf1f983ac9a4f6b8456b35388a38d40352fb58b3563c1a->enter($__internal_3293b015534dbfc401cf1f983ac9a4f6b8456b35388a38d40352fb58b3563c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3293b015534dbfc401cf1f983ac9a4f6b8456b35388a38d40352fb58b3563c1a->leave($__internal_3293b015534dbfc401cf1f983ac9a4f6b8456b35388a38d40352fb58b3563c1a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6374b264ec1feaa6f09e722e0cda01e4acce9aee00bc5d2f4bd435939e26b0b = $this->env->getExtension("native_profiler");
        $__internal_b6374b264ec1feaa6f09e722e0cda01e4acce9aee00bc5d2f4bd435939e26b0b->enter($__internal_b6374b264ec1feaa6f09e722e0cda01e4acce9aee00bc5d2f4bd435939e26b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b6374b264ec1feaa6f09e722e0cda01e4acce9aee00bc5d2f4bd435939e26b0b->leave($__internal_b6374b264ec1feaa6f09e722e0cda01e4acce9aee00bc5d2f4bd435939e26b0b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_64a68d2c303e1ea727700cd8d29ee7ea8d8740765508f85b447d778789a78a5e = $this->env->getExtension("native_profiler");
        $__internal_64a68d2c303e1ea727700cd8d29ee7ea8d8740765508f85b447d778789a78a5e->enter($__internal_64a68d2c303e1ea727700cd8d29ee7ea8d8740765508f85b447d778789a78a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_64a68d2c303e1ea727700cd8d29ee7ea8d8740765508f85b447d778789a78a5e->leave($__internal_64a68d2c303e1ea727700cd8d29ee7ea8d8740765508f85b447d778789a78a5e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f06bc4356917615c7aced423dbdd7eea92f0902a5580e9c32e053d6606f654b = $this->env->getExtension("native_profiler");
        $__internal_0f06bc4356917615c7aced423dbdd7eea92f0902a5580e9c32e053d6606f654b->enter($__internal_0f06bc4356917615c7aced423dbdd7eea92f0902a5580e9c32e053d6606f654b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0f06bc4356917615c7aced423dbdd7eea92f0902a5580e9c32e053d6606f654b->leave($__internal_0f06bc4356917615c7aced423dbdd7eea92f0902a5580e9c32e053d6606f654b_prof);

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
