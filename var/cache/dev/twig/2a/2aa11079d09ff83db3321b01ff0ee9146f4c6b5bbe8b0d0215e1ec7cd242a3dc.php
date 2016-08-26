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
        $__internal_872e24529e48a33becd1bcc73a5e225dc8cb63f30526a9e46f1d02c070c344de = $this->env->getExtension("native_profiler");
        $__internal_872e24529e48a33becd1bcc73a5e225dc8cb63f30526a9e46f1d02c070c344de->enter($__internal_872e24529e48a33becd1bcc73a5e225dc8cb63f30526a9e46f1d02c070c344de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_872e24529e48a33becd1bcc73a5e225dc8cb63f30526a9e46f1d02c070c344de->leave($__internal_872e24529e48a33becd1bcc73a5e225dc8cb63f30526a9e46f1d02c070c344de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8ac5fdcf818ac726ad1ebf51f7d2bd0a190401bf9392dba9afd8a07648493d9 = $this->env->getExtension("native_profiler");
        $__internal_a8ac5fdcf818ac726ad1ebf51f7d2bd0a190401bf9392dba9afd8a07648493d9->enter($__internal_a8ac5fdcf818ac726ad1ebf51f7d2bd0a190401bf9392dba9afd8a07648493d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a8ac5fdcf818ac726ad1ebf51f7d2bd0a190401bf9392dba9afd8a07648493d9->leave($__internal_a8ac5fdcf818ac726ad1ebf51f7d2bd0a190401bf9392dba9afd8a07648493d9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d3f5fc233e922c6374b336daafa62d24329747a4a4ebfb5332aa8c33ebe2ab4 = $this->env->getExtension("native_profiler");
        $__internal_6d3f5fc233e922c6374b336daafa62d24329747a4a4ebfb5332aa8c33ebe2ab4->enter($__internal_6d3f5fc233e922c6374b336daafa62d24329747a4a4ebfb5332aa8c33ebe2ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6d3f5fc233e922c6374b336daafa62d24329747a4a4ebfb5332aa8c33ebe2ab4->leave($__internal_6d3f5fc233e922c6374b336daafa62d24329747a4a4ebfb5332aa8c33ebe2ab4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b16708025e1aaadb1f401924ab2a91d58f1481d67e7dce78b971c3dfba7f3e4b = $this->env->getExtension("native_profiler");
        $__internal_b16708025e1aaadb1f401924ab2a91d58f1481d67e7dce78b971c3dfba7f3e4b->enter($__internal_b16708025e1aaadb1f401924ab2a91d58f1481d67e7dce78b971c3dfba7f3e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b16708025e1aaadb1f401924ab2a91d58f1481d67e7dce78b971c3dfba7f3e4b->leave($__internal_b16708025e1aaadb1f401924ab2a91d58f1481d67e7dce78b971c3dfba7f3e4b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c55faf358c3bb7a1c56e42f66101b54379252b79bdbf18c9c219a6fb72eb25f7 = $this->env->getExtension("native_profiler");
        $__internal_c55faf358c3bb7a1c56e42f66101b54379252b79bdbf18c9c219a6fb72eb25f7->enter($__internal_c55faf358c3bb7a1c56e42f66101b54379252b79bdbf18c9c219a6fb72eb25f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c55faf358c3bb7a1c56e42f66101b54379252b79bdbf18c9c219a6fb72eb25f7->leave($__internal_c55faf358c3bb7a1c56e42f66101b54379252b79bdbf18c9c219a6fb72eb25f7_prof);

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
