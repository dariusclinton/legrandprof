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
        $__internal_6c0f26f05f5fd7df1964523504e9d59ddcb361a5587481bab5eb78ace9d29e74 = $this->env->getExtension("native_profiler");
        $__internal_6c0f26f05f5fd7df1964523504e9d59ddcb361a5587481bab5eb78ace9d29e74->enter($__internal_6c0f26f05f5fd7df1964523504e9d59ddcb361a5587481bab5eb78ace9d29e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6c0f26f05f5fd7df1964523504e9d59ddcb361a5587481bab5eb78ace9d29e74->leave($__internal_6c0f26f05f5fd7df1964523504e9d59ddcb361a5587481bab5eb78ace9d29e74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d9ef9d5e856f7bc71921806c66ded72473055deb9b9f1108942b87abcf3bb53 = $this->env->getExtension("native_profiler");
        $__internal_2d9ef9d5e856f7bc71921806c66ded72473055deb9b9f1108942b87abcf3bb53->enter($__internal_2d9ef9d5e856f7bc71921806c66ded72473055deb9b9f1108942b87abcf3bb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2d9ef9d5e856f7bc71921806c66ded72473055deb9b9f1108942b87abcf3bb53->leave($__internal_2d9ef9d5e856f7bc71921806c66ded72473055deb9b9f1108942b87abcf3bb53_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0549a0d7d7bada47e78afbdc56ce3d419dd5691dbfa016ab346726391cec6b1d = $this->env->getExtension("native_profiler");
        $__internal_0549a0d7d7bada47e78afbdc56ce3d419dd5691dbfa016ab346726391cec6b1d->enter($__internal_0549a0d7d7bada47e78afbdc56ce3d419dd5691dbfa016ab346726391cec6b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0549a0d7d7bada47e78afbdc56ce3d419dd5691dbfa016ab346726391cec6b1d->leave($__internal_0549a0d7d7bada47e78afbdc56ce3d419dd5691dbfa016ab346726391cec6b1d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_99633a2d44e99e377b7b95e5531c6dc9b91b7129cbd853ac25c246bf4601fc78 = $this->env->getExtension("native_profiler");
        $__internal_99633a2d44e99e377b7b95e5531c6dc9b91b7129cbd853ac25c246bf4601fc78->enter($__internal_99633a2d44e99e377b7b95e5531c6dc9b91b7129cbd853ac25c246bf4601fc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99633a2d44e99e377b7b95e5531c6dc9b91b7129cbd853ac25c246bf4601fc78->leave($__internal_99633a2d44e99e377b7b95e5531c6dc9b91b7129cbd853ac25c246bf4601fc78_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f76513f9b290f069ef8e25402153de1b265c86cb3e2fc73d55b0625fa2d3d4c = $this->env->getExtension("native_profiler");
        $__internal_4f76513f9b290f069ef8e25402153de1b265c86cb3e2fc73d55b0625fa2d3d4c->enter($__internal_4f76513f9b290f069ef8e25402153de1b265c86cb3e2fc73d55b0625fa2d3d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4f76513f9b290f069ef8e25402153de1b265c86cb3e2fc73d55b0625fa2d3d4c->leave($__internal_4f76513f9b290f069ef8e25402153de1b265c86cb3e2fc73d55b0625fa2d3d4c_prof);

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
