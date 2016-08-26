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
        $__internal_ba5e034b9116ee123a076e528745453bf5a3cf3ac7ffda7d2765ed13df246599 = $this->env->getExtension("native_profiler");
        $__internal_ba5e034b9116ee123a076e528745453bf5a3cf3ac7ffda7d2765ed13df246599->enter($__internal_ba5e034b9116ee123a076e528745453bf5a3cf3ac7ffda7d2765ed13df246599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ba5e034b9116ee123a076e528745453bf5a3cf3ac7ffda7d2765ed13df246599->leave($__internal_ba5e034b9116ee123a076e528745453bf5a3cf3ac7ffda7d2765ed13df246599_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b002afd0902ebd2b8b94b727a88298afbf896b8d90500d02f4c9ddddb3010b9e = $this->env->getExtension("native_profiler");
        $__internal_b002afd0902ebd2b8b94b727a88298afbf896b8d90500d02f4c9ddddb3010b9e->enter($__internal_b002afd0902ebd2b8b94b727a88298afbf896b8d90500d02f4c9ddddb3010b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b002afd0902ebd2b8b94b727a88298afbf896b8d90500d02f4c9ddddb3010b9e->leave($__internal_b002afd0902ebd2b8b94b727a88298afbf896b8d90500d02f4c9ddddb3010b9e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_639bb6392228ec32808ad7d36dfa679e0847833afbc6f9f8d4341f98c35928e3 = $this->env->getExtension("native_profiler");
        $__internal_639bb6392228ec32808ad7d36dfa679e0847833afbc6f9f8d4341f98c35928e3->enter($__internal_639bb6392228ec32808ad7d36dfa679e0847833afbc6f9f8d4341f98c35928e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_639bb6392228ec32808ad7d36dfa679e0847833afbc6f9f8d4341f98c35928e3->leave($__internal_639bb6392228ec32808ad7d36dfa679e0847833afbc6f9f8d4341f98c35928e3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f4c33dfb820d5ed73b54aea17ab51e60e3ccdce884d3bab90df7808608381a5 = $this->env->getExtension("native_profiler");
        $__internal_9f4c33dfb820d5ed73b54aea17ab51e60e3ccdce884d3bab90df7808608381a5->enter($__internal_9f4c33dfb820d5ed73b54aea17ab51e60e3ccdce884d3bab90df7808608381a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f4c33dfb820d5ed73b54aea17ab51e60e3ccdce884d3bab90df7808608381a5->leave($__internal_9f4c33dfb820d5ed73b54aea17ab51e60e3ccdce884d3bab90df7808608381a5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9256078962976969d4d1e77c9bcdc5157cb9a3cb58c5685a57eabbba776b423f = $this->env->getExtension("native_profiler");
        $__internal_9256078962976969d4d1e77c9bcdc5157cb9a3cb58c5685a57eabbba776b423f->enter($__internal_9256078962976969d4d1e77c9bcdc5157cb9a3cb58c5685a57eabbba776b423f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9256078962976969d4d1e77c9bcdc5157cb9a3cb58c5685a57eabbba776b423f->leave($__internal_9256078962976969d4d1e77c9bcdc5157cb9a3cb58c5685a57eabbba776b423f_prof);

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
