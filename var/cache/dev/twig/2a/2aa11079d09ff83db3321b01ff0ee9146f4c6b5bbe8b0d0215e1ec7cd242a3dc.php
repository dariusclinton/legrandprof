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
        $__internal_78eeae20c08198c8c1ac01b03b26fcdc8269e5b026131d4e93a8a89f55262f2c = $this->env->getExtension("native_profiler");
        $__internal_78eeae20c08198c8c1ac01b03b26fcdc8269e5b026131d4e93a8a89f55262f2c->enter($__internal_78eeae20c08198c8c1ac01b03b26fcdc8269e5b026131d4e93a8a89f55262f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_78eeae20c08198c8c1ac01b03b26fcdc8269e5b026131d4e93a8a89f55262f2c->leave($__internal_78eeae20c08198c8c1ac01b03b26fcdc8269e5b026131d4e93a8a89f55262f2c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f00286e31f72dc815138e0bc856c2ce3d9540fd639a6a9a09b1c07aa039a21f = $this->env->getExtension("native_profiler");
        $__internal_4f00286e31f72dc815138e0bc856c2ce3d9540fd639a6a9a09b1c07aa039a21f->enter($__internal_4f00286e31f72dc815138e0bc856c2ce3d9540fd639a6a9a09b1c07aa039a21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4f00286e31f72dc815138e0bc856c2ce3d9540fd639a6a9a09b1c07aa039a21f->leave($__internal_4f00286e31f72dc815138e0bc856c2ce3d9540fd639a6a9a09b1c07aa039a21f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9036889b7a659af31dbb6304df08b49ab9431deedc3b10c87797aedc9871fb6 = $this->env->getExtension("native_profiler");
        $__internal_b9036889b7a659af31dbb6304df08b49ab9431deedc3b10c87797aedc9871fb6->enter($__internal_b9036889b7a659af31dbb6304df08b49ab9431deedc3b10c87797aedc9871fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b9036889b7a659af31dbb6304df08b49ab9431deedc3b10c87797aedc9871fb6->leave($__internal_b9036889b7a659af31dbb6304df08b49ab9431deedc3b10c87797aedc9871fb6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc5ac7c7888e7b5289bb0b4b3fd08b16a114447c94d7618b42ccaba6ac639b62 = $this->env->getExtension("native_profiler");
        $__internal_fc5ac7c7888e7b5289bb0b4b3fd08b16a114447c94d7618b42ccaba6ac639b62->enter($__internal_fc5ac7c7888e7b5289bb0b4b3fd08b16a114447c94d7618b42ccaba6ac639b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fc5ac7c7888e7b5289bb0b4b3fd08b16a114447c94d7618b42ccaba6ac639b62->leave($__internal_fc5ac7c7888e7b5289bb0b4b3fd08b16a114447c94d7618b42ccaba6ac639b62_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2460f7aa5b2033012d9002fb1cdcb541309e72c236fd9be5382386824726bf69 = $this->env->getExtension("native_profiler");
        $__internal_2460f7aa5b2033012d9002fb1cdcb541309e72c236fd9be5382386824726bf69->enter($__internal_2460f7aa5b2033012d9002fb1cdcb541309e72c236fd9be5382386824726bf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2460f7aa5b2033012d9002fb1cdcb541309e72c236fd9be5382386824726bf69->leave($__internal_2460f7aa5b2033012d9002fb1cdcb541309e72c236fd9be5382386824726bf69_prof);

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
