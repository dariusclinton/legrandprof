<?php

/* LGPCoreBundle:Lgp:index.html.twig */
class __TwigTemplate_f8fef52298d0c3736aa2539f50d584d32f651b19055c9db8482cdd50ba12d7f0 extends Twig_Template
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
        $__internal_b7ce29453c55c1fd89685a77cb66903ced9bca263000fc74c497b7a7f429fbd7 = $this->env->getExtension("native_profiler");
        $__internal_b7ce29453c55c1fd89685a77cb66903ced9bca263000fc74c497b7a7f429fbd7->enter($__internal_b7ce29453c55c1fd89685a77cb66903ced9bca263000fc74c497b7a7f429fbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCoreBundle:Lgp:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ce29453c55c1fd89685a77cb66903ced9bca263000fc74c497b7a7f429fbd7->leave($__internal_b7ce29453c55c1fd89685a77cb66903ced9bca263000fc74c497b7a7f429fbd7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_df7bac57e0ad7c7e97dbf2b057b29be4f83d715fb805835c360d9486670f2a76 = $this->env->getExtension("native_profiler");
        $__internal_df7bac57e0ad7c7e97dbf2b057b29be4f83d715fb805835c360d9486670f2a76->enter($__internal_df7bac57e0ad7c7e97dbf2b057b29be4f83d715fb805835c360d9486670f2a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_df7bac57e0ad7c7e97dbf2b057b29be4f83d715fb805835c360d9486670f2a76->leave($__internal_df7bac57e0ad7c7e97dbf2b057b29be4f83d715fb805835c360d9486670f2a76_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c867801c79c17f629555e133bd510b8a34b10df555bdc06a309f38632cbe8ec = $this->env->getExtension("native_profiler");
        $__internal_1c867801c79c17f629555e133bd510b8a34b10df555bdc06a309f38632cbe8ec->enter($__internal_1c867801c79c17f629555e133bd510b8a34b10df555bdc06a309f38632cbe8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <!-- start hero-header with windows height -->
\t\t\t<div class=\"hero\" style=\"background-image:url('";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero-header/01.jpg"), "html", null, true);
        echo "');\">
\t\t\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h1 class=\"hero-title\">Trouvez Le Grand Prof Idéal</h1>
\t\t\t\t\t\t\t<p class=\"lead\">Rechercher maintenant et retrouvez un tuteur près de chez vous !</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"main-search-wrapper full-width\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"column-item-large\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<select name=\"destination\" class=\"select2-multi form-control\" data-placeholder=\"Que voulez-vous apprendre ?\" multiple>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"column-item for-btn\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-block\">Rechercher</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<!-- end hero-header with windows height -->
\t\t\t
\t\t\t<div class=\"post-hero bg-light\">
\t\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"featured-count clearfix\">
\t\t\t\t\t\t\t\t<div class=\"icon\"><i class=\"pe-7s-users\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h6>De Grands Profs</h6>
\t\t\t\t\t\t\t\t\t<span>Des professionnels avérés et compétents.</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"featured-count clearfix\">
\t\t\t\t\t\t\t\t<div class=\"icon\"> <i class=\"pe-7s-wristwatch\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h6>Un Service Rapide</h6>
\t\t\t\t\t\t\t\t\t<span>Une réponse en maxi 24h.</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"featured-count clearfix\">
\t\t\t\t\t\t\t\t<div class=\"icon\"> <i class=\"pe-7s-smile\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h6>Faite votre choix</h6>
\t\t\t\t\t\t\t\t\t<span> Choisissez le profil qui vous convient !</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

\t\t\t<section>
\t\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h3>Top des villes</h3>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"grid destination-grid-wrapper\">
\t\t\t
\t\t\t\t\t\t<div class=\"grid-item\" data-colspan=\"10\" data-rowspan=\"10\">
\t\t\t\t\t\t\t<a href=\"recherche.html\" class=\"top-destination-image-bg\" style=\"background-image:url('";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/villes/01.jpg"), "html", null, true);
        echo "');\">
\t\t\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t\t\t<h4>Douala</h4>
\t\t\t\t\t\t\t\t\t<span>150 Grands Profs</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"grid-item\" data-colspan=\"10\" data-rowspan=\"4\">
\t\t\t\t\t\t\t<a href=\"recherche.html\" class=\"top-destination-image-bg\" style=\"background-image:url('";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/villes/02.jpg"), "html", null, true);
        echo "');\">
\t\t\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t\t\t<h4>Yaoundé</h4>
\t\t\t\t\t\t\t\t\t<span>100 Grands Profs</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"grid-item\" data-colspan=\"5\" data-rowspan=\"6\">
\t\t\t\t\t\t\t<a href=\"recherche.html\" class=\"top-destination-image-bg\" style=\"background-image:url('";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/villes/03.jpg"), "html", null, true);
        echo "');\">
\t\t\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t\t\t<h4>Limbé</h4>
\t\t\t\t\t\t\t\t\t<span>45 Grands Profs</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"grid-item\" data-colspan=\"5\" data-rowspan=\"6\">
\t\t\t\t\t\t\t<a href=\"recherche.html\" class=\"top-destination-image-bg\" style=\"background-image:url('";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/villes/04.jpg"), "html", null, true);
        echo "');\">
\t\t\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t\t\t<h4>Buea</h4>
\t\t\t\t\t\t\t\t\t<span>52 Grands Profs</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</section>
\t\t\t
\t\t\t<section class=\"bg-light\">
\t\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h3>Catégories populaires</h3>
\t\t\t\t\t\t\t\t<p>Ensemble, nous allons vous aider à atteindre vos objectifs.</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"GridLex-gap-30-wrappper package-grid-item-wrapper\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"GridLex-grid-noGutter-equalHeight\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"GridLex-col-3_sm-6_xs-12 mb-30\">
\t\t\t\t\t\t\t\t<div class=\"package-grid-item\"> 
\t\t\t\t\t\t\t\t\t<a href=\"recherche.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/categories/maths.jpg"), "html", null, true);
        echo "\" alt=\"Catégories\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"absolute-in-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"duration\"><span>300 Grands profs</span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"content clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Mathématiques</h5>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"GridLex-col-3_sm-6_xs-12 mb-30\">
\t\t\t\t\t\t\t\t<div class=\"package-grid-item\"> 
\t\t\t\t\t\t\t\t\t<a href=\"recherche.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/categories/phy.jpg"), "html", null, true);
        echo "\" alt=\"Catégories\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"absolute-in-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"duration\"><span>250 Grands Profs</span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"content clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Physiques</h5>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"GridLex-col-3_sm-6_xs-12 mb-30\">
\t\t\t\t\t\t\t\t<div class=\"package-grid-item\"> 
\t\t\t\t\t\t\t\t\t<a href=\"recherche.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/categories/chi.jpg"), "html", null, true);
        echo "\" alt=\"Catégories\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"absolute-in-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"duration\"><span>250 Grands Profs</span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"content clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Chimie</h5>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"GridLex-col-3_sm-6_xs-12 mb-30\">
