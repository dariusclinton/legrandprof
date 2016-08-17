<?php

/* @LGPCourse/Course/search.html.twig */
class __TwigTemplate_1f1c4970ec399f31dacd58113d80ff21b932c2a8858c2c0bd278d0f315d6067b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPCourse/Course/search.html.twig", 2);
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
        $__internal_9e7916ccc0490d36005d80c2309c66d49d4f97f94769447513cfab039e43b865 = $this->env->getExtension("native_profiler");
        $__internal_9e7916ccc0490d36005d80c2309c66d49d4f97f94769447513cfab039e43b865->enter($__internal_9e7916ccc0490d36005d80c2309c66d49d4f97f94769447513cfab039e43b865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCourse/Course/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e7916ccc0490d36005d80c2309c66d49d4f97f94769447513cfab039e43b865->leave($__internal_9e7916ccc0490d36005d80c2309c66d49d4f97f94769447513cfab039e43b865_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_acd072c060fcb6748e6ace908a0fd2d81aaf16e410ffd48fe4e7d89e18fd452d = $this->env->getExtension("native_profiler");
        $__internal_acd072c060fcb6748e6ace908a0fd2d81aaf16e410ffd48fe4e7d89e18fd452d->enter($__internal_acd072c060fcb6748e6ace908a0fd2d81aaf16e410ffd48fe4e7d89e18fd452d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Profs de ";
        echo twig_escape_filter($this->env, (isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_acd072c060fcb6748e6ace908a0fd2d81aaf16e410ffd48fe4e7d89e18fd452d->leave($__internal_acd072c060fcb6748e6ace908a0fd2d81aaf16e410ffd48fe4e7d89e18fd452d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fb24ce00507d83b29ef86fa5f9f8c13b2c6a3ab63303009b6900c5c3341c223 = $this->env->getExtension("native_profiler");
        $__internal_9fb24ce00507d83b29ef86fa5f9f8c13b2c6a3ab63303009b6900c5c3341c223->enter($__internal_9fb24ce00507d83b29ef86fa5f9f8c13b2c6a3ab63303009b6900c5c3341c223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <!-- start end Page title -->
    <div class=\"page-title\" style=\"background-image:url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
        echo "');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                    <h1 class=\"hero-title\">Grands Profs en ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "html", null, true);
        echo " </h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\"index.html\">Accueil</a></li>
                        <li><a href=\"#\">Profs</a></li>
                        <li><a href=\"#\">Douala</a></li>
                        <li><span>";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "html", null, true);
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

                            <div class=\"sidebar-search-header\">
                                <h4>Recherchez </h4>
                            </div>

                            <div class=\"sidebar-search-content\">

                                <div class=\"form-group\">

                                    <select name=\"destination\" class=\"select2-multi form-control\" data-placeholder=\"Que voulez-vous apprendre ?\" multiple>
                                        <option value=\"\">Que voulez-vous apprendre ?</option>
                                        <option selected>";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "html", null, true);
        echo "</option>
                                        <option>Physiques</option>
                                        <option>Chimie</option>
                                        <option>Informatique</option>
                                    </select>

                                </div>

                                <div class=\"form-group\">

                                    <select name=\"month\" class=\"select2-multi form-control\" data-placeholder=\"Quelle ville ?\" multiple>
                                        <option value=\"\">Quelle ville ?</option>
                                        <option selected>Douala</option>
                                        <option>Yaounde</option>
                                        <option>Buea</option>
                                        <option>Limbe</option>
                                    </select>

                                </div>

                                <a href=\"#\" class=\"btn btn-primary btn-block\">Rechercher</a>

                            </div>

                        </div>

                        <div class=\"sidebar-header clearfix\">
                            <h4>Affinez</h4>
                            <a href=\"#\" class=\"sidebar-reset-filter\"><i class=\"fa fa-times\"></i> Annuler</a>
                        </div>

                        <div class=\"sidebar-inner\">

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


                        </div>

                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">

                    <div class=\"sorting-wrappper\">

                        <div class=\"sorting-header\">
                            <h3 class=\"sorting-title uppercase\">Des Grands profs en ";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "html", null, true);
        echo "</h3>
                            <p class=\"sorting-lead\">";
        // line 204
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["matieres_profs"]) ? $context["matieres_profs"] : $this->getContext($context, "matieres_profs"))), "html", null, true);
        echo " Grands profs trouvés</p>
                        </div>

                        ";
        // line 234
        echo "
                    </div>

                    <div class=\"package-list-item-wrapper on-page-result-page\">

                        ";
        // line 239
        if ((twig_length_filter($this->env, (isset($context["matieres_profs"]) ? $context["matieres_profs"] : $this->getContext($context, "matieres_profs"))) != 0)) {
            echo " 

                            ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matieres_profs"]) ? $context["matieres_profs"] : $this->getContext($context, "matieres_profs")));
            foreach ($context['_seq'] as $context["_key"] => $context["enseigne"]) {
                // line 242
                echo "                                <div class=\"package-list-item clearfix\">
                                    <div class=\"image\">
                                        ";
                // line 244
                if ( !$this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "photo", array())) {
                    // line 245
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                    echo "\" alt=\"Tour Package\" />

                                            ";
                } else {
                    // line 248
                    echo "                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "photo", array())), "html", null, true);
                    echo "\" alt=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "nom", array()), "html", null, true);
                    echo " \" />
                                        ";
                }
                // line 250
                echo "                                    </div>

                                    <div class=\"content\">
                                        <h5>";
                // line 253
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "prenoms", array()) . "  ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "nom", array())), "html", null, true);
                echo " <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button></h5>
                                        <div class=\"row gap-10\">
                                            <div class=\"col-sm-12 col-md-9\">

                                                <p class=\"line18\"> ";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "presentation", array()), "html", null, true);
                echo " </p>
                                                <br>
                                                <ul class=\"list-info\">
                                                    <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">Position: </span> ";
                // line 260
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "quartier", array()), "html", null, true);
                echo "</li>

                                                    <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Compétences :</span> Mathématiques, Physiques,...</li>
                                                </ul>

                                            </div>
                                            <div class=\"col-sm-12 col-md-3 text-right text-left-sm\">

                                                <div class=\"rating-wrapper\">
                                                    <div class=\"raty-wrapper\">
                                                        <div><img alt=\"1\" src=\"";
                // line 270
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                echo "\" title=\"good\"><img alt=\"2\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                echo "\" title=\"good\"><img alt=\"3\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                echo "\" title=\"good\"><img alt=\"4\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                echo "\" title=\"good\"><img alt=\"5\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                echo "\" title=\"good\"><input name=\"score\" type=\"hidden\" value=\"4\" readonly=\"\"></div>
                                                        <span> / 7 avis</span>
                                                    </div>
                                                </div>

                                                <div class=\"price\">";
                // line 275
                echo twig_escape_filter($this->env, $this->getAttribute($context["enseigne"], "prix", array()), "html", null, true);
                echo " Fcfa</div>

                                                <a href=\"profil.html\" class=\"btn btn-primary btn-sm\">Voir Profil</a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseigne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "
                        ";
        }
        // line 287
        echo "
                      ";
        // line 363
        echo "                    </div>

                    <div class=\"pager-wrappper clearfix\">

                        <div class=\"pager-innner\">

                            <div class=\"flex-row flex-align-middle\">

                                <div class=\"flex-column flex-sm-12\">
                                    Resultats de 1 à 4 de 175 
                                </div>

                                <div class=\"flex-column flex-sm-12\">
                                    <nav class=\"pager-right\">
                                        <ul class=\"pagination\">
                                            <li>
                                                <a href=\"#\" aria-label=\"Previous\">
                                                    <span aria-hidden=\"true\">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class=\"active\"><a href=\"#\">1</a></li>
                                            <li><a href=\"#\">2</a></li>
                                            <li><a href=\"#\">3</a></li>
                                            <li><span>...</span></li>
                                            <li><a href=\"#\">11</a></li>
                                            <li><a href=\"#\">12</a></li>
                                            <li><a href=\"#\">13</a></li>
                                            <li>
                                                <a href=\"#\" aria-label=\"Next\">
                                                    <span aria-hidden=\"true\">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
