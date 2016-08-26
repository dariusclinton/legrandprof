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
        $__internal_53a8ee5b0c304495847594d9df2d2372b37ab5839aa6bfe096864ae89a8484b3 = $this->env->getExtension("native_profiler");
        $__internal_53a8ee5b0c304495847594d9df2d2372b37ab5839aa6bfe096864ae89a8484b3->enter($__internal_53a8ee5b0c304495847594d9df2d2372b37ab5839aa6bfe096864ae89a8484b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_53a8ee5b0c304495847594d9df2d2372b37ab5839aa6bfe096864ae89a8484b3->leave($__internal_53a8ee5b0c304495847594d9df2d2372b37ab5839aa6bfe096864ae89a8484b3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea3a979bb0b51340a50f223803b0a762412668fd61383317fb5dab948fc8d6b9 = $this->env->getExtension("native_profiler");
        $__internal_ea3a979bb0b51340a50f223803b0a762412668fd61383317fb5dab948fc8d6b9->enter($__internal_ea3a979bb0b51340a50f223803b0a762412668fd61383317fb5dab948fc8d6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ea3a979bb0b51340a50f223803b0a762412668fd61383317fb5dab948fc8d6b9->leave($__internal_ea3a979bb0b51340a50f223803b0a762412668fd61383317fb5dab948fc8d6b9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a835daefbc632c7a3cc0f2129f0c365f5edd74566187d6e0feb0ea71cf9ea30e = $this->env->getExtension("native_profiler");
        $__internal_a835daefbc632c7a3cc0f2129f0c365f5edd74566187d6e0feb0ea71cf9ea30e->enter($__internal_a835daefbc632c7a3cc0f2129f0c365f5edd74566187d6e0feb0ea71cf9ea30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a835daefbc632c7a3cc0f2129f0c365f5edd74566187d6e0feb0ea71cf9ea30e->leave($__internal_a835daefbc632c7a3cc0f2129f0c365f5edd74566187d6e0feb0ea71cf9ea30e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b406bb8f8e872cb64e081ce4e76d2a870b4377c5bf88e8ed9a3443c59a8dc077 = $this->env->getExtension("native_profiler");
        $__internal_b406bb8f8e872cb64e081ce4e76d2a870b4377c5bf88e8ed9a3443c59a8dc077->enter($__internal_b406bb8f8e872cb64e081ce4e76d2a870b4377c5bf88e8ed9a3443c59a8dc077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b406bb8f8e872cb64e081ce4e76d2a870b4377c5bf88e8ed9a3443c59a8dc077->leave($__internal_b406bb8f8e872cb64e081ce4e76d2a870b4377c5bf88e8ed9a3443c59a8dc077_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e30ce116d9565280c7c628e045255a06f003f56f59aa90666feb41e0c039f0e = $this->env->getExtension("native_profiler");
        $__internal_1e30ce116d9565280c7c628e045255a06f003f56f59aa90666feb41e0c039f0e->enter($__internal_1e30ce116d9565280c7c628e045255a06f003f56f59aa90666feb41e0c039f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1e30ce116d9565280c7c628e045255a06f003f56f59aa90666feb41e0c039f0e->leave($__internal_1e30ce116d9565280c7c628e045255a06f003f56f59aa90666feb41e0c039f0e_prof);

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
