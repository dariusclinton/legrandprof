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
        $__internal_533d60fb25f02fbbb20dde15380a5f01c7451c9ba99fca0577bf75f656ac6efa = $this->env->getExtension("native_profiler");
        $__internal_533d60fb25f02fbbb20dde15380a5f01c7451c9ba99fca0577bf75f656ac6efa->enter($__internal_533d60fb25f02fbbb20dde15380a5f01c7451c9ba99fca0577bf75f656ac6efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_533d60fb25f02fbbb20dde15380a5f01c7451c9ba99fca0577bf75f656ac6efa->leave($__internal_533d60fb25f02fbbb20dde15380a5f01c7451c9ba99fca0577bf75f656ac6efa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5f815e1def6eec6633352dcdfc9950d216604a00ac55e0818c77f0f0f1ff5d8 = $this->env->getExtension("native_profiler");
        $__internal_d5f815e1def6eec6633352dcdfc9950d216604a00ac55e0818c77f0f0f1ff5d8->enter($__internal_d5f815e1def6eec6633352dcdfc9950d216604a00ac55e0818c77f0f0f1ff5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d5f815e1def6eec6633352dcdfc9950d216604a00ac55e0818c77f0f0f1ff5d8->leave($__internal_d5f815e1def6eec6633352dcdfc9950d216604a00ac55e0818c77f0f0f1ff5d8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2427dbde243b767d85d36ff7368049368e88c1e3260559b76f1ce2d7f7d9b77b = $this->env->getExtension("native_profiler");
        $__internal_2427dbde243b767d85d36ff7368049368e88c1e3260559b76f1ce2d7f7d9b77b->enter($__internal_2427dbde243b767d85d36ff7368049368e88c1e3260559b76f1ce2d7f7d9b77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2427dbde243b767d85d36ff7368049368e88c1e3260559b76f1ce2d7f7d9b77b->leave($__internal_2427dbde243b767d85d36ff7368049368e88c1e3260559b76f1ce2d7f7d9b77b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_08e22847c1965516f5f3f4c008bd40079e830c277f7ef9a1b349d7aa1d0f7f5e = $this->env->getExtension("native_profiler");
        $__internal_08e22847c1965516f5f3f4c008bd40079e830c277f7ef9a1b349d7aa1d0f7f5e->enter($__internal_08e22847c1965516f5f3f4c008bd40079e830c277f7ef9a1b349d7aa1d0f7f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_08e22847c1965516f5f3f4c008bd40079e830c277f7ef9a1b349d7aa1d0f7f5e->leave($__internal_08e22847c1965516f5f3f4c008bd40079e830c277f7ef9a1b349d7aa1d0f7f5e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c34e6ece21fd92e4dae7a3fdbb336eefc808f2e48ae3001b4b518b77f1ba5be9 = $this->env->getExtension("native_profiler");
        $__internal_c34e6ece21fd92e4dae7a3fdbb336eefc808f2e48ae3001b4b518b77f1ba5be9->enter($__internal_c34e6ece21fd92e4dae7a3fdbb336eefc808f2e48ae3001b4b518b77f1ba5be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c34e6ece21fd92e4dae7a3fdbb336eefc808f2e48ae3001b4b518b77f1ba5be9->leave($__internal_c34e6ece21fd92e4dae7a3fdbb336eefc808f2e48ae3001b4b518b77f1ba5be9_prof);

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
