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
        $__internal_2cc4e07562f6f5c8bc0b534152d0b2a553e2b1cb9d0c5ece07ec8056bed31721 = $this->env->getExtension("native_profiler");
        $__internal_2cc4e07562f6f5c8bc0b534152d0b2a553e2b1cb9d0c5ece07ec8056bed31721->enter($__internal_2cc4e07562f6f5c8bc0b534152d0b2a553e2b1cb9d0c5ece07ec8056bed31721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2cc4e07562f6f5c8bc0b534152d0b2a553e2b1cb9d0c5ece07ec8056bed31721->leave($__internal_2cc4e07562f6f5c8bc0b534152d0b2a553e2b1cb9d0c5ece07ec8056bed31721_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6e48484ae2085deb476750f7c72ad2fab3b0d25e1fed4994b8eb970ab42f1bb = $this->env->getExtension("native_profiler");
        $__internal_c6e48484ae2085deb476750f7c72ad2fab3b0d25e1fed4994b8eb970ab42f1bb->enter($__internal_c6e48484ae2085deb476750f7c72ad2fab3b0d25e1fed4994b8eb970ab42f1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c6e48484ae2085deb476750f7c72ad2fab3b0d25e1fed4994b8eb970ab42f1bb->leave($__internal_c6e48484ae2085deb476750f7c72ad2fab3b0d25e1fed4994b8eb970ab42f1bb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_676b04370e4c25af0fdbac29c32a9502a126c31da44991ca534e081e482403d3 = $this->env->getExtension("native_profiler");
        $__internal_676b04370e4c25af0fdbac29c32a9502a126c31da44991ca534e081e482403d3->enter($__internal_676b04370e4c25af0fdbac29c32a9502a126c31da44991ca534e081e482403d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_676b04370e4c25af0fdbac29c32a9502a126c31da44991ca534e081e482403d3->leave($__internal_676b04370e4c25af0fdbac29c32a9502a126c31da44991ca534e081e482403d3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c2c057244c26f1d943943a2fc69e39b140bdbb1c33ba3808418b3375f280ea3 = $this->env->getExtension("native_profiler");
        $__internal_7c2c057244c26f1d943943a2fc69e39b140bdbb1c33ba3808418b3375f280ea3->enter($__internal_7c2c057244c26f1d943943a2fc69e39b140bdbb1c33ba3808418b3375f280ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c2c057244c26f1d943943a2fc69e39b140bdbb1c33ba3808418b3375f280ea3->leave($__internal_7c2c057244c26f1d943943a2fc69e39b140bdbb1c33ba3808418b3375f280ea3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7fa0421760b685beb386f40d2bc2b7e4a99bac5c1ec2ff922d747581f7a0af49 = $this->env->getExtension("native_profiler");
        $__internal_7fa0421760b685beb386f40d2bc2b7e4a99bac5c1ec2ff922d747581f7a0af49->enter($__internal_7fa0421760b685beb386f40d2bc2b7e4a99bac5c1ec2ff922d747581f7a0af49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7fa0421760b685beb386f40d2bc2b7e4a99bac5c1ec2ff922d747581f7a0af49->leave($__internal_7fa0421760b685beb386f40d2bc2b7e4a99bac5c1ec2ff922d747581f7a0af49_prof);

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
