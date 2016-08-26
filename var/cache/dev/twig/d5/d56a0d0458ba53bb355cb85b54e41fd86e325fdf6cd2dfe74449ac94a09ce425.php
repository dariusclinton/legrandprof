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
        $__internal_17ae105984d5141595be09c6c7ae392f99f44e5368f2c788d6ca481e9aea8beb = $this->env->getExtension("native_profiler");
        $__internal_17ae105984d5141595be09c6c7ae392f99f44e5368f2c788d6ca481e9aea8beb->enter($__internal_17ae105984d5141595be09c6c7ae392f99f44e5368f2c788d6ca481e9aea8beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17ae105984d5141595be09c6c7ae392f99f44e5368f2c788d6ca481e9aea8beb->leave($__internal_17ae105984d5141595be09c6c7ae392f99f44e5368f2c788d6ca481e9aea8beb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af1a65f15d2b8eca6807b0872c756ead5f832769ce4cc9d088d45a9fb13ca3ba = $this->env->getExtension("native_profiler");
        $__internal_af1a65f15d2b8eca6807b0872c756ead5f832769ce4cc9d088d45a9fb13ca3ba->enter($__internal_af1a65f15d2b8eca6807b0872c756ead5f832769ce4cc9d088d45a9fb13ca3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_af1a65f15d2b8eca6807b0872c756ead5f832769ce4cc9d088d45a9fb13ca3ba->leave($__internal_af1a65f15d2b8eca6807b0872c756ead5f832769ce4cc9d088d45a9fb13ca3ba_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_f1c487053145e94894072c08568d49386a8c4b9b2d73147b47fbd56e8e5f3833 = $this->env->getExtension("native_profiler");
        $__internal_f1c487053145e94894072c08568d49386a8c4b9b2d73147b47fbd56e8e5f3833->enter($__internal_f1c487053145e94894072c08568d49386a8c4b9b2d73147b47fbd56e8e5f3833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_f1c487053145e94894072c08568d49386a8c4b9b2d73147b47fbd56e8e5f3833->leave($__internal_f1c487053145e94894072c08568d49386a8c4b9b2d73147b47fbd56e8e5f3833_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb45581c4fc65aa8bc4a11c1e038fadf875f4ed9754b97db5ee3246f505e8483 = $this->env->getExtension("native_profiler");
        $__internal_fb45581c4fc65aa8bc4a11c1e038fadf875f4ed9754b97db5ee3246f505e8483->enter($__internal_fb45581c4fc65aa8bc4a11c1e038fadf875f4ed9754b97db5ee3246f505e8483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo "    
    <div class=\"bg-grey dashboard\">
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
";
        
        $__internal_fb45581c4fc65aa8bc4a11c1e038fadf875f4ed9754b97db5ee3246f505e8483->leave($__internal_fb45581c4fc65aa8bc4a11c1e038fadf875f4ed9754b97db5ee3246f505e8483_prof);

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
