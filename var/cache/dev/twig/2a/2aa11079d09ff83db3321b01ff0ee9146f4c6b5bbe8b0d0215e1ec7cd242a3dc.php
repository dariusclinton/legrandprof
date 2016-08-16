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
        $__internal_fbd35b47e33109067c8034261c9860571b763f79ead71c1ef67199aed03ee63c = $this->env->getExtension("native_profiler");
        $__internal_fbd35b47e33109067c8034261c9860571b763f79ead71c1ef67199aed03ee63c->enter($__internal_fbd35b47e33109067c8034261c9860571b763f79ead71c1ef67199aed03ee63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fbd35b47e33109067c8034261c9860571b763f79ead71c1ef67199aed03ee63c->leave($__internal_fbd35b47e33109067c8034261c9860571b763f79ead71c1ef67199aed03ee63c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_01a71c6407568bc262de912b14d4ff9e9097102d4aaaca857f04dd4e01fd3256 = $this->env->getExtension("native_profiler");
        $__internal_01a71c6407568bc262de912b14d4ff9e9097102d4aaaca857f04dd4e01fd3256->enter($__internal_01a71c6407568bc262de912b14d4ff9e9097102d4aaaca857f04dd4e01fd3256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_01a71c6407568bc262de912b14d4ff9e9097102d4aaaca857f04dd4e01fd3256->leave($__internal_01a71c6407568bc262de912b14d4ff9e9097102d4aaaca857f04dd4e01fd3256_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5090171520f0abb0debc9d7ccdc6167d245fa7768d011ab147ca8eefdcfd3fde = $this->env->getExtension("native_profiler");
        $__internal_5090171520f0abb0debc9d7ccdc6167d245fa7768d011ab147ca8eefdcfd3fde->enter($__internal_5090171520f0abb0debc9d7ccdc6167d245fa7768d011ab147ca8eefdcfd3fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5090171520f0abb0debc9d7ccdc6167d245fa7768d011ab147ca8eefdcfd3fde->leave($__internal_5090171520f0abb0debc9d7ccdc6167d245fa7768d011ab147ca8eefdcfd3fde_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdd87fddb18300741e5a7a5a0e0b0ab24b529f2796db111d7c2873dee58c2f02 = $this->env->getExtension("native_profiler");
        $__internal_bdd87fddb18300741e5a7a5a0e0b0ab24b529f2796db111d7c2873dee58c2f02->enter($__internal_bdd87fddb18300741e5a7a5a0e0b0ab24b529f2796db111d7c2873dee58c2f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bdd87fddb18300741e5a7a5a0e0b0ab24b529f2796db111d7c2873dee58c2f02->leave($__internal_bdd87fddb18300741e5a7a5a0e0b0ab24b529f2796db111d7c2873dee58c2f02_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5861f476a02a1aff14602fe0df99e71ba4bb056aa2442b59017e60793681ca91 = $this->env->getExtension("native_profiler");
        $__internal_5861f476a02a1aff14602fe0df99e71ba4bb056aa2442b59017e60793681ca91->enter($__internal_5861f476a02a1aff14602fe0df99e71ba4bb056aa2442b59017e60793681ca91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5861f476a02a1aff14602fe0df99e71ba4bb056aa2442b59017e60793681ca91->leave($__internal_5861f476a02a1aff14602fe0df99e71ba4bb056aa2442b59017e60793681ca91_prof);

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
