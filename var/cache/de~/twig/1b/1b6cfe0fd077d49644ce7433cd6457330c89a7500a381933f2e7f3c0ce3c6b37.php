<?php

/* LGPCourseBundle:Course:search.html.twig */
class __TwigTemplate_170e842bb49e5cee51bcfdb4fd80144aea96ac0c1377767cfff2bce60e736725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Course:search.html.twig", 2);
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
        $__internal_9f5e4e851448f565d64fc8239323999a8021e66b8df4a21aac1384bce7680ba0 = $this->env->getExtension("native_profiler");
        $__internal_9f5e4e851448f565d64fc8239323999a8021e66b8df4a21aac1384bce7680ba0->enter($__internal_9f5e4e851448f565d64fc8239323999a8021e66b8df4a21aac1384bce7680ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Course:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f5e4e851448f565d64fc8239323999a8021e66b8df4a21aac1384bce7680ba0->leave($__internal_9f5e4e851448f565d64fc8239323999a8021e66b8df4a21aac1384bce7680ba0_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_dff6f2ac11f7b2d9d176b197b111915c5ab100c5da9fc53f121c52963fb6ec84 = $this->env->getExtension("native_profiler");
        $__internal_dff6f2ac11f7b2d9d176b197b111915c5ab100c5da9fc53f121c52963fb6ec84->enter($__internal_dff6f2ac11f7b2d9d176b197b111915c5ab100c5da9fc53f121c52963fb6ec84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Profs de ";
        echo twig_escape_filter($this->env, (isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dff6f2ac11f7b2d9d176b197b111915c5ab100c5da9fc53f121c52963fb6ec84->leave($__internal_dff6f2ac11f7b2d9d176b197b111915c5ab100c5da9fc53f121c52963fb6ec84_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ff04093c697402a8dc3932c9b3c19933ba4c952c3266d2ba6143c2c3ad5b722 = $this->env->getExtension("native_profiler");
        $__internal_7ff04093c697402a8dc3932c9b3c19933ba4c952c3266d2ba6143c2c3ad5b722->enter($__internal_7ff04093c697402a8dc3932c9b3c19933ba4c952c3266d2ba6143c2c3ad5b722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    <!-- start end Page title -->
\t\t\t<div class=\"page-title\" style=\"background-image:url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
        echo "');\">
\t\t\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h1 class=\"hero-title\">Grands Profs en ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<ol class=\"breadcrumb-list\">
\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Accueil</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Profs</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Douala</a></li>
\t\t\t\t\t\t\t\t<li><span>";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "html", null, true);
        echo "</span></li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<!-- end Page title -->
\t\t\t
\t\t\t<div class=\"content-wrapper\">
\t\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<aside class=\"sidebar with-filter\">
\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"sidebar-search-wrapper bg-light-2\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"sidebar-search-header\">
\t\t\t\t\t\t\t\t\t\t<h4>Recherchez </h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"sidebar-search-content\">

\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t\t<select name=\"destination\" class=\"select2-multi form-control\" data-placeholder=\"Que voulez-vous apprendre ?\" multiple>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Que voulez-vous apprendre ?</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option selected>";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Physiques</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Chimie</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Informatique</option>
\t\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<select name=\"month\" class=\"select2-multi form-control\" data-placeholder=\"Quelle ville ?\" multiple>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Quelle ville ?</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option selected>Douala</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Yaounde</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Buea</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option>Limbe</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-block\">Rechercher</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"sidebar-header clearfix\">
\t\t\t\t\t\t\t\t\t<h4>Affinez</h4>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"sidebar-reset-filter\"><i class=\"fa fa-times\"></i> Annuler</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"sidebar-module\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"sidebar-title\">Entrez un nom</h6>
\t\t\t\t\t\t\t\t\t\t<div class=\"sidebar-module-inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sidebar-mini-search\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Qui ?...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"sidebar-module\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"sidebar-title\">Affinez par note</h6>
\t\t\t\t\t\t\t\t\t\t<div class=\"sidebar-module-inner\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"star_range\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"sidebar-module\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h6 class=\"sidebar-title\">Affinez par quartier</h6>
\t\t\t\t\t\t\t\t\t\t<div class=\"sidebar-module-inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"ville-1\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\" for=\"ville-1\">Akwa <span class=\"checkbox-count\">(90)</span></label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"ville-2\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\" for=\"ville-2\">Bonapriso <span class=\"checkbox-count\">(25)</span></label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"ville-3\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\" for=\"ville-3\">Logpom <span class=\"checkbox-count\">(15)</span></label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ville-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"property_type-4\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\" for=\"property_type-4\">Bonamoussadi<span class=\"checkbox-count\">(20)</span></label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"more-less-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"property_type_more_less\" class=\"collapse\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"more-less-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"ville-6\" name=\"ville\" type=\"checkbox\" class=\"checkbox\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\" for=\"ville-6\">Bonaberi <span class=\"checkbox-count\">(25)</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-more-less collapsed\" data-toggle=\"collapse\" data-target=\"#property_type_more_less\">Montrer plus</button>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>

\t\t\t\t\t\t\t\t\t<div class=\"sidebar-module\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"sidebar-title\">Affinez par niveau</h6>
\t\t\t\t\t\t\t\t\t\t<div class=\"sidebar-module-inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"niveau-1\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\" for=\"niveau-1\">Primaire</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"niveau-2\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\" for=\"niveau-2\">Collège</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"niveau-3\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\" for=\"niveau-3\">Seconde</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"niveau-4\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\" for=\"niveau-4\">Première</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"niveau-5\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\" for=\"niveau-5\">Terminale</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"niveau-6\" name=\"niveau\" type=\"checkbox\" class=\"checkbox\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"\" for=\"niveau-6\">Supérieur</label>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-8 col-md-9\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"sorting-wrappper\">
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"sorting-header\">
\t\t\t\t\t\t\t\t\t<h3 class=\"sorting-title uppercase\">Des Grands profs en ";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t<p class=\"sorting-lead\">175 Grands profs trouvés</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"sorting-content\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sort-by-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"sorting-label\">Sort by: </label> 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sorting-middle-holder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sort-by\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active up\"><a href=\"#\">Note <i class=\"fa fa-long-arrow-down\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sort-by-wrapper mt pull-right pull-left-sm mt-10-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"sorting-label\">Voir : </label> 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sorting-middle-holder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sorting active\"><i class=\"fa fa-th-list\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"package-list-item-wrapper on-page-result-page\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"package-list-item clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/man/01.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<h5>Antony Robert <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button></h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"row gap-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"line18\">Je suis un veritable enseignant qui aimerais vraiment interagir avec des etudiants et eleves...</p>
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">Position: </span> Douala - Akwa</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Compétences :</span> Mathématiques, Physiques,...</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-3 text-right text-left-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"raty-wrapper\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">80.000 Fcfa</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"profil.html\" class=\"btn btn-primary btn-sm\">Voir Profil</a>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"package-list-item clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/man/03.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<h5>Antony Robert <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button></h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"row gap-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"line18\">Je suis un veritable enseignant qui aimerais vraiment interagir avec des etudiants et eleves...</p>
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">Position: </span> Douala - Akwa</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Compétences :</span> Mathématiques, Physiques,...</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-3 text-right text-left-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"raty-wrapper\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">80.000 Fcfa</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"profil.html\" class=\"btn btn-primary btn-sm\">Voir Profil</a>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"pager-wrappper clearfix\">
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"pager-innner\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"flex-row flex-align-middle\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-column flex-sm-12\">
\t\t\t\t\t\t\t\t\t\t\tResultats de 1 à 4 de 175 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-column flex-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<nav class=\"pager-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" aria-label=\"Previous\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&laquo;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">1</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span>...</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">11</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">12</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">13</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" aria-label=\"Next\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&raquo;</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
";
        
        $__internal_7ff04093c697402a8dc3932c9b3c19933ba4c952c3266d2ba6143c2c3ad5b722->leave($__internal_7ff04093c697402a8dc3932c9b3c19933ba4c952c3266d2ba6143c2c3ad5b722_prof);

    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Course:search.html.twig";
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
/*   Profs de {{ matiere }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     <!-- start end Page title -->*/
/* 			<div class="page-title" style="background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');">*/
/* 				*/
/* 				<div class="container">*/
/* 				*/
/* 					<div class="row">*/
/* 					*/
/* 						<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">*/
/* 						*/
/* 							<h1 class="hero-title">Grands Profs en {{ matiere }}</h1>*/
/* 							*/
/* 							<ol class="breadcrumb-list">*/
/* 								<li><a href="index.html">Accueil</a></li>*/
/* 								<li><a href="#">Profs</a></li>*/
/* 								<li><a href="#">Douala</a></li>*/
/* 								<li><span>{{ matiere }}</span></li>*/
/* 							</ol>*/
/* 							*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 			<!-- end Page title -->*/
/* 			*/
/* 			<div class="content-wrapper">*/
/* 			*/
/* 				<div class="container">*/
/* 				*/
/* 					<div class="row">*/
/* 						*/
/* 						<div class="col-sm-4 col-md-3">*/
/* 							*/
/* 							<aside class="sidebar with-filter">*/
/* 				*/
/* 								<div class="sidebar-search-wrapper bg-light-2">*/
/* 								*/
/* 									<div class="sidebar-search-header">*/
/* 										<h4>Recherchez </h4>*/
/* 									</div>*/
/* 									*/
/* 									<div class="sidebar-search-content">*/
/* */
/* 										<div class="form-group">*/
/* */
/* 											<select name="destination" class="select2-multi form-control" data-placeholder="Que voulez-vous apprendre ?" multiple>*/
/* 												<option value="">Que voulez-vous apprendre ?</option>*/
/* 												<option selected>{{ matiere }}</option>*/
/* 												<option>Physiques</option>*/
/* 												<option>Chimie</option>*/
/* 												<option>Informatique</option>*/
/* 											</select>*/
/* */
/* 										</div>*/
/* 									*/
/* 										<div class="form-group">*/
/* 														*/
/* 											<select name="month" class="select2-multi form-control" data-placeholder="Quelle ville ?" multiple>*/
/* 												<option value="">Quelle ville ?</option>*/
/* 												<option selected>Douala</option>*/
/* 												<option>Yaounde</option>*/
/* 												<option>Buea</option>*/
/* 												<option>Limbe</option>*/
/* 											</select>*/
/* 											*/
/* 										</div>*/
/* 									*/
/* 										<a href="#" class="btn btn-primary btn-block">Rechercher</a>*/
/* 									*/
/* 									</div>*/
/* 									*/
/* 								</div>*/
/* 								*/
/* 								<div class="sidebar-header clearfix">*/
/* 									<h4>Affinez</h4>*/
/* 									<a href="#" class="sidebar-reset-filter"><i class="fa fa-times"></i> Annuler</a>*/
/* 								</div>*/
/* 								*/
/* 								<div class="sidebar-inner">*/
/* 								*/
/* 									<div class="sidebar-module">*/
/* 										<h6 class="sidebar-title">Entrez un nom</h6>*/
/* 										<div class="sidebar-module-inner">*/
/* 											<div class="sidebar-mini-search">*/
/* 												<div class="input-group">*/
/* 													<input type="text" class="form-control" placeholder="Qui ?...">*/
/* 													<span class="input-group-btn">*/
/* 														<button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>*/
/* 													</span>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 									*/
/* 									<div class="clear"></div>*/
/* 									*/
/* 									<div class="sidebar-module">*/
/* 										<h6 class="sidebar-title">Affinez par note</h6>*/
/* 										<div class="sidebar-module-inner">*/
/* 											<input id="star_range" />*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 									<div class="clear"></div>*/
/* 									*/
/* 									<div class="sidebar-module">*/
/* 									*/
/* 										<h6 class="sidebar-title">Affinez par quartier</h6>*/
/* 										<div class="sidebar-module-inner">*/
/* 											<div class="checkbox-block">*/
/* 												<input id="ville-1" name="ville" type="checkbox" class="checkbox"/>*/
/* 												<label class="" for="ville-1">Akwa <span class="checkbox-count">(90)</span></label>*/
/* 											</div>*/
/* 											<div class="checkbox-block">*/
/* 												<input id="ville-2" name="ville" type="checkbox" class="checkbox"/>*/
/* 												<label class="" for="ville-2">Bonapriso <span class="checkbox-count">(25)</span></label>*/
/* 											</div>*/
/* 											<div class="checkbox-block">*/
/* 												<input id="ville-3" name="ville" type="checkbox" class="checkbox"/>*/
/* 												<label class="" for="ville-3">Logpom <span class="checkbox-count">(15)</span></label>*/
/* 											</div>*/
/* 											<div class="ville-block">*/
/* 												<input id="property_type-4" name="ville" type="checkbox" class="checkbox"/>*/
/* 												<label class="" for="property_type-4">Bonamoussadi<span class="checkbox-count">(20)</span></label>*/
/* 											</div>*/
/* 											<div class="more-less-wrapper">*/
/* 												*/
/* 												<div id="property_type_more_less" class="collapse"> */
/* 													<div class="more-less-inner">*/
/* 													*/
/* 														<div class="checkbox-block">*/
/* 															<input id="ville-6" name="ville" type="checkbox" class="checkbox"/>*/
/* 															<label class="" for="ville-6">Bonaberi <span class="checkbox-count">(25)</span></label>*/
/* 														</div>*/
/* 														*/
/* 													</div>*/
/* 												</div>*/
/* 												<button class="btn btn-more-less collapsed" data-toggle="collapse" data-target="#property_type_more_less">Montrer plus</button>*/
/* 												*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<div class="clear"></div>*/
/* */
/* 									<div class="sidebar-module">*/
/* 										<h6 class="sidebar-title">Affinez par niveau</h6>*/
/* 										<div class="sidebar-module-inner">*/
/* 											<div class="checkbox-block">*/
/* 												<input id="niveau-1" name="niveau" type="checkbox" class="checkbox"/>*/
/* 												<label class="" for="niveau-1">Primaire</label>*/
/* 											</div>*/
/* 											<div class="checkbox-block">*/
/* 												<input id="niveau-2" name="niveau" type="checkbox" class="checkbox"/>*/
/* 												<label class="" for="niveau-2">Collège</label>*/
/* 											</div>*/
/* 											<div class="checkbox-block">*/
/* 												<input id="niveau-3" name="niveau" type="checkbox" class="checkbox"/>*/
/* 												<label class="" for="niveau-3">Seconde</label>*/
/* 											</div>*/
/* 											<div class="checkbox-block">*/
/* 												<input id="niveau-4" name="niveau" type="checkbox" class="checkbox"/>*/
/* 												<label class="" for="niveau-4">Première</label>*/
/* 											</div>*/
/* 											<div class="checkbox-block">*/
/* 												<input id="niveau-5" name="niveau" type="checkbox" class="checkbox"/>*/
/* 												<label class="" for="niveau-5">Terminale</label>*/
/* 											</div>*/
/* 											<div class="checkbox-block">*/
/* 												<input id="niveau-6" name="niveau" type="checkbox" class="checkbox"/>*/
/* 												<label class="" for="niveau-6">Supérieur</label>*/
/* 											</div>*/
/* */
/* 										</div>*/
/* 									</div>*/
/* */
/* 									*/
/* 								</div>*/
/* 								*/
/* 							</aside>*/
/* 							*/
/* 							*/
/* 						</div>*/
/* 						*/
/* 						<div class="col-sm-8 col-md-9">*/
/* 							*/
/* 							<div class="sorting-wrappper">*/
/* 			*/
/* 								<div class="sorting-header">*/
/* 									<h3 class="sorting-title uppercase">Des Grands profs en {{ matiere }}</h3>*/
/* 									<p class="sorting-lead">175 Grands profs trouvés</p>*/
/* 								</div>*/
/* 								*/
/* 								<div class="sorting-content">*/
/* 								*/
/* 									<div class="row">*/
/* 									*/
/* 										<div class="col-sm-12 col-md-8">*/
/* 											<div class="sort-by-wrapper">*/
/* 												<label class="sorting-label">Sort by: </label> */
/* 												<div class="sorting-middle-holder">*/
/* 													<ul class="sort-by">*/
/* 														<li class="active up"><a href="#">Note <i class="fa fa-long-arrow-down"></i></a></li>*/
/* 													</ul>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										*/
/* 										<div class="col-sm-12 col-md-4">*/
/* 											<div class="sort-by-wrapper mt pull-right pull-left-sm mt-10-sm">*/
/* 												<label class="sorting-label">Voir : </label> */
/* 												<div class="sorting-middle-holder">*/
/* 													<a href="#" class="btn btn-sorting active"><i class="fa fa-th-list"></i></a>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										*/
/* 									</div>*/
/* 								*/
/* 								</div>*/
/* */
/* 							</div>*/
/* 							*/
/* 							<div class="package-list-item-wrapper on-page-result-page">*/
/* 							*/
/* 								<div class="package-list-item clearfix">*/
/* 									<div class="image">*/
/* 										<img src="{{ asset('images/man/01.jpg') }}" alt="Tour Package" />*/
/* 									</div>*/
/* 									*/
/* 									<div class="content">*/
/* 										<h5>Antony Robert <button class="btn"><i class="fa fa-heart-o"></i></button></h5>*/
/* 										<div class="row gap-10">*/
/* 											<div class="col-sm-12 col-md-9">*/
/* 												*/
/* 												<p class="line18">Je suis un veritable enseignant qui aimerais vraiment interagir avec des etudiants et eleves...</p>*/
/* 												<br>*/
/* 												<ul class="list-info">*/
/* 													<li><span class="icon"><i class="fa fa-map-marker"></i></span> <span class="font600">Position: </span> Douala - Akwa</li>*/
/* 													*/
/* 													<li><span class="icon"><i class="fa fa-book"></i></span> <span class="font600">Compétences :</span> Mathématiques, Physiques,...</li>*/
/* 												</ul>*/
/* 												*/
/* 											</div>*/
/* 											<div class="col-sm-12 col-md-3 text-right text-left-sm">*/
/* 												*/
/* 												<div class="rating-wrapper">*/
/* 													<div class="raty-wrapper">*/
/*                                                                                                             <div><img alt="1" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="2" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="3" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="4" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="5" src="{{ asset('images/raty/star-off-sm.png') }}" title="good"><input name="score" type="hidden" value="4" readonly=""></div>*/
/*                                                                                                             <span> / 7 avis</span>*/
/* 													</div>*/
/* 												</div>*/
/* 												*/
/* 												<div class="price">80.000 Fcfa</div>*/
/* 												*/
/* 												<a href="profil.html" class="btn btn-primary btn-sm">Voir Profil</a>*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 								</div>*/
/* 								<div class="package-list-item clearfix">*/
/* 									<div class="image">*/
/* 										<img src="{{ asset('images/man/03.jpg') }}" alt="Tour Package" />*/
/* 									</div>*/
/* 									*/
/* 									<div class="content">*/
/* 										<h5>Antony Robert <button class="btn"><i class="fa fa-heart-o"></i></button></h5>*/
/* 										<div class="row gap-10">*/
/* 											<div class="col-sm-12 col-md-9">*/
/* 												*/
/* 												<p class="line18">Je suis un veritable enseignant qui aimerais vraiment interagir avec des etudiants et eleves...</p>*/
/* 												<br>*/
/* 												<ul class="list-info">*/
/* 													<li><span class="icon"><i class="fa fa-map-marker"></i></span> <span class="font600">Position: </span> Douala - Akwa</li>*/
/* 													*/
/* 													<li><span class="icon"><i class="fa fa-book"></i></span> <span class="font600">Compétences :</span> Mathématiques, Physiques,...</li>*/
/* 												</ul>*/
/* 												*/
/* 											</div>*/
/* 											<div class="col-sm-12 col-md-3 text-right text-left-sm">*/
/* 												*/
/* 												<div class="rating-wrapper">*/
/* 													<div class="raty-wrapper">*/
/*                                                                                                             <div><img alt="1" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="2" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="3" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="4" src="{{ asset('images/raty/star-on-sm.png') }}" title="good"><img alt="5" src="{{ asset('images/raty/star-off-sm.png') }}" title="good"><input name="score" type="hidden" value="4" readonly=""></div>*/
/*                                                                                                             <span> / 7 avis</span>*/
/* 													</div>*/
/* 												</div>*/
/* 												*/
/* 												<div class="price">80.000 Fcfa</div>*/
/* 												*/
/* 												<a href="profil.html" class="btn btn-primary btn-sm">Voir Profil</a>*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 								</div>*/
/* 								*/
/* 							</div>*/
/* */
/* 							<div class="pager-wrappper clearfix">*/
/* 			*/
/* 								<div class="pager-innner">*/
/* 								*/
/* 									<div class="flex-row flex-align-middle">*/
/* 											*/
/* 										<div class="flex-column flex-sm-12">*/
/* 											Resultats de 1 à 4 de 175 */
/* 										</div>*/
/* 										*/
/* 										<div class="flex-column flex-sm-12">*/
/* 											<nav class="pager-right">*/
/* 												<ul class="pagination">*/
/* 													<li>*/
/* 														<a href="#" aria-label="Previous">*/
/* 															<span aria-hidden="true">&laquo;</span>*/
/* 														</a>*/
/* 													</li>*/
/* 													<li class="active"><a href="#">1</a></li>*/
/* 													<li><a href="#">2</a></li>*/
/* 													<li><a href="#">3</a></li>*/
/* 													<li><span>...</span></li>*/
/* 													<li><a href="#">11</a></li>*/
/* 													<li><a href="#">12</a></li>*/
/* 													<li><a href="#">13</a></li>*/
/* 													<li>*/
/* 														<a href="#" aria-label="Next">*/
/* 															<span aria-hidden="true">&raquo;</span>*/
/* 														</a>*/
/* 													</li>*/
/* 												</ul>*/
/* 											</nav>*/
/* 										</div>*/
/* 									*/
/* 									</div>*/
/* 									*/
/* 								</div>*/
/* 								*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* {% endblock %}*/