";
        
        $__internal_9fb24ce00507d83b29ef86fa5f9f8c13b2c6a3ab63303009b6900c5c3341c223->leave($__internal_9fb24ce00507d83b29ef86fa5f9f8c13b2c6a3ab63303009b6900c5c3341c223_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCourse/Course/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 363,  383 => 287,  379 => 285,  363 => 275,  347 => 270,  332 => 260,  326 => 257,  319 => 253,  314 => 250,  306 => 248,  299 => 245,  297 => 244,  293 => 242,  289 => 241,  284 => 239,  277 => 234,  271 => 204,  267 => 203,  120 => 59,  83 => 25,  74 => 19,  63 => 11,  59 => 9,  53 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Profs de {{ cours }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <!-- start end Page title -->*/
/*     <div class="page-title" style="background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');">*/
/* */
/*         <div class="container">*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">*/
/* */
/*                     <h1 class="hero-title">Grands Profs en {{ cours }} </h1>*/
/* */
/*                     <ol class="breadcrumb-list">*/
/*                         <li><a href="index.html">Accueil</a></li>*/
/*                         <li><a href="#">Profs</a></li>*/
/*                         <li><a href="#">Douala</a></li>*/
/*                         <li><span>{{ cours }}</span></li>*/
/*                     </ol>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/*     <!-- end Page title -->*/
/* */
/*     <div class="content-wrapper">*/
/* */
/*         <div class="container">*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-sm-4 col-md-3">*/
/* */
/*                     <aside class="sidebar with-filter">*/
/* */
/*                         <div class="sidebar-search-wrapper bg-light-2">*/
/* */
/*                             <div class="sidebar-search-header">*/
/*                                 <h4>Recherchez </h4>*/
/*                             </div>*/
/* */
/*                             <div class="sidebar-search-content">*/
/* */
/*                                 <div class="form-group">*/
/* */
/*                                     <select name="destination" class="select2-multi form-control" data-placeholder="Que voulez-vous apprendre ?" multiple>*/
/*                                         <option value="">Que voulez-vous apprendre ?</option>*/
/*                                         <option selected>{{ cours }}</option>*/
/*                                         <option>Physiques</option>*/
/*                                         <option>Chimie</option>*/
/*                                         <option>Informatique</option>*/
/*                                     </select>*/
/* */
/*                                 </div>*/
/* */
/*                                 <div class="form-group">*/
/* */
/*                                     <select name="month" class="select2-multi form-control" data-placeholder="Quelle ville ?" multiple>*/
/*                                         <option value="">Quelle ville ?</option>*/
/*                                         <option selected>Douala</option>*/
/*                                         <option>Yaounde</option>*/
/*                                         <option>Buea</option>*/
/*                                         <option>Limbe</option>*/
/*                                     </select>*/
/* */
/*                                 </div>*/
/* */
/*                                 <a href="#" class="btn btn-primary btn-block">Rechercher</a>*/
/* */
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="sidebar-header clearfix">*/
/*                             <h4>Affinez</h4>*/
/*                             <a href="#" class="sidebar-reset-filter"><i class="fa fa-times"></i> Annuler</a>*/
/*                         </div>*/
/* */
/*                         <div class="sidebar-inner">*/
/* */
/*                             <div class="sidebar-module">*/
/*                                 <h6 class="sidebar-title">Entrez un nom</h6>*/
/*                                 <div class="sidebar-module-inner">*/
/*                                     <div class="sidebar-mini-search">*/
/*                                         <div class="input-group">*/
/*                                             <input type="text" class="form-control" placeholder="Qui ?...">*/
/*                                             <span class="input-group-btn">*/
/*                                                 <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>*/
/*                                             </span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/* */
/*                             <div class="clear"></div>*/
/* */
/*                             <div class="sidebar-module">*/
/*                                 <h6 class="sidebar-title">Affinez par note</h6>*/
/*                                 <div class="sidebar-module-inner">*/
/*                                     <input id="star_range" />*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="clear"></div>*/
/* */
/*                             <div class="sidebar-module">*/
/* */
/*                                 <h6 class="sidebar-title">Affinez par quartier</h6>*/
/*                                 <div class="sidebar-module-inner">*/
/*                                     <div class="checkbox-block">*/
/*                                         <input id="ville-1" name="ville" type="checkbox" class="checkbox"/>*/
/*                                         <label class="" for="ville-1">Akwa <span class="checkbox-count">(90)</span></label>*/
/*                                     </div>*/
/*                                     <div class="checkbox-block">*/
/*                                         <input id="ville-2" name="ville" type="checkbox" class="checkbox"/>*/
/*                                         <label class="" for="ville-2">Bonapriso <span class="checkbox-count">(25)</span></label>*/
/*                                     </div>*/
/*                                     <div class="checkbox-block">*/
/*                                         <input id="ville-3" name="ville" type="checkbox" class="checkbox"/>*/
/*                                         <label class="" for="ville-3">Logpom <span class="checkbox-count">(15)</span></label>*/
/*                                     </div>*/
/*                                     <div class="ville-block">*/
/*                                         <input id="property_type-4" name="ville" type="checkbox" class="checkbox"/>*/
/*                                         <label class="" for="property_type-4">Bonamoussadi<span class="checkbox-count">(20)</span></label>*/
/*                                     </div>*/
/*                                     <div class="more-less-wrapper">*/
/* */
/*                                         <div id="property_type_more_less" class="collapse"> */
/*                                             <div class="more-less-inner">*/
/* */
/*                                                 <div class="checkbox-block">*/
/*                                                     <input id="ville-6" name="ville" type="checkbox" class="checkbox"/>*/
/*                                                     <label class="" for="ville-6">Bonaberi <span class="checkbox-count">(25)</span></label>*/
/*                                                 </div>*/
/* */
/*                                             </div>*/
/*                                         </div>*/
/*                                         <button class="btn btn-more-less collapsed" data-toggle="collapse" data-target="#property_type_more_less">Montrer plus</button>*/
/* */
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="clear"></div>*/
/* */
/*                             <div class="sidebar-module">*/
/*                                 <h6 class="sidebar-title">Affinez par niveau</h6>*/
/*                                 <div class="sidebar-module-inner">*/
/*                                     <div class="checkbox-block">*/
/*                                         <input id="niveau-1" name="niveau" type="checkbox" class="checkbox"/>*/
/*                                         <label class="" for="niveau-1">Primaire</label>*/
/*                                     </div>*/
/*                                     <div class="checkbox-block">*/
/*                                         <input id="niveau-2" name="niveau" type="checkbox" class="checkbox"/>*/
/*                                         <label class="" for="niveau-2">Collège</label>*/
/*                                     </div>*/
/*                                     <div class="checkbox-block">*/
/*                                         <input id="niveau-3" name="niveau" type="checkbox" class="checkbox"/>*/
/*                                         <label class="" for="niveau-3">Seconde</label>*/
/*                                     </div>*/
/*                                     <div class="checkbox-block">*/
/*                                         <input id="niveau-4" name="niveau" type="checkbox" class="checkbox"/>*/
/*                                         <label class="" for="niveau-4">Première</label>*/
/*                                     </div>*/
/*                                     <div class="checkbox-block">*/
/*                                         <input id="niveau-5" name="niveau" type="checkbox" class="checkbox"/>*/
/*                                         <label class="" for="niveau-5">Terminale</label>*/
/*                                     </div>*/
/*                                     <div class="checkbox-block">*/
/*                                         <input id="niveau-6" name="niveau" type="checkbox" class="checkbox"/>*/
/*                                         <label class="" for="niveau-6">Supérieur</label>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/* */
/*                     </aside>*/
/* */
/* */
/*                 </div>*/
/* */
/*                 <div class="col-sm-8 col-md-9">*/
/* */
/*                     <div class="sorting-wrappper">*/
/* */
/*                         <div class="sorting-header">*/
/*                             <h3 class="sorting-title uppercase">Des Grands profs en {{ cours }}</h3>*/
/*                             <p class="sorting-lead">{{matieres_profs | length}} Grands profs trouvés</p>*/
/*                         </div>*/
/* */
/*                         {#   <div class="sorting-content">*/
/*   */
/*                               <div class="row">*/
/*   */
/*                                   <div class="col-sm-12 col-md-8">*/
/*                                       <div class="sort-by-wrapper">*/
/*                                           <label class="sorting-label">Sort by: </label> */
/*                                           <div class="sorting-middle-holder">*/
/*                                               <ul class="sort-by">*/
/*                                                   <li class="active up"><a href="#">Note <i class="fa fa-long-arrow-down"></i></a></li>*/
/*                                               </ul>*/
/*                                           </div>*/
/*                                       </div>*/
/*                                   </div>*/
/*   */
/*                                   <div class="col-sm-12 col-md-4">*/
/*                                       <div class="sort-by-wrapper mt pull-right pull-left-sm mt-10-sm">*/
/*                                           <label class="sorting-label">Voir : </label> */
/*                                           <div class="sorting-middle-holder">*/
/*                                               <a href="#" class="btn btn-sorting active"><i class="fa fa-th-list"></i></a>*/
/*                                           </div>*/
/*                                       </div>*/
/*                                   </div>*/
/*   */
/*                               </div>*/
/*   */
/*                           </div> #}*/
/* */
/*                     </div>*/
/* */
/*                     <div class="package-list-item-wrapper on-page-result-page">*/
/* */
/*                         {% if matieres_profs | length != 0 %} */
/* */
/*                             {% for enseigne in matieres_profs %}*/
/*                                 <div class="package-list-item clearfix">*/
/*                                     <div class="image">*/
/*                                         {% if not enseigne.prof.user.photo %}*/
/*                                             <img src="{{ asset('uploads/profils/default.jpg') }}" alt="Tour Package" />*/
/* */
/*                                             {% else %}*/
/*                                                 <img src="{{ asset(enseigne.prof.user.photo) }}" alt=" {{enseigne.prof.user.nom}} " />*/
/*                                         {% endif %}*/
/*                                     </div>*/
/* */
/*                                     <div class="content">*/
/*                                         <h5>{{enseigne.prof.user.prenoms ~"  "~ enseigne.prof.user.nom}} <button class="btn"><i class="fa fa-heart-o"></i></button></h5>*/
/*                                         <div class="row gap-10">*/
/*                                             <div class="col-sm-12 col-md-9">*/
/* */
/*                                                 <p class="line18"> {{enseigne.prof.presentation}} </p>*/
/*                                                 <br>*/
/*                                                 <ul class="list-info">*/
/*                                                     <li><span class="icon"><i class="fa fa-map-marker"></i></span> <span class="font600">Position: </span> {{enseigne.prof.ville}} - {{enseigne.prof.quartier}}</li>*/
/* */
/*                                                     <li><span class="icon"><i class="fa fa-book"></i></span> <span class="font600">Compétences :</span> Mathématiques, Physiques,...</li>*/
/*                                                 </ul>*/
/* */
/*                                             </div>*/
/*                                             <div class="col-sm-12 col-md-3 text-right text-left-sm">*/
/* */
/*                                                 <div class="rating-wrapper">*/
/*                                                     <div class="raty-wrapper">*/
/*                                                         <div><img alt="1" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="2" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="3" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="4" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="5" src="{{ asset('images/raty/star-off-sm.png') }}" title="good"><input name="score" type="hidden" value="4" readonly=""></div>*/
/*                                                         <span> / 7 avis</span>*/
/*                                                     </div>*/
/*                                                 </div>*/
/* */
/*                                                 <div class="price">{{enseigne.prix}} Fcfa</div>*/
/* */
/*                                                 <a href="profil.html" class="btn btn-primary btn-sm">Voir Profil</a>*/
/* */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                             {% endfor %}*/
/* */
/*                         {% endif %}*/
/* */
/*                       {#   <div class="package-list-item clearfix">*/
/*                             <div class="image">*/
/*                                 <img src="{{ asset('images/man/01.jpg') }}" alt="Tour Package" />*/
/*                             </div>*/
/* */
/*                             <div class="content">*/
/*                                 <h5>Antony Robert <button class="btn"><i class="fa fa-heart-o"></i></button></h5>*/
/*                                 <div class="row gap-10">*/
/*                                     <div class="col-sm-12 col-md-9">*/
/* */
/*                                         <p class="line18">Je suis un veritable enseignant qui aimerais vraiment interagir avec des etudiants et eleves...</p>*/
/*                                         <br>*/
/*                                         <ul class="list-info">*/
/*                                             <li><span class="icon"><i class="fa fa-map-marker"></i></span> <span class="font600">Position: </span> Douala - Akwa</li>*/
/* */
/*                                             <li><span class="icon"><i class="fa fa-book"></i></span> <span class="font600">Compétences :</span> Mathématiques, Physiques,...</li>*/
/*                                         </ul>*/
/* */
/*                                     </div>*/
/*                                     <div class="col-sm-12 col-md-3 text-right text-left-sm">*/
/* */
/*                                         <div class="rating-wrapper">*/
/*                                             <div class="raty-wrapper">*/
/*                                                 <div><img alt="1" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="2" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="3" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="4" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="5" src="{{ asset('images/raty/star-off-sm.png') }}" title="good"><input name="score" type="hidden" value="4" readonly=""></div>*/
/*                                                 <span> / 7 avis</span>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <div class="price">80.000 Fcfa</div>*/
/* */
/*                                         <a href="profil.html" class="btn btn-primary btn-sm">Voir Profil</a>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="package-list-item clearfix">*/
/*                             <div class="image">*/
/*                                 <img src="{{ asset('images/man/03.jpg') }}" alt="Tour Package" />*/
/*                             </div>*/
/* */
/*                             <div class="content">*/
/*                                 <h5>Antony Robert <button class="btn"><i class="fa fa-heart-o"></i></button></h5>*/
/*                                 <div class="row gap-10">*/
/*                                     <div class="col-sm-12 col-md-9">*/
/* */
/*                                         <p class="line18">Je suis un veritable enseignant qui aimerais vraiment interagir avec des etudiants et eleves...</p>*/
/*                                         <br>*/
/*                                         <ul class="list-info">*/
/*                                             <li><span class="icon"><i class="fa fa-map-marker"></i></span> <span class="font600">Position: </span> Douala - Akwa</li>*/
/* */
/*                                             <li><span class="icon"><i class="fa fa-book"></i></span> <span class="font600">Compétences :</span> Mathématiques, Physiques,...</li>*/
/*                                         </ul>*/
/* */
/*                                     </div>*/
/*                                     <div class="col-sm-12 col-md-3 text-right text-left-sm">*/
/* */
/*                                         <div class="rating-wrapper">*/
/*                                             <div class="raty-wrapper">*/
/*                                                 <div><img alt="1" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="2" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="3" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="4" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="5" src="{{ asset('images/raty/star-off-sm.png') }}" title="good"><input name="score" type="hidden" value="4" readonly=""></div>*/
/*                                                 <span> / 7 avis</span>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <div class="price">80.000 Fcfa</div>*/
/* */
/*                                         <a href="profil.html" class="btn btn-primary btn-sm">Voir Profil</a>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*  #}*/
/*                     </div>*/
/* */
/*                     <div class="pager-wrappper clearfix">*/
/* */
/*                         <div class="pager-innner">*/
/* */
/*                             <div class="flex-row flex-align-middle">*/
/* */
/*                                 <div class="flex-column flex-sm-12">*/
/*                                     Resultats de 1 à 4 de 175 */
/*                                 </div>*/
/* */
/*                                 <div class="flex-column flex-sm-12">*/
/*                                     <nav class="pager-right">*/
/*                                         <ul class="pagination">*/
/*                                             <li>*/
/*                                                 <a href="#" aria-label="Previous">*/
/*                                                     <span aria-hidden="true">&laquo;</span>*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li class="active"><a href="#">1</a></li>*/
/*                                             <li><a href="#">2</a></li>*/
/*                                             <li><a href="#">3</a></li>*/
/*                                             <li><span>...</span></li>*/
/*                                             <li><a href="#">11</a></li>*/
/*                                             <li><a href="#">12</a></li>*/
/*                                             <li><a href="#">13</a></li>*/
/*                                             <li>*/
/*                                                 <a href="#" aria-label="Next">*/
/*                                                     <span aria-hidden="true">&raquo;</span>*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                         </ul>*/
/*                                     </nav>*/
/*                                 </div>*/
/* */
/*                             </div>*/
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
/* {% endblock %}*/
