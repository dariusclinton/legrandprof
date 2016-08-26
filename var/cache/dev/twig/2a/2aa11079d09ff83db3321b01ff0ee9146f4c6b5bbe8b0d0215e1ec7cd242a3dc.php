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
        $__internal_bf8bc1eb66fd73f706e8ef8e886ae65451daa498f6dee37765b7cc921b3947d0 = $this->env->getExtension("native_profiler");
        $__internal_bf8bc1eb66fd73f706e8ef8e886ae65451daa498f6dee37765b7cc921b3947d0->enter($__internal_bf8bc1eb66fd73f706e8ef8e886ae65451daa498f6dee37765b7cc921b3947d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_bf8bc1eb66fd73f706e8ef8e886ae65451daa498f6dee37765b7cc921b3947d0->leave($__internal_bf8bc1eb66fd73f706e8ef8e886ae65451daa498f6dee37765b7cc921b3947d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e869308885c2e3c19a4726943da727506a5831052f4d05d40997fd203234ed4 = $this->env->getExtension("native_profiler");
        $__internal_4e869308885c2e3c19a4726943da727506a5831052f4d05d40997fd203234ed4->enter($__internal_4e869308885c2e3c19a4726943da727506a5831052f4d05d40997fd203234ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4e869308885c2e3c19a4726943da727506a5831052f4d05d40997fd203234ed4->leave($__internal_4e869308885c2e3c19a4726943da727506a5831052f4d05d40997fd203234ed4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a97d1ed9f387762655fd658b7d0e70c6da720de47992cb1e165431aab7b068ca = $this->env->getExtension("native_profiler");
        $__internal_a97d1ed9f387762655fd658b7d0e70c6da720de47992cb1e165431aab7b068ca->enter($__internal_a97d1ed9f387762655fd658b7d0e70c6da720de47992cb1e165431aab7b068ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a97d1ed9f387762655fd658b7d0e70c6da720de47992cb1e165431aab7b068ca->leave($__internal_a97d1ed9f387762655fd658b7d0e70c6da720de47992cb1e165431aab7b068ca_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbc85116bd76425c2ca4ad699e8fa54c6ce0cbb0aec83dfcf051a514fd96c2a8 = $this->env->getExtension("native_profiler");
        $__internal_cbc85116bd76425c2ca4ad699e8fa54c6ce0cbb0aec83dfcf051a514fd96c2a8->enter($__internal_cbc85116bd76425c2ca4ad699e8fa54c6ce0cbb0aec83dfcf051a514fd96c2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cbc85116bd76425c2ca4ad699e8fa54c6ce0cbb0aec83dfcf051a514fd96c2a8->leave($__internal_cbc85116bd76425c2ca4ad699e8fa54c6ce0cbb0aec83dfcf051a514fd96c2a8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c67a37239087603dafcd1b0131fba628d05d6b45bc9c1bb471916fcd82a8af1e = $this->env->getExtension("native_profiler");
        $__internal_c67a37239087603dafcd1b0131fba628d05d6b45bc9c1bb471916fcd82a8af1e->enter($__internal_c67a37239087603dafcd1b0131fba628d05d6b45bc9c1bb471916fcd82a8af1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c67a37239087603dafcd1b0131fba628d05d6b45bc9c1bb471916fcd82a8af1e->leave($__internal_c67a37239087603dafcd1b0131fba628d05d6b45bc9c1bb471916fcd82a8af1e_prof);

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
