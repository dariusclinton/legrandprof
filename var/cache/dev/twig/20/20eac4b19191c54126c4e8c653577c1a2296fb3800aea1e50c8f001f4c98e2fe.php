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
        $__internal_d9be57ea17129f684b2d903f66c64963559bc1bd18c96551164c212fa9f5b91a = $this->env->getExtension("native_profiler");
        $__internal_d9be57ea17129f684b2d903f66c64963559bc1bd18c96551164c212fa9f5b91a->enter($__internal_d9be57ea17129f684b2d903f66c64963559bc1bd18c96551164c212fa9f5b91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d9be57ea17129f684b2d903f66c64963559bc1bd18c96551164c212fa9f5b91a->leave($__internal_d9be57ea17129f684b2d903f66c64963559bc1bd18c96551164c212fa9f5b91a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_337dff49c54cfb9054d368c95a7d472e31471af17d9f94643f01d02a38adbd77 = $this->env->getExtension("native_profiler");
        $__internal_337dff49c54cfb9054d368c95a7d472e31471af17d9f94643f01d02a38adbd77->enter($__internal_337dff49c54cfb9054d368c95a7d472e31471af17d9f94643f01d02a38adbd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_337dff49c54cfb9054d368c95a7d472e31471af17d9f94643f01d02a38adbd77->leave($__internal_337dff49c54cfb9054d368c95a7d472e31471af17d9f94643f01d02a38adbd77_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2de92e90187770ef2942cc776a87076d3fa2190f17ed034044cb09af5effdfd0 = $this->env->getExtension("native_profiler");
        $__internal_2de92e90187770ef2942cc776a87076d3fa2190f17ed034044cb09af5effdfd0->enter($__internal_2de92e90187770ef2942cc776a87076d3fa2190f17ed034044cb09af5effdfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2de92e90187770ef2942cc776a87076d3fa2190f17ed034044cb09af5effdfd0->leave($__internal_2de92e90187770ef2942cc776a87076d3fa2190f17ed034044cb09af5effdfd0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf4845a4a1264278cc10a9d1d3d0535f1dbcae770b3afd5f6d0215adda290800 = $this->env->getExtension("native_profiler");
        $__internal_cf4845a4a1264278cc10a9d1d3d0535f1dbcae770b3afd5f6d0215adda290800->enter($__internal_cf4845a4a1264278cc10a9d1d3d0535f1dbcae770b3afd5f6d0215adda290800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf4845a4a1264278cc10a9d1d3d0535f1dbcae770b3afd5f6d0215adda290800->leave($__internal_cf4845a4a1264278cc10a9d1d3d0535f1dbcae770b3afd5f6d0215adda290800_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c71b671bacca9d823314327035f3ddcad7117c42940db1153610b57a18f25c9 = $this->env->getExtension("native_profiler");
        $__internal_4c71b671bacca9d823314327035f3ddcad7117c42940db1153610b57a18f25c9->enter($__internal_4c71b671bacca9d823314327035f3ddcad7117c42940db1153610b57a18f25c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4c71b671bacca9d823314327035f3ddcad7117c42940db1153610b57a18f25c9->leave($__internal_4c71b671bacca9d823314327035f3ddcad7117c42940db1153610b57a18f25c9_prof);

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
