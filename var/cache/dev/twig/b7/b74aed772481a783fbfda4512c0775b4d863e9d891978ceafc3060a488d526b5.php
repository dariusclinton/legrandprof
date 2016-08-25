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
        $__internal_ec1777b4c9103d08e2bf671e8b0d88bde8a0528cc13f9c476226ad36902ee982 = $this->env->getExtension("native_profiler");
        $__internal_ec1777b4c9103d08e2bf671e8b0d88bde8a0528cc13f9c476226ad36902ee982->enter($__internal_ec1777b4c9103d08e2bf671e8b0d88bde8a0528cc13f9c476226ad36902ee982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Prof:become.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec1777b4c9103d08e2bf671e8b0d88bde8a0528cc13f9c476226ad36902ee982->leave($__internal_ec1777b4c9103d08e2bf671e8b0d88bde8a0528cc13f9c476226ad36902ee982_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_35c2a889389e994cbe3382c348d82f415bcdc76fa58bdb4890ba46fbd90437f0 = $this->env->getExtension("native_profiler");
        $__internal_35c2a889389e994cbe3382c348d82f415bcdc76fa58bdb4890ba46fbd90437f0->enter($__internal_35c2a889389e994cbe3382c348d82f415bcdc76fa58bdb4890ba46fbd90437f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Devenir Prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_35c2a889389e994cbe3382c348d82f415bcdc76fa58bdb4890ba46fbd90437f0->leave($__internal_35c2a889389e994cbe3382c348d82f415bcdc76fa58bdb4890ba46fbd90437f0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d0ee8cedc24f8b2caa45678fb3c8578de41773a4490d6dcfda1e42fe1c66cac = $this->env->getExtension("native_profiler");
        $__internal_3d0ee8cedc24f8b2caa45678fb3c8578de41773a4490d6dcfda1e42fe1c66cac->enter($__internal_3d0ee8cedc24f8b2caa45678fb3c8578de41773a4490d6dcfda1e42fe1c66cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d0ee8cedc24f8b2caa45678fb3c8578de41773a4490d6dcfda1e42fe1c66cac->leave($__internal_3d0ee8cedc24f8b2caa45678fb3c8578de41773a4490d6dcfda1e42fe1c66cac_prof);

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
