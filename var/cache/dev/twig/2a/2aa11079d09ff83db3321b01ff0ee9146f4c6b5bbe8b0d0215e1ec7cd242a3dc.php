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
        $__internal_0ac8e5984461d6127ce89210167516625330bd892a269a6c83de0cdcf832d321 = $this->env->getExtension("native_profiler");
        $__internal_0ac8e5984461d6127ce89210167516625330bd892a269a6c83de0cdcf832d321->enter($__internal_0ac8e5984461d6127ce89210167516625330bd892a269a6c83de0cdcf832d321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_0ac8e5984461d6127ce89210167516625330bd892a269a6c83de0cdcf832d321->leave($__internal_0ac8e5984461d6127ce89210167516625330bd892a269a6c83de0cdcf832d321_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8eeb7a7647df1fcc56116001313f447fa9cf021e20ab7a831ffa32aee89b2709 = $this->env->getExtension("native_profiler");
        $__internal_8eeb7a7647df1fcc56116001313f447fa9cf021e20ab7a831ffa32aee89b2709->enter($__internal_8eeb7a7647df1fcc56116001313f447fa9cf021e20ab7a831ffa32aee89b2709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8eeb7a7647df1fcc56116001313f447fa9cf021e20ab7a831ffa32aee89b2709->leave($__internal_8eeb7a7647df1fcc56116001313f447fa9cf021e20ab7a831ffa32aee89b2709_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7c0adeaa526d2ffdc385293475615bd0d9e1fba5a0e5ad0ca950cfa2f0ea5b3 = $this->env->getExtension("native_profiler");
        $__internal_a7c0adeaa526d2ffdc385293475615bd0d9e1fba5a0e5ad0ca950cfa2f0ea5b3->enter($__internal_a7c0adeaa526d2ffdc385293475615bd0d9e1fba5a0e5ad0ca950cfa2f0ea5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a7c0adeaa526d2ffdc385293475615bd0d9e1fba5a0e5ad0ca950cfa2f0ea5b3->leave($__internal_a7c0adeaa526d2ffdc385293475615bd0d9e1fba5a0e5ad0ca950cfa2f0ea5b3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a605069abd4f52b582305e8b270a4ebef93200fd0cf1b21e1d8d73635a3c51f = $this->env->getExtension("native_profiler");
        $__internal_4a605069abd4f52b582305e8b270a4ebef93200fd0cf1b21e1d8d73635a3c51f->enter($__internal_4a605069abd4f52b582305e8b270a4ebef93200fd0cf1b21e1d8d73635a3c51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4a605069abd4f52b582305e8b270a4ebef93200fd0cf1b21e1d8d73635a3c51f->leave($__internal_4a605069abd4f52b582305e8b270a4ebef93200fd0cf1b21e1d8d73635a3c51f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_601cfae07ae5df4fa23e9cc5691179bbc13548dc801bae37222feac82f85f5e8 = $this->env->getExtension("native_profiler");
        $__internal_601cfae07ae5df4fa23e9cc5691179bbc13548dc801bae37222feac82f85f5e8->enter($__internal_601cfae07ae5df4fa23e9cc5691179bbc13548dc801bae37222feac82f85f5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_601cfae07ae5df4fa23e9cc5691179bbc13548dc801bae37222feac82f85f5e8->leave($__internal_601cfae07ae5df4fa23e9cc5691179bbc13548dc801bae37222feac82f85f5e8_prof);

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
