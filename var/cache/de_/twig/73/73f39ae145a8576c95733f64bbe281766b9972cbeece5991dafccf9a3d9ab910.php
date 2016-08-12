<?php

/* @LGPCourse/Course/category.html.twig */
class __TwigTemplate_b551f1ad3fa038638e963a0d7886741a157646ea17421586a152eb9a46fbd15c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPCourse/Course/category.html.twig", 2);
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
        $__internal_91fc82eecdbbedeb7b52a8622bf0b898a431755fce5cb1cad533d3fe3a3853b0 = $this->env->getExtension("native_profiler");
        $__internal_91fc82eecdbbedeb7b52a8622bf0b898a431755fce5cb1cad533d3fe3a3853b0->enter($__internal_91fc82eecdbbedeb7b52a8622bf0b898a431755fce5cb1cad533d3fe3a3853b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPCourse/Course/category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91fc82eecdbbedeb7b52a8622bf0b898a431755fce5cb1cad533d3fe3a3853b0->leave($__internal_91fc82eecdbbedeb7b52a8622bf0b898a431755fce5cb1cad533d3fe3a3853b0_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_14160a0990c2950c19498dc20183d04371a9e900b89bac9b1c4769995bf600d8 = $this->env->getExtension("native_profiler");
        $__internal_14160a0990c2950c19498dc20183d04371a9e900b89bac9b1c4769995bf600d8->enter($__internal_14160a0990c2950c19498dc20183d04371a9e900b89bac9b1c4769995bf600d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Categorie ";
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_14160a0990c2950c19498dc20183d04371a9e900b89bac9b1c4769995bf600d8->leave($__internal_14160a0990c2950c19498dc20183d04371a9e900b89bac9b1c4769995bf600d8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2ca376520132086c4a17ab90c757597bd6e09846e8576d32aa2eb60d0ddfdfb = $this->env->getExtension("native_profiler");
        $__internal_f2ca376520132086c4a17ab90c757597bd6e09846e8576d32aa2eb60d0ddfdfb->enter($__internal_f2ca376520132086c4a17ab90c757597bd6e09846e8576d32aa2eb60d0ddfdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                    <h1 class=\"hero-title\">Catégorie ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
        echo "</h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\"index.html\">Accueil</a></li>
                        <li><a href=\"#\">Categories</a></li>
                        <li><span>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
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

                        <div class=\"sidebar-inner\">

                            <div class=\"sidebar-module\">
                                <h6 class=\"sidebar-title\" style=\"font-size:17px;margin-bottom:10px;\">Chechez par catégorie</h6>
                                <ul class=\"category\">
                                    <li class=\"active\"><a href=\"#\">";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
        echo "</a></li>
                                    <li><a href=\"#\">Anglais</a></li>
                                    <li><a href=\"#\">Science</a></li>
                                    <li><a href=\"#\">Business</a></li>
                                    <li><a href=\"#\">Musique</a></li>
                                    <li><a href=\"#\">Langues</a></li>
                                    <li><a href=\"#\">Informatique</a></li>
                                    <li><a href=\"#\">Art</a></li>
                                    <li><a href=\"#\">Cuisine</a></li>
                                    <li><a href=\"#\">Danse</a></li>
                                </ul>
                            </div>


                        </div>

                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">

                    <div class=\"sorting-wrappper\">

                        <div class=\"sorting-header\">
                            <h3 class=\"sorting-title uppercase\">Cours dans la catégorie ";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
        echo "</h3>
                            <p class=\"sorting-lead\">12 Cours</p>
                        </div>


                    </div>
                    <div class=\"GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller\">

                        <div class=\"GridLex-grid-noGutter-equalHeight\">

                            <div class=\"GridLex-col-4_sm-6_xs-12 mb-20\">
                                <div class=\"package-grid-item\"> 
                                    <a href=\"#\">
                                        <div class=\"image\">
                                            <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/categories/maths.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />

                                        </div>
                                        <div class=\"content-category\">
                                            <h6>Analyse</h6>
                                            <p>C'est la branche des mathématiques qui traite explicitement de la notion de limite, que ce soit la limite d'une suite ou la limite d'une fonction. Elle inclut également des notions comme la continuité, la dérivation et l'intégration.  </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class=\"GridLex-col-4_sm-6_xs-12 mb-20\">
                                <div class=\"package-grid-item\"> 
                                    <a href=\"#\">
                                        <div class=\"image\">
                                            <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/categories/phy.jpg"), "html", null, true);
        echo "\" alt=\"Tour Package\" />

                                        </div>
                                        <div class=\"content-category\">
                                            <h6>Analyse</h6>
                                            <p>C'est la branche des mathématiques qui traite explicitement de la notion de limite, que ce soit la limite d'une suite ou la limite d'une fonction. Elle inclut également des notions comme la continuité, la dérivation et l'intégration.  </p>
                                        </div>
                                    </a>
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
        
        $__internal_f2ca376520132086c4a17ab90c757597bd6e09846e8576d32aa2eb60d0ddfdfb->leave($__internal_f2ca376520132086c4a17ab90c757597bd6e09846e8576d32aa2eb60d0ddfdfb_prof);

    }

    public function getTemplateName()
    {
        return "@LGPCourse/Course/category.html.twig";
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
/*     Categorie {{ category }} - {{ parent() }}*/
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
/*                     <h1 class="hero-title">Catégorie {{ category }}</h1>*/
/* */
/*                     <ol class="breadcrumb-list">*/
/*                         <li><a href="index.html">Accueil</a></li>*/
/*                         <li><a href="#">Categories</a></li>*/
/*                         <li><span>{{ category }}</span></li>*/
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
/*                         <div class="sidebar-inner">*/
/* */
/*                             <div class="sidebar-module">*/
/*                                 <h6 class="sidebar-title" style="font-size:17px;margin-bottom:10px;">Chechez par catégorie</h6>*/
/*                                 <ul class="category">*/
/*                                     <li class="active"><a href="#">{{ category }}</a></li>*/
/*                                     <li><a href="#">Anglais</a></li>*/
/*                                     <li><a href="#">Science</a></li>*/
/*                                     <li><a href="#">Business</a></li>*/
/*                                     <li><a href="#">Musique</a></li>*/
/*                                     <li><a href="#">Langues</a></li>*/
/*                                     <li><a href="#">Informatique</a></li>*/
/*                                     <li><a href="#">Art</a></li>*/
/*                                     <li><a href="#">Cuisine</a></li>*/
/*                                     <li><a href="#">Danse</a></li>*/
/*                                 </ul>*/
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
/*                             <h3 class="sorting-title uppercase">Cours dans la catégorie {{ category }}</h3>*/
/*                             <p class="sorting-lead">12 Cours</p>*/
/*                         </div>*/
/* */
/* */
/*                     </div>*/
/*                     <div class="GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller">*/
/* */
/*                         <div class="GridLex-grid-noGutter-equalHeight">*/
/* */
/*                             <div class="GridLex-col-4_sm-6_xs-12 mb-20">*/
/*                                 <div class="package-grid-item"> */
/*                                     <a href="#">*/
/*                                         <div class="image">*/
/*                                             <img src="{{ asset('images/categories/maths.jpg') }}" alt="Tour Package" />*/
/* */
/*                                         </div>*/
/*                                         <div class="content-category">*/
/*                                             <h6>Analyse</h6>*/
/*                                             <p>C'est la branche des mathématiques qui traite explicitement de la notion de limite, que ce soit la limite d'une suite ou la limite d'une fonction. Elle inclut également des notions comme la continuité, la dérivation et l'intégration.  </p>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="GridLex-col-4_sm-6_xs-12 mb-20">*/
/*                                 <div class="package-grid-item"> */
/*                                     <a href="#">*/
/*                                         <div class="image">*/
/*                                             <img src="{{ asset('images/categories/phy.jpg') }}" alt="Tour Package" />*/
/* */
/*                                         </div>*/
/*                                         <div class="content-category">*/
/*                                             <h6>Analyse</h6>*/
/*                                             <p>C'est la branche des mathématiques qui traite explicitement de la notion de limite, que ce soit la limite d'une suite ou la limite d'une fonction. Elle inclut également des notions comme la continuité, la dérivation et l'intégration.  </p>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/* */
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
/* */
/* {% endblock %}*/
