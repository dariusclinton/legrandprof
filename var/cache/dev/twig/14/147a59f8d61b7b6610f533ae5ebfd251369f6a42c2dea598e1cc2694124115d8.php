<?php

/* LGPCourseBundle:Course:search_category.html.twig */
class __TwigTemplate_a7e626a36231fb410bfc529e79c130fde03778ee077213d8bfb08e493a0bcd2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Course:search_category.html.twig", 1);
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
        $__internal_987b7cf3565560ca19d0af9020b659dc17e4df051b75c767257a7c4cae2b85ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987b7cf3565560ca19d0af9020b659dc17e4df051b75c767257a7c4cae2b85ee->enter($__internal_987b7cf3565560ca19d0af9020b659dc17e4df051b75c767257a7c4cae2b85ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Course:search_category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_987b7cf3565560ca19d0af9020b659dc17e4df051b75c767257a7c4cae2b85ee->leave($__internal_987b7cf3565560ca19d0af9020b659dc17e4df051b75c767257a7c4cae2b85ee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04d443298caaf03e86c560e86429f85d1ec6a9b1bd81f6c11d24ebc8f6b8e466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d443298caaf03e86c560e86429f85d1ec6a9b1bd81f6c11d24ebc8f6b8e466->enter($__internal_04d443298caaf03e86c560e86429f85d1ec6a9b1bd81f6c11d24ebc8f6b8e466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "name", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_04d443298caaf03e86c560e86429f85d1ec6a9b1bd81f6c11d24ebc8f6b8e466->leave($__internal_04d443298caaf03e86c560e86429f85d1ec6a9b1bd81f6c11d24ebc8f6b8e466_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_51c6c1b6c6d9cd1f0babcc2a23f1a251b4af3b0b037097c89e80121ca1957f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c6c1b6c6d9cd1f0babcc2a23f1a251b4af3b0b037097c89e80121ca1957f69->enter($__internal_51c6c1b6c6d9cd1f0babcc2a23f1a251b4af3b0b037097c89e80121ca1957f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
        echo "');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">
                    <h1 class=\"hero-title\">Profs dans la catégorie ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "name", array()), "html", null, true);
        echo " </h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_core_homepage");
        echo " \">Accueil</a></li>
                        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_find");
        echo "\">Profs</a></li>
                        <li><span>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "name", array()), "html", null, true);
        echo "</span></li>
                    </ol>
                </div>

            </div>

        </div>

    </div>
    <!-- end Page title -->


    <div class=\"content-wrapper\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-4 col-md-3\">

                    <aside class=\"sidebar with-filter\">

                        <div class=\"sidebar-search-wrapper bg-light-2\">

                            <div class=\"\">
                                <h4>Affinez votre recherche</h4>
                            </div>

                            <div class=\"sidebar-search-content\">
                            </div>

                            ";
        // line 53
        $this->loadTemplate("LGPCourseBundle:Form:all_search.html.twig", "LGPCourseBundle:Course:search_category.html.twig", 53)->display($context);
        // line 54
        echo "                        </div>

                        ";
        // line 62
        echo "
                        ";
        // line 165
        echo "
                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">
                    <div class=\"sorting-wrappper\">

                        <div class=\"sorting-header\">

                            <h3 class=\"sorting-title uppercase\">
                                Profs dans la catégorie <span style=\"color:orangered\">";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "name", array()), "html", null, true);
        echo "</span>
                            </h3>
                            <p class=\"sorting-lead\"><strong>";
        // line 179
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array())), "html", null, true);
        echo "</strong> Grands
                                profs trouvés</p>
                        </div>

                        ";
        // line 209
        echo "
                    </div>

                    <div class=\"package-list-item-wrapper on-page-result-page\">
                        ";
        // line 213
        $this->loadTemplate("LGPCourseBundle:Course:prof_block.html.twig", "LGPCourseBundle:Course:search_category.html.twig", 213)->display($context);
        // line 214
        echo "                    </div>

                    ";
        // line 216
        $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "LGPCourseBundle:Course:search_category.html.twig", 216)->display($context);
        // line 217
        echo "
                </div>

            </div>

        </div>

    </div>
";
        
        $__internal_51c6c1b6c6d9cd1f0babcc2a23f1a251b4af3b0b037097c89e80121ca1957f69->leave($__internal_51c6c1b6c6d9cd1f0babcc2a23f1a251b4af3b0b037097c89e80121ca1957f69_prof);

    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Course:search_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 217,  168 => 216,  164 => 214,  162 => 213,  156 => 209,  149 => 179,  144 => 177,  130 => 165,  127 => 62,  123 => 54,  121 => 53,  87 => 22,  83 => 21,  79 => 20,  73 => 17,  63 => 10,  59 => 8,  53 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    {{ params.name }} - {{ parent() }}
{% endblock %}