\t\t\t\t\t\t\t\t<div class=\"package-grid-item\"> 
\t\t\t\t\t\t\t\t\t<a href=\"recherche.html\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/categories/info.jpg"), "html", null, true);
        echo "\" alt=\"Catégories\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"absolute-in-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"duration\"><span>115 Grands Profs</span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"content clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Informatique </h5>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</section>
\t\t\t
\t\t\t<section class=\"overflow-hidden why-us-half-image-wrapper\">
\t\t\t
\t\t\t\t<div class=\"GridLex-grid-noGutter-equalHeight\">
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"GridLex-col-6_sm-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"why-us-half-image-content\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"section-title text-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h3>Comment ca marche ?</h3>
\t\t\t\t\t\t\t\t<p>Une procédure simple et rapide !</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"featured-item\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h4>Entrez le domaine qui vous interesse</h4>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content clearfix\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-search\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p>Recherchez un grand prof spécialisé dans un domaine précis parmi plus de 250 domaines (académiques, artistiques, artisanales...)</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"featured-item\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h4>Trouvez le grand prof idéal</h4>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content clearfix\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p>Sélectionnez la perle rare parmi une liste d’enseignants vérifiés par nos soins, évalués par leurs anciens élèves et à proximité de chez vous.. Notre moteur de recherche est optimisé pour vous afficher les résultats les plus pertinents.</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"featured-item\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h4>Une fois trouvé, Entrez en contact</h4>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content clearfix\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-call\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p>Contactez votre grand prof idéal en précisant les raisons de votre choix, Vous avez une réponse en moins de 24h.</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"GridLex-col-6_sm-12 image-bg\">
\t\t\t\t\t\t<div class=\"image-bg\" style=\"background-image:url('";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/image-01.jpg"), "html", null, true);
        echo "');\"></div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</section>
