<?php

/* LGPUserBundle:Prof:become.html.twig */
class __TwigTemplate_6556f6c2b08d694b4d22e2fc0f67df01fa1b6b6eeea0ff57647135503c9e5345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Prof:become.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2164bcbe023135b71b547d5865a1d3da3cb0adfc1e8c8742300597d887ec70d9 = $this->env->getExtension("native_profiler");
        $__internal_2164bcbe023135b71b547d5865a1d3da3cb0adfc1e8c8742300597d887ec70d9->enter($__internal_2164bcbe023135b71b547d5865a1d3da3cb0adfc1e8c8742300597d887ec70d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Prof:become.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2164bcbe023135b71b547d5865a1d3da3cb0adfc1e8c8742300597d887ec70d9->leave($__internal_2164bcbe023135b71b547d5865a1d3da3cb0adfc1e8c8742300597d887ec70d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7f756177d49044138c19cccd754cb853ebe3821c4ae64f6228337a2fd1f21bf = $this->env->getExtension("native_profiler");
        $__internal_e7f756177d49044138c19cccd754cb853ebe3821c4ae64f6228337a2fd1f21bf->enter($__internal_e7f756177d49044138c19cccd754cb853ebe3821c4ae64f6228337a2fd1f21bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Devenir Prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e7f756177d49044138c19cccd754cb853ebe3821c4ae64f6228337a2fd1f21bf->leave($__internal_e7f756177d49044138c19cccd754cb853ebe3821c4ae64f6228337a2fd1f21bf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2d6f2c9b9b20040edbda6edd571781cf6fa9117dd9f77c3d595df677c0e8a5a = $this->env->getExtension("native_profiler");
        $__internal_f2d6f2c9b9b20040edbda6edd571781cf6fa9117dd9f77c3d595df677c0e8a5a->enter($__internal_f2d6f2c9b9b20040edbda6edd571781cf6fa9117dd9f77c3d595df677c0e8a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    
    
    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
        echo "');\">

            <div class=\"container\">

                    <div class=\"row\">

                            <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                                    <h1 class=\"hero-title\">Devenir un grand Prof</h1><br>

                                    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("lgp_prof_registration");
        echo "\" class=\"btn btn-primary\">Déposer sa candidature</a>
                            </div>

                    </div>

            </div>

    </div>
    <!-- end Page title -->

    <div class=\"content-wrapper\">

            <div class=\"container\">

                    <div class=\"row\">
                            <div class=\"col-md-12\">
                                    <div style=\"background-size:cover; background-image:url(";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/become.jpg"), "html", null, true);
        echo ");width:65%; height:350px;float:left;\"></div>
                                    <div style=\"width:35%; height:350px; background-color:#fcfddb;margin-left:65%; padding:20px;\">
                                            <h3>Voulez vous nous rejoindre ?</h3>

                                            Vous avez d’ores et déjà validé une formation bac+3 ou vous êtes en école d'Ingenieur , vous souhaitez postuler ?
                                            Il vous suffit de déposer ici votre candidature en ligne ; un de nos experts recrutement vous contactera rapidement et vous fera passer un entretien.<br><br>
                                            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("lgp_prof_registration");
        echo "\"><i class=\"pe-7s-plus\"></i> Déposer sa candidature</a>
                                    </div>
                            </div>

                    </div>

            </div>

    </div>
    
";
        
        $__internal_f2d6f2c9b9b20040edbda6edd571781cf6fa9117dd9f77c3d595df677c0e8a5a->leave($__internal_f2d6f2c9b9b20040edbda6edd571781cf6fa9117dd9f77c3d595df677c0e8a5a_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Prof:become.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 43,  94 => 37,  75 => 21,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*   Devenir Prof - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     */
/*     <!-- start end Page title -->*/
/*     <div class="page-title" style="background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');">*/
/* */
/*             <div class="container">*/
/* */
/*                     <div class="row">*/
/* */
/*                             <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">*/
/* */
/*                                     <h1 class="hero-title">Devenir un grand Prof</h1><br>*/
/* */
/*                                     <a href="{{ path('lgp_prof_registration') }}" class="btn btn-primary">Déposer sa candidature</a>*/
/*                             </div>*/
/* */
/*                     </div>*/
/* */
/*             </div>*/
/* */
/*     </div>*/
/*     <!-- end Page title -->*/
/* */
/*     <div class="content-wrapper">*/
/* */
/*             <div class="container">*/
/* */
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                     <div style="background-size:cover; background-image:url({{ asset('images/become.jpg') }});width:65%; height:350px;float:left;"></div>*/
/*                                     <div style="width:35%; height:350px; background-color:#fcfddb;margin-left:65%; padding:20px;">*/
/*                                             <h3>Voulez vous nous rejoindre ?</h3>*/
/* */
/*                                             Vous avez d’ores et déjà validé une formation bac+3 ou vous êtes en école d'Ingenieur , vous souhaitez postuler ?*/
/*                                             Il vous suffit de déposer ici votre candidature en ligne ; un de nos experts recrutement vous contactera rapidement et vous fera passer un entretien.<br><br>*/
/*                                             <a href="{{ path('lgp_prof_registration') }}"><i class="pe-7s-plus"></i> Déposer sa candidature</a>*/
/*                                     </div>*/
/*                             </div>*/
/* */
/*                     </div>*/
/* */
/*             </div>*/
/* */
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
