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
        $__internal_b1c4f3421008f7200d63b85b89bbfb53441c3890257b434f483b19af25c52baf = $this->env->getExtension("native_profiler");
        $__internal_b1c4f3421008f7200d63b85b89bbfb53441c3890257b434f483b19af25c52baf->enter($__internal_b1c4f3421008f7200d63b85b89bbfb53441c3890257b434f483b19af25c52baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b1c4f3421008f7200d63b85b89bbfb53441c3890257b434f483b19af25c52baf->leave($__internal_b1c4f3421008f7200d63b85b89bbfb53441c3890257b434f483b19af25c52baf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7efe52e8e2a4d8120f3d3fea588448e9cd0894fa133ad1625aa06b8915c0d9a4 = $this->env->getExtension("native_profiler");
        $__internal_7efe52e8e2a4d8120f3d3fea588448e9cd0894fa133ad1625aa06b8915c0d9a4->enter($__internal_7efe52e8e2a4d8120f3d3fea588448e9cd0894fa133ad1625aa06b8915c0d9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7efe52e8e2a4d8120f3d3fea588448e9cd0894fa133ad1625aa06b8915c0d9a4->leave($__internal_7efe52e8e2a4d8120f3d3fea588448e9cd0894fa133ad1625aa06b8915c0d9a4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa2d7c567c52fff9667ec9db31b2b668a9167e4233c2782639870b2aab558747 = $this->env->getExtension("native_profiler");
        $__internal_aa2d7c567c52fff9667ec9db31b2b668a9167e4233c2782639870b2aab558747->enter($__internal_aa2d7c567c52fff9667ec9db31b2b668a9167e4233c2782639870b2aab558747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aa2d7c567c52fff9667ec9db31b2b668a9167e4233c2782639870b2aab558747->leave($__internal_aa2d7c567c52fff9667ec9db31b2b668a9167e4233c2782639870b2aab558747_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1298f57fbd0a276ce2c0e0e50ee783d5da4ee9d86c57b93e9a9804a258c70e56 = $this->env->getExtension("native_profiler");
        $__internal_1298f57fbd0a276ce2c0e0e50ee783d5da4ee9d86c57b93e9a9804a258c70e56->enter($__internal_1298f57fbd0a276ce2c0e0e50ee783d5da4ee9d86c57b93e9a9804a258c70e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1298f57fbd0a276ce2c0e0e50ee783d5da4ee9d86c57b93e9a9804a258c70e56->leave($__internal_1298f57fbd0a276ce2c0e0e50ee783d5da4ee9d86c57b93e9a9804a258c70e56_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f857fa07efe57d211d0b694ca72fab7e4d02455875341df6bb6f31a595641af = $this->env->getExtension("native_profiler");
        $__internal_3f857fa07efe57d211d0b694ca72fab7e4d02455875341df6bb6f31a595641af->enter($__internal_3f857fa07efe57d211d0b694ca72fab7e4d02455875341df6bb6f31a595641af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3f857fa07efe57d211d0b694ca72fab7e4d02455875341df6bb6f31a595641af->leave($__internal_3f857fa07efe57d211d0b694ca72fab7e4d02455875341df6bb6f31a595641af_prof);

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
