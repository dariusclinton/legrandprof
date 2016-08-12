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
        $__internal_e412b011bf4a2b26ea26edde6a7c038e9a9e8ec629901eda87c12abb86670dec = $this->env->getExtension("native_profiler");
        $__internal_e412b011bf4a2b26ea26edde6a7c038e9a9e8ec629901eda87c12abb86670dec->enter($__internal_e412b011bf4a2b26ea26edde6a7c038e9a9e8ec629901eda87c12abb86670dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e412b011bf4a2b26ea26edde6a7c038e9a9e8ec629901eda87c12abb86670dec->leave($__internal_e412b011bf4a2b26ea26edde6a7c038e9a9e8ec629901eda87c12abb86670dec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8a893afc55da6c993a06455ba8a9bc6d8919f73092503d020b1dd9a559f1a49 = $this->env->getExtension("native_profiler");
        $__internal_c8a893afc55da6c993a06455ba8a9bc6d8919f73092503d020b1dd9a559f1a49->enter($__internal_c8a893afc55da6c993a06455ba8a9bc6d8919f73092503d020b1dd9a559f1a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c8a893afc55da6c993a06455ba8a9bc6d8919f73092503d020b1dd9a559f1a49->leave($__internal_c8a893afc55da6c993a06455ba8a9bc6d8919f73092503d020b1dd9a559f1a49_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea8de13c8e6d5c205348e980b6c065bcd2a460e0abcffb300532c1538bde39f5 = $this->env->getExtension("native_profiler");
        $__internal_ea8de13c8e6d5c205348e980b6c065bcd2a460e0abcffb300532c1538bde39f5->enter($__internal_ea8de13c8e6d5c205348e980b6c065bcd2a460e0abcffb300532c1538bde39f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ea8de13c8e6d5c205348e980b6c065bcd2a460e0abcffb300532c1538bde39f5->leave($__internal_ea8de13c8e6d5c205348e980b6c065bcd2a460e0abcffb300532c1538bde39f5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b3d5c0e1f8ece86bbeab4010c930d7cb87ed7b6241d5ab9fc587b702c0ebb0a = $this->env->getExtension("native_profiler");
        $__internal_7b3d5c0e1f8ece86bbeab4010c930d7cb87ed7b6241d5ab9fc587b702c0ebb0a->enter($__internal_7b3d5c0e1f8ece86bbeab4010c930d7cb87ed7b6241d5ab9fc587b702c0ebb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7b3d5c0e1f8ece86bbeab4010c930d7cb87ed7b6241d5ab9fc587b702c0ebb0a->leave($__internal_7b3d5c0e1f8ece86bbeab4010c930d7cb87ed7b6241d5ab9fc587b702c0ebb0a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae0acb4ebe4f91eb98495e89d7792239e4918ce878084420f1d6f4b50adf54db = $this->env->getExtension("native_profiler");
        $__internal_ae0acb4ebe4f91eb98495e89d7792239e4918ce878084420f1d6f4b50adf54db->enter($__internal_ae0acb4ebe4f91eb98495e89d7792239e4918ce878084420f1d6f4b50adf54db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ae0acb4ebe4f91eb98495e89d7792239e4918ce878084420f1d6f4b50adf54db->leave($__internal_ae0acb4ebe4f91eb98495e89d7792239e4918ce878084420f1d6f4b50adf54db_prof);

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
