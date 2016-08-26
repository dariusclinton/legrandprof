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
        $__internal_2ba9932063b55157f7072f71f5b53c44a746a7fb4fe1eaa6b5ba3a0d977be3ac = $this->env->getExtension("native_profiler");
        $__internal_2ba9932063b55157f7072f71f5b53c44a746a7fb4fe1eaa6b5ba3a0d977be3ac->enter($__internal_2ba9932063b55157f7072f71f5b53c44a746a7fb4fe1eaa6b5ba3a0d977be3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2ba9932063b55157f7072f71f5b53c44a746a7fb4fe1eaa6b5ba3a0d977be3ac->leave($__internal_2ba9932063b55157f7072f71f5b53c44a746a7fb4fe1eaa6b5ba3a0d977be3ac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_871ea389015f5ee4674f2fbc132d916cd5933306d1d9a419d383a8aa1fe43496 = $this->env->getExtension("native_profiler");
        $__internal_871ea389015f5ee4674f2fbc132d916cd5933306d1d9a419d383a8aa1fe43496->enter($__internal_871ea389015f5ee4674f2fbc132d916cd5933306d1d9a419d383a8aa1fe43496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_871ea389015f5ee4674f2fbc132d916cd5933306d1d9a419d383a8aa1fe43496->leave($__internal_871ea389015f5ee4674f2fbc132d916cd5933306d1d9a419d383a8aa1fe43496_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ea65eb3d8cdbcb401d94656d47423242b444699cf1f97462f1a3d5eb83435b8 = $this->env->getExtension("native_profiler");
        $__internal_2ea65eb3d8cdbcb401d94656d47423242b444699cf1f97462f1a3d5eb83435b8->enter($__internal_2ea65eb3d8cdbcb401d94656d47423242b444699cf1f97462f1a3d5eb83435b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2ea65eb3d8cdbcb401d94656d47423242b444699cf1f97462f1a3d5eb83435b8->leave($__internal_2ea65eb3d8cdbcb401d94656d47423242b444699cf1f97462f1a3d5eb83435b8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_05770f32cafb7a216537e96ca28411b4aa6e1e878536bfe6369a5d620330dafd = $this->env->getExtension("native_profiler");
        $__internal_05770f32cafb7a216537e96ca28411b4aa6e1e878536bfe6369a5d620330dafd->enter($__internal_05770f32cafb7a216537e96ca28411b4aa6e1e878536bfe6369a5d620330dafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_05770f32cafb7a216537e96ca28411b4aa6e1e878536bfe6369a5d620330dafd->leave($__internal_05770f32cafb7a216537e96ca28411b4aa6e1e878536bfe6369a5d620330dafd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_648b16efe38a0ce8c39ed154808ad1a47b0047a128cedf3abd9cc580eb331393 = $this->env->getExtension("native_profiler");
        $__internal_648b16efe38a0ce8c39ed154808ad1a47b0047a128cedf3abd9cc580eb331393->enter($__internal_648b16efe38a0ce8c39ed154808ad1a47b0047a128cedf3abd9cc580eb331393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_648b16efe38a0ce8c39ed154808ad1a47b0047a128cedf3abd9cc580eb331393->leave($__internal_648b16efe38a0ce8c39ed154808ad1a47b0047a128cedf3abd9cc580eb331393_prof);

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
