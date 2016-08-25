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
        $__internal_1e9d5d67c08cb9196eb0f651779167b7ac3554f2d55f78884d2291b61aa69aee = $this->env->getExtension("native_profiler");
        $__internal_1e9d5d67c08cb9196eb0f651779167b7ac3554f2d55f78884d2291b61aa69aee->enter($__internal_1e9d5d67c08cb9196eb0f651779167b7ac3554f2d55f78884d2291b61aa69aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1e9d5d67c08cb9196eb0f651779167b7ac3554f2d55f78884d2291b61aa69aee->leave($__internal_1e9d5d67c08cb9196eb0f651779167b7ac3554f2d55f78884d2291b61aa69aee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_28ecd1de7d01d41bb4205930a9cd5132d5138d22af930e2e6f645578e98a6c88 = $this->env->getExtension("native_profiler");
        $__internal_28ecd1de7d01d41bb4205930a9cd5132d5138d22af930e2e6f645578e98a6c88->enter($__internal_28ecd1de7d01d41bb4205930a9cd5132d5138d22af930e2e6f645578e98a6c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_28ecd1de7d01d41bb4205930a9cd5132d5138d22af930e2e6f645578e98a6c88->leave($__internal_28ecd1de7d01d41bb4205930a9cd5132d5138d22af930e2e6f645578e98a6c88_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4984452eb6c71be39a7b29b25ea0e0d748b1c604e6e13bc8f9202863aae93228 = $this->env->getExtension("native_profiler");
        $__internal_4984452eb6c71be39a7b29b25ea0e0d748b1c604e6e13bc8f9202863aae93228->enter($__internal_4984452eb6c71be39a7b29b25ea0e0d748b1c604e6e13bc8f9202863aae93228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4984452eb6c71be39a7b29b25ea0e0d748b1c604e6e13bc8f9202863aae93228->leave($__internal_4984452eb6c71be39a7b29b25ea0e0d748b1c604e6e13bc8f9202863aae93228_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ced6fb63c8d180f0738fc8d1e1ab17d11e19bc5ea02b4c66851f4e390802387 = $this->env->getExtension("native_profiler");
        $__internal_5ced6fb63c8d180f0738fc8d1e1ab17d11e19bc5ea02b4c66851f4e390802387->enter($__internal_5ced6fb63c8d180f0738fc8d1e1ab17d11e19bc5ea02b4c66851f4e390802387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5ced6fb63c8d180f0738fc8d1e1ab17d11e19bc5ea02b4c66851f4e390802387->leave($__internal_5ced6fb63c8d180f0738fc8d1e1ab17d11e19bc5ea02b4c66851f4e390802387_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a70b823ee263da96f7d851045c364bab53fb119136d947248bbe69f36f5596e = $this->env->getExtension("native_profiler");
        $__internal_1a70b823ee263da96f7d851045c364bab53fb119136d947248bbe69f36f5596e->enter($__internal_1a70b823ee263da96f7d851045c364bab53fb119136d947248bbe69f36f5596e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1a70b823ee263da96f7d851045c364bab53fb119136d947248bbe69f36f5596e->leave($__internal_1a70b823ee263da96f7d851045c364bab53fb119136d947248bbe69f36f5596e_prof);

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
