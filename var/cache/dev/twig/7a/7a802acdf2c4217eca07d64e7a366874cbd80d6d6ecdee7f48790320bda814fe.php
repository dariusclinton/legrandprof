<?php

/* @LGPUser/Profile/show.html.twig */
class __TwigTemplate_a5f8413eda7573d3f30913d1076d736bc729b89d8f3951e8d6b1d76b85360962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Profile/show.html.twig", 1);
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
        $__internal_779142fd91b330e02097fe95517d42eb5fc74cc5c2f29ce358cdf0d6b61e58c0 = $this->env->getExtension("native_profiler");
        $__internal_779142fd91b330e02097fe95517d42eb5fc74cc5c2f29ce358cdf0d6b61e58c0->enter($__internal_779142fd91b330e02097fe95517d42eb5fc74cc5c2f29ce358cdf0d6b61e58c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_779142fd91b330e02097fe95517d42eb5fc74cc5c2f29ce358cdf0d6b61e58c0->leave($__internal_779142fd91b330e02097fe95517d42eb5fc74cc5c2f29ce358cdf0d6b61e58c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74cf070847cf412eba9bd53bd789fbe179953a9b30f1ccb52fd91bd47fd0d271 = $this->env->getExtension("native_profiler");
        $__internal_74cf070847cf412eba9bd53bd789fbe179953a9b30f1ccb52fd91bd47fd0d271->enter($__internal_74cf070847cf412eba9bd53bd789fbe179953a9b30f1ccb52fd91bd47fd0d271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_74cf070847cf412eba9bd53bd789fbe179953a9b30f1ccb52fd91bd47fd0d271->leave($__internal_74cf070847cf412eba9bd53bd789fbe179953a9b30f1ccb52fd91bd47fd0d271_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_6789f060f1896867b4301fb7e29676d8334f0553a754544187f1bfe73cfe879a = $this->env->getExtension("native_profiler");
        $__internal_6789f060f1896867b4301fb7e29676d8334f0553a754544187f1bfe73cfe879a->enter($__internal_6789f060f1896867b4301fb7e29676d8334f0553a754544187f1bfe73cfe879a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_6789f060f1896867b4301fb7e29676d8334f0553a754544187f1bfe73cfe879a->leave($__internal_6789f060f1896867b4301fb7e29676d8334f0553a754544187f1bfe73cfe879a_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_309bcd1221a379fece233625504b0932f30ac36fd5c1867f3d9e01493161ba91 = $this->env->getExtension("native_profiler");
        $__internal_309bcd1221a379fece233625504b0932f30ac36fd5c1867f3d9e01493161ba91->enter($__internal_309bcd1221a379fece233625504b0932f30ac36fd5c1867f3d9e01493161ba91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_309bcd1221a379fece233625504b0932f30ac36fd5c1867f3d9e01493161ba91->leave($__internal_309bcd1221a379fece233625504b0932f30ac36fd5c1867f3d9e01493161ba91_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Profile/show.html.twig";
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
