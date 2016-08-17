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
        $__internal_37bd4e4c2f56648981ad98a33134fe34c4974ad9d0bb5c7d482962226da38930 = $this->env->getExtension("native_profiler");
        $__internal_37bd4e4c2f56648981ad98a33134fe34c4974ad9d0bb5c7d482962226da38930->enter($__internal_37bd4e4c2f56648981ad98a33134fe34c4974ad9d0bb5c7d482962226da38930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_37bd4e4c2f56648981ad98a33134fe34c4974ad9d0bb5c7d482962226da38930->leave($__internal_37bd4e4c2f56648981ad98a33134fe34c4974ad9d0bb5c7d482962226da38930_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41d36ea30bce2a0b517748bda5eeec9fdb00ebb8084007dec4653a073befd2e8 = $this->env->getExtension("native_profiler");
        $__internal_41d36ea30bce2a0b517748bda5eeec9fdb00ebb8084007dec4653a073befd2e8->enter($__internal_41d36ea30bce2a0b517748bda5eeec9fdb00ebb8084007dec4653a073befd2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_41d36ea30bce2a0b517748bda5eeec9fdb00ebb8084007dec4653a073befd2e8->leave($__internal_41d36ea30bce2a0b517748bda5eeec9fdb00ebb8084007dec4653a073befd2e8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0d3fe0dd94ec8727a90cfaebdb2b4d83562e072e7c6911231d2cd7acbd1823e = $this->env->getExtension("native_profiler");
        $__internal_e0d3fe0dd94ec8727a90cfaebdb2b4d83562e072e7c6911231d2cd7acbd1823e->enter($__internal_e0d3fe0dd94ec8727a90cfaebdb2b4d83562e072e7c6911231d2cd7acbd1823e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e0d3fe0dd94ec8727a90cfaebdb2b4d83562e072e7c6911231d2cd7acbd1823e->leave($__internal_e0d3fe0dd94ec8727a90cfaebdb2b4d83562e072e7c6911231d2cd7acbd1823e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_49ed94f947e888fa2fe9e1b3bb1ebe5192db5390f6ab6a943e9cfe731ee9fcb7 = $this->env->getExtension("native_profiler");
        $__internal_49ed94f947e888fa2fe9e1b3bb1ebe5192db5390f6ab6a943e9cfe731ee9fcb7->enter($__internal_49ed94f947e888fa2fe9e1b3bb1ebe5192db5390f6ab6a943e9cfe731ee9fcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_49ed94f947e888fa2fe9e1b3bb1ebe5192db5390f6ab6a943e9cfe731ee9fcb7->leave($__internal_49ed94f947e888fa2fe9e1b3bb1ebe5192db5390f6ab6a943e9cfe731ee9fcb7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b8bfe0495cc41d75af7a4c515947a42685abd016497d24695b21c6ad093b8c6 = $this->env->getExtension("native_profiler");
        $__internal_3b8bfe0495cc41d75af7a4c515947a42685abd016497d24695b21c6ad093b8c6->enter($__internal_3b8bfe0495cc41d75af7a4c515947a42685abd016497d24695b21c6ad093b8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3b8bfe0495cc41d75af7a4c515947a42685abd016497d24695b21c6ad093b8c6->leave($__internal_3b8bfe0495cc41d75af7a4c515947a42685abd016497d24695b21c6ad093b8c6_prof);

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
