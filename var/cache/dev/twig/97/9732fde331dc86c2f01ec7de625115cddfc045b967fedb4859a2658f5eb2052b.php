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
        $__internal_10106a2bea5d24f9cc2f0f28a5cc2b1d123a05c3b4a4a1758439300c90dd0e06 = $this->env->getExtension("native_profiler");
        $__internal_10106a2bea5d24f9cc2f0f28a5cc2b1d123a05c3b4a4a1758439300c90dd0e06->enter($__internal_10106a2bea5d24f9cc2f0f28a5cc2b1d123a05c3b4a4a1758439300c90dd0e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Prof/become.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10106a2bea5d24f9cc2f0f28a5cc2b1d123a05c3b4a4a1758439300c90dd0e06->leave($__internal_10106a2bea5d24f9cc2f0f28a5cc2b1d123a05c3b4a4a1758439300c90dd0e06_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a287fbef1dac6693a1cf199796de7c6df9aeefe032af86c59109f304c07532d = $this->env->getExtension("native_profiler");
        $__internal_7a287fbef1dac6693a1cf199796de7c6df9aeefe032af86c59109f304c07532d->enter($__internal_7a287fbef1dac6693a1cf199796de7c6df9aeefe032af86c59109f304c07532d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Devenir Prof - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7a287fbef1dac6693a1cf199796de7c6df9aeefe032af86c59109f304c07532d->leave($__internal_7a287fbef1dac6693a1cf199796de7c6df9aeefe032af86c59109f304c07532d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_be15603a7502809f17d18c9cf55736371152898203e91da5bfa4afbf57bcc3ed = $this->env->getExtension("native_profiler");
        $__internal_be15603a7502809f17d18c9cf55736371152898203e91da5bfa4afbf57bcc3ed->enter($__internal_be15603a7502809f17d18c9cf55736371152898203e91da5bfa4afbf57bcc3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_be15603a7502809f17d18c9cf55736371152898203e91da5bfa4afbf57bcc3ed->leave($__internal_be15603a7502809f17d18c9cf55736371152898203e91da5bfa4afbf57bcc3ed_prof);

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
