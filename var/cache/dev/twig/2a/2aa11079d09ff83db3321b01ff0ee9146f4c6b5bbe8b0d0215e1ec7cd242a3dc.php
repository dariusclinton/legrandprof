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
        $__internal_a20a85e3f5c96f7b5709996aef5616d130772eb2a9ad3942e8bd8d01cc93d9c6 = $this->env->getExtension("native_profiler");
        $__internal_a20a85e3f5c96f7b5709996aef5616d130772eb2a9ad3942e8bd8d01cc93d9c6->enter($__internal_a20a85e3f5c96f7b5709996aef5616d130772eb2a9ad3942e8bd8d01cc93d9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a20a85e3f5c96f7b5709996aef5616d130772eb2a9ad3942e8bd8d01cc93d9c6->leave($__internal_a20a85e3f5c96f7b5709996aef5616d130772eb2a9ad3942e8bd8d01cc93d9c6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b29380f51de32ac1719bf801179c463fbf27529de762fc23872e481fee6a5f3a = $this->env->getExtension("native_profiler");
        $__internal_b29380f51de32ac1719bf801179c463fbf27529de762fc23872e481fee6a5f3a->enter($__internal_b29380f51de32ac1719bf801179c463fbf27529de762fc23872e481fee6a5f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b29380f51de32ac1719bf801179c463fbf27529de762fc23872e481fee6a5f3a->leave($__internal_b29380f51de32ac1719bf801179c463fbf27529de762fc23872e481fee6a5f3a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5120fb5681802641bec3f6828c5098b8e887524847fdc15fdb226aeb205b4bb9 = $this->env->getExtension("native_profiler");
        $__internal_5120fb5681802641bec3f6828c5098b8e887524847fdc15fdb226aeb205b4bb9->enter($__internal_5120fb5681802641bec3f6828c5098b8e887524847fdc15fdb226aeb205b4bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5120fb5681802641bec3f6828c5098b8e887524847fdc15fdb226aeb205b4bb9->leave($__internal_5120fb5681802641bec3f6828c5098b8e887524847fdc15fdb226aeb205b4bb9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ab0b1eab448b38f0a498e4afe9c699b805eb754ffdeaa056ed52a77670d5289 = $this->env->getExtension("native_profiler");
        $__internal_6ab0b1eab448b38f0a498e4afe9c699b805eb754ffdeaa056ed52a77670d5289->enter($__internal_6ab0b1eab448b38f0a498e4afe9c699b805eb754ffdeaa056ed52a77670d5289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6ab0b1eab448b38f0a498e4afe9c699b805eb754ffdeaa056ed52a77670d5289->leave($__internal_6ab0b1eab448b38f0a498e4afe9c699b805eb754ffdeaa056ed52a77670d5289_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ed7f3e2480c40e3bede3ade453720657db3458841faf87e6318060919745ad5 = $this->env->getExtension("native_profiler");
        $__internal_9ed7f3e2480c40e3bede3ade453720657db3458841faf87e6318060919745ad5->enter($__internal_9ed7f3e2480c40e3bede3ade453720657db3458841faf87e6318060919745ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9ed7f3e2480c40e3bede3ade453720657db3458841faf87e6318060919745ad5->leave($__internal_9ed7f3e2480c40e3bede3ade453720657db3458841faf87e6318060919745ad5_prof);

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
