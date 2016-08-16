<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5b3448eb9145abee8be5c169870831eefa9a3549feab7708148b97cf49702500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8528ee2342066cb5d4257b99b695b33f03f33c58c38b2674f72b4b25d2c31d44 = $this->env->getExtension("native_profiler");
        $__internal_8528ee2342066cb5d4257b99b695b33f03f33c58c38b2674f72b4b25d2c31d44->enter($__internal_8528ee2342066cb5d4257b99b695b33f03f33c58c38b2674f72b4b25d2c31d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8528ee2342066cb5d4257b99b695b33f03f33c58c38b2674f72b4b25d2c31d44->leave($__internal_8528ee2342066cb5d4257b99b695b33f03f33c58c38b2674f72b4b25d2c31d44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_054a3666b5eddc58c65a991703f32b07ce97c38a3cd335de03fa4e03589129b4 = $this->env->getExtension("native_profiler");
        $__internal_054a3666b5eddc58c65a991703f32b07ce97c38a3cd335de03fa4e03589129b4->enter($__internal_054a3666b5eddc58c65a991703f32b07ce97c38a3cd335de03fa4e03589129b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_054a3666b5eddc58c65a991703f32b07ce97c38a3cd335de03fa4e03589129b4->leave($__internal_054a3666b5eddc58c65a991703f32b07ce97c38a3cd335de03fa4e03589129b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_291ae2b59ce90de1fc1deba897a8a13cc15beb68c89c43f4d16352c18d9181f0 = $this->env->getExtension("native_profiler");
        $__internal_291ae2b59ce90de1fc1deba897a8a13cc15beb68c89c43f4d16352c18d9181f0->enter($__internal_291ae2b59ce90de1fc1deba897a8a13cc15beb68c89c43f4d16352c18d9181f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_291ae2b59ce90de1fc1deba897a8a13cc15beb68c89c43f4d16352c18d9181f0->leave($__internal_291ae2b59ce90de1fc1deba897a8a13cc15beb68c89c43f4d16352c18d9181f0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e399f5b357eac774be443340aacd78d2863356b1223e04fbda2899bb032122f = $this->env->getExtension("native_profiler");
        $__internal_6e399f5b357eac774be443340aacd78d2863356b1223e04fbda2899bb032122f->enter($__internal_6e399f5b357eac774be443340aacd78d2863356b1223e04fbda2899bb032122f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6e399f5b357eac774be443340aacd78d2863356b1223e04fbda2899bb032122f->leave($__internal_6e399f5b357eac774be443340aacd78d2863356b1223e04fbda2899bb032122f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
