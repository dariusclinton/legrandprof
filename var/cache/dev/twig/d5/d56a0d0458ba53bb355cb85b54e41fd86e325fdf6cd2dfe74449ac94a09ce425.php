<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6e659f441b0be411675991e045c89a537eed53cca390353003cc4a11f1e14ba3 extends Twig_Template
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
        $__internal_3274b3b85208573cf48e0c8e4c38196ab2b29c8f4f424ec0e5d0cb0b648c88b2 = $this->env->getExtension("native_profiler");
        $__internal_3274b3b85208573cf48e0c8e4c38196ab2b29c8f4f424ec0e5d0cb0b648c88b2->enter($__internal_3274b3b85208573cf48e0c8e4c38196ab2b29c8f4f424ec0e5d0cb0b648c88b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3274b3b85208573cf48e0c8e4c38196ab2b29c8f4f424ec0e5d0cb0b648c88b2->leave($__internal_3274b3b85208573cf48e0c8e4c38196ab2b29c8f4f424ec0e5d0cb0b648c88b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f903f1b28233abe4309cb020806efcf334e5b60b5461070ab0228a0ed9d8f34 = $this->env->getExtension("native_profiler");
        $__internal_2f903f1b28233abe4309cb020806efcf334e5b60b5461070ab0228a0ed9d8f34->enter($__internal_2f903f1b28233abe4309cb020806efcf334e5b60b5461070ab0228a0ed9d8f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_2f903f1b28233abe4309cb020806efcf334e5b60b5461070ab0228a0ed9d8f34->leave($__internal_2f903f1b28233abe4309cb020806efcf334e5b60b5461070ab0228a0ed9d8f34_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_b555447a54da75c674f34b3f3e2b353726e25a3722963288187d2754c1e58565 = $this->env->getExtension("native_profiler");
        $__internal_b555447a54da75c674f34b3f3e2b353726e25a3722963288187d2754c1e58565->enter($__internal_b555447a54da75c674f34b3f3e2b353726e25a3722963288187d2754c1e58565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_b555447a54da75c674f34b3f3e2b353726e25a3722963288187d2754c1e58565->leave($__internal_b555447a54da75c674f34b3f3e2b353726e25a3722963288187d2754c1e58565_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_754b7bf753cf8977e96ac599807a0b103435657a9df578301888c9eb89c8459d = $this->env->getExtension("native_profiler");
        $__internal_754b7bf753cf8977e96ac599807a0b103435657a9df578301888c9eb89c8459d->enter($__internal_754b7bf753cf8977e96ac599807a0b103435657a9df578301888c9eb89c8459d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_754b7bf753cf8977e96ac599807a0b103435657a9df578301888c9eb89c8459d->leave($__internal_754b7bf753cf8977e96ac599807a0b103435657a9df578301888c9eb89c8459d_prof);

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
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ app.user.prenoms }} {{ app.user.nom }} - {{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block header_submenu %} */
/*     {{ include('LGPCoreBundle::header-submenu.html.twig') }}*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}    */
/*     <div class="bg-grey dashboard">*/
/*         {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
