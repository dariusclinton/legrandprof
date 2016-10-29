<?php

/* LGPCourseBundle:Course:search_course_city.html.twig */
class __TwigTemplate_b9d0c027412b68b7b0f258d8832c37abb7017ff2c11f2d45d9dd4969f5749632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Course:search_course_city.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "intitule_cours", array()) . "-") . $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ville", array())), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "intitule_cours", array()), "html", null, true);
        echo " dans la ville
                        de ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ville", array()), "html", null, true);
        echo " </h1>
                    <ol class=\"breadcrumb-list\">
                        <li><a href=\" ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_core_homepage");
        echo " \">Accueil</a></li>
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_find");
        echo "\">Profs</a></li>
                        <li><span> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "intitule_cours", array()), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ville", array()), "html", null, true);
        echo "</span>
                        </li>
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
        // line 53
        $this->loadTemplate("LGPCourseBundle:Form:all_search.html.twig", "LGPCourseBundle:Course:search_course_city.html.twig", 53)->display($context);
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
                                Des Grands profs en <span style=\"color:orangered;\">";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "intitule_cours", array()), "html", null, true);
        echo "</span>
                                dans la ville de <span style=\"color:orangered;\">";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ville", array()), "html", null, true);
        echo "</span>
                            </h3>
                            <p class=\"sorting-lead\"><strong>";
        // line 180
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "matieres_profs", array())), "html", null, true);
        echo "</strong> Grand (s)
                                profs trouvés</p>
                        </div>

                        ";
        // line 211
        echo "
                    </div>

                    <div class=\"package-list-item-wrapper on-page-result-page\">
                        ";
        // line 215
        $this->loadTemplate("LGPCourseBundle:Course:prof_block.html.twig", "LGPCourseBundle:Course:search_course_city.html.twig", 215)->display($context);
        // line 216
        echo "                    </div>

                    ";
        // line 218
        $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "LGPCourseBundle:Course:search_course_city.html.twig", 218)->display($context);
        // line 219
        echo "
                </div>

            </div>

        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Course:search_course_city.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 219,  162 => 218,  158 => 216,  156 => 215,  150 => 211,  143 => 180,  138 => 178,  134 => 177,  120 => 165,  117 => 62,  113 => 54,  111 => 53,  76 => 23,  72 => 22,  68 => 21,  63 => 19,  59 => 18,  49 => 11,  44 => 8,  41 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
