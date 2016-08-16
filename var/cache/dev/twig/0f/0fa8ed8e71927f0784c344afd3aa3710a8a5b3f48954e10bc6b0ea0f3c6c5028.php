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
        $__internal_6324ec4f78793b58e0f63835b228cfd706ceba102fc86924017516a45d1fe96b = $this->env->getExtension("native_profiler");
        $__internal_6324ec4f78793b58e0f63835b228cfd706ceba102fc86924017516a45d1fe96b->enter($__internal_6324ec4f78793b58e0f63835b228cfd706ceba102fc86924017516a45d1fe96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCourse/Course/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6324ec4f78793b58e0f63835b228cfd706ceba102fc86924017516a45d1fe96b->leave($__internal_6324ec4f78793b58e0f63835b228cfd706ceba102fc86924017516a45d1fe96b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e223494af4b838d87f6fce7ac4b82583a60a7edcafc6931570cac6b38773f256 = $this->env->getExtension("native_profiler");
        $__internal_e223494af4b838d87f6fce7ac4b82583a60a7edcafc6931570cac6b38773f256->enter($__internal_e223494af4b838d87f6fce7ac4b82583a60a7edcafc6931570cac6b38773f256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Profs de ";
        echo twig_escape_filter($this->env, (isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e223494af4b838d87f6fce7ac4b82583a60a7edcafc6931570cac6b38773f256->leave($__internal_e223494af4b838d87f6fce7ac4b82583a60a7edcafc6931570cac6b38773f256_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae34fd3b7a6f7daa61c111a7da1a48b7268b5fba69203cf1401ea836a30c63a0 = $this->env->getExtension("native_profiler");
        $__internal_ae34fd3b7a6f7daa61c111a7da1a48b7268b5fba69203cf1401ea836a30c63a0->enter($__internal_ae34fd3b7a6f7daa61c111a7da1a48b7268b5fba69203cf1401ea836a30c63a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "html", null, true);
        echo "</h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\"index.html\">Accueil</a></li>
                        <li><a href=\"#\">Profs</a></li>
                        <li><a href=\"#\">Douala</a></li>
                        <li><span>";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "html", null, true);
        echo "</h3>
                            <p class=\"sorting-lead\">175 Grands profs trouvés</p>
                        </div>

                        <div class=\"sorting-content\">

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

                        </div>

                    </div>

                    <div class=\"package-list-item-wrapper on-page-result-page\">

                        <div class=\"package-list-item clearfix\">
                            <div class=\"image\">
                                <img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/man/01.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
                            </div>

                            <div class=\"content\">
                                <h5>Antony Robert <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button></h5>
                                <div class=\"row gap-10\">
                                    <div class=\"col-sm-12 col-md-9\">

                                        <p class=\"line18\">Je suis un veritable enseignant qui aimerais vraiment interagir avec des etudiants et eleves...</p>
                                        <br>
                                        <ul class=\"list-info\">
                                            <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">Position: </span> Douala - Akwa</li>

                                            <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Compétences :</span> Mathématiques, Physiques,...</li>
                                        </ul>

                                    </div>
                                    <div class=\"col-sm-12 col-md-3 text-right text-left-sm\">

                                        <div class=\"rating-wrapper\">
                                            <div class=\"raty-wrapper\">
                                                <div><img alt=\"1\" src=\"";
        // line 262
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

                                        <div class=\"price\">80.000 Fcfa</div>

                                        <a href=\"profil.html\" class=\"btn btn-primary btn-sm\">Voir Profil</a>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class=\"package-list-item clearfix\">
                            <div class=\"image\">
                                <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/man/03.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
                            </div>

                            <div class=\"content\">
                                <h5>Antony Robert <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button></h5>
                                <div class=\"row gap-10\">
                                    <div class=\"col-sm-12 col-md-9\">

                                        <p class=\"line18\">Je suis un veritable enseignant qui aimerais vraiment interagir avec des etudiants et eleves...</p>
                                        <br>
                                        <ul class=\"list-info\">
                                            <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">Position: </span> Douala - Akwa</li>

                                            <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Compétences :</span> Mathématiques, Physiques,...</li>
                                        </ul>

                                    </div>
                                    <div class=\"col-sm-12 col-md-3 text-right text-left-sm\">

                                        <div class=\"rating-wrapper\">
                                            <div class=\"raty-wrapper\">
                                                <div><img alt=\"1\" src=\"";
        // line 299
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

                                        <div class=\"price\">80.000 Fcfa</div>

                                        <a href=\"profil.html\" class=\"btn btn-primary btn-sm\">Voir Profil</a>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

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
        
        $__internal_ae34fd3b7a6f7daa61c111a7da1a48b7268b5fba69203cf1401ea836a30c63a0->leave($__internal_ae34fd3b7a6f7daa61c111a7da1a48b7268b5fba69203cf1401ea836a30c63a0_prof);

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
        return array (  383 => 299,  359 => 278,  332 => 262,  308 => 241,  267 => 203,  120 => 59,  83 => 25,  74 => 19,  63 => 11,  59 => 9,  53 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Profs de {{ matiere }} - {{ parent() }}*/
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
/*                     <h1 class="hero-title">Grands Profs en {{ matiere }}</h1>*/
/* */
/*                     <ol class="breadcrumb-list">*/
/*                         <li><a href="index.html">Accueil</a></li>*/
/*                         <li><a href="#">Profs</a></li>*/
/*                         <li><a href="#">Douala</a></li>*/
/*                         <li><span>{{ matiere }}</span></li>*/
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
/*                                         <option selected>{{ matiere }}</option>*/
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
/*                             <h3 class="sorting-title uppercase">Des Grands profs en {{ matiere }}</h3>*/
/*                             <p class="sorting-lead">175 Grands profs trouvés</p>*/
/*                         </div>*/
/* */
/*                         <div class="sorting-content">*/
/* */
/*                             <div class="row">*/
/* */
/*                                 <div class="col-sm-12 col-md-8">*/
/*                                     <div class="sort-by-wrapper">*/
/*                                         <label class="sorting-label">Sort by: </label> */
/*                                         <div class="sorting-middle-holder">*/
/*                                             <ul class="sort-by">*/
/*                                                 <li class="active up"><a href="#">Note <i class="fa fa-long-arrow-down"></i></a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="col-sm-12 col-md-4">*/
/*                                     <div class="sort-by-wrapper mt pull-right pull-left-sm mt-10-sm">*/
/*                                         <label class="sorting-label">Voir : </label> */
/*                                         <div class="sorting-middle-holder">*/
/*                                             <a href="#" class="btn btn-sorting active"><i class="fa fa-th-list"></i></a>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="package-list-item-wrapper on-page-result-page">*/
/* */
/*                         <div class="package-list-item clearfix">*/
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
/* */
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
