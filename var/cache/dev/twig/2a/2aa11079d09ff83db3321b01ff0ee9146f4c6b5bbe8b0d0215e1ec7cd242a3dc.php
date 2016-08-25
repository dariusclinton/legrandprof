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
        $__internal_c0ba312a933f160e2338817e5f0a23a5e66a3b83b6de3f28476433e74ebd8ac4 = $this->env->getExtension("native_profiler");
        $__internal_c0ba312a933f160e2338817e5f0a23a5e66a3b83b6de3f28476433e74ebd8ac4->enter($__internal_c0ba312a933f160e2338817e5f0a23a5e66a3b83b6de3f28476433e74ebd8ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c0ba312a933f160e2338817e5f0a23a5e66a3b83b6de3f28476433e74ebd8ac4->leave($__internal_c0ba312a933f160e2338817e5f0a23a5e66a3b83b6de3f28476433e74ebd8ac4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_feb491d57938aa3be13ee7c97f9fc65e60bbac79f42e23e508b3e29dbe36137c = $this->env->getExtension("native_profiler");
        $__internal_feb491d57938aa3be13ee7c97f9fc65e60bbac79f42e23e508b3e29dbe36137c->enter($__internal_feb491d57938aa3be13ee7c97f9fc65e60bbac79f42e23e508b3e29dbe36137c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_feb491d57938aa3be13ee7c97f9fc65e60bbac79f42e23e508b3e29dbe36137c->leave($__internal_feb491d57938aa3be13ee7c97f9fc65e60bbac79f42e23e508b3e29dbe36137c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a302a0be7b5aad8276f9df0a8aa60b47240e2ef8affd0ceaca03298906ace3df = $this->env->getExtension("native_profiler");
        $__internal_a302a0be7b5aad8276f9df0a8aa60b47240e2ef8affd0ceaca03298906ace3df->enter($__internal_a302a0be7b5aad8276f9df0a8aa60b47240e2ef8affd0ceaca03298906ace3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a302a0be7b5aad8276f9df0a8aa60b47240e2ef8affd0ceaca03298906ace3df->leave($__internal_a302a0be7b5aad8276f9df0a8aa60b47240e2ef8affd0ceaca03298906ace3df_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6efcef47bd8477904a34582af69b8b8e22805cad57ebe1b4ccf00931293e2fc = $this->env->getExtension("native_profiler");
        $__internal_f6efcef47bd8477904a34582af69b8b8e22805cad57ebe1b4ccf00931293e2fc->enter($__internal_f6efcef47bd8477904a34582af69b8b8e22805cad57ebe1b4ccf00931293e2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f6efcef47bd8477904a34582af69b8b8e22805cad57ebe1b4ccf00931293e2fc->leave($__internal_f6efcef47bd8477904a34582af69b8b8e22805cad57ebe1b4ccf00931293e2fc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6367959efc2f7cd35a851da4015f8ebd683d44a3d2ec6e277d2b77b9229dcf5 = $this->env->getExtension("native_profiler");
        $__internal_f6367959efc2f7cd35a851da4015f8ebd683d44a3d2ec6e277d2b77b9229dcf5->enter($__internal_f6367959efc2f7cd35a851da4015f8ebd683d44a3d2ec6e277d2b77b9229dcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f6367959efc2f7cd35a851da4015f8ebd683d44a3d2ec6e277d2b77b9229dcf5->leave($__internal_f6367959efc2f7cd35a851da4015f8ebd683d44a3d2ec6e277d2b77b9229dcf5_prof);

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
