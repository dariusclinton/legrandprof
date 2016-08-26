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
        $__internal_b4d9f6fe914654d918bcb131d408fb88fa117e36a4b555cafc1c03e0b1e66380 = $this->env->getExtension("native_profiler");
        $__internal_b4d9f6fe914654d918bcb131d408fb88fa117e36a4b555cafc1c03e0b1e66380->enter($__internal_b4d9f6fe914654d918bcb131d408fb88fa117e36a4b555cafc1c03e0b1e66380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d9f6fe914654d918bcb131d408fb88fa117e36a4b555cafc1c03e0b1e66380->leave($__internal_b4d9f6fe914654d918bcb131d408fb88fa117e36a4b555cafc1c03e0b1e66380_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85102fb282f4d2ed8cd88ce119d4828cf1f6d3362409b47a18a473582902e446 = $this->env->getExtension("native_profiler");
        $__internal_85102fb282f4d2ed8cd88ce119d4828cf1f6d3362409b47a18a473582902e446->enter($__internal_85102fb282f4d2ed8cd88ce119d4828cf1f6d3362409b47a18a473582902e446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_85102fb282f4d2ed8cd88ce119d4828cf1f6d3362409b47a18a473582902e446->leave($__internal_85102fb282f4d2ed8cd88ce119d4828cf1f6d3362409b47a18a473582902e446_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_29dfd607b090dba1fa5b4b1c4b430582a965385590345be71be3b4ddbebf6701 = $this->env->getExtension("native_profiler");
        $__internal_29dfd607b090dba1fa5b4b1c4b430582a965385590345be71be3b4ddbebf6701->enter($__internal_29dfd607b090dba1fa5b4b1c4b430582a965385590345be71be3b4ddbebf6701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_29dfd607b090dba1fa5b4b1c4b430582a965385590345be71be3b4ddbebf6701->leave($__internal_29dfd607b090dba1fa5b4b1c4b430582a965385590345be71be3b4ddbebf6701_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4f694cfe1678425fbeb79e2735c1ae5f7c003263153f6247a8a5e70f79d935d = $this->env->getExtension("native_profiler");
        $__internal_d4f694cfe1678425fbeb79e2735c1ae5f7c003263153f6247a8a5e70f79d935d->enter($__internal_d4f694cfe1678425fbeb79e2735c1ae5f7c003263153f6247a8a5e70f79d935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_d4f694cfe1678425fbeb79e2735c1ae5f7c003263153f6247a8a5e70f79d935d->leave($__internal_d4f694cfe1678425fbeb79e2735c1ae5f7c003263153f6247a8a5e70f79d935d_prof);

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
