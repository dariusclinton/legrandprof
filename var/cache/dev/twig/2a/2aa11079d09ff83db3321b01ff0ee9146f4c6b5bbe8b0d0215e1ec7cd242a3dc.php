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
        $__internal_36e9acab415709f47287661d9065cefe506a1f7ea2cc9a69f964384ba6b097f2 = $this->env->getExtension("native_profiler");
        $__internal_36e9acab415709f47287661d9065cefe506a1f7ea2cc9a69f964384ba6b097f2->enter($__internal_36e9acab415709f47287661d9065cefe506a1f7ea2cc9a69f964384ba6b097f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_36e9acab415709f47287661d9065cefe506a1f7ea2cc9a69f964384ba6b097f2->leave($__internal_36e9acab415709f47287661d9065cefe506a1f7ea2cc9a69f964384ba6b097f2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_94461984dea6a44cd8b6cd0f240acc5811eef682fd85382a3b84d07ce7e938d6 = $this->env->getExtension("native_profiler");
        $__internal_94461984dea6a44cd8b6cd0f240acc5811eef682fd85382a3b84d07ce7e938d6->enter($__internal_94461984dea6a44cd8b6cd0f240acc5811eef682fd85382a3b84d07ce7e938d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_94461984dea6a44cd8b6cd0f240acc5811eef682fd85382a3b84d07ce7e938d6->leave($__internal_94461984dea6a44cd8b6cd0f240acc5811eef682fd85382a3b84d07ce7e938d6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05483196e3aead9e49450cc7cb7977503b3525bd9b7f43bcdb9e3d65cdba18ff = $this->env->getExtension("native_profiler");
        $__internal_05483196e3aead9e49450cc7cb7977503b3525bd9b7f43bcdb9e3d65cdba18ff->enter($__internal_05483196e3aead9e49450cc7cb7977503b3525bd9b7f43bcdb9e3d65cdba18ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_05483196e3aead9e49450cc7cb7977503b3525bd9b7f43bcdb9e3d65cdba18ff->leave($__internal_05483196e3aead9e49450cc7cb7977503b3525bd9b7f43bcdb9e3d65cdba18ff_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_550bfbfafd73d951e674459c6f2491e9af9cf4f51e0e6561ad5f11ebd7496852 = $this->env->getExtension("native_profiler");
        $__internal_550bfbfafd73d951e674459c6f2491e9af9cf4f51e0e6561ad5f11ebd7496852->enter($__internal_550bfbfafd73d951e674459c6f2491e9af9cf4f51e0e6561ad5f11ebd7496852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_550bfbfafd73d951e674459c6f2491e9af9cf4f51e0e6561ad5f11ebd7496852->leave($__internal_550bfbfafd73d951e674459c6f2491e9af9cf4f51e0e6561ad5f11ebd7496852_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d63221da0f510d542617526f2e99995f3770f31bc38f3d8bfad23c0e8cd40a3f = $this->env->getExtension("native_profiler");
        $__internal_d63221da0f510d542617526f2e99995f3770f31bc38f3d8bfad23c0e8cd40a3f->enter($__internal_d63221da0f510d542617526f2e99995f3770f31bc38f3d8bfad23c0e8cd40a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d63221da0f510d542617526f2e99995f3770f31bc38f3d8bfad23c0e8cd40a3f->leave($__internal_d63221da0f510d542617526f2e99995f3770f31bc38f3d8bfad23c0e8cd40a3f_prof);

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
