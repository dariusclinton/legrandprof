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
        $__internal_6ca37feab864a2b870ae773ee016f38d09eb013a66d8c6fa3ab820cfecd73ac8 = $this->env->getExtension("native_profiler");
        $__internal_6ca37feab864a2b870ae773ee016f38d09eb013a66d8c6fa3ab820cfecd73ac8->enter($__internal_6ca37feab864a2b870ae773ee016f38d09eb013a66d8c6fa3ab820cfecd73ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6ca37feab864a2b870ae773ee016f38d09eb013a66d8c6fa3ab820cfecd73ac8->leave($__internal_6ca37feab864a2b870ae773ee016f38d09eb013a66d8c6fa3ab820cfecd73ac8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1fbb53f11096d148ed6d52202fdd946f449cbef93db16eb3f57076fbe581e07 = $this->env->getExtension("native_profiler");
        $__internal_c1fbb53f11096d148ed6d52202fdd946f449cbef93db16eb3f57076fbe581e07->enter($__internal_c1fbb53f11096d148ed6d52202fdd946f449cbef93db16eb3f57076fbe581e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c1fbb53f11096d148ed6d52202fdd946f449cbef93db16eb3f57076fbe581e07->leave($__internal_c1fbb53f11096d148ed6d52202fdd946f449cbef93db16eb3f57076fbe581e07_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7c93540f0ef8c18c0b7c966c768352eb0c0d7a802f7b8468d82b6af37470369 = $this->env->getExtension("native_profiler");
        $__internal_a7c93540f0ef8c18c0b7c966c768352eb0c0d7a802f7b8468d82b6af37470369->enter($__internal_a7c93540f0ef8c18c0b7c966c768352eb0c0d7a802f7b8468d82b6af37470369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a7c93540f0ef8c18c0b7c966c768352eb0c0d7a802f7b8468d82b6af37470369->leave($__internal_a7c93540f0ef8c18c0b7c966c768352eb0c0d7a802f7b8468d82b6af37470369_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e6a858bbc2c840cc73362ae1f924ae30ac3e924295378a7db987c63d211f912 = $this->env->getExtension("native_profiler");
        $__internal_9e6a858bbc2c840cc73362ae1f924ae30ac3e924295378a7db987c63d211f912->enter($__internal_9e6a858bbc2c840cc73362ae1f924ae30ac3e924295378a7db987c63d211f912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e6a858bbc2c840cc73362ae1f924ae30ac3e924295378a7db987c63d211f912->leave($__internal_9e6a858bbc2c840cc73362ae1f924ae30ac3e924295378a7db987c63d211f912_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c790d9ec9d02331aa020c8874c17cff976118757629be954b1a15e2a28128ea = $this->env->getExtension("native_profiler");
        $__internal_7c790d9ec9d02331aa020c8874c17cff976118757629be954b1a15e2a28128ea->enter($__internal_7c790d9ec9d02331aa020c8874c17cff976118757629be954b1a15e2a28128ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7c790d9ec9d02331aa020c8874c17cff976118757629be954b1a15e2a28128ea->leave($__internal_7c790d9ec9d02331aa020c8874c17cff976118757629be954b1a15e2a28128ea_prof);

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
