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
        $__internal_ca15950d9ab37ee44334edb8afbd7ef934e9ab9f096a8c5a502f43627bedc36d = $this->env->getExtension("native_profiler");
        $__internal_ca15950d9ab37ee44334edb8afbd7ef934e9ab9f096a8c5a502f43627bedc36d->enter($__internal_ca15950d9ab37ee44334edb8afbd7ef934e9ab9f096a8c5a502f43627bedc36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ca15950d9ab37ee44334edb8afbd7ef934e9ab9f096a8c5a502f43627bedc36d->leave($__internal_ca15950d9ab37ee44334edb8afbd7ef934e9ab9f096a8c5a502f43627bedc36d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9349353cf735d7e7d8b3f5980b9aeb69324e809fc9c69e399d610bbfd1a6dd29 = $this->env->getExtension("native_profiler");
        $__internal_9349353cf735d7e7d8b3f5980b9aeb69324e809fc9c69e399d610bbfd1a6dd29->enter($__internal_9349353cf735d7e7d8b3f5980b9aeb69324e809fc9c69e399d610bbfd1a6dd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9349353cf735d7e7d8b3f5980b9aeb69324e809fc9c69e399d610bbfd1a6dd29->leave($__internal_9349353cf735d7e7d8b3f5980b9aeb69324e809fc9c69e399d610bbfd1a6dd29_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_288f16a1fdc6a932ba3d48b932bdb3b3528006e4dc63d2fea5ff0fd2b8d35aa5 = $this->env->getExtension("native_profiler");
        $__internal_288f16a1fdc6a932ba3d48b932bdb3b3528006e4dc63d2fea5ff0fd2b8d35aa5->enter($__internal_288f16a1fdc6a932ba3d48b932bdb3b3528006e4dc63d2fea5ff0fd2b8d35aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_288f16a1fdc6a932ba3d48b932bdb3b3528006e4dc63d2fea5ff0fd2b8d35aa5->leave($__internal_288f16a1fdc6a932ba3d48b932bdb3b3528006e4dc63d2fea5ff0fd2b8d35aa5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_afedf8e0f746fc74150d23c5c235fba23271a0aeea215853b6e66f48c83c8042 = $this->env->getExtension("native_profiler");
        $__internal_afedf8e0f746fc74150d23c5c235fba23271a0aeea215853b6e66f48c83c8042->enter($__internal_afedf8e0f746fc74150d23c5c235fba23271a0aeea215853b6e66f48c83c8042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_afedf8e0f746fc74150d23c5c235fba23271a0aeea215853b6e66f48c83c8042->leave($__internal_afedf8e0f746fc74150d23c5c235fba23271a0aeea215853b6e66f48c83c8042_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_51097120c256e85954dca95aea2f30a7bd67a6fe3b2c63bdf168af6c527b94e2 = $this->env->getExtension("native_profiler");
        $__internal_51097120c256e85954dca95aea2f30a7bd67a6fe3b2c63bdf168af6c527b94e2->enter($__internal_51097120c256e85954dca95aea2f30a7bd67a6fe3b2c63bdf168af6c527b94e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_51097120c256e85954dca95aea2f30a7bd67a6fe3b2c63bdf168af6c527b94e2->leave($__internal_51097120c256e85954dca95aea2f30a7bd67a6fe3b2c63bdf168af6c527b94e2_prof);

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
