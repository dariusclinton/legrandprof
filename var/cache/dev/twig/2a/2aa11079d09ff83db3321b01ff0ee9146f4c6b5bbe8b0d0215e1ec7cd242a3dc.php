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
        $__internal_9ad0fde41310e870ace550887a7b79b829f9119618344aea6eecddc854060dc1 = $this->env->getExtension("native_profiler");
        $__internal_9ad0fde41310e870ace550887a7b79b829f9119618344aea6eecddc854060dc1->enter($__internal_9ad0fde41310e870ace550887a7b79b829f9119618344aea6eecddc854060dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9ad0fde41310e870ace550887a7b79b829f9119618344aea6eecddc854060dc1->leave($__internal_9ad0fde41310e870ace550887a7b79b829f9119618344aea6eecddc854060dc1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6fc62259f2b2a0517b5bae73779c4cfe8fcb8a18627be31bb964730463fa8e3 = $this->env->getExtension("native_profiler");
        $__internal_c6fc62259f2b2a0517b5bae73779c4cfe8fcb8a18627be31bb964730463fa8e3->enter($__internal_c6fc62259f2b2a0517b5bae73779c4cfe8fcb8a18627be31bb964730463fa8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c6fc62259f2b2a0517b5bae73779c4cfe8fcb8a18627be31bb964730463fa8e3->leave($__internal_c6fc62259f2b2a0517b5bae73779c4cfe8fcb8a18627be31bb964730463fa8e3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d7b7351e9babf9b6a478bc8693f6a19c1d2e30ad8797a280a395543011059a0 = $this->env->getExtension("native_profiler");
        $__internal_0d7b7351e9babf9b6a478bc8693f6a19c1d2e30ad8797a280a395543011059a0->enter($__internal_0d7b7351e9babf9b6a478bc8693f6a19c1d2e30ad8797a280a395543011059a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0d7b7351e9babf9b6a478bc8693f6a19c1d2e30ad8797a280a395543011059a0->leave($__internal_0d7b7351e9babf9b6a478bc8693f6a19c1d2e30ad8797a280a395543011059a0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9c70c32575750d1e9f60991f7d35a90a427ef113493805795603fe3a6b91504 = $this->env->getExtension("native_profiler");
        $__internal_c9c70c32575750d1e9f60991f7d35a90a427ef113493805795603fe3a6b91504->enter($__internal_c9c70c32575750d1e9f60991f7d35a90a427ef113493805795603fe3a6b91504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c9c70c32575750d1e9f60991f7d35a90a427ef113493805795603fe3a6b91504->leave($__internal_c9c70c32575750d1e9f60991f7d35a90a427ef113493805795603fe3a6b91504_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38508715e420c86a1ffddb1ef5f9d78ab42d9994b60339e6a51eb560a32b727b = $this->env->getExtension("native_profiler");
        $__internal_38508715e420c86a1ffddb1ef5f9d78ab42d9994b60339e6a51eb560a32b727b->enter($__internal_38508715e420c86a1ffddb1ef5f9d78ab42d9994b60339e6a51eb560a32b727b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_38508715e420c86a1ffddb1ef5f9d78ab42d9994b60339e6a51eb560a32b727b->leave($__internal_38508715e420c86a1ffddb1ef5f9d78ab42d9994b60339e6a51eb560a32b727b_prof);

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
