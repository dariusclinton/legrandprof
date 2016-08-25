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
        $__internal_812376e2c0696ef3c33ccb34ff1c4ddac1c0f96b8662f93d292e2e8aee4355e5 = $this->env->getExtension("native_profiler");
        $__internal_812376e2c0696ef3c33ccb34ff1c4ddac1c0f96b8662f93d292e2e8aee4355e5->enter($__internal_812376e2c0696ef3c33ccb34ff1c4ddac1c0f96b8662f93d292e2e8aee4355e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_812376e2c0696ef3c33ccb34ff1c4ddac1c0f96b8662f93d292e2e8aee4355e5->leave($__internal_812376e2c0696ef3c33ccb34ff1c4ddac1c0f96b8662f93d292e2e8aee4355e5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_510b239e335f441ac0cca8a9917db74c7105a325205c5cb49dd8960f54798509 = $this->env->getExtension("native_profiler");
        $__internal_510b239e335f441ac0cca8a9917db74c7105a325205c5cb49dd8960f54798509->enter($__internal_510b239e335f441ac0cca8a9917db74c7105a325205c5cb49dd8960f54798509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_510b239e335f441ac0cca8a9917db74c7105a325205c5cb49dd8960f54798509->leave($__internal_510b239e335f441ac0cca8a9917db74c7105a325205c5cb49dd8960f54798509_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a41cfa0e57e38c02f821bbbc6f9ad7fec7e005e25b54dc4e76b6c79c9cb80cfb = $this->env->getExtension("native_profiler");
        $__internal_a41cfa0e57e38c02f821bbbc6f9ad7fec7e005e25b54dc4e76b6c79c9cb80cfb->enter($__internal_a41cfa0e57e38c02f821bbbc6f9ad7fec7e005e25b54dc4e76b6c79c9cb80cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a41cfa0e57e38c02f821bbbc6f9ad7fec7e005e25b54dc4e76b6c79c9cb80cfb->leave($__internal_a41cfa0e57e38c02f821bbbc6f9ad7fec7e005e25b54dc4e76b6c79c9cb80cfb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_43aab2d728a9261219926457b77cd481e8dab02f254e29c4334973d57290e0b1 = $this->env->getExtension("native_profiler");
        $__internal_43aab2d728a9261219926457b77cd481e8dab02f254e29c4334973d57290e0b1->enter($__internal_43aab2d728a9261219926457b77cd481e8dab02f254e29c4334973d57290e0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_43aab2d728a9261219926457b77cd481e8dab02f254e29c4334973d57290e0b1->leave($__internal_43aab2d728a9261219926457b77cd481e8dab02f254e29c4334973d57290e0b1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c336807134805e22fba7467982b6e6d77a678284d178811db3aae93ece61838 = $this->env->getExtension("native_profiler");
        $__internal_4c336807134805e22fba7467982b6e6d77a678284d178811db3aae93ece61838->enter($__internal_4c336807134805e22fba7467982b6e6d77a678284d178811db3aae93ece61838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4c336807134805e22fba7467982b6e6d77a678284d178811db3aae93ece61838->leave($__internal_4c336807134805e22fba7467982b6e6d77a678284d178811db3aae93ece61838_prof);

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
