<?php

/* LGPCourseBundle:Categorie:course_list.html.twig */
class __TwigTemplate_792ccd9f8d91bd99b560014d43a29a6abbedc5075ee5ba780e081327e6142075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Categorie:course_list.html.twig", 2);
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
        echo "    Categorie-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "category", array()), "slug", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
        echo "');\">

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                    <h1 class=\"hero-title\">Catégorie ";
        // line 19
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "category", array()), "intitule", array())), "html", null, true);
        echo "</h1>

                    <ol class=\"breadcrumb-list\">
                        <li><a href=\" ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_core_homepage");
        echo " \">Accueil</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_categories");
        echo "\">Categories</a></li>
                        <li><span>";
        // line 24
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "category", array()), "intitule", array())), "html", null, true);
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
                                <h6 class=\"sidebar-title\" style=\"font-size:17px;margin-bottom:10px;\">Plus de catégories</h6>
                                <ul class=\"category\">
                                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 52
            echo "                                        ";
            if ((twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "category", array()), "intitule", array())) != twig_lower_filter($this->env, $this->getAttribute($context["cat"], "intitule", array())))) {
                // line 53
                echo "                                            <li><a href=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_find_category", array("slug" => $this->getAttribute($context["cat"], "slug", array()))), "html", null, true);
                echo " \">
                                                    ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "intitule", array()), "html", null, true);
                echo "
                                                </a>
                                            </li>
                                        ";
            }
            // line 58
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                    <li></li>
                                    <li><a href=\" ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_categories");
        echo " \" title=\"\">voir toutes les categories</a></li>
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "category", array()), "intitule", array()), "html", null, true);
        echo "</h3>
                            <p class=\"sorting-lead\">
                                ";
        // line 79
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courses", array())), "html", null, true);
        echo " Cours
                            </p>
                        </div>
                    </div>
                    <div class=\"GridLex-gap-20-wrappper package-grid-item-wrapper on-page-result-page alt-smaller\">


                        <div class=\"GridLex-grid-noGutter-equalHeight\">


                            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "courses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 90
            echo "                                <div class=\"GridLex-col-4_sm-6_xs-12 mb-20\">
                                    <div class=\"package-grid-item\"> 
                                        <a href=\" ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_find_prof", array("slug" => $this->getAttribute($context["course"], "slug", array()))), "html", null, true);
            echo " \">
                                            <div class=\"image\">
                                                ";
            // line 94
            if ( !(null === $this->getAttribute($context["course"], "image", array()))) {
                // line 95
                echo "                                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["course"], "image", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\" image cours \" />
                                                ";
            }
            // line 97
            echo "                                            </div>
                                            <div class=\"content-category\">
                                                <h6>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "intitule", array()), "html", null, true);
            echo "</h6>
                                                <p> ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "description", array()), "html", null, true);
            echo "  </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "

                        </div>

                    </div>

                    ";
        // line 112
        $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "LGPCourseBundle:Categorie:course_list.html.twig", 112)->display($context);
        // line 113
        echo "

                </div>

                ";
        // line 124
        echo "
            </div>

        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Categorie:course_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 124,  220 => 113,  218 => 112,  210 => 106,  198 => 100,  194 => 99,  190 => 97,  184 => 95,  182 => 94,  177 => 92,  173 => 90,  169 => 89,  156 => 79,  151 => 77,  131 => 60,  128 => 59,  122 => 58,  115 => 54,  110 => 53,  107 => 52,  103 => 51,  73 => 24,  69 => 23,  65 => 22,  59 => 19,  48 => 11,  44 => 9,  41 => 8,  32 => 5,  29 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "";
    }
}
