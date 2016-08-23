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
        $__internal_650b3db2134838ae41238525263067cbace8e5a1b65c717f3420dc1b8d7d783e = $this->env->getExtension("native_profiler");
        $__internal_650b3db2134838ae41238525263067cbace8e5a1b65c717f3420dc1b8d7d783e->enter($__internal_650b3db2134838ae41238525263067cbace8e5a1b65c717f3420dc1b8d7d783e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_650b3db2134838ae41238525263067cbace8e5a1b65c717f3420dc1b8d7d783e->leave($__internal_650b3db2134838ae41238525263067cbace8e5a1b65c717f3420dc1b8d7d783e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca33453bc47e4db483c12a82700326b7aa3e91ca24d414aedbb09d3164410a40 = $this->env->getExtension("native_profiler");
        $__internal_ca33453bc47e4db483c12a82700326b7aa3e91ca24d414aedbb09d3164410a40->enter($__internal_ca33453bc47e4db483c12a82700326b7aa3e91ca24d414aedbb09d3164410a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ca33453bc47e4db483c12a82700326b7aa3e91ca24d414aedbb09d3164410a40->leave($__internal_ca33453bc47e4db483c12a82700326b7aa3e91ca24d414aedbb09d3164410a40_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_175e8019925727d8a9b05c3ee48eacb38500b7445b3867042121f78b6e4c686c = $this->env->getExtension("native_profiler");
        $__internal_175e8019925727d8a9b05c3ee48eacb38500b7445b3867042121f78b6e4c686c->enter($__internal_175e8019925727d8a9b05c3ee48eacb38500b7445b3867042121f78b6e4c686c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_175e8019925727d8a9b05c3ee48eacb38500b7445b3867042121f78b6e4c686c->leave($__internal_175e8019925727d8a9b05c3ee48eacb38500b7445b3867042121f78b6e4c686c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9324562d72ca0dd1e9e4d1d65f78ee6484ab744f4f3490de94cf58dc7a61ecd8 = $this->env->getExtension("native_profiler");
        $__internal_9324562d72ca0dd1e9e4d1d65f78ee6484ab744f4f3490de94cf58dc7a61ecd8->enter($__internal_9324562d72ca0dd1e9e4d1d65f78ee6484ab744f4f3490de94cf58dc7a61ecd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9324562d72ca0dd1e9e4d1d65f78ee6484ab744f4f3490de94cf58dc7a61ecd8->leave($__internal_9324562d72ca0dd1e9e4d1d65f78ee6484ab744f4f3490de94cf58dc7a61ecd8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a6b22f78eb87098b7d5d40e7467911d1514a16ec89e3bbb1e86c7b4989e0f37 = $this->env->getExtension("native_profiler");
        $__internal_7a6b22f78eb87098b7d5d40e7467911d1514a16ec89e3bbb1e86c7b4989e0f37->enter($__internal_7a6b22f78eb87098b7d5d40e7467911d1514a16ec89e3bbb1e86c7b4989e0f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7a6b22f78eb87098b7d5d40e7467911d1514a16ec89e3bbb1e86c7b4989e0f37->leave($__internal_7a6b22f78eb87098b7d5d40e7467911d1514a16ec89e3bbb1e86c7b4989e0f37_prof);

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
