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
        $__internal_f2aa5c5729a26cc8933eb59a4d60452c9a0b2a4e0ed199312846ba72f68e0ee1 = $this->env->getExtension("native_profiler");
        $__internal_f2aa5c5729a26cc8933eb59a4d60452c9a0b2a4e0ed199312846ba72f68e0ee1->enter($__internal_f2aa5c5729a26cc8933eb59a4d60452c9a0b2a4e0ed199312846ba72f68e0ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f2aa5c5729a26cc8933eb59a4d60452c9a0b2a4e0ed199312846ba72f68e0ee1->leave($__internal_f2aa5c5729a26cc8933eb59a4d60452c9a0b2a4e0ed199312846ba72f68e0ee1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_993a8cc8aaca194c6bb79d90e18a7ee2c54169e7fdd4e1b131ee8098b63c25a3 = $this->env->getExtension("native_profiler");
        $__internal_993a8cc8aaca194c6bb79d90e18a7ee2c54169e7fdd4e1b131ee8098b63c25a3->enter($__internal_993a8cc8aaca194c6bb79d90e18a7ee2c54169e7fdd4e1b131ee8098b63c25a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_993a8cc8aaca194c6bb79d90e18a7ee2c54169e7fdd4e1b131ee8098b63c25a3->leave($__internal_993a8cc8aaca194c6bb79d90e18a7ee2c54169e7fdd4e1b131ee8098b63c25a3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_991327582e72b7546fc4e7252f2b87db24378c7c05bae6f70b755bb7dd7f5ad4 = $this->env->getExtension("native_profiler");
        $__internal_991327582e72b7546fc4e7252f2b87db24378c7c05bae6f70b755bb7dd7f5ad4->enter($__internal_991327582e72b7546fc4e7252f2b87db24378c7c05bae6f70b755bb7dd7f5ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_991327582e72b7546fc4e7252f2b87db24378c7c05bae6f70b755bb7dd7f5ad4->leave($__internal_991327582e72b7546fc4e7252f2b87db24378c7c05bae6f70b755bb7dd7f5ad4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b577bc9e2339d493c1bfede8dbfc80761341b0a98c3b6b4601cda17df841371a = $this->env->getExtension("native_profiler");
        $__internal_b577bc9e2339d493c1bfede8dbfc80761341b0a98c3b6b4601cda17df841371a->enter($__internal_b577bc9e2339d493c1bfede8dbfc80761341b0a98c3b6b4601cda17df841371a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b577bc9e2339d493c1bfede8dbfc80761341b0a98c3b6b4601cda17df841371a->leave($__internal_b577bc9e2339d493c1bfede8dbfc80761341b0a98c3b6b4601cda17df841371a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b23f9631c6a7d43576b7d762310513eabcfe6f30663df61a9c8a13d94f3fca57 = $this->env->getExtension("native_profiler");
        $__internal_b23f9631c6a7d43576b7d762310513eabcfe6f30663df61a9c8a13d94f3fca57->enter($__internal_b23f9631c6a7d43576b7d762310513eabcfe6f30663df61a9c8a13d94f3fca57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b23f9631c6a7d43576b7d762310513eabcfe6f30663df61a9c8a13d94f3fca57->leave($__internal_b23f9631c6a7d43576b7d762310513eabcfe6f30663df61a9c8a13d94f3fca57_prof);

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
