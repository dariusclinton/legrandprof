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
        $__internal_fb16d2eea4ce9766387668883dac02eeccb30fb3a4dfa215f9e85e95b1ed4d6d = $this->env->getExtension("native_profiler");
        $__internal_fb16d2eea4ce9766387668883dac02eeccb30fb3a4dfa215f9e85e95b1ed4d6d->enter($__internal_fb16d2eea4ce9766387668883dac02eeccb30fb3a4dfa215f9e85e95b1ed4d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fb16d2eea4ce9766387668883dac02eeccb30fb3a4dfa215f9e85e95b1ed4d6d->leave($__internal_fb16d2eea4ce9766387668883dac02eeccb30fb3a4dfa215f9e85e95b1ed4d6d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b91680677bade6ad11e1dd096fc004b6782014f3c59d0a130fbb3a7c902aff2b = $this->env->getExtension("native_profiler");
        $__internal_b91680677bade6ad11e1dd096fc004b6782014f3c59d0a130fbb3a7c902aff2b->enter($__internal_b91680677bade6ad11e1dd096fc004b6782014f3c59d0a130fbb3a7c902aff2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b91680677bade6ad11e1dd096fc004b6782014f3c59d0a130fbb3a7c902aff2b->leave($__internal_b91680677bade6ad11e1dd096fc004b6782014f3c59d0a130fbb3a7c902aff2b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d4f7611628609ec46196adf55a0aecf77014d4580888c9c66222d1d70dd3338 = $this->env->getExtension("native_profiler");
        $__internal_6d4f7611628609ec46196adf55a0aecf77014d4580888c9c66222d1d70dd3338->enter($__internal_6d4f7611628609ec46196adf55a0aecf77014d4580888c9c66222d1d70dd3338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6d4f7611628609ec46196adf55a0aecf77014d4580888c9c66222d1d70dd3338->leave($__internal_6d4f7611628609ec46196adf55a0aecf77014d4580888c9c66222d1d70dd3338_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_138606dd5bb33349a46ac74c4b07d822641511caf674380cbaeb17f91d167630 = $this->env->getExtension("native_profiler");
        $__internal_138606dd5bb33349a46ac74c4b07d822641511caf674380cbaeb17f91d167630->enter($__internal_138606dd5bb33349a46ac74c4b07d822641511caf674380cbaeb17f91d167630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_138606dd5bb33349a46ac74c4b07d822641511caf674380cbaeb17f91d167630->leave($__internal_138606dd5bb33349a46ac74c4b07d822641511caf674380cbaeb17f91d167630_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30dfb140f6a20b844109d5f9223ab3de9498e7d1c25dfaab8f6aedb85d56a489 = $this->env->getExtension("native_profiler");
        $__internal_30dfb140f6a20b844109d5f9223ab3de9498e7d1c25dfaab8f6aedb85d56a489->enter($__internal_30dfb140f6a20b844109d5f9223ab3de9498e7d1c25dfaab8f6aedb85d56a489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_30dfb140f6a20b844109d5f9223ab3de9498e7d1c25dfaab8f6aedb85d56a489->leave($__internal_30dfb140f6a20b844109d5f9223ab3de9498e7d1c25dfaab8f6aedb85d56a489_prof);

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