{% block body %}

    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">
                    <h1 class=\"hero-title\">Profs dans la catégorie {{ params.name }} </h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\"{{ path('lgp_core_homepage') }} \">Accueil</a></li>
                        <li><a href=\"{{ path('lgp_course_find') }}\">Profs</a></li>
                        <li><span>{{ params.name }}</span></li>
                    </ol>
                </div>

            </div>

        </div>

    </div>
    <!-- end Page title -->


    <div class=\"content-wrapper\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-4 col-md-3\">

                    <aside class=\"sidebar with-filter\">

                        <div class=\"sidebar-search-wrapper bg-light-2\">

                            <div class=\"\">
                                <h4>Affinez votre recherche</h4>
                            </div>

                            <div class=\"sidebar-search-content\">
                            </div>

                            {% include 'LGPCourseBundle:Form:all_search.html.twig' %}
                        </div>

                        {#
                             BLOCK  AFFINEZ RECHERCHE
                          <div class=\"sidebar-header clearfix\">
                             <h4>Affinez</h4>
                             <a href=\"#\" class=\"sidebar-reset-filter\"><i class=\"fa fa-times\"></i> Annuler</a>
                         </div> #}

                        {#  <div class=\"sidebar-inner\">

                             <div class=\"sidebar-module\">
                                 <h6 class=\"sidebar-title\">Entrez un nom</h6>
                                 <div class=\"sidebar-module-inner\">
                                     <div class=\"sidebar-mini-search\">
                                         <div class=\"input-group\">
                                             <input type=\"text\" class=\"form-control\" placeholder=\"Qui ?...\">
                                             <span class=\"input-group-btn\">
                                                 <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                                             </span>
                                         </div>
                                     </div>
                                 </div>
                             </div>


                             <div class=\"clear\"></div>

                             <div class=\"sidebar-module\">
                                 <h6 class=\"sidebar-title\">Affinez par note</h6>
                                 <div class=\"sidebar-module-inner\">
                                     <input id=\"star_range\" />
                                 </div>
                             </div>

                             <div class=\"clear\"></div>

                             <div class=\"sidebar-module\">

                                 <h6 class=\"sidebar-title\">Affinez par quartier</h6>
                                 <div class=\"sidebar-module-inner\">
                                     <div class=\"checkbox-block\">
                                         <input id=\"ville-1\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"ville-1\">Akwa <span class=\"checkbox-count\">(90)</span></label>
                                     </div>
                                     <div class=\"checkbox-block\">
                                         <input id=\"ville-2\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"ville-2\">Bonapriso <span class=\"checkbox-count\">(25)</span></label>
                                     </div>
                                     <div class=\"checkbox-block\">
                                         <input id=\"ville-3\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"ville-3\">Logpom <span class=\"checkbox-count\">(15)</span></label>
                                     </div>
                                     <div class=\"ville-block\">
                                         <input id=\"property_type-4\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"property_type-4\">Bonamoussadi<span class=\"checkbox-count\">(20)</span></label>
                                     </div>
                                     <div class=\"more-less-wrapper\">

                                         <div id=\"property_type_more_less\" class=\"collapse\">
                                             <div class=\"more-less-inner\">

                                                 <div class=\"checkbox-block\">
                                                     <input id=\"ville-6\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
                                                     <label class=\"\" for=\"ville-6\">Bonaberi <span class=\"checkbox-count\">(25)</span></label>
                                                 </div>

                                             </div>
                                         </div>
                                         <button class=\"btn btn-more-less collapsed\" data-toggle=\"collapse\" data-target=\"#property_type_more_less\">Montrer plus</button>

                                     </div>

                                 </div>
                             </div>

                             <div class=\"clear\"></div>

                             <div class=\"sidebar-module\">
                                 <h6 class=\"sidebar-title\">Affinez par niveau</h6>
                                 <div class=\"sidebar-module-inner\">
                                     <div class=\"checkbox-block\">
                                         <input id=\"niveau-1\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"niveau-1\">Primaire</label>
                                     </div>
                                     <div class=\"checkbox-block\">
                                         <input id=\"niveau-2\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"niveau-2\">Collège</label>
                                     </div>
                                     <div class=\"checkbox-block\">
                                         <input id=\"niveau-3\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"niveau-3\">Seconde</label>
                                     </div>
                                     <div class=\"checkbox-block\">
                                         <input id=\"niveau-4\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"niveau-4\">Première</label>
                                     </div>
                                     <div class=\"checkbox-block\">
                                         <input id=\"niveau-5\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"niveau-5\">Terminale</label>
                                     </div>
                                     <div class=\"checkbox-block\">
                                         <input id=\"niveau-6\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
                                         <label class=\"\" for=\"niveau-6\">Supérieur</label>
                                     </div>

                                 </div>
                             </div>


                         </div> #}

                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">
                    <div class=\"sorting-wrappper\">

                        <div class=\"sorting-header\">

                            <h3 class=\"sorting-title uppercase\">
                                Profs dans la catégorie <span style=\"color:orangered\">{{ params.name }}</span>
                            </h3>
                            <p class=\"sorting-lead\"><strong>{{ params.matieres_profs | length }}</strong> Grands
                                profs trouvés</p>
                        </div>

                        {#   <div class=\"sorting-content\">

                              <div class=\"row\">

                                  <div class=\"col-sm-12 col-md-8\">
                                      <div class=\"sort-by-wrapper\">
                                          <label class=\"sorting-label\">Sort by: </label>
                                          <div class=\"sorting-middle-holder\">
                                              <ul class=\"sort-by\">
                                                  <li class=\"active up\"><a href=\"#\">Note <i class=\"fa fa-long-arrow-down\"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>

                                  <div class=\"col-sm-12 col-md-4\">
                                      <div class=\"sort-by-wrapper mt pull-right pull-left-sm mt-10-sm\">
                                          <label class=\"sorting-label\">Voir : </label>
                                          <div class=\"sorting-middle-holder\">
                                              <a href=\"#\" class=\"btn btn-sorting active\"><i class=\"fa fa-th-list\"></i></a>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div> #}

                    </div>

                    <div class=\"package-list-item-wrapper on-page-result-page\">
                        {% include('LGPCourseBundle:Course:prof_block.html.twig') %}
                    </div>

                    {% include('LGPCourseBundle:Pagination:pagination.html.twig') %}

                </div>

            </div>

        </div>

    </div>
{% endblock %}
";
    }
}