\t\t\t
\t\t\t<div class=\"newsletter-wrapper\">
\t\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t\t\t<div class=\"flex-row flex-align-middle flex-gap-30\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"flex-column flex-sm-12\">
\t\t\t\t\t\t\t<div class=\"newsletter-text clearfix\">
\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-mail\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<h3>Enregistrez-vous à la Newsletter</h3>
\t\t\t\t\t\t\t\t\t<p>Tenez vous informer de toutes les nouveautés.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"flex-columns flex-sm-12\">
\t\t\t\t\t\t\t<div class=\"newsletter-form\">
\t\t\t\t\t\t\t\t<form class=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Entrez votre Email...\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">S'inscrire <i class=\"fa fa-long-arrow-right\"></i></button>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
    
 
";
        
        $__internal_1c867801c79c17f629555e133bd510b8a34b10df555bdc06a309f38632cbe8ec->leave($__internal_1c867801c79c17f629555e133bd510b8a34b10df555bdc06a309f38632cbe8ec_prof);

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
        return array (  408 => 331,  318 => 244,  298 => 227,  278 => 210,  258 => 193,  214 => 152,  202 => 143,  190 => 134,  178 => 125,  60 => 10,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
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
/* 			<div class="hero" style="background-image:url('{{ asset('images/hero-header/01.jpg') }}');">*/
/* 				*/
/* 				<div class="container">*/
/* 				*/
/* 					<div class="row">*/
/* 					*/
/* 						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">*/
/* 						*/
/* 							<h1 class="hero-title">Trouvez Le Grand Prof Idéal</h1>*/
/* 							<p class="lead">Rechercher maintenant et retrouvez un tuteur près de chez vous !</p>*/
/* */
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 					*/
/* 					<div class="main-search-wrapper full-width">*/
/* 					*/
/* 						<div class="inner">*/
/* 						*/
/* 							<div class="column-item-large">*/
/* 							*/
/* 								<div class="form-group">*/
/* 								*/
/* 									<select name="destination" class="select2-multi form-control" data-placeholder="Que voulez-vous apprendre ?" multiple>*/
/* 										*/
/* 									</select>*/
/* */
/* 								</div>*/
/* 							*/
/* 							</div>*/
/* 							*/
/* 							*/
/* 							*/
/* 							<div class="column-item for-btn">*/
/* 							*/
/* 								<div class="form-group">*/
/* 								*/
/* 									<a href="#" class="btn btn-primary btn-block">Rechercher</a>*/
/* 									*/
/* 								</div>*/
/* 							*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 				*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 			<!-- end hero-header with windows height -->*/
/* 			*/
/* 			<div class="post-hero bg-light">*/
/* 			*/
/* 				<div class="container">*/
/* 					*/
/* 					<div class="row">*/
/* 					*/
/* 						<div class="col-sm-4">*/
/* 							<div class="featured-count clearfix">*/
/* 								<div class="icon"><i class="pe-7s-users"></i></div>*/
/* 								<div class="content">*/
/* 									<h6>De Grands Profs</h6>*/
/* 									<span>Des professionnels avérés et compétents.</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="col-sm-4">*/
/* 							<div class="featured-count clearfix">*/
/* 								<div class="icon"> <i class="pe-7s-wristwatch"></i></div>*/
/* 								<div class="content">*/
/* 									<h6>Un Service Rapide</h6>*/
/* 									<span>Une réponse en maxi 24h.</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="col-sm-4">*/
/* 							<div class="featured-count clearfix">*/
/* 								<div class="icon"> <i class="pe-7s-smile"></i></div>*/
/* 								<div class="content">*/
/* 									<h6>Faite votre choix</h6>*/
/* 									<span> Choisissez le profil qui vous convient !</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* */
/* 			<section>*/
/* 			*/
/* 				<div class="container">*/
/* 				*/
/* 					<div class="row">*/
/* 						*/
/* 						<div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">*/
/* 							*/
/* 							<div class="section-title">*/
/* 							*/
/* 								<h3>Top des villes</h3>*/
/* 								*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 					*/
/* 					</div>*/
/* 					*/
/* 					<div class="grid destination-grid-wrapper">*/
/* 			*/
/* 						<div class="grid-item" data-colspan="10" data-rowspan="10">*/
/* 							<a href="recherche.html" class="top-destination-image-bg" style="background-image:url('{{ asset('images/villes/01.jpg') }}');">*/
/* 								<div class="relative">*/
/* 									<h4>Douala</h4>*/
/* 									<span>150 Grands Profs</span>*/
/* 								</div>*/
/* 							</a>*/
/* 						</div>*/
/* 						*/
/* 						<div class="grid-item" data-colspan="10" data-rowspan="4">*/
/* 							<a href="recherche.html" class="top-destination-image-bg" style="background-image:url('{{ asset('images/villes/02.jpg') }}');">*/
/* 								<div class="relative">*/
/* 									<h4>Yaoundé</h4>*/
/* 									<span>100 Grands Profs</span>*/
/* 								</div>*/
/* 							</a>*/
/* 						</div>*/
/* 						*/
/* 						<div class="grid-item" data-colspan="5" data-rowspan="6">*/
/* 							<a href="recherche.html" class="top-destination-image-bg" style="background-image:url('{{ asset('images/villes/03.jpg') }}');">*/
/* 								<div class="relative">*/
/* 									<h4>Limbé</h4>*/
/* 									<span>45 Grands Profs</span>*/
/* 								</div>*/
/* 							</a>*/
/* 						</div>*/
/* 						*/
/* 						<div class="grid-item" data-colspan="5" data-rowspan="6">*/
/* 							<a href="recherche.html" class="top-destination-image-bg" style="background-image:url('{{ asset('images/villes/04.jpg') }}');">*/
/* 								<div class="relative">*/
/* 									<h4>Buea</h4>*/
/* 									<span>52 Grands Profs</span>*/
/* 								</div>*/
/* 							</a>*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 			</section>*/
/* 			*/
/* 			<section class="bg-light">*/
/* 			*/
/* 				<div class="container">*/
/* 				*/
/* 					<div class="row">*/
/* 						*/
/* 						<div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">*/
/* 							*/
/* 							<div class="section-title">*/
/* 							*/
/* 								<h3>Catégories populaires</h3>*/
/* 								<p>Ensemble, nous allons vous aider à atteindre vos objectifs.</p>*/
/* 								*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 					*/
/* 					</div>*/
/* 					*/
/* 					<div class="GridLex-gap-30-wrappper package-grid-item-wrapper">*/
/* 						*/
/* 						<div class="GridLex-grid-noGutter-equalHeight">*/
/* 						*/
/* 							<div class="GridLex-col-3_sm-6_xs-12 mb-30">*/
/* 								<div class="package-grid-item"> */
/* 									<a href="recherche.html">*/
/* 										<div class="image">*/
/* 											<img src="{{ asset('images/categories/maths.jpg') }}" alt="Catégories" />*/
/* 											<div class="absolute-in-image">*/
/* 												<div class="duration"><span>300 Grands profs</span></div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="content clearfix">*/
/* 											<h5>Mathématiques</h5>*/
/* 											*/
/* 										</div>*/
/* 									</a>*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							<div class="GridLex-col-3_sm-6_xs-12 mb-30">*/
/* 								<div class="package-grid-item"> */
/* 									<a href="recherche.html">*/
/* 										<div class="image">*/
/* 											<img src="{{ asset('images/categories/phy.jpg') }}" alt="Catégories" />*/
/* 											<div class="absolute-in-image">*/
/* 												<div class="duration"><span>250 Grands Profs</span></div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="content clearfix">*/
/* 											<h5>Physiques</h5>*/
/* 											*/
/* 										</div>*/
/* 									</a>*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							<div class="GridLex-col-3_sm-6_xs-12 mb-30">*/
/* 								<div class="package-grid-item"> */
/* 									<a href="recherche.html">*/
/* 										<div class="image">*/
/* 											<img src="{{ asset('images/categories/chi.jpg') }}" alt="Catégories" />*/
/* 											<div class="absolute-in-image">*/
/* 												<div class="duration"><span>250 Grands Profs</span></div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="content clearfix">*/
/* 											<h5>Chimie</h5>*/
/* 											*/
/* 										</div>*/
/* 									</a>*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							<div class="GridLex-col-3_sm-6_xs-12 mb-30">*/
/* 								<div class="package-grid-item"> */
/* 									<a href="recherche.html">*/
/* 										<div class="image">*/
/* 											<img src="{{ asset('images/categories/info.jpg') }}" alt="Catégories" />*/
/* 											<div class="absolute-in-image">*/
/* 												<div class="duration"><span>115 Grands Profs</span></div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="content clearfix">*/
/* 											<h5>Informatique </h5>*/
/* 											*/
/* 										</div>*/
/* 									</a>*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 					*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 			</section>*/
/* 			*/
/* 			<section class="overflow-hidden why-us-half-image-wrapper">*/
/* 			*/
/* 				<div class="GridLex-grid-noGutter-equalHeight">*/
/* 						*/
/* 					<div class="GridLex-col-6_sm-12">*/
/* 						*/
/* 						<div class="why-us-half-image-content">*/
/* 						*/
/* 							<div class="section-title text-left">*/
/* 							*/
/* 								<h3>Comment ca marche ?</h3>*/
/* 								<p>Une procédure simple et rapide !</p>*/
/* 								*/
/* 							</div>*/
/* 							*/
/* 							<div class="featured-item">*/
/* 							*/
/* 								<h4>Entrez le domaine qui vous interesse</h4>*/
/* 								*/
/* 								<div class="content clearfix">*/
/* 								*/
/* 									<div class="icon">*/
/* 										<i class="pe-7s-search"></i>*/
/* 									</div>*/
/* 									*/
/* 									<p>Recherchez un grand prof spécialisé dans un domaine précis parmi plus de 250 domaines (académiques, artistiques, artisanales...)</p>*/
/* 									*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							<div class="featured-item">*/
/* 							*/
/* 								<h4>Trouvez le grand prof idéal</h4>*/
/* 								*/
/* 								<div class="content clearfix">*/
/* 								*/
/* 									<div class="icon">*/
/* 										<i class="pe-7s-like"></i>*/
/* 									</div>*/
/* 									*/
/* 									<p>Sélectionnez la perle rare parmi une liste d’enseignants vérifiés par nos soins, évalués par leurs anciens élèves et à proximité de chez vous.. Notre moteur de recherche est optimisé pour vous afficher les résultats les plus pertinents.</p>*/
/* 									*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							*/
/* 							<div class="featured-item">*/
/* 							*/
/* 								<h4>Une fois trouvé, Entrez en contact</h4>*/
/* 								*/
/* 								<div class="content clearfix">*/
/* 								*/
/* 									<div class="icon">*/
/* 										<i class="pe-7s-call"></i>*/
/* 									</div>*/
/* 									*/
/* 									<p>Contactez votre grand prof idéal en précisant les raisons de votre choix, Vous avez une réponse en moins de 24h.</p>*/
/* 									*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 					*/
/* 					<div class="GridLex-col-6_sm-12 image-bg">*/
/* 						<div class="image-bg" style="background-image:url('{{ asset('images/image-01.jpg') }}');"></div>*/
/* 					</div>*/
/* 				*/
/* 				</div>*/
/* 				*/
/* 			</section>*/
/* 			*/
/* 			<div class="newsletter-wrapper">*/
/* 			*/
/* 				<div class="container">*/
/* 				*/
/* 					<div class="flex-row flex-align-middle flex-gap-30">*/
/* 						*/
/* 						<div class="flex-column flex-sm-12">*/
/* 							<div class="newsletter-text clearfix">*/
/* 								<div class="icon">*/
/* 									<i class="pe-7s-mail"></i>*/
/* 								</div>*/
/* 								<div class="content">*/
/* 									<h3>Enregistrez-vous à la Newsletter</h3>*/
/* 									<p>Tenez vous informer de toutes les nouveautés.</p>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="flex-columns flex-sm-12">*/
/* 							<div class="newsletter-form">*/
/* 								<form class="">*/
/* 									<div class="input-group">*/
/* 										<input type="text" class="form-control" placeholder="Entrez votre Email...">*/
/* 										<span class="input-group-btn">*/
/* 											<button class="btn btn-primary" type="button">S'inscrire <i class="fa fa-long-arrow-right"></i></button>*/
/* 										</span>*/
/* 									</div>*/
/* 								</form>*/
/* 							</div>*/
/* 						</div>*/
/* 					*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/*     */
/*  */
/* {% endblock %}*/
