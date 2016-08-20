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
        $__internal_95163508b3e97aca2524770d1cfb00b8d340e7cca1d2e1bf85e4f2036f24f5c9 = $this->env->getExtension("native_profiler");
        $__internal_95163508b3e97aca2524770d1cfb00b8d340e7cca1d2e1bf85e4f2036f24f5c9->enter($__internal_95163508b3e97aca2524770d1cfb00b8d340e7cca1d2e1bf85e4f2036f24f5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_95163508b3e97aca2524770d1cfb00b8d340e7cca1d2e1bf85e4f2036f24f5c9->leave($__internal_95163508b3e97aca2524770d1cfb00b8d340e7cca1d2e1bf85e4f2036f24f5c9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb5711953c1837248f19db08b628e481af0ed767835de59ce083f7adb823e966 = $this->env->getExtension("native_profiler");
        $__internal_eb5711953c1837248f19db08b628e481af0ed767835de59ce083f7adb823e966->enter($__internal_eb5711953c1837248f19db08b628e481af0ed767835de59ce083f7adb823e966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eb5711953c1837248f19db08b628e481af0ed767835de59ce083f7adb823e966->leave($__internal_eb5711953c1837248f19db08b628e481af0ed767835de59ce083f7adb823e966_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d4960743de8fc62f52e85ddfe845746fb1884f831d8f81b8d6bf140e889f11a = $this->env->getExtension("native_profiler");
        $__internal_6d4960743de8fc62f52e85ddfe845746fb1884f831d8f81b8d6bf140e889f11a->enter($__internal_6d4960743de8fc62f52e85ddfe845746fb1884f831d8f81b8d6bf140e889f11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6d4960743de8fc62f52e85ddfe845746fb1884f831d8f81b8d6bf140e889f11a->leave($__internal_6d4960743de8fc62f52e85ddfe845746fb1884f831d8f81b8d6bf140e889f11a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_50a8d34d0cc27e5f7adcf3d9bfb80720d10b8dcabeca9253e906dc488253da90 = $this->env->getExtension("native_profiler");
        $__internal_50a8d34d0cc27e5f7adcf3d9bfb80720d10b8dcabeca9253e906dc488253da90->enter($__internal_50a8d34d0cc27e5f7adcf3d9bfb80720d10b8dcabeca9253e906dc488253da90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50a8d34d0cc27e5f7adcf3d9bfb80720d10b8dcabeca9253e906dc488253da90->leave($__internal_50a8d34d0cc27e5f7adcf3d9bfb80720d10b8dcabeca9253e906dc488253da90_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7380936f7089b82b56f83bfe41f24127bc92586962a936a3129231e21a366846 = $this->env->getExtension("native_profiler");
        $__internal_7380936f7089b82b56f83bfe41f24127bc92586962a936a3129231e21a366846->enter($__internal_7380936f7089b82b56f83bfe41f24127bc92586962a936a3129231e21a366846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7380936f7089b82b56f83bfe41f24127bc92586962a936a3129231e21a366846->leave($__internal_7380936f7089b82b56f83bfe41f24127bc92586962a936a3129231e21a366846_prof);

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
