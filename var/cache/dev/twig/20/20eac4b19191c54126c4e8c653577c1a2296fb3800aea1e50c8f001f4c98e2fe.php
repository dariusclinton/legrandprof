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
        $__internal_84490ed6f288faef9721fc2fb573393e34258d8560d840bf44654860ec39ca9d = $this->env->getExtension("native_profiler");
        $__internal_84490ed6f288faef9721fc2fb573393e34258d8560d840bf44654860ec39ca9d->enter($__internal_84490ed6f288faef9721fc2fb573393e34258d8560d840bf44654860ec39ca9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_84490ed6f288faef9721fc2fb573393e34258d8560d840bf44654860ec39ca9d->leave($__internal_84490ed6f288faef9721fc2fb573393e34258d8560d840bf44654860ec39ca9d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca7865372013b9f6ed737320dafc03612351dfc4583fcb17eaa1be062fa36bb1 = $this->env->getExtension("native_profiler");
        $__internal_ca7865372013b9f6ed737320dafc03612351dfc4583fcb17eaa1be062fa36bb1->enter($__internal_ca7865372013b9f6ed737320dafc03612351dfc4583fcb17eaa1be062fa36bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ca7865372013b9f6ed737320dafc03612351dfc4583fcb17eaa1be062fa36bb1->leave($__internal_ca7865372013b9f6ed737320dafc03612351dfc4583fcb17eaa1be062fa36bb1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_944e3bdf250ae94d7e453a810592248c32099abe7d640f0a6329cd9cf5e5a90a = $this->env->getExtension("native_profiler");
        $__internal_944e3bdf250ae94d7e453a810592248c32099abe7d640f0a6329cd9cf5e5a90a->enter($__internal_944e3bdf250ae94d7e453a810592248c32099abe7d640f0a6329cd9cf5e5a90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_944e3bdf250ae94d7e453a810592248c32099abe7d640f0a6329cd9cf5e5a90a->leave($__internal_944e3bdf250ae94d7e453a810592248c32099abe7d640f0a6329cd9cf5e5a90a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_24dbf08af18d772e0c45afc018e14b23c9d86fc2eabbb18f1a815ab1db2f3050 = $this->env->getExtension("native_profiler");
        $__internal_24dbf08af18d772e0c45afc018e14b23c9d86fc2eabbb18f1a815ab1db2f3050->enter($__internal_24dbf08af18d772e0c45afc018e14b23c9d86fc2eabbb18f1a815ab1db2f3050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_24dbf08af18d772e0c45afc018e14b23c9d86fc2eabbb18f1a815ab1db2f3050->leave($__internal_24dbf08af18d772e0c45afc018e14b23c9d86fc2eabbb18f1a815ab1db2f3050_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b36a29a3dbf1401d7c9fae7af5e7d87a82fcceea63171e69ebe6adcb4bc99a76 = $this->env->getExtension("native_profiler");
        $__internal_b36a29a3dbf1401d7c9fae7af5e7d87a82fcceea63171e69ebe6adcb4bc99a76->enter($__internal_b36a29a3dbf1401d7c9fae7af5e7d87a82fcceea63171e69ebe6adcb4bc99a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b36a29a3dbf1401d7c9fae7af5e7d87a82fcceea63171e69ebe6adcb4bc99a76->leave($__internal_b36a29a3dbf1401d7c9fae7af5e7d87a82fcceea63171e69ebe6adcb4bc99a76_prof);

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
