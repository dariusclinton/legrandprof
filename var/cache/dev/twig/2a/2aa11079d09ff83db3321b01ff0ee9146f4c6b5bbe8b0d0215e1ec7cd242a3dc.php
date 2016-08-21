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
        $__internal_c6024eb71dded7079d8bbf8117db29fd0ac3e8e0c699a1ed1e320f6b8752b726 = $this->env->getExtension("native_profiler");
        $__internal_c6024eb71dded7079d8bbf8117db29fd0ac3e8e0c699a1ed1e320f6b8752b726->enter($__internal_c6024eb71dded7079d8bbf8117db29fd0ac3e8e0c699a1ed1e320f6b8752b726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c6024eb71dded7079d8bbf8117db29fd0ac3e8e0c699a1ed1e320f6b8752b726->leave($__internal_c6024eb71dded7079d8bbf8117db29fd0ac3e8e0c699a1ed1e320f6b8752b726_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_03cd7ef0a97b21940a832578ad9ae7f9180ce252423c83cccbd4303bbbed6507 = $this->env->getExtension("native_profiler");
        $__internal_03cd7ef0a97b21940a832578ad9ae7f9180ce252423c83cccbd4303bbbed6507->enter($__internal_03cd7ef0a97b21940a832578ad9ae7f9180ce252423c83cccbd4303bbbed6507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_03cd7ef0a97b21940a832578ad9ae7f9180ce252423c83cccbd4303bbbed6507->leave($__internal_03cd7ef0a97b21940a832578ad9ae7f9180ce252423c83cccbd4303bbbed6507_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d089966dbad5b7b8677e6c6d73fa9304cf8920f89d716497a74cd6f2ed6b764 = $this->env->getExtension("native_profiler");
        $__internal_7d089966dbad5b7b8677e6c6d73fa9304cf8920f89d716497a74cd6f2ed6b764->enter($__internal_7d089966dbad5b7b8677e6c6d73fa9304cf8920f89d716497a74cd6f2ed6b764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7d089966dbad5b7b8677e6c6d73fa9304cf8920f89d716497a74cd6f2ed6b764->leave($__internal_7d089966dbad5b7b8677e6c6d73fa9304cf8920f89d716497a74cd6f2ed6b764_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8174e523c5dec73baab6e293480488c503346c897a708f354c3bf5b337bff881 = $this->env->getExtension("native_profiler");
        $__internal_8174e523c5dec73baab6e293480488c503346c897a708f354c3bf5b337bff881->enter($__internal_8174e523c5dec73baab6e293480488c503346c897a708f354c3bf5b337bff881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8174e523c5dec73baab6e293480488c503346c897a708f354c3bf5b337bff881->leave($__internal_8174e523c5dec73baab6e293480488c503346c897a708f354c3bf5b337bff881_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41d31312d2defcb0a625ca35abc1cc9fa2fe30ed109a80387a3f18cf904b560b = $this->env->getExtension("native_profiler");
        $__internal_41d31312d2defcb0a625ca35abc1cc9fa2fe30ed109a80387a3f18cf904b560b->enter($__internal_41d31312d2defcb0a625ca35abc1cc9fa2fe30ed109a80387a3f18cf904b560b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_41d31312d2defcb0a625ca35abc1cc9fa2fe30ed109a80387a3f18cf904b560b->leave($__internal_41d31312d2defcb0a625ca35abc1cc9fa2fe30ed109a80387a3f18cf904b560b_prof);

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
