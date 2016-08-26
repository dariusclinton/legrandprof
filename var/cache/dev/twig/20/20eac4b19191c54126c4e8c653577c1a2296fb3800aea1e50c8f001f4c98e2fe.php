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
        $__internal_e64be88db5504dc0152578c302a51c121d12d3cf71fec2a59e49c08605f95741 = $this->env->getExtension("native_profiler");
        $__internal_e64be88db5504dc0152578c302a51c121d12d3cf71fec2a59e49c08605f95741->enter($__internal_e64be88db5504dc0152578c302a51c121d12d3cf71fec2a59e49c08605f95741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e64be88db5504dc0152578c302a51c121d12d3cf71fec2a59e49c08605f95741->leave($__internal_e64be88db5504dc0152578c302a51c121d12d3cf71fec2a59e49c08605f95741_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9ab030b4ec7288f64cc301581f27a3320c28eb736e462756eb4fb060f219330 = $this->env->getExtension("native_profiler");
        $__internal_b9ab030b4ec7288f64cc301581f27a3320c28eb736e462756eb4fb060f219330->enter($__internal_b9ab030b4ec7288f64cc301581f27a3320c28eb736e462756eb4fb060f219330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b9ab030b4ec7288f64cc301581f27a3320c28eb736e462756eb4fb060f219330->leave($__internal_b9ab030b4ec7288f64cc301581f27a3320c28eb736e462756eb4fb060f219330_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c25005ead8e83e5a95666b2e6d24a4b8e8c543b8547e7ebb8cf6acf301cb251 = $this->env->getExtension("native_profiler");
        $__internal_7c25005ead8e83e5a95666b2e6d24a4b8e8c543b8547e7ebb8cf6acf301cb251->enter($__internal_7c25005ead8e83e5a95666b2e6d24a4b8e8c543b8547e7ebb8cf6acf301cb251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7c25005ead8e83e5a95666b2e6d24a4b8e8c543b8547e7ebb8cf6acf301cb251->leave($__internal_7c25005ead8e83e5a95666b2e6d24a4b8e8c543b8547e7ebb8cf6acf301cb251_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6514e362b891cfd8a3b9291f8355d85b31b02d0eb96138a832bcf836abbf2795 = $this->env->getExtension("native_profiler");
        $__internal_6514e362b891cfd8a3b9291f8355d85b31b02d0eb96138a832bcf836abbf2795->enter($__internal_6514e362b891cfd8a3b9291f8355d85b31b02d0eb96138a832bcf836abbf2795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6514e362b891cfd8a3b9291f8355d85b31b02d0eb96138a832bcf836abbf2795->leave($__internal_6514e362b891cfd8a3b9291f8355d85b31b02d0eb96138a832bcf836abbf2795_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8cdf65b61d3b021fa9fda645cbc36baacd04a12d2773ff1e8fefcc5dcdd70b15 = $this->env->getExtension("native_profiler");
        $__internal_8cdf65b61d3b021fa9fda645cbc36baacd04a12d2773ff1e8fefcc5dcdd70b15->enter($__internal_8cdf65b61d3b021fa9fda645cbc36baacd04a12d2773ff1e8fefcc5dcdd70b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8cdf65b61d3b021fa9fda645cbc36baacd04a12d2773ff1e8fefcc5dcdd70b15->leave($__internal_8cdf65b61d3b021fa9fda645cbc36baacd04a12d2773ff1e8fefcc5dcdd70b15_prof);

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
