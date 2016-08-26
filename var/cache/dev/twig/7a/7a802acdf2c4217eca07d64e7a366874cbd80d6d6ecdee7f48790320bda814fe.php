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
        $__internal_920636678df90df2170f4e8fb991751257907c53c3f44eef4908359fa85a3953 = $this->env->getExtension("native_profiler");
        $__internal_920636678df90df2170f4e8fb991751257907c53c3f44eef4908359fa85a3953->enter($__internal_920636678df90df2170f4e8fb991751257907c53c3f44eef4908359fa85a3953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_920636678df90df2170f4e8fb991751257907c53c3f44eef4908359fa85a3953->leave($__internal_920636678df90df2170f4e8fb991751257907c53c3f44eef4908359fa85a3953_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ea32466c451fd91370437826ae2ce2680e5552f590781803c5846f1f040aa42 = $this->env->getExtension("native_profiler");
        $__internal_3ea32466c451fd91370437826ae2ce2680e5552f590781803c5846f1f040aa42->enter($__internal_3ea32466c451fd91370437826ae2ce2680e5552f590781803c5846f1f040aa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_3ea32466c451fd91370437826ae2ce2680e5552f590781803c5846f1f040aa42->leave($__internal_3ea32466c451fd91370437826ae2ce2680e5552f590781803c5846f1f040aa42_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_42824af354af6209640631b994ac4b015f2a8d41d8c7b68c9f865c10dc2ed162 = $this->env->getExtension("native_profiler");
        $__internal_42824af354af6209640631b994ac4b015f2a8d41d8c7b68c9f865c10dc2ed162->enter($__internal_42824af354af6209640631b994ac4b015f2a8d41d8c7b68c9f865c10dc2ed162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_42824af354af6209640631b994ac4b015f2a8d41d8c7b68c9f865c10dc2ed162->leave($__internal_42824af354af6209640631b994ac4b015f2a8d41d8c7b68c9f865c10dc2ed162_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66a82976f767816a8e6783cff40fc154b492bf3de82ea2742c1d15a935fab08f = $this->env->getExtension("native_profiler");
        $__internal_66a82976f767816a8e6783cff40fc154b492bf3de82ea2742c1d15a935fab08f->enter($__internal_66a82976f767816a8e6783cff40fc154b492bf3de82ea2742c1d15a935fab08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@LGPUser/Profile/show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_66a82976f767816a8e6783cff40fc154b492bf3de82ea2742c1d15a935fab08f->leave($__internal_66a82976f767816a8e6783cff40fc154b492bf3de82ea2742c1d15a935fab08f_prof);

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
