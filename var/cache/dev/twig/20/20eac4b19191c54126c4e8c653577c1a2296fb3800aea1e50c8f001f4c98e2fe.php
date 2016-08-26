<?php

/* base.html.twig */
class __TwigTemplate_07e59192eb905907e6fafe1e40d079c5d535cc051e569b6414a97f546e436d49 extends Twig_Template
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
        $__internal_725d950956d5b5e3ccc807805139530a289e750e5640af62c7053d07212e89fa = $this->env->getExtension("native_profiler");
        $__internal_725d950956d5b5e3ccc807805139530a289e750e5640af62c7053d07212e89fa->enter($__internal_725d950956d5b5e3ccc807805139530a289e750e5640af62c7053d07212e89fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_725d950956d5b5e3ccc807805139530a289e750e5640af62c7053d07212e89fa->leave($__internal_725d950956d5b5e3ccc807805139530a289e750e5640af62c7053d07212e89fa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0fc2aab1c24a0480b528e4d1875fb4d22994fb0b99444fa76d9594fa6c50a91 = $this->env->getExtension("native_profiler");
        $__internal_a0fc2aab1c24a0480b528e4d1875fb4d22994fb0b99444fa76d9594fa6c50a91->enter($__internal_a0fc2aab1c24a0480b528e4d1875fb4d22994fb0b99444fa76d9594fa6c50a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a0fc2aab1c24a0480b528e4d1875fb4d22994fb0b99444fa76d9594fa6c50a91->leave($__internal_a0fc2aab1c24a0480b528e4d1875fb4d22994fb0b99444fa76d9594fa6c50a91_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08e515b81002c784adfdad6d873bbf792db274fe5eaaad510ce3f89e404a83eb = $this->env->getExtension("native_profiler");
        $__internal_08e515b81002c784adfdad6d873bbf792db274fe5eaaad510ce3f89e404a83eb->enter($__internal_08e515b81002c784adfdad6d873bbf792db274fe5eaaad510ce3f89e404a83eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_08e515b81002c784adfdad6d873bbf792db274fe5eaaad510ce3f89e404a83eb->leave($__internal_08e515b81002c784adfdad6d873bbf792db274fe5eaaad510ce3f89e404a83eb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_057b74fe580b42500c9086217582f14cac73ac093633749111e049ea70ddae83 = $this->env->getExtension("native_profiler");
        $__internal_057b74fe580b42500c9086217582f14cac73ac093633749111e049ea70ddae83->enter($__internal_057b74fe580b42500c9086217582f14cac73ac093633749111e049ea70ddae83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_057b74fe580b42500c9086217582f14cac73ac093633749111e049ea70ddae83->leave($__internal_057b74fe580b42500c9086217582f14cac73ac093633749111e049ea70ddae83_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4894b7da7626c505148b163542b64cac89be8fc658cf00f386de4ff57b8ea61b = $this->env->getExtension("native_profiler");
        $__internal_4894b7da7626c505148b163542b64cac89be8fc658cf00f386de4ff57b8ea61b->enter($__internal_4894b7da7626c505148b163542b64cac89be8fc658cf00f386de4ff57b8ea61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4894b7da7626c505148b163542b64cac89be8fc658cf00f386de4ff57b8ea61b->leave($__internal_4894b7da7626c505148b163542b64cac89be8fc658cf00f386de4ff57b8ea61b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
