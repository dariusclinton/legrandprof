<?php

/* ::base.html.twig */
class __TwigTemplate_7a2f2d95223c043aa62cb0a1e1e226295a550e70246b38a27b6b2e05caeedbe6 extends Twig_Template
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
        $__internal_eb97c2d3505da6c2c56f3952759e745378c18dc5779d9e1e82ec7ea5c2285384 = $this->env->getExtension("native_profiler");
        $__internal_eb97c2d3505da6c2c56f3952759e745378c18dc5779d9e1e82ec7ea5c2285384->enter($__internal_eb97c2d3505da6c2c56f3952759e745378c18dc5779d9e1e82ec7ea5c2285384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_eb97c2d3505da6c2c56f3952759e745378c18dc5779d9e1e82ec7ea5c2285384->leave($__internal_eb97c2d3505da6c2c56f3952759e745378c18dc5779d9e1e82ec7ea5c2285384_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1be5428d6ff74a4101d1af41ceabfdec5454804096ac36f5cec26ba74f1eabd8 = $this->env->getExtension("native_profiler");
        $__internal_1be5428d6ff74a4101d1af41ceabfdec5454804096ac36f5cec26ba74f1eabd8->enter($__internal_1be5428d6ff74a4101d1af41ceabfdec5454804096ac36f5cec26ba74f1eabd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1be5428d6ff74a4101d1af41ceabfdec5454804096ac36f5cec26ba74f1eabd8->leave($__internal_1be5428d6ff74a4101d1af41ceabfdec5454804096ac36f5cec26ba74f1eabd8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39b112480a08ef0f7855235075d9e24a87f685468a81e8cfdb96a18ba8bef9bc = $this->env->getExtension("native_profiler");
        $__internal_39b112480a08ef0f7855235075d9e24a87f685468a81e8cfdb96a18ba8bef9bc->enter($__internal_39b112480a08ef0f7855235075d9e24a87f685468a81e8cfdb96a18ba8bef9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_39b112480a08ef0f7855235075d9e24a87f685468a81e8cfdb96a18ba8bef9bc->leave($__internal_39b112480a08ef0f7855235075d9e24a87f685468a81e8cfdb96a18ba8bef9bc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e16863170ba8da7909b102e95a7375c44167943dc8340d968b5f84bd53cddc75 = $this->env->getExtension("native_profiler");
        $__internal_e16863170ba8da7909b102e95a7375c44167943dc8340d968b5f84bd53cddc75->enter($__internal_e16863170ba8da7909b102e95a7375c44167943dc8340d968b5f84bd53cddc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e16863170ba8da7909b102e95a7375c44167943dc8340d968b5f84bd53cddc75->leave($__internal_e16863170ba8da7909b102e95a7375c44167943dc8340d968b5f84bd53cddc75_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab84d438be2c331b6aa8551eb819982f2ee482d7e80303b98d17236b1f3b3472 = $this->env->getExtension("native_profiler");
        $__internal_ab84d438be2c331b6aa8551eb819982f2ee482d7e80303b98d17236b1f3b3472->enter($__internal_ab84d438be2c331b6aa8551eb819982f2ee482d7e80303b98d17236b1f3b3472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ab84d438be2c331b6aa8551eb819982f2ee482d7e80303b98d17236b1f3b3472->leave($__internal_ab84d438be2c331b6aa8551eb819982f2ee482d7e80303b98d17236b1f3b3472_prof);

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

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
