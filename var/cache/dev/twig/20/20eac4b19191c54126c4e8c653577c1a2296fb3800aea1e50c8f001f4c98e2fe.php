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
        $__internal_72a7bd8930e0604c34ee7be2898da167d4cf9ed5a38cb465b9c7a5875c81a17d = $this->env->getExtension("native_profiler");
        $__internal_72a7bd8930e0604c34ee7be2898da167d4cf9ed5a38cb465b9c7a5875c81a17d->enter($__internal_72a7bd8930e0604c34ee7be2898da167d4cf9ed5a38cb465b9c7a5875c81a17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_72a7bd8930e0604c34ee7be2898da167d4cf9ed5a38cb465b9c7a5875c81a17d->leave($__internal_72a7bd8930e0604c34ee7be2898da167d4cf9ed5a38cb465b9c7a5875c81a17d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_73e8587c966991696c40ce83342dfd872f9f711610c2ececcdd2eff83d062be4 = $this->env->getExtension("native_profiler");
        $__internal_73e8587c966991696c40ce83342dfd872f9f711610c2ececcdd2eff83d062be4->enter($__internal_73e8587c966991696c40ce83342dfd872f9f711610c2ececcdd2eff83d062be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_73e8587c966991696c40ce83342dfd872f9f711610c2ececcdd2eff83d062be4->leave($__internal_73e8587c966991696c40ce83342dfd872f9f711610c2ececcdd2eff83d062be4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b214f7935eed7b2da1dc5fd8fe497633fad0dc14b94b424e4639a2d023b6a4d2 = $this->env->getExtension("native_profiler");
        $__internal_b214f7935eed7b2da1dc5fd8fe497633fad0dc14b94b424e4639a2d023b6a4d2->enter($__internal_b214f7935eed7b2da1dc5fd8fe497633fad0dc14b94b424e4639a2d023b6a4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b214f7935eed7b2da1dc5fd8fe497633fad0dc14b94b424e4639a2d023b6a4d2->leave($__internal_b214f7935eed7b2da1dc5fd8fe497633fad0dc14b94b424e4639a2d023b6a4d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e25da84b3075e5a820414353461814650132b09766c6be784b05bc5f7a7caea6 = $this->env->getExtension("native_profiler");
        $__internal_e25da84b3075e5a820414353461814650132b09766c6be784b05bc5f7a7caea6->enter($__internal_e25da84b3075e5a820414353461814650132b09766c6be784b05bc5f7a7caea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e25da84b3075e5a820414353461814650132b09766c6be784b05bc5f7a7caea6->leave($__internal_e25da84b3075e5a820414353461814650132b09766c6be784b05bc5f7a7caea6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb759d40cc2b07204e3145007e6c0104912f6b2679717f14bcf0b1ba011bdb6e = $this->env->getExtension("native_profiler");
        $__internal_bb759d40cc2b07204e3145007e6c0104912f6b2679717f14bcf0b1ba011bdb6e->enter($__internal_bb759d40cc2b07204e3145007e6c0104912f6b2679717f14bcf0b1ba011bdb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bb759d40cc2b07204e3145007e6c0104912f6b2679717f14bcf0b1ba011bdb6e->leave($__internal_bb759d40cc2b07204e3145007e6c0104912f6b2679717f14bcf0b1ba011bdb6e_prof);

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
