<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_4e9388e47a351ec26429461ab99f3f6c97b7e94d2628279a1b59d02c9d8f356c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0361e6c5aab546d3b5abe759749faa0b09e48ca277d97de415b817d7335772ac = $this->env->getExtension("native_profiler");
        $__internal_0361e6c5aab546d3b5abe759749faa0b09e48ca277d97de415b817d7335772ac->enter($__internal_0361e6c5aab546d3b5abe759749faa0b09e48ca277d97de415b817d7335772ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0361e6c5aab546d3b5abe759749faa0b09e48ca277d97de415b817d7335772ac->leave($__internal_0361e6c5aab546d3b5abe759749faa0b09e48ca277d97de415b817d7335772ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36dd3988783c281a8da587b67b838415e11f6047104db5249d3267f4eb1e905a = $this->env->getExtension("native_profiler");
        $__internal_36dd3988783c281a8da587b67b838415e11f6047104db5249d3267f4eb1e905a->enter($__internal_36dd3988783c281a8da587b67b838415e11f6047104db5249d3267f4eb1e905a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_36dd3988783c281a8da587b67b838415e11f6047104db5249d3267f4eb1e905a->leave($__internal_36dd3988783c281a8da587b67b838415e11f6047104db5249d3267f4eb1e905a_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_1e5ebc766142394fc0eadddcea36c640d1ad1f70f305ac3b14d5e2f06e114892 = $this->env->getExtension("native_profiler");
        $__internal_1e5ebc766142394fc0eadddcea36c640d1ad1f70f305ac3b14d5e2f06e114892->enter($__internal_1e5ebc766142394fc0eadddcea36c640d1ad1f70f305ac3b14d5e2f06e114892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
  ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_1e5ebc766142394fc0eadddcea36c640d1ad1f70f305ac3b14d5e2f06e114892->leave($__internal_1e5ebc766142394fc0eadddcea36c640d1ad1f70f305ac3b14d5e2f06e114892_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a510826b150c78ed90fc36fdf846aa3e02271d62f3abe9aa747f266f72599b23 = $this->env->getExtension("native_profiler");
        $__internal_a510826b150c78ed90fc36fdf846aa3e02271d62f3abe9aa747f266f72599b23->enter($__internal_a510826b150c78ed90fc36fdf846aa3e02271d62f3abe9aa747f266f72599b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
  <div class=\"bg-grey dashboard\">
    ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "  </div>
";
        
        $__internal_a510826b150c78ed90fc36fdf846aa3e02271d62f3abe9aa747f266f72599b23->leave($__internal_a510826b150c78ed90fc36fdf846aa3e02271d62f3abe9aa747f266f72599b23_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  82 => 13,  73 => 11,  64 => 8,  56 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block title %}
  {{ app.user.prenoms }} {{ app.user.nom }} - {{ parent() }} 
{% endblock %}

{% block header_submenu %} 
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block fos_user_content %}    
  <div class=\"bg-grey dashboard\">
    {% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
  </div>
{% endblock fos_user_content %}";
    }
}
