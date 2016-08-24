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
        $__internal_034d2b96b5b00e59a580f420fe02ebd6fb040d4239734a6d66449cd5d72999b5 = $this->env->getExtension("native_profiler");
        $__internal_034d2b96b5b00e59a580f420fe02ebd6fb040d4239734a6d66449cd5d72999b5->enter($__internal_034d2b96b5b00e59a580f420fe02ebd6fb040d4239734a6d66449cd5d72999b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_034d2b96b5b00e59a580f420fe02ebd6fb040d4239734a6d66449cd5d72999b5->leave($__internal_034d2b96b5b00e59a580f420fe02ebd6fb040d4239734a6d66449cd5d72999b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1511bccabc35dfd08dca0da5d1f7dc6c1787ac862bbb4dae637740ad019e3f9 = $this->env->getExtension("native_profiler");
        $__internal_b1511bccabc35dfd08dca0da5d1f7dc6c1787ac862bbb4dae637740ad019e3f9->enter($__internal_b1511bccabc35dfd08dca0da5d1f7dc6c1787ac862bbb4dae637740ad019e3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_b1511bccabc35dfd08dca0da5d1f7dc6c1787ac862bbb4dae637740ad019e3f9->leave($__internal_b1511bccabc35dfd08dca0da5d1f7dc6c1787ac862bbb4dae637740ad019e3f9_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_8831ff3f6286b785887db81da02ebf1c0c207f2543b172f1f72f6055f5d96081 = $this->env->getExtension("native_profiler");
        $__internal_8831ff3f6286b785887db81da02ebf1c0c207f2543b172f1f72f6055f5d96081->enter($__internal_8831ff3f6286b785887db81da02ebf1c0c207f2543b172f1f72f6055f5d96081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_8831ff3f6286b785887db81da02ebf1c0c207f2543b172f1f72f6055f5d96081->leave($__internal_8831ff3f6286b785887db81da02ebf1c0c207f2543b172f1f72f6055f5d96081_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b405e74d981f39664910715afcf048058170cea45eeaa7641d3ea5c940c78de9 = $this->env->getExtension("native_profiler");
        $__internal_b405e74d981f39664910715afcf048058170cea45eeaa7641d3ea5c940c78de9->enter($__internal_b405e74d981f39664910715afcf048058170cea45eeaa7641d3ea5c940c78de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_b405e74d981f39664910715afcf048058170cea45eeaa7641d3ea5c940c78de9->leave($__internal_b405e74d981f39664910715afcf048058170cea45eeaa7641d3ea5c940c78de9_prof);

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
