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
        $__internal_5c43bab9e12405251cf14f8791532d777574c6d73325e9c5e955127e391c5f8e = $this->env->getExtension("native_profiler");
        $__internal_5c43bab9e12405251cf14f8791532d777574c6d73325e9c5e955127e391c5f8e->enter($__internal_5c43bab9e12405251cf14f8791532d777574c6d73325e9c5e955127e391c5f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_5c43bab9e12405251cf14f8791532d777574c6d73325e9c5e955127e391c5f8e->leave($__internal_5c43bab9e12405251cf14f8791532d777574c6d73325e9c5e955127e391c5f8e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f604dece9f4ab73cf586595e49730cb903038fbe9e353dd02a34e826dafa4959 = $this->env->getExtension("native_profiler");
        $__internal_f604dece9f4ab73cf586595e49730cb903038fbe9e353dd02a34e826dafa4959->enter($__internal_f604dece9f4ab73cf586595e49730cb903038fbe9e353dd02a34e826dafa4959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f604dece9f4ab73cf586595e49730cb903038fbe9e353dd02a34e826dafa4959->leave($__internal_f604dece9f4ab73cf586595e49730cb903038fbe9e353dd02a34e826dafa4959_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e6b91f1daaf5ab999c419cf84f156fc186cb6b07ce72c2c92fb0ed8c0e6f7ef = $this->env->getExtension("native_profiler");
        $__internal_7e6b91f1daaf5ab999c419cf84f156fc186cb6b07ce72c2c92fb0ed8c0e6f7ef->enter($__internal_7e6b91f1daaf5ab999c419cf84f156fc186cb6b07ce72c2c92fb0ed8c0e6f7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7e6b91f1daaf5ab999c419cf84f156fc186cb6b07ce72c2c92fb0ed8c0e6f7ef->leave($__internal_7e6b91f1daaf5ab999c419cf84f156fc186cb6b07ce72c2c92fb0ed8c0e6f7ef_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f2cb391fb43e3df711643eb16e22e5e066b4d08b85015df9c7db87514050447 = $this->env->getExtension("native_profiler");
        $__internal_5f2cb391fb43e3df711643eb16e22e5e066b4d08b85015df9c7db87514050447->enter($__internal_5f2cb391fb43e3df711643eb16e22e5e066b4d08b85015df9c7db87514050447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5f2cb391fb43e3df711643eb16e22e5e066b4d08b85015df9c7db87514050447->leave($__internal_5f2cb391fb43e3df711643eb16e22e5e066b4d08b85015df9c7db87514050447_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72f399581e33b47c98a924c327cb775474367e89b30ba96bdca8d4ed5c20f594 = $this->env->getExtension("native_profiler");
        $__internal_72f399581e33b47c98a924c327cb775474367e89b30ba96bdca8d4ed5c20f594->enter($__internal_72f399581e33b47c98a924c327cb775474367e89b30ba96bdca8d4ed5c20f594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_72f399581e33b47c98a924c327cb775474367e89b30ba96bdca8d4ed5c20f594->leave($__internal_72f399581e33b47c98a924c327cb775474367e89b30ba96bdca8d4ed5c20f594_prof);

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
