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
        $__internal_4b32317ae9b9fc33782c83faf32ca6af38e97882f5bcfb499aeb461ebe4dd2fd = $this->env->getExtension("native_profiler");
        $__internal_4b32317ae9b9fc33782c83faf32ca6af38e97882f5bcfb499aeb461ebe4dd2fd->enter($__internal_4b32317ae9b9fc33782c83faf32ca6af38e97882f5bcfb499aeb461ebe4dd2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4b32317ae9b9fc33782c83faf32ca6af38e97882f5bcfb499aeb461ebe4dd2fd->leave($__internal_4b32317ae9b9fc33782c83faf32ca6af38e97882f5bcfb499aeb461ebe4dd2fd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b678af611f5a07c6493b21624f7b42476c987cf86ac37615289c73ae921acb5 = $this->env->getExtension("native_profiler");
        $__internal_6b678af611f5a07c6493b21624f7b42476c987cf86ac37615289c73ae921acb5->enter($__internal_6b678af611f5a07c6493b21624f7b42476c987cf86ac37615289c73ae921acb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6b678af611f5a07c6493b21624f7b42476c987cf86ac37615289c73ae921acb5->leave($__internal_6b678af611f5a07c6493b21624f7b42476c987cf86ac37615289c73ae921acb5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43a1e08bca9100533f1cc290a883c58cd1b615df83cbf7becef6660cda5a7d51 = $this->env->getExtension("native_profiler");
        $__internal_43a1e08bca9100533f1cc290a883c58cd1b615df83cbf7becef6660cda5a7d51->enter($__internal_43a1e08bca9100533f1cc290a883c58cd1b615df83cbf7becef6660cda5a7d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_43a1e08bca9100533f1cc290a883c58cd1b615df83cbf7becef6660cda5a7d51->leave($__internal_43a1e08bca9100533f1cc290a883c58cd1b615df83cbf7becef6660cda5a7d51_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d06e2b1971e15e17cba747be55696ffbcef78c7063a2467c9dda1f3d1f440ff8 = $this->env->getExtension("native_profiler");
        $__internal_d06e2b1971e15e17cba747be55696ffbcef78c7063a2467c9dda1f3d1f440ff8->enter($__internal_d06e2b1971e15e17cba747be55696ffbcef78c7063a2467c9dda1f3d1f440ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d06e2b1971e15e17cba747be55696ffbcef78c7063a2467c9dda1f3d1f440ff8->leave($__internal_d06e2b1971e15e17cba747be55696ffbcef78c7063a2467c9dda1f3d1f440ff8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e58fb3dec31bf0784c51cfe53f7fc3059e09f5bb3b37ad573e1134a7fa555b1 = $this->env->getExtension("native_profiler");
        $__internal_7e58fb3dec31bf0784c51cfe53f7fc3059e09f5bb3b37ad573e1134a7fa555b1->enter($__internal_7e58fb3dec31bf0784c51cfe53f7fc3059e09f5bb3b37ad573e1134a7fa555b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7e58fb3dec31bf0784c51cfe53f7fc3059e09f5bb3b37ad573e1134a7fa555b1->leave($__internal_7e58fb3dec31bf0784c51cfe53f7fc3059e09f5bb3b37ad573e1134a7fa555b1_prof);

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
