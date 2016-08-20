<?php

/* @LGPCourse/Course/search.html.twig */
class __TwigTemplate_451a25a6b809a45dd55ec1a2a3680c84415baccfb0d473789e5f91ec8f65f3e1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    Profs de ";
        echo twig_escape_filter($this->env, (isset($context["cours"]) ? $context["cours"] : null), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, (isset($context["cours"]) ? $context["cours"] : null), "html", null, true);
        echo " </h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\"index.html\">Accueil</a></li>
                        <li><a href=\"#\">Profs</a></li>
                        <li><a href=\"#\">Douala</a></li>
                        <li><span>";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["cours"]) ? $context["cours"] : null), "html", null, true);
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

                                <div class=\"form-group\">

                                    <select name=\"destination\" class=\"select2-multi form-control\" data-placeholder=\"Que voulez-vous apprendre ?\" multiple>
                                        <option value=\"\">Que voulez-vous apprendre ?</option>
                                        <option selected>";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["cours"]) ? $context["cours"] : null), "html", null, true);
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

                       ";
        // line 91
        echo "
                       ";
        // line 194
        echo "
                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">

                    <div class=\"sorting-wrappper\">

                        <div class=\"sorting-header\">
                            <h3 class=\"sorting-title uppercase\">Des Grands profs en ";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["cours"]) ? $context["cours"] : null), "html", null, true);
        echo "</h3>
                            <p class=\"sorting-lead\">";
        // line 206
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["matieres_profs"]) ? $context["matieres_profs"] : null)), "html", null, true);
        echo " Grands profs trouvés</p>
                        </div>

                        ";
        // line 236
        echo "
                    </div>

                    <div class=\"package-list-item-wrapper on-page-result-page\">

                        ";
        // line 241
        if ((twig_length_filter($this->env, (isset($context["matieres_profs"]) ? $context["matieres_profs"] : null)) != 0)) {
            echo " 

                            ";
            // line 243
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matieres_profs"]) ? $context["matieres_profs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["enseigne"]) {
                // line 244
                echo "                                <div class=\"package-list-item clearfix\">
                                    <div class=\"image\">
                                        ";
                // line 246
                if ( !$this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "photo", array())) {
                    // line 247
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                    echo "\" alt=\"Tour Package\" />

                                        ";
                } else {
                    // line 250
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "photo", array())), "html", null, true);
                    echo "\" alt=\" ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "nom", array()), "html", null, true);
                    echo " \" />
                                        ";
                }
                // line 252
                echo "                                    </div>

                                    <div class=\"content\">
                                        <h5>";
                // line 255
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "prenoms", array()) . "  ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "user", array()), "nom", array()))), "html", null, true);
                echo " <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button></h5>
                                        <div class=\"row gap-10\">
                                            <div class=\"col-sm-12 col-md-9\">

                                                <p class=\"line18\"> ";
                // line 259
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "presentation", array()), "html", null, true);
                echo " </p>
                                                <br>
                                                <ul class=\"list-info\">
                                                    <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">Position: </span> ";
                // line 262
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array())), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "quartier", array())), "html", null, true);
                echo "</li>

                                                    <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Cours :</span> 
                                                            ";
                // line 265
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["enseigneRep"]) ? $context["enseigneRep"] : null), "getCoursByProf", array(0 => $this->getAttribute($context["enseigne"], "prof", array())), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["ens_cours"]) {
                    // line 266
                    echo "                                                                ";
                    if (($this->getAttribute($context["loop"], "index", array()) != $this->getAttribute($context["loop"], "last", array()))) {
                        // line 267
                        echo "                                                                    <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("cours" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()))), "html", null, true);
                        echo " \" title=\"\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a> -
                                                                    ";
                    } else {
                        // line 269
                        echo "                                                                        <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_course_find_prof", array("cours" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()))), "html", null, true);
                        echo " \" title=\"\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a>
                                                                ";
                    }
                    // line 271
                    echo "                                                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens_cours'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class=\"col-sm-12 col-md-3 text-right text-left-sm\">

                                                <div class=\"rating-wrapper\">
                                                    <div class=\"raty-wrapper\">
                                                        <div><img alt=\"1\" src=\"";
                // line 280
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
                // line 285
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
            // line 295
            echo "


                            ";
            // line 373
            echo "                        </div>

                        ";
            // line 375
            $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "@LGPCourse/Course/search.html.twig", 375)->display($context);
            // line 376
            echo "
                    ";
        }
        // line 378
        echo "
                </div>

            </div>

        </div>

    </div>
