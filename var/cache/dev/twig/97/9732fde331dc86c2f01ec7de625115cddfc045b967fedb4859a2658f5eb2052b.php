<?php

/* @LGPUser/Prof/become.html.twig */
class __TwigTemplate_dbb01d4d6974e3b79fc33ac5e58bf4375d975bb1dd68f5006e9b887e89fbe60c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Prof/become.html.twig", 1);
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
        $__internal_2cf32d70fcfa12fcda77caede1b5edbdcd5b2bf8c3ce2e1106de038821e7c080 = $this->env->getExtension("native_profiler");
        $__internal_2cf32d70fcfa12fcda77caede1b5edbdcd5b2bf8c3ce2e1106de038821e7c080->enter($__internal_2cf32d70fcfa12fcda77caede1b5edbdcd5b2bf8c3ce2e1106de038821e7c080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Prof/become.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf32d70fcfa12fcda77caede1b5edbdcd5b2bf8c3ce2e1106de038821e7c080->leave($__internal_2cf32d70fcfa12fcda77caede1b5edbdcd5b2bf8c3ce2e1106de038821e7c080_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_272fa8f7145146afb06d5eff19b043378e1a8a3237276d708565bd3df2656c86 = $this->env->getExtension("native_profiler");
        $__internal_272fa8f7145146afb06d5eff19b043378e1a8a3237276d708565bd3df2656c86->enter($__internal_272fa8f7145146afb06d5eff19b043378e1a8a3237276d708565bd3df2656c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Devenir Prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_272fa8f7145146afb06d5eff19b043378e1a8a3237276d708565bd3df2656c86->leave($__internal_272fa8f7145146afb06d5eff19b043378e1a8a3237276d708565bd3df2656c86_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_715f7e37b62a5c05a771da7923f9191665da27a0262f255191a6a9455a213eb5 = $this->env->getExtension("native_profiler");
        $__internal_715f7e37b62a5c05a771da7923f9191665da27a0262f255191a6a9455a213eb5->enter($__internal_715f7e37b62a5c05a771da7923f9191665da27a0262f255191a6a9455a213eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_715f7e37b62a5c05a771da7923f9191665da27a0262f255191a6a9455a213eb5->leave($__internal_715f7e37b62a5c05a771da7923f9191665da27a0262f255191a6a9455a213eb5_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Prof/become.html.twig";
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
