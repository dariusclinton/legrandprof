<?php

/* LGPCoreBundle:Lgp:index.html.twig */
class __TwigTemplate_0cb001073bfc182244c65ba8d57ecef11e9ffa3d869dbce135c25163209d349a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCoreBundle:Lgp:index.html.twig", 2);
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
        $__internal_37b97c07dfbac6defaad6a91e2c4d8cdf5b1fe3eae3e4673336f8a5cb7bd15ee = $this->env->getExtension("native_profiler");
        $__internal_37b97c07dfbac6defaad6a91e2c4d8cdf5b1fe3eae3e4673336f8a5cb7bd15ee->enter($__internal_37b97c07dfbac6defaad6a91e2c4d8cdf5b1fe3eae3e4673336f8a5cb7bd15ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle:Lgp:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37b97c07dfbac6defaad6a91e2c4d8cdf5b1fe3eae3e4673336f8a5cb7bd15ee->leave($__internal_37b97c07dfbac6defaad6a91e2c4d8cdf5b1fe3eae3e4673336f8a5cb7bd15ee_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd2cdd990e8cd5a0a34089205ffcc56ba3cbf8519e9ce9976e2b96e99d52d088 = $this->env->getExtension("native_profiler");
        $__internal_bd2cdd990e8cd5a0a34089205ffcc56ba3cbf8519e9ce9976e2b96e99d52d088->enter($__internal_bd2cdd990e8cd5a0a34089205ffcc56ba3cbf8519e9ce9976e2b96e99d52d088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bd2cdd990e8cd5a0a34089205ffcc56ba3cbf8519e9ce9976e2b96e99d52d088->leave($__internal_bd2cdd990e8cd5a0a34089205ffcc56ba3cbf8519e9ce9976e2b96e99d52d088_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_00569f0435383b17fdfde38e42418448e1e899e23e32b3c9aeb55fa33b47ed6d = $this->env->getExtension("native_profiler");
        $__internal_00569f0435383b17fdfde38e42418448e1e899e23e32b3c9aeb55fa33b47ed6d->enter($__internal_00569f0435383b17fdfde38e42418448e1e899e23e32b3c9aeb55fa33b47ed6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <!-- start hero-header with windows height -->
    <div class=\"hero\" style=\"background-image:url('";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero-header/01.jpg"), "html", null, true);
        echo "');\">
        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">

                    <h1 class=\"hero-title\">Trouvez Le Grand Prof Idéal</h1>
                    <p class=\"lead\">Rechercher maintenant et retrouvez un tuteur près de chez vous !</p>

                </div>

            </div>

            <div class=\"main-search-wrapper full-width\">

                <div class=\"inner\">

                    ";
        // line 33
        echo "
                    ";
        // line 34
        echo twig_include($this->env, $context, "LGPCourseBundle:Form:course_form_search.html.twig");
        echo "

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

                    <a href=\" ";
        // line 109
        echo $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city", array("ville" => "douala"));
        echo " \" class=\"top-destination-image-bg\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/villes/01.jpg"), "html", null, true);
        echo "');\">
                        <div class=\"relative\">
                            <h4>Douala</h4>
                            <span>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignementRep"]) ? $context["enseignementRep"] : $this->getContext($context, "enseignementRep")), "getCountProfsByCity", array(0 => "Douala"), "method"), "html", null, true);
        echo " Grands Profs</span>
                        </div>
                    </a>
                </div>

                <div class=\"grid-item\" data-colspan=\"10\" data-rowspan=\"4\">

                    <a href=\" ";
        // line 119
        echo $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city", array("ville" => "yaoundé"));
        echo " \" class=\"top-destination-image-bg\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/villes/02.jpg"), "html", null, true);
        echo "');\">
                        <div class=\"relative\">
                            <h4>Yaoundé</h4>
                            <span>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignementRep"]) ? $context["enseignementRep"] : $this->getContext($context, "enseignementRep")), "getCountProfsByCity", array(0 => "Yaounde"), "method"), "html", null, true);
        echo " Grands Profs</span>
                        </div>
                    </a>
                </div>

                <div class=\"grid-item\" data-colspan=\"5\" data-rowspan=\"6\">

                    <a href=\" ";
        // line 129
        echo $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city", array("ville" => "limbé"));
        echo "  \" class=\"top-destination-image-bg\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/villes/03.jpg"), "html", null, true);
        echo "');\">
                        <div class=\"relative\">
                            <h4>Limbé</h4>
                            <span>";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignementRep"]) ? $context["enseignementRep"] : $this->getContext($context, "enseignementRep")), "getCountProfsByCity", array(0 => "Limbe"), "method"), "html", null, true);
        echo " Grands Profs</span>
                        </div>
                    </a>
                </div>

                <div class=\"grid-item\" data-colspan=\"5\" data-rowspan=\"6\">

                    <a href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city", array("ville" => "Buea"));
        echo " \" class=\"top-destination-image-bg\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/villes/04.jpg"), "html", null, true);
        echo "');\">
                        <div class=\"relative\">
                            <h4>Buea</h4>
                            <span>";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignementRep"]) ? $context["enseignementRep"] : $this->getContext($context, "enseignementRep")), "getCountProfsByCity", array(0 => "Buea"), "method"), "html", null, true);
        echo " Grands Profs</span>
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

                    ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 177
            echo "
                        <div class=\"GridLex-col-3_sm-6_xs-12 mb-30\">
                            <div class=\"package-grid-item\"> 
                                <a href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_category", array("category" => $this->getAttribute($context["category"], "intitule", array()))), "html", null, true);
            echo "\">
                                    <div class=\"image\">
                                        <img src=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["category"], "url", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "alt", array()), "html", null, true);
            echo "\" />
                                        <div class=\"absolute-in-image\">
                                            <div class=\"duration\"><span>";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoryRep"]) ? $context["categoryRep"] : $this->getContext($context, "categoryRep")), "getcountProfsByCategory", array(0 => $this->getAttribute($context["category"], "intitule", array())), "method"), "html", null, true);
            echo " Grands profs</span></div>
                                        </div>
                                    </div>
                                    <div class=\"content clearfix\">
                                        <h5>";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "intitule", array()), "html", null, true);
            echo "</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "
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

                <div class=\"image-bg\" style=\"background-image:url('";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/image-01.jpg"), "html", null, true);
        echo "');\"></div>
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
        
        $__internal_00569f0435383b17fdfde38e42418448e1e899e23e32b3c9aeb55fa33b47ed6d->leave($__internal_00569f0435383b17fdfde38e42418448e1e899e23e32b3c9aeb55fa33b47ed6d_prof);

    }

    public function getTemplateName()
    {
        return "LGPCoreBundle:Lgp:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 271,  302 => 195,  289 => 188,  282 => 184,  275 => 182,  270 => 180,  265 => 177,  261 => 176,  224 => 142,  216 => 139,  206 => 132,  198 => 129,  188 => 122,  180 => 119,  170 => 112,  162 => 109,  84 => 34,  81 => 33,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <!-- start hero-header with windows height -->*/
/*     <div class="hero" style="background-image:url('{{ asset('images/hero-header/01.jpg') }}');">*/
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
/*                     {# <datalist id="cours">*/
/*                         {% for course in courses %}*/
/*                             <option> {{course.intitule}} </option>}*/
/*                         {% endfor %}*/
/*                     </datalist> #}*/
/* */
/*                     {{ include("LGPCourseBundle:Form:course_form_search.html.twig") }}*/
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
/* */
/*                     <a href=" {{path('lgp_course_find_prof_city', {'ville':'douala'})}} " class="top-destination-image-bg" style="background-image:url('{{ asset('images/villes/01.jpg') }}');">*/
/*                         <div class="relative">*/
/*                             <h4>Douala</h4>*/
/*                             <span>{{ enseignementRep.getCountProfsByCity('Douala')}} Grands Profs</span>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/* */
/*                 <div class="grid-item" data-colspan="10" data-rowspan="4">*/
/* */
/*                     <a href=" {{path('lgp_course_find_prof_city', {'ville':'yaoundé'})}} " class="top-destination-image-bg" style="background-image:url('{{ asset('images/villes/02.jpg') }}');">*/
/*                         <div class="relative">*/
/*                             <h4>Yaoundé</h4>*/
/*                             <span>{{ enseignementRep.getCountProfsByCity('Yaounde')}} Grands Profs</span>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/* */
/*                 <div class="grid-item" data-colspan="5" data-rowspan="6">*/
/* */
/*                     <a href=" {{path('lgp_course_find_prof_city', {'ville':'limbé'})}}  " class="top-destination-image-bg" style="background-image:url('{{ asset('images/villes/03.jpg') }}');">*/
/*                         <div class="relative">*/
/*                             <h4>Limbé</h4>*/
/*                             <span>{{ enseignementRep.getCountProfsByCity('Limbe')}} Grands Profs</span>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/* */
/*                 <div class="grid-item" data-colspan="5" data-rowspan="6">*/
/* */
/*                     <a href="{{path('lgp_course_find_prof_city', {'ville':'Buea'})}} " class="top-destination-image-bg" style="background-image:url('{{ asset('images/villes/04.jpg') }}');">*/
/*                         <div class="relative">*/
/*                             <h4>Buea</h4>*/
/*                             <span>{{ enseignementRep.getCountProfsByCity('Buea')}} Grands Profs</span>*/
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
/*                     {% for category in categories %}*/
/* */
/*                         <div class="GridLex-col-3_sm-6_xs-12 mb-30">*/
/*                             <div class="package-grid-item"> */
/*                                 <a href="{{ path('lgp_course_find_category', {'category': category.intitule}) }}">*/
/*                                     <div class="image">*/
/*                                         <img src="{{ asset(category.url) }}" alt="{{category.alt}}" />*/
/*                                         <div class="absolute-in-image">*/
/*                                             <div class="duration"><span>{{categoryRep.getcountProfsByCategory(category.intitule)}} Grands profs</span></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="content clearfix">*/
/*                                         <h5>{{ category.intitule }}</h5>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     {% endfor %}*/
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
/* */
/*                 <div class="image-bg" style="background-image:url('{{ asset('images/image-01.jpg') }}');"></div>*/
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
/* {% endblock %}*/
/* */