";
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
        return array (  330 => 378,  326 => 376,  324 => 375,  320 => 373,  315 => 295,  299 => 285,  283 => 280,  259 => 271,  251 => 269,  243 => 267,  240 => 266,  223 => 265,  215 => 262,  209 => 259,  202 => 255,  197 => 252,  189 => 250,  182 => 247,  180 => 246,  176 => 244,  172 => 243,  167 => 241,  160 => 236,  154 => 206,  150 => 205,  137 => 194,  134 => 91,  105 => 59,  68 => 25,  59 => 19,  48 => 11,  44 => 9,  41 => 8,  32 => 5,  29 => 4,  11 => 2,);
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
/*                             <div class="">*/
/*                                 <h4>Affinez votre recherche </h4>*/
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
/*                        {#*/
/*                             BLOCK  AFFINEZ RECHERCHE*/
/*                          <div class="sidebar-header clearfix">*/
/*                             <h4>Affinez</h4>*/
/*                             <a href="#" class="sidebar-reset-filter"><i class="fa fa-times"></i> Annuler</a>*/
/*                         </div> #}*/
/* */
/*                        {#  <div class="sidebar-inner">*/
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
/*                         </div> #}*/
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
/*                                         {% else %}*/
/*                                             <img src="{{ asset(enseigne.prof.user.photo) }}" alt=" {{enseigne.prof.user.nom}} " />*/
/*                                         {% endif %}*/
/*                                     </div>*/
/* */
/*                                     <div class="content">*/
/*                                         <h5>{{enseigne.prof.user.prenoms ~"  "~ enseigne.prof.user.nom | upper}} <button class="btn"><i class="fa fa-heart-o"></i></button></h5>*/
/*                                         <div class="row gap-10">*/
/*                                             <div class="col-sm-12 col-md-9">*/
/* */
/*                                                 <p class="line18"> {{enseigne.prof.presentation}} </p>*/
/*                                                 <br>*/
/*                                                 <ul class="list-info">*/
/*                                                     <li><span class="icon"><i class="fa fa-map-marker"></i></span> <span class="font600">Position: </span> {{enseigne.prof.ville | upper}} - {{enseigne.prof.quartier | lower}}</li>*/
/* */
/*                                                     <li><span class="icon"><i class="fa fa-book"></i></span> <span class="font600">Cours :</span> */
/*                                                             {% for ens_cours in enseigneRep.getCoursByProf(enseigne.prof) %}*/
/*                                                                 {% if loop.index != loop.last %}*/
/*                                                                     <a href=" {{path('lgp_course_find_prof',{'cours':ens_cours.cours.intitule})}} " title="">{{ens_cours.cours.intitule}}</a> -*/
/*                                                                     {% else %}*/
/*                                                                         <a href=" {{path('lgp_course_find_prof',{'cours':ens_cours.cours.intitule})}} " title="">{{ens_cours.cours.intitule}}</a>*/
/*                                                                 {% endif %}*/
/*                                                             {% endfor %} */
/*                                                     </li>*/
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
/* */
/* */
/*                             {#   <div class="package-list-item clearfix">*/
/*                                   <div class="image">*/
/*                                       <img src="{{ asset('images/man/01.jpg') }}" alt="Tour Package" />*/
/*                                   </div>*/
/*       */
/*                                   <div class="content">*/
/*                                       <h5>Antony Robert <button class="btn"><i class="fa fa-heart-o"></i></button></h5>*/
/*                                       <div class="row gap-10">*/
/*                                           <div class="col-sm-12 col-md-9">*/
/*       */
/*                                               <p class="line18">Je suis un veritable enseignant qui aimerais vraiment interagir avec des etudiants et eleves...</p>*/
/*                                               <br>*/
/*                                               <ul class="list-info">*/
/*                                                   <li><span class="icon"><i class="fa fa-map-marker"></i></span> <span class="font600">Position: </span> Douala - Akwa</li>*/
/*       */
/*                                                   <li><span class="icon"><i class="fa fa-book"></i></span> <span class="font600">Compétences :</span> Mathématiques, Physiques,...</li>*/
/*                                               </ul>*/
/*       */
/*                                           </div>*/
/*                                           <div class="col-sm-12 col-md-3 text-right text-left-sm">*/
/*       */
/*                                               <div class="rating-wrapper">*/
/*                                                   <div class="raty-wrapper">*/
/*                                                       <div><img alt="1" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="2" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="3" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="4" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="5" src="{{ asset('images/raty/star-off-sm.png') }}" title="good"><input name="score" type="hidden" value="4" readonly=""></div>*/
/*                                                       <span> / 7 avis</span>*/
/*                                                   </div>*/
/*                                               </div>*/
/*       */
/*                                               <div class="price">80.000 Fcfa</div>*/
/*       */
/*                                               <a href="profil.html" class="btn btn-primary btn-sm">Voir Profil</a>*/
/*       */
/*                                           </div>*/
/*                                       </div>*/
/*                                   </div>*/
/*       */
/*                               </div>*/
/*                               <div class="package-list-item clearfix">*/
/*                                   <div class="image">*/
/*                                       <img src="{{ asset('images/man/03.jpg') }}" alt="Tour Package" />*/
/*                                   </div>*/
/*       */
/*                                   <div class="content">*/
/*                                       <h5>Antony Robert <button class="btn"><i class="fa fa-heart-o"></i></button></h5>*/
/*                                       <div class="row gap-10">*/
/*                                           <div class="col-sm-12 col-md-9">*/
/*       */
/*                                               <p class="line18">Je suis un veritable enseignant qui aimerais vraiment interagir avec des etudiants et eleves...</p>*/
/*                                               <br>*/
/*                                               <ul class="list-info">*/
/*                                                   <li><span class="icon"><i class="fa fa-map-marker"></i></span> <span class="font600">Position: </span> Douala - Akwa</li>*/
/*       */
/*                                                   <li><span class="icon"><i class="fa fa-book"></i></span> <span class="font600">Compétences :</span> Mathématiques, Physiques,...</li>*/
/*                                               </ul>*/
/*       */
/*                                           </div>*/
/*                                           <div class="col-sm-12 col-md-3 text-right text-left-sm">*/
/*       */
/*                                               <div class="rating-wrapper">*/
/*                                                   <div class="raty-wrapper">*/
/*                                                       <div><img alt="1" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="2" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="3" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="4" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="5" src="{{ asset('images/raty/star-off-sm.png') }}" title="good"><input name="score" type="hidden" value="4" readonly=""></div>*/
/*                                                       <span> / 7 avis</span>*/
/*                                                   </div>*/
/*                                               </div>*/
/*       */
/*                                               <div class="price">80.000 Fcfa</div>*/
/*       */
/*                                               <a href="profil.html" class="btn btn-primary btn-sm">Voir Profil</a>*/
/*       */
/*                                           </div>*/
/*                                       </div>*/
/*                                   </div>*/
/*       */
/*                               </div>*/
/*        #}*/
/*                         </div>*/
/* */
/*                         {% include('LGPCourseBundle:Pagination:pagination.html.twig') %}*/
/* */
/*                     {% endif %}*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
