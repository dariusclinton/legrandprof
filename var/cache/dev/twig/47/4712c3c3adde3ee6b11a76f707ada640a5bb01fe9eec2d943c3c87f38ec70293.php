<?php

/* LGPCourseBundle:Course:search_course_quarter.html.twig */
class __TwigTemplate_39ec90b1f979877ef90e2e0e179c62f40f998e2366fcf405d73408176ce411cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Course:search_course_quarter.html.twig", 1);
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
        $__internal_795ff57631e325cf783e521c5cd0fcbe34b11e0f411459ec78223a2fe27167fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795ff57631e325cf783e521c5cd0fcbe34b11e0f411459ec78223a2fe27167fb->enter($__internal_795ff57631e325cf783e521c5cd0fcbe34b11e0f411459ec78223a2fe27167fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Course:search_course_quarter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_795ff57631e325cf783e521c5cd0fcbe34b11e0f411459ec78223a2fe27167fb->leave($__internal_795ff57631e325cf783e521c5cd0fcbe34b11e0f411459ec78223a2fe27167fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d601512637f12329722d020d90253bbf95f9ff1af8c990be503a3056e696931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d601512637f12329722d020d90253bbf95f9ff1af8c990be503a3056e696931->enter($__internal_2d601512637f12329722d020d90253bbf95f9ff1af8c990be503a3056e696931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "intitule_cours", array()) . "-") . $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "quartier_name", array())) . "-") . $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array())), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2d601512637f12329722d020d90253bbf95f9ff1af8c990be503a3056e696931->leave($__internal_2d601512637f12329722d020d90253bbf95f9ff1af8c990be503a3056e696931_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6344c7032fee1f6af39772103ca31281c79fad650d196408410f56fdf147bb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6344c7032fee1f6af39772103ca31281c79fad650d196408410f56fdf147bb87->enter($__internal_6344c7032fee1f6af39772103ca31281c79fad650d196408410f56fdf147bb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
        echo "');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">
                    <h1 class=\"hero-title\">Grands Profs en ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "intitule_cours", array()), "html", null, true);
        echo " dans le quartier ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "quartier_name", array()), "html", null, true);
        echo " </h1>
                    <ol class=\"breadcrumb-list\">
                        <li><a href=\" ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_core_homepage");
        echo " \">Accueil</a></li>
                        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_find");
        echo "\">Profs</a></li>
                        <li><span> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "intitule_cours", array()), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "quartier_name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()), "html", null, true);
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
                                <h4>Affinez votre recherche </h4>
                            </div>

                            <div class=\"sidebar-search-content\">
                            </div>
                            ";
        // line 51
        $this->loadTemplate("LGPCourseBundle:Form:all_search.html.twig", "LGPCourseBundle:Course:search_course_quarter.html.twig", 51)->display($context);
        // line 52
        echo "                        </div>

                        ";
        // line 60
        echo "
                        ";
        // line 163
        echo "
                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">

                    <div class=\"sorting-wrappper\">

                        <div class=\"sorting-header\">
                            <h3 class=\"sorting-title uppercase\">
                                Des Grands profs en  <span style=\"color:orangered;\">";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "intitule_cours", array()), "html", null, true);
        echo "</span>
                                dans le quartier <span style=\"color:orangered;\">";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "quartier_name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "ville", array()), "html", null, true);
        echo "</span>
                            </h3>
                            <p class=\"sorting-lead\"><strong>";
        // line 178
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array())), "html", null, true);
        echo "</strong> Grand (s)
                                profs trouvés</p>
                        </div>

                        ";
        // line 209
        echo "
                    </div>

                    <div class=\"package-list-item-wrapper on-page-result-page\">
                        ";
        // line 213
        $this->loadTemplate("LGPCourseBundle:Course:prof_block.html.twig", "LGPCourseBundle:Course:search_course_quarter.html.twig", 213)->display($context);
        // line 214
        echo "                    </div>

                    ";
        // line 216
        $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "LGPCourseBundle:Course:search_course_quarter.html.twig", 216)->display($context);
        // line 217
        echo "                </div>

            </div>

        </div>

    </div>
";
        
        $__internal_6344c7032fee1f6af39772103ca31281c79fad650d196408410f56fdf147bb87->leave($__internal_6344c7032fee1f6af39772103ca31281c79fad650d196408410f56fdf147bb87_prof);

    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Course:search_course_quarter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 217,  178 => 216,  174 => 214,  172 => 213,  166 => 209,  159 => 178,  152 => 176,  148 => 175,  134 => 163,  131 => 60,  127 => 52,  125 => 51,  89 => 22,  85 => 21,  81 => 20,  74 => 18,  64 => 11,  59 => 8,  53 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    {{ params.intitule_cours~\"-\"~ params.quartier_name ~\"-\"~ params.ville }} - {{ parent() }}
{% endblock %}

{% block body %}


    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">
                    <h1 class=\"hero-title\">Grands Profs en {{ params.intitule_cours }} dans le quartier {{ params.quartier_name }} </h1>
                    <ol class=\"breadcrumb-list\">
                        <li><a href=\" {{ path('lgp_core_homepage') }} \">Accueil</a></li>
                        <li><a href=\"{{ path('lgp_course_find') }}\">Profs</a></li>
                        <li><span> {{ params.intitule_cours }} , {{ params.quartier_name }} - {{ params.ville }}</span></li>
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
                                <h4>Affinez votre recherche </h4>
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
                                Des Grands profs en  <span style=\"color:orangered;\">{{ params.intitule_cours }}</span>
                                dans le quartier <span style=\"color:orangered;\">{{ params.quartier_name }} - {{ params.ville }}</span>
                            </h3>
                            <p class=\"sorting-lead\"><strong>{{ params.matieres_profs | length }}</strong> Grand (s)
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
{% endblock %}";
    }
}
