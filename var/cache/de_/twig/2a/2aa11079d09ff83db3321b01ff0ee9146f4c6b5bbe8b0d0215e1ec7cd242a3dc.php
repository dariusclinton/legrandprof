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
        $__internal_31c8a13dceb9c4ec7d01adcf0d1d1371802f5af3e164c7e8cd15a4a9037c9b9a = $this->env->getExtension("native_profiler");
        $__internal_31c8a13dceb9c4ec7d01adcf0d1d1371802f5af3e164c7e8cd15a4a9037c9b9a->enter($__internal_31c8a13dceb9c4ec7d01adcf0d1d1371802f5af3e164c7e8cd15a4a9037c9b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_31c8a13dceb9c4ec7d01adcf0d1d1371802f5af3e164c7e8cd15a4a9037c9b9a->leave($__internal_31c8a13dceb9c4ec7d01adcf0d1d1371802f5af3e164c7e8cd15a4a9037c9b9a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f42c24e76ea739a40959a7c3569a9a25b426dba6fa19d79a94a31f3a6216927 = $this->env->getExtension("native_profiler");
        $__internal_6f42c24e76ea739a40959a7c3569a9a25b426dba6fa19d79a94a31f3a6216927->enter($__internal_6f42c24e76ea739a40959a7c3569a9a25b426dba6fa19d79a94a31f3a6216927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f42c24e76ea739a40959a7c3569a9a25b426dba6fa19d79a94a31f3a6216927->leave($__internal_6f42c24e76ea739a40959a7c3569a9a25b426dba6fa19d79a94a31f3a6216927_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c75e0a5b83ccd193ea98f7824cc82022fcabcc7c04ef664a3327e42e9d375cd = $this->env->getExtension("native_profiler");
        $__internal_2c75e0a5b83ccd193ea98f7824cc82022fcabcc7c04ef664a3327e42e9d375cd->enter($__internal_2c75e0a5b83ccd193ea98f7824cc82022fcabcc7c04ef664a3327e42e9d375cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2c75e0a5b83ccd193ea98f7824cc82022fcabcc7c04ef664a3327e42e9d375cd->leave($__internal_2c75e0a5b83ccd193ea98f7824cc82022fcabcc7c04ef664a3327e42e9d375cd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_929c392a02d98a29392b9a41b66dadd583a025741439877b0db65b309b62c423 = $this->env->getExtension("native_profiler");
        $__internal_929c392a02d98a29392b9a41b66dadd583a025741439877b0db65b309b62c423->enter($__internal_929c392a02d98a29392b9a41b66dadd583a025741439877b0db65b309b62c423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_929c392a02d98a29392b9a41b66dadd583a025741439877b0db65b309b62c423->leave($__internal_929c392a02d98a29392b9a41b66dadd583a025741439877b0db65b309b62c423_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8871e5434acb1270dd633112c5bccd0504f2b1ead16f6ef677209fa33cb8db3a = $this->env->getExtension("native_profiler");
        $__internal_8871e5434acb1270dd633112c5bccd0504f2b1ead16f6ef677209fa33cb8db3a->enter($__internal_8871e5434acb1270dd633112c5bccd0504f2b1ead16f6ef677209fa33cb8db3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8871e5434acb1270dd633112c5bccd0504f2b1ead16f6ef677209fa33cb8db3a->leave($__internal_8871e5434acb1270dd633112c5bccd0504f2b1ead16f6ef677209fa33cb8db3a_prof);

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
