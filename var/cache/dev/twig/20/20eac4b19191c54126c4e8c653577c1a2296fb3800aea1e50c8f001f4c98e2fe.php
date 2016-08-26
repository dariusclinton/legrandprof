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
        $__internal_c3cfd8704822b519b2a4c0b51bfd2bd1d62b480a7637be2ba14f6c28acaf7023 = $this->env->getExtension("native_profiler");
        $__internal_c3cfd8704822b519b2a4c0b51bfd2bd1d62b480a7637be2ba14f6c28acaf7023->enter($__internal_c3cfd8704822b519b2a4c0b51bfd2bd1d62b480a7637be2ba14f6c28acaf7023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c3cfd8704822b519b2a4c0b51bfd2bd1d62b480a7637be2ba14f6c28acaf7023->leave($__internal_c3cfd8704822b519b2a4c0b51bfd2bd1d62b480a7637be2ba14f6c28acaf7023_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d715cb64ecc6bb9b91c4e80102251f8b66b95eeb0f8f9f2e29a2834162f5ac52 = $this->env->getExtension("native_profiler");
        $__internal_d715cb64ecc6bb9b91c4e80102251f8b66b95eeb0f8f9f2e29a2834162f5ac52->enter($__internal_d715cb64ecc6bb9b91c4e80102251f8b66b95eeb0f8f9f2e29a2834162f5ac52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d715cb64ecc6bb9b91c4e80102251f8b66b95eeb0f8f9f2e29a2834162f5ac52->leave($__internal_d715cb64ecc6bb9b91c4e80102251f8b66b95eeb0f8f9f2e29a2834162f5ac52_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1aea5f9cccc75af445ad9d7575381fa0de7b893a53aa6524f566c6508c719f9f = $this->env->getExtension("native_profiler");
        $__internal_1aea5f9cccc75af445ad9d7575381fa0de7b893a53aa6524f566c6508c719f9f->enter($__internal_1aea5f9cccc75af445ad9d7575381fa0de7b893a53aa6524f566c6508c719f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1aea5f9cccc75af445ad9d7575381fa0de7b893a53aa6524f566c6508c719f9f->leave($__internal_1aea5f9cccc75af445ad9d7575381fa0de7b893a53aa6524f566c6508c719f9f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d174b8b2d5cf404a9803412b5152faa79d0b74c281ca924277be76f6d57a1b57 = $this->env->getExtension("native_profiler");
        $__internal_d174b8b2d5cf404a9803412b5152faa79d0b74c281ca924277be76f6d57a1b57->enter($__internal_d174b8b2d5cf404a9803412b5152faa79d0b74c281ca924277be76f6d57a1b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d174b8b2d5cf404a9803412b5152faa79d0b74c281ca924277be76f6d57a1b57->leave($__internal_d174b8b2d5cf404a9803412b5152faa79d0b74c281ca924277be76f6d57a1b57_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bca14690f9c09a109456f8645230725a44872b07ac94b5d2b1b58f82a49ac7df = $this->env->getExtension("native_profiler");
        $__internal_bca14690f9c09a109456f8645230725a44872b07ac94b5d2b1b58f82a49ac7df->enter($__internal_bca14690f9c09a109456f8645230725a44872b07ac94b5d2b1b58f82a49ac7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bca14690f9c09a109456f8645230725a44872b07ac94b5d2b1b58f82a49ac7df->leave($__internal_bca14690f9c09a109456f8645230725a44872b07ac94b5d2b1b58f82a49ac7df_prof);

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
