<?php

/* LGPCoreBundle:Lgp:index.html.twig */
class __TwigTemplate_9065434e8a2d58ac343b103147535b885fb3220cd20618d0424bb7f0a2a05caf extends Twig_Template
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
        $__internal_506903a828891ac7e19204b630268f56a3f5805f542f217c16252f0e6b7b99aa = $this->env->getExtension("native_profiler");
        $__internal_506903a828891ac7e19204b630268f56a3f5805f542f217c16252f0e6b7b99aa->enter($__internal_506903a828891ac7e19204b630268f56a3f5805f542f217c16252f0e6b7b99aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle:Lgp:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_506903a828891ac7e19204b630268f56a3f5805f542f217c16252f0e6b7b99aa->leave($__internal_506903a828891ac7e19204b630268f56a3f5805f542f217c16252f0e6b7b99aa_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a3d5a8bf2b4f950613d230d61fef64169d8c23b4f7dafacc123b8016840ed52 = $this->env->getExtension("native_profiler");
        $__internal_4a3d5a8bf2b4f950613d230d61fef64169d8c23b4f7dafacc123b8016840ed52->enter($__internal_4a3d5a8bf2b4f950613d230d61fef64169d8c23b4f7dafacc123b8016840ed52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4a3d5a8bf2b4f950613d230d61fef64169d8c23b4f7dafacc123b8016840ed52->leave($__internal_4a3d5a8bf2b4f950613d230d61fef64169d8c23b4f7dafacc123b8016840ed52_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c072c7972ff5f6c52ab4b5f5faa670be824ba9c23826b416fc0d8a8b6765519 = $this->env->getExtension("native_profiler");
        $__internal_9c072c7972ff5f6c52ab4b5f5faa670be824ba9c23826b416fc0d8a8b6765519->enter($__internal_9c072c7972ff5f6c52ab4b5f5faa670be824ba9c23826b416fc0d8a8b6765519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city", array("slugVille" => "douala"));
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
        echo $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city", array("slugVille" => "yaounde"));
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
        echo $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city", array("slugVille" => "limbe"));
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
        echo $this->env->getExtension('routing')->getPath("lgp_course_find_prof_city", array("slugVille" => "Buea"));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">
                                    <div class=\"image\">
                                        ";
            // line 182
            if ( !(null === $this->getAttribute($context["category"], "image", array()))) {
                // line 183
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["category"], "image", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\" image categorie \" />
                                        ";
            }
            // line 185
            echo "                                        <div class=\"absolute-in-image\">
                                            <div class=\"duration\"><span>";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoryRep"]) ? $context["categoryRep"] : $this->getContext($context, "categoryRep")), "getcountProfsByCategory", array(0 => $this->getAttribute($context["category"], "intitule", array())), "method"), "html", null, true);
            echo " Grands profs</span></div>
                                        </div>
                                    </div>
                                    <div class=\"content clearfix\">
                                        <h5>";
            // line 190
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
        // line 197
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
        // line 273
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
        
        $__internal_9c072c7972ff5f6c52ab4b5f5faa670be824ba9c23826b416fc0d8a8b6765519->leave($__internal_9c072c7972ff5f6c52ab4b5f5faa670be824ba9c23826b416fc0d8a8b6765519_prof);

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
        return array (  384 => 273,  306 => 197,  293 => 190,  286 => 186,  283 => 185,  277 => 183,  275 => 182,  270 => 180,  265 => 177,  261 => 176,  224 => 142,  216 => 139,  206 => 132,  198 => 129,  188 => 122,  180 => 119,  170 => 112,  162 => 109,  84 => 34,  81 => 33,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent() }}
{% endblock %}

{% block body %}
    <!-- start hero-header with windows height -->
    <div class=\"hero\" style=\"background-image:url('{{ asset('images/hero-header/01.jpg') }}');\">
        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">

                    <h1 class=\"hero-title\">Trouvez Le Grand Prof Idéal</h1>
                    <p class=\"lead\">Rechercher maintenant et retrouvez un tuteur près de chez vous !</p>

                </div>

            </div>

            <div class=\"main-search-wrapper full-width\">

                <div class=\"inner\">

                    {# <datalist id=\"cours\">
                        {% for course in courses %}
                            <option> {{course.intitule}} </option>}
                        {% endfor %}
                    </datalist> #}

                    {{ include(\"LGPCourseBundle:Form:course_form_search.html.twig\") }}

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

                    <a href=\" {{path('lgp_course_find_prof_city', {'slugVille':'douala'})}} \" class=\"top-destination-image-bg\" style=\"background-image:url('{{ asset('images/villes/01.jpg') }}');\">
                        <div class=\"relative\">
                            <h4>Douala</h4>
                            <span>{{ enseignementRep.getCountProfsByCity('Douala')}} Grands Profs</span>
                        </div>
                    </a>
                </div>

                <div class=\"grid-item\" data-colspan=\"10\" data-rowspan=\"4\">

                    <a href=\" {{path('lgp_course_find_prof_city', {'slugVille':'yaounde'})}} \" class=\"top-destination-image-bg\" style=\"background-image:url('{{ asset('images/villes/02.jpg') }}');\">
                        <div class=\"relative\">
                            <h4>Yaoundé</h4>
                            <span>{{ enseignementRep.getCountProfsByCity('Yaounde')}} Grands Profs</span>
                        </div>
                    </a>
                </div>

                <div class=\"grid-item\" data-colspan=\"5\" data-rowspan=\"6\">

                    <a href=\" {{path('lgp_course_find_prof_city', {'slugVille':'limbe'})}}  \" class=\"top-destination-image-bg\" style=\"background-image:url('{{ asset('images/villes/03.jpg') }}');\">
                        <div class=\"relative\">
                            <h4>Limbé</h4>
                            <span>{{ enseignementRep.getCountProfsByCity('Limbe')}} Grands Profs</span>
                        </div>
                    </a>
                </div>

                <div class=\"grid-item\" data-colspan=\"5\" data-rowspan=\"6\">

                    <a href=\"{{path('lgp_course_find_prof_city', {'slugVille':'Buea'})}} \" class=\"top-destination-image-bg\" style=\"background-image:url('{{ asset('images/villes/04.jpg') }}');\">
                        <div class=\"relative\">
                            <h4>Buea</h4>
                            <span>{{ enseignementRep.getCountProfsByCity('Buea')}} Grands Profs</span>
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

                    {% for category in categories %}

                        <div class=\"GridLex-col-3_sm-6_xs-12 mb-30\">
                            <div class=\"package-grid-item\"> 
                                <a href=\"{{ path('lgp_course_find_category', {'slug': category.slug}) }}\">
                                    <div class=\"image\">
                                        {% if category.image is not null %}
                                            <img src=\"{{ asset(category.image.webPath) }}\" alt=\" image categorie \" />
                                        {% endif %}
                                        <div class=\"absolute-in-image\">
                                            <div class=\"duration\"><span>{{categoryRep.getcountProfsByCategory(category.intitule)}} Grands profs</span></div>
                                        </div>
                                    </div>
                                    <div class=\"content clearfix\">
                                        <h5>{{ category.intitule }}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                    {% endfor %}

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

                <div class=\"image-bg\" style=\"background-image:url('{{ asset('images/image-01.jpg') }}');\"></div>
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
{% endblock %}
";
    }
}
