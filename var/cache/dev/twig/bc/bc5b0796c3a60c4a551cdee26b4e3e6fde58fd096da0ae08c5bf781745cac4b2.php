<?php

/* LGPCourseBundle:Course:category.html.twig */
class __TwigTemplate_0cdf416385133e3d415399f2e93bf862beea2a130cfa28b00b6680c8c90406b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Course:category.html.twig", 2);
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
        $__internal_8fc449c951e71adb2ee874705eef0990e82dd6b1cbe22057005b4e212b393ed7 = $this->env->getExtension("native_profiler");
        $__internal_8fc449c951e71adb2ee874705eef0990e82dd6b1cbe22057005b4e212b393ed7->enter($__internal_8fc449c951e71adb2ee874705eef0990e82dd6b1cbe22057005b4e212b393ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Course:category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fc449c951e71adb2ee874705eef0990e82dd6b1cbe22057005b4e212b393ed7->leave($__internal_8fc449c951e71adb2ee874705eef0990e82dd6b1cbe22057005b4e212b393ed7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a00dca615f6b172109dda75a2386efa1a7df050b40c0b7816c5cebf61275ecc1 = $this->env->getExtension("native_profiler");
        $__internal_a00dca615f6b172109dda75a2386efa1a7df050b40c0b7816c5cebf61275ecc1->enter($__internal_a00dca615f6b172109dda75a2386efa1a7df050b40c0b7816c5cebf61275ecc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Categorie ";
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a00dca615f6b172109dda75a2386efa1a7df050b40c0b7816c5cebf61275ecc1->leave($__internal_a00dca615f6b172109dda75a2386efa1a7df050b40c0b7816c5cebf61275ecc1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_061239d92d9bb011158942f519a3570fe888c5c7766cde7b93003f5479a16cc1 = $this->env->getExtension("native_profiler");
        $__internal_061239d92d9bb011158942f519a3570fe888c5c7766cde7b93003f5479a16cc1->enter($__internal_061239d92d9bb011158942f519a3570fe888c5c7766cde7b93003f5479a16cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
\t\t\t<!-- start end Page title -->
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
\t\t\t\t\t\t\t<h1 class=\"hero-title\">Catégorie ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<ol class=\"breadcrumb-list\">
\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Accueil</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Categories</a></li>
\t\t\t\t\t\t\t\t<li><span>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
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
\t\t\t\t\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"sidebar-module\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"sidebar-title\" style=\"font-size:17px;margin-bottom:10px;\">Chechez par catégorie</h6>
\t\t\t\t\t\t\t\t\t\t<ul class=\"category\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Anglais</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Science</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Business</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Musique</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Langues</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Informatique</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Art</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Cuisine</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Danse</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
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
\t\t\t\t\t\t\t\t\t<h3 class=\"sorting-title uppercase\">Cours dans la catégorie ";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t<p class=\"sorting-lead\">12 Cours</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"GridLex-grid-noGutter-equalHeight\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"GridLex-col-4_sm-6_xs-12 mb-20\">
\t\t\t\t\t\t\t\t\t\t<div class=\"package-grid-item\"> 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/categories/maths.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Analyse</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>C'est la branche des mathématiques qui traite explicitement de la notion de limite, que ce soit la limite d'une suite ou la limite d'une fonction. Elle inclut également des notions comme la continuité, la dérivation et l'intégration.  </p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"GridLex-col-4_sm-6_xs-12 mb-20\">
\t\t\t\t\t\t\t\t\t\t<div class=\"package-grid-item\"> 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/categories/phy.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>Analyse</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>C'est la branche des mathématiques qui traite explicitement de la notion de limite, que ce soit la limite d'une suite ou la limite d'une fonction. Elle inclut également des notions comme la continuité, la dérivation et l'intégration.  </p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
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
        
        $__internal_061239d92d9bb011158942f519a3570fe888c5c7766cde7b93003f5479a16cc1->leave($__internal_061239d92d9bb011158942f519a3570fe888c5c7766cde7b93003f5479a16cc1_prof);

    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Course:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 106,  158 => 91,  141 => 77,  112 => 51,  82 => 24,  74 => 19,  63 => 11,  59 => 9,  53 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Categorie {{ category }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/* 			<!-- start end Page title -->*/
/* 			<div class="page-title" style="background-image:url('{{ asset('images/hero-header/breadcrumb.jpg') }}');">*/
/* 				*/
/* 				<div class="container">*/
/* 				*/
/* 					<div class="row">*/
/* 					*/
/* 						<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">*/
/* 						*/
/* 							<h1 class="hero-title">Catégorie {{ category }}</h1>*/
/* 							*/
/* 							<ol class="breadcrumb-list">*/
/* 								<li><a href="index.html">Accueil</a></li>*/
/* 								<li><a href="#">Categories</a></li>*/
/* 								<li><span>{{ category }}</span></li>*/
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
/* 								<div class="sidebar-inner">*/
/* 								*/
/* 									<div class="sidebar-module">*/
/* 										<h6 class="sidebar-title" style="font-size:17px;margin-bottom:10px;">Chechez par catégorie</h6>*/
/* 										<ul class="category">*/
/* 											<li class="active"><a href="#">{{ category }}</a></li>*/
/* 											<li><a href="#">Anglais</a></li>*/
/* 											<li><a href="#">Science</a></li>*/
/* 											<li><a href="#">Business</a></li>*/
/* 											<li><a href="#">Musique</a></li>*/
/* 											<li><a href="#">Langues</a></li>*/
/* 											<li><a href="#">Informatique</a></li>*/
/* 											<li><a href="#">Art</a></li>*/
/* 											<li><a href="#">Cuisine</a></li>*/
/* 											<li><a href="#">Danse</a></li>*/
/* 										</ul>*/
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
/* 									<h3 class="sorting-title uppercase">Cours dans la catégorie {{ category }}</h3>*/
/* 									<p class="sorting-lead">12 Cours</p>*/
/* 								</div>*/
/* 								*/
/* */
/* 							</div>*/
/* 							<div class="GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller">*/
/* 						*/
/* 								<div class="GridLex-grid-noGutter-equalHeight">*/
/* 								*/
/* 									<div class="GridLex-col-4_sm-6_xs-12 mb-20">*/
/* 										<div class="package-grid-item"> */
/* 											<a href="#">*/
/* 												<div class="image">*/
/* 													<img src="{{ asset('images/categories/maths.jpg') }}" alt="Tour Package" />*/
/* 													*/
/* 												</div>*/
/* 												<div class="content-category">*/
/* 													<h6>Analyse</h6>*/
/* 													<p>C'est la branche des mathématiques qui traite explicitement de la notion de limite, que ce soit la limite d'une suite ou la limite d'une fonction. Elle inclut également des notions comme la continuité, la dérivation et l'intégration.  </p>*/
/* 												</div>*/
/* 											</a>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 									<div class="GridLex-col-4_sm-6_xs-12 mb-20">*/
/* 										<div class="package-grid-item"> */
/* 											<a href="#">*/
/* 												<div class="image">*/
/* 													<img src="{{ asset('images/categories/phy.jpg') }}" alt="Tour Package" />*/
/* 													*/
/* 												</div>*/
/* 												<div class="content-category">*/
/* 													<h6>Analyse</h6>*/
/* 													<p>C'est la branche des mathématiques qui traite explicitement de la notion de limite, que ce soit la limite d'une suite ou la limite d'une fonction. Elle inclut également des notions comme la continuité, la dérivation et l'intégration.  </p>*/
/* 												</div>*/
/* 											</a>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 									*/
/* 									*/
/* 								</div>*/
/* 							*/
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
/*     */
/* {% endblock %}*/
