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
        $__internal_da86f7b098e6377aa7b04ad1f06457b652a1334d62c7a89df4152fb539f11cae = $this->env->getExtension("native_profiler");
        $__internal_da86f7b098e6377aa7b04ad1f06457b652a1334d62c7a89df4152fb539f11cae->enter($__internal_da86f7b098e6377aa7b04ad1f06457b652a1334d62c7a89df4152fb539f11cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_da86f7b098e6377aa7b04ad1f06457b652a1334d62c7a89df4152fb539f11cae->leave($__internal_da86f7b098e6377aa7b04ad1f06457b652a1334d62c7a89df4152fb539f11cae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e90ddab31136498978ea3621d85377a96f74b56cbba5c6b2823d2ede3dea417c = $this->env->getExtension("native_profiler");
        $__internal_e90ddab31136498978ea3621d85377a96f74b56cbba5c6b2823d2ede3dea417c->enter($__internal_e90ddab31136498978ea3621d85377a96f74b56cbba5c6b2823d2ede3dea417c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e90ddab31136498978ea3621d85377a96f74b56cbba5c6b2823d2ede3dea417c->leave($__internal_e90ddab31136498978ea3621d85377a96f74b56cbba5c6b2823d2ede3dea417c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe4a44ae6416dc58bf6f03c6c745f57b55cde1c865b7273ef772412ff6dd5020 = $this->env->getExtension("native_profiler");
        $__internal_fe4a44ae6416dc58bf6f03c6c745f57b55cde1c865b7273ef772412ff6dd5020->enter($__internal_fe4a44ae6416dc58bf6f03c6c745f57b55cde1c865b7273ef772412ff6dd5020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fe4a44ae6416dc58bf6f03c6c745f57b55cde1c865b7273ef772412ff6dd5020->leave($__internal_fe4a44ae6416dc58bf6f03c6c745f57b55cde1c865b7273ef772412ff6dd5020_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f60886347a042e214f6f0fd2e56e1936b467e1c8b4cfe84561ffa8045d34803 = $this->env->getExtension("native_profiler");
        $__internal_3f60886347a042e214f6f0fd2e56e1936b467e1c8b4cfe84561ffa8045d34803->enter($__internal_3f60886347a042e214f6f0fd2e56e1936b467e1c8b4cfe84561ffa8045d34803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3f60886347a042e214f6f0fd2e56e1936b467e1c8b4cfe84561ffa8045d34803->leave($__internal_3f60886347a042e214f6f0fd2e56e1936b467e1c8b4cfe84561ffa8045d34803_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b52fd3dfaca7048ee50c4a980a9f1b8f2e4a7160d9539c35029d10396902505d = $this->env->getExtension("native_profiler");
        $__internal_b52fd3dfaca7048ee50c4a980a9f1b8f2e4a7160d9539c35029d10396902505d->enter($__internal_b52fd3dfaca7048ee50c4a980a9f1b8f2e4a7160d9539c35029d10396902505d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b52fd3dfaca7048ee50c4a980a9f1b8f2e4a7160d9539c35029d10396902505d->leave($__internal_b52fd3dfaca7048ee50c4a980a9f1b8f2e4a7160d9539c35029d10396902505d_prof);

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
