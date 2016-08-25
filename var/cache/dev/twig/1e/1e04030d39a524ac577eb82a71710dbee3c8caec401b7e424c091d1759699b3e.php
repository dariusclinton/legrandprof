<?php

/* @LGPCourse/Course/index.html.twig */
class __TwigTemplate_47b36f186f965218dc3bd9eafebb85b6d9bad2952fc07c5939808be9062d1e7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPCourse/Course/index.html.twig", 2);
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
        $__internal_24b619b18f378ca7f3dde03aad10924295d2ac57b24c48cf153d22ee73d37a26 = $this->env->getExtension("native_profiler");
        $__internal_24b619b18f378ca7f3dde03aad10924295d2ac57b24c48cf153d22ee73d37a26->enter($__internal_24b619b18f378ca7f3dde03aad10924295d2ac57b24c48cf153d22ee73d37a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCourse/Course/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24b619b18f378ca7f3dde03aad10924295d2ac57b24c48cf153d22ee73d37a26->leave($__internal_24b619b18f378ca7f3dde03aad10924295d2ac57b24c48cf153d22ee73d37a26_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_35766ab3505c39e79aa541e9d12b1d99db48eb4ae9d009a2d0b2020a7b13c5d1 = $this->env->getExtension("native_profiler");
        $__internal_35766ab3505c39e79aa541e9d12b1d99db48eb4ae9d009a2d0b2020a7b13c5d1->enter($__internal_35766ab3505c39e79aa541e9d12b1d99db48eb4ae9d009a2d0b2020a7b13c5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_35766ab3505c39e79aa541e9d12b1d99db48eb4ae9d009a2d0b2020a7b13c5d1->leave($__internal_35766ab3505c39e79aa541e9d12b1d99db48eb4ae9d009a2d0b2020a7b13c5d1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1201850625294e13a5a30112491d98d00e16f892373f7a5874ba942eb353cf6d = $this->env->getExtension("native_profiler");
        $__internal_1201850625294e13a5a30112491d98d00e16f892373f7a5874ba942eb353cf6d->enter($__internal_1201850625294e13a5a30112491d98d00e16f892373f7a5874ba942eb353cf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <!-- start hero-header with windows height -->
    <div class=\"hero\" style=\"background-image:url('images/hero-header/01.jpg');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">

                    <h1 class=\"hero-title\">Trouvez Le Grand Prof Idéal</h1>
                    <p class=\"lead\">Rechercher maintenant et retrouvez un tuteur près de chez vous !</p>

                </div>

            </div>

            <div class=\"main-search-wrapper full-width\">

                <div class=\"inner\">

                    <div class=\"column-item-large\">

                        <div class=\"form-group\">

                            <select name=\"destination\" class=\"select2-multi form-control\" data-placeholder=\"Que voulez-vous apprendre ?\" multiple>

                            </select>

                        </div>

                    </div>



                    <div class=\"column-item for-btn\">

                        <div class=\"form-group\">

                            <a href=\"#\" class=\"btn btn-primary btn-block\">Rechercher</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- end hero-header with windows height -->

    <div class=\"post-hero bg-light\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-4\">
                    <div class=\"featured-count clearfix\">
                        <div class=\"icon\"><i class=\"pe-7s-users\"></i></div>
                        <div class=\"content\">
                            <h6>De Grands Profs</h6>
                            <span>Des professionnels avérés et compétents.</span>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-4\">
                    <div class=\"featured-count clearfix\">
                        <div class=\"icon\"> <i class=\"pe-7s-wristwatch\"></i></div>
                        <div class=\"content\">
                            <h6>Un Service Rapide</h6>
                            <span>Une réponse en maxi 24h.</span>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-4\">
                    <div class=\"featured-count clearfix\">
                        <div class=\"icon\"> <i class=\"pe-7s-smile\"></i></div>
                        <div class=\"content\">
                            <h6>Faite votre choix</h6>
                            <span> Choisissez le profil qui vous convient !</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <section>

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">

                    <div class=\"section-title\">

                        <h3>Top des villes</h3>

                    </div>

                </div>

            </div>

            <div class=\"grid destination-grid-wrapper\">

                <div class=\"grid-item\" data-colspan=\"10\" data-rowspan=\"10\">
                    <a href=\"recherche.html\" class=\"top-destination-image-bg\" style=\"background-image:url('images/villes/01.jpg');\">
                        <div class=\"relative\">
                            <h4>Douala</h4>
                            <span>150 Grands Profs</span>
                        </div>
                    </a>
                </div>

                <div class=\"grid-item\" data-colspan=\"10\" data-rowspan=\"4\">
                    <a href=\"recherche.html\" class=\"top-destination-image-bg\" style=\"background-image:url('images/villes/02.jpg');\">
                        <div class=\"relative\">
                            <h4>Yaoundé</h4>
                            <span>100 Grands Profs</span>
                        </div>
                    </a>
                </div>

                <div class=\"grid-item\" data-colspan=\"5\" data-rowspan=\"6\">
                    <a href=\"recherche.html\" class=\"top-destination-image-bg\" style=\"background-image:url('images/villes/03.jpg');\">
                        <div class=\"relative\">
                            <h4>Limbé</h4>
                            <span>45 Grands Profs</span>
                        </div>
                    </a>
                </div>

                <div class=\"grid-item\" data-colspan=\"5\" data-rowspan=\"6\">
                    <a href=\"recherche.html\" class=\"top-destination-image-bg\" style=\"background-image:url('images/villes/04.jpg');\">
                        <div class=\"relative\">
                            <h4>Buea</h4>
                            <span>52 Grands Profs</span>
                        </div>
                    </a>
                </div>

            </div>

        </div>

    </section>

    <section class=\"bg-light\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">

                    <div class=\"section-title\">

                        <h3>Catégories populaires</h3>
                        <p>Ensemble, nous allons vous aider à atteindre vos objectifs.</p>

                    </div>

                </div>

            </div>

            <div class=\"GridLex-gap-30-wrappper package-grid-item-wrapper\">

                <div class=\"GridLex-grid-noGutter-equalHeight\">

                    <div class=\"GridLex-col-3_sm-6_xs-12 mb-30\">
                        <div class=\"package-grid-item\"> 
                            <a href=\"recherche.html\">
                                <div class=\"image\">
                                    <img src=\"images/categories/maths.jpg\" alt=\"Catégories\" />
                                    <div class=\"absolute-in-image\">
                                        <div class=\"duration\"><span>300 Grands profs</span></div>
                                    </div>
                                </div>
                                <div class=\"content clearfix\">
                                    <h5>Mathématiques</h5>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class=\"GridLex-col-3_sm-6_xs-12 mb-30\">
                        <div class=\"package-grid-item\"> 
                            <a href=\"recherche.html\">
                                <div class=\"image\">
                                    <img src=\"images/categories/phy.jpg\" alt=\"Catégories\" />
                                    <div class=\"absolute-in-image\">
                                        <div class=\"duration\"><span>250 Grands Profs</span></div>
                                    </div>
                                </div>
                                <div class=\"content clearfix\">
                                    <h5>Physiques</h5>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class=\"GridLex-col-3_sm-6_xs-12 mb-30\">
                        <div class=\"package-grid-item\"> 
                            <a href=\"recherche.html\">
                                <div class=\"image\">
                                    <img src=\"images/categories/chi.jpg\" alt=\"Catégories\" />
                                    <div class=\"absolute-in-image\">
                                        <div class=\"duration\"><span>250 Grands Profs</span></div>
                                    </div>
                                </div>
                                <div class=\"content clearfix\">
                                    <h5>Chimie</h5>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class=\"GridLex-col-3_sm-6_xs-12 mb-30\">
                        <div class=\"package-grid-item\"> 
                            <a href=\"recherche.html\">
                                <div class=\"image\">
                                    <img src=\"images/categories/info.jpg\" alt=\"Catégories\" />
                                    <div class=\"absolute-in-image\">
                                        <div class=\"duration\"><span>115 Grands Profs</span></div>
                                    </div>
                                </div>
                                <div class=\"content clearfix\">
                                    <h5>Informatique </h5>

                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class=\"overflow-hidden why-us-half-image-wrapper\">

        <div class=\"GridLex-grid-noGutter-equalHeight\">

            <div class=\"GridLex-col-6_sm-12\">

                <div class=\"why-us-half-image-content\">

                    <div class=\"section-title text-left\">

                        <h3>Comment ca marche ?</h3>
                        <p>Une procédure simple et rapide !</p>

                    </div>

                    <div class=\"featured-item\">

                        <h4>Entrez le domaine qui vous interesse</h4>

                        <div class=\"content clearfix\">

                            <div class=\"icon\">
                                <i class=\"pe-7s-search\"></i>
                            </div>

                            <p>Recherchez un grand prof spécialisé dans un domaine précis parmi plus de 250 domaines (académiques, artistiques, artisanales...)</p>

                        </div>
                    </div>

                    <div class=\"featured-item\">

                        <h4>Trouvez le grand prof idéal</h4>

                        <div class=\"content clearfix\">

                            <div class=\"icon\">
                                <i class=\"pe-7s-like\"></i>
                            </div>

                            <p>Sélectionnez la perle rare parmi une liste d’enseignants vérifiés par nos soins, évalués par leurs anciens élèves et à proximité de chez vous.. Notre moteur de recherche est optimisé pour vous afficher les résultats les plus pertinents.</p>

                        </div>
                    </div>


                    <div class=\"featured-item\">

                        <h4>Une fois trouvé, Entrez en contact</h4>

                        <div class=\"content clearfix\">

                            <div class=\"icon\">
                                <i class=\"pe-7s-call\"></i>
                            </div>

                            <p>Contactez votre grand prof idéal en précisant les raisons de votre choix, Vous avez une réponse en moins de 24h.</p>

                        </div>
                    </div>

                </div>

            </div>

            <div class=\"GridLex-col-6_sm-12 image-bg\">
                <div class=\"image-bg\" style=\"background-image:url('images/image-01.jpg');\"></div>
            </div>

        </div>

    </section>

    <div class=\"newsletter-wrapper\">

        <div class=\"container\">

            <div class=\"flex-row flex-align-middle flex-gap-30\">

                <div class=\"flex-column flex-sm-12\">
                    <div class=\"newsletter-text clearfix\">
                        <div class=\"icon\">
                            <i class=\"pe-7s-mail\"></i>
                        </div>
                        <div class=\"content\">
                            <h3>Enregistrez-vous à la Newsletter</h3>
                            <p>Tenez vous informer de toutes les nouveautés.</p>
                        </div>
                    </div>
                </div>

                <div class=\"flex-columns flex-sm-12\">
                    <div class=\"newsletter-form\">
                        <form class=\"\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Entrez votre Email...\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary\" type=\"button\">S'inscrire <i class=\"fa fa-long-arrow-right\"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>


";
        
        $__internal_1201850625294e13a5a30112491d98d00e16f892373f7a5874ba942eb353cf6d->leave($__internal_1201850625294e13a5a30112491d98d00e16f892373f7a5874ba942eb353cf6d_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCourse/Course/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <!-- start hero-header with windows height -->*/
/*     <div class="hero" style="background-image:url('images/hero-header/01.jpg');">*/
/* */
/*         <div class="container">*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">*/
/* */
/*                     <h1 class="hero-title">Trouvez Le Grand Prof Idéal</h1>*/
/*                     <p class="lead">Rechercher maintenant et retrouvez un tuteur près de chez vous !</p>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <div class="main-search-wrapper full-width">*/
/* */
/*                 <div class="inner">*/
/* */
/*                     <div class="column-item-large">*/
/* */
/*                         <div class="form-group">*/
/* */
/*                             <select name="destination" class="select2-multi form-control" data-placeholder="Que voulez-vous apprendre ?" multiple>*/
/* */
/*                             </select>*/
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/* */
/* */
/*                     <div class="column-item for-btn">*/
/* */
/*                         <div class="form-group">*/
/* */
/*                             <a href="#" class="btn btn-primary btn-block">Rechercher</a>*/
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/*     <!-- end hero-header with windows height -->*/
/* */
/*     <div class="post-hero bg-light">*/
/* */
/*         <div class="container">*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-sm-4">*/
/*                     <div class="featured-count clearfix">*/
/*                         <div class="icon"><i class="pe-7s-users"></i></div>*/
/*                         <div class="content">*/
/*                             <h6>De Grands Profs</h6>*/
/*                             <span>Des professionnels avérés et compétents.</span>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-4">*/
/*                     <div class="featured-count clearfix">*/
/*                         <div class="icon"> <i class="pe-7s-wristwatch"></i></div>*/
/*                         <div class="content">*/
/*                             <h6>Un Service Rapide</h6>*/
/*                             <span>Une réponse en maxi 24h.</span>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-4">*/
/*                     <div class="featured-count clearfix">*/
/*                         <div class="icon"> <i class="pe-7s-smile"></i></div>*/
/*                         <div class="content">*/
/*                             <h6>Faite votre choix</h6>*/
/*                             <span> Choisissez le profil qui vous convient !</span>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <section>*/
/* */
/*         <div class="container">*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">*/
/* */
/*                     <div class="section-title">*/
/* */
/*                         <h3>Top des villes</h3>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <div class="grid destination-grid-wrapper">*/
/* */
/*                 <div class="grid-item" data-colspan="10" data-rowspan="10">*/
/*                     <a href="recherche.html" class="top-destination-image-bg" style="background-image:url('images/villes/01.jpg');">*/
/*                         <div class="relative">*/
/*                             <h4>Douala</h4>*/
/*                             <span>150 Grands Profs</span>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/* */
/*                 <div class="grid-item" data-colspan="10" data-rowspan="4">*/
/*                     <a href="recherche.html" class="top-destination-image-bg" style="background-image:url('images/villes/02.jpg');">*/
/*                         <div class="relative">*/
/*                             <h4>Yaoundé</h4>*/
/*                             <span>100 Grands Profs</span>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/* */
/*                 <div class="grid-item" data-colspan="5" data-rowspan="6">*/
/*                     <a href="recherche.html" class="top-destination-image-bg" style="background-image:url('images/villes/03.jpg');">*/
/*                         <div class="relative">*/
/*                             <h4>Limbé</h4>*/
/*                             <span>45 Grands Profs</span>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/* */
/*                 <div class="grid-item" data-colspan="5" data-rowspan="6">*/
/*                     <a href="recherche.html" class="top-destination-image-bg" style="background-image:url('images/villes/04.jpg');">*/
/*                         <div class="relative">*/
/*                             <h4>Buea</h4>*/
/*                             <span>52 Grands Profs</span>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </section>*/
/* */
/*     <section class="bg-light">*/
/* */
/*         <div class="container">*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">*/
/* */
/*                     <div class="section-title">*/
/* */
/*                         <h3>Catégories populaires</h3>*/
/*                         <p>Ensemble, nous allons vous aider à atteindre vos objectifs.</p>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <div class="GridLex-gap-30-wrappper package-grid-item-wrapper">*/
/* */
/*                 <div class="GridLex-grid-noGutter-equalHeight">*/
/* */
/*                     <div class="GridLex-col-3_sm-6_xs-12 mb-30">*/
/*                         <div class="package-grid-item"> */
/*                             <a href="recherche.html">*/
/*                                 <div class="image">*/
/*                                     <img src="images/categories/maths.jpg" alt="Catégories" />*/
/*                                     <div class="absolute-in-image">*/
/*                                         <div class="duration"><span>300 Grands profs</span></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="content clearfix">*/
/*                                     <h5>Mathématiques</h5>*/
/* */
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="GridLex-col-3_sm-6_xs-12 mb-30">*/
/*                         <div class="package-grid-item"> */
/*                             <a href="recherche.html">*/
/*                                 <div class="image">*/
/*                                     <img src="images/categories/phy.jpg" alt="Catégories" />*/
/*                                     <div class="absolute-in-image">*/
/*                                         <div class="duration"><span>250 Grands Profs</span></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="content clearfix">*/
/*                                     <h5>Physiques</h5>*/
/* */
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="GridLex-col-3_sm-6_xs-12 mb-30">*/
/*                         <div class="package-grid-item"> */
/*                             <a href="recherche.html">*/
/*                                 <div class="image">*/
/*                                     <img src="images/categories/chi.jpg" alt="Catégories" />*/
/*                                     <div class="absolute-in-image">*/
/*                                         <div class="duration"><span>250 Grands Profs</span></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="content clearfix">*/
/*                                     <h5>Chimie</h5>*/
/* */
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="GridLex-col-3_sm-6_xs-12 mb-30">*/
/*                         <div class="package-grid-item"> */
/*                             <a href="recherche.html">*/
/*                                 <div class="image">*/
/*                                     <img src="images/categories/info.jpg" alt="Catégories" />*/
/*                                     <div class="absolute-in-image">*/
/*                                         <div class="duration"><span>115 Grands Profs</span></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="content clearfix">*/
/*                                     <h5>Informatique </h5>*/
/* */
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </section>*/
/* */
/*     <section class="overflow-hidden why-us-half-image-wrapper">*/
/* */
/*         <div class="GridLex-grid-noGutter-equalHeight">*/
/* */
/*             <div class="GridLex-col-6_sm-12">*/
/* */
/*                 <div class="why-us-half-image-content">*/
/* */
/*                     <div class="section-title text-left">*/
/* */
/*                         <h3>Comment ca marche ?</h3>*/
/*                         <p>Une procédure simple et rapide !</p>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="featured-item">*/
/* */
/*                         <h4>Entrez le domaine qui vous interesse</h4>*/
/* */
/*                         <div class="content clearfix">*/
/* */
/*                             <div class="icon">*/
/*                                 <i class="pe-7s-search"></i>*/
/*                             </div>*/
/* */
/*                             <p>Recherchez un grand prof spécialisé dans un domaine précis parmi plus de 250 domaines (académiques, artistiques, artisanales...)</p>*/
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="featured-item">*/
/* */
/*                         <h4>Trouvez le grand prof idéal</h4>*/
/* */
/*                         <div class="content clearfix">*/
/* */
/*                             <div class="icon">*/
/*                                 <i class="pe-7s-like"></i>*/
/*                             </div>*/
/* */
/*                             <p>Sélectionnez la perle rare parmi une liste d’enseignants vérifiés par nos soins, évalués par leurs anciens élèves et à proximité de chez vous.. Notre moteur de recherche est optimisé pour vous afficher les résultats les plus pertinents.</p>*/
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="featured-item">*/
/* */
/*                         <h4>Une fois trouvé, Entrez en contact</h4>*/
/* */
/*                         <div class="content clearfix">*/
/* */
/*                             <div class="icon">*/
/*                                 <i class="pe-7s-call"></i>*/
/*                             </div>*/
/* */
/*                             <p>Contactez votre grand prof idéal en précisant les raisons de votre choix, Vous avez une réponse en moins de 24h.</p>*/
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <div class="GridLex-col-6_sm-12 image-bg">*/
/*                 <div class="image-bg" style="background-image:url('images/image-01.jpg');"></div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </section>*/
/* */
/*     <div class="newsletter-wrapper">*/
/* */
/*         <div class="container">*/
/* */
/*             <div class="flex-row flex-align-middle flex-gap-30">*/
/* */
/*                 <div class="flex-column flex-sm-12">*/
/*                     <div class="newsletter-text clearfix">*/
/*                         <div class="icon">*/
/*                             <i class="pe-7s-mail"></i>*/
/*                         </div>*/
/*                         <div class="content">*/
/*                             <h3>Enregistrez-vous à la Newsletter</h3>*/
/*                             <p>Tenez vous informer de toutes les nouveautés.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="flex-columns flex-sm-12">*/
/*                     <div class="newsletter-form">*/
/*                         <form class="">*/
/*                             <div class="input-group">*/
/*                                 <input type="text" class="form-control" placeholder="Entrez votre Email...">*/
/*                                 <span class="input-group-btn">*/
/*                                     <button class="btn btn-primary" type="button">S'inscrire <i class="fa fa-long-arrow-right"></i></button>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
