<?php

/* LGPCourseBundle:Course:search.html.twig */
class __TwigTemplate_0458fa1824796fbe766a1f99cdcb617b15e8f40e786d8c823806bc829ef5352b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPCourseBundle:Course:search.html.twig", 1);
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
        echo "    Profs - ";
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
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/hero-header/breadcrumb.jpg"), "html", null, true);
        echo "');\">
        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">
                    <h1 class=\"hero-title\">Grands profs</h1>
                    <ol class=\"breadcrumb-list\">
                        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_core_homepage");
        echo " \">Accueil</a></li>
                        <li><span>Profs</span></li>
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
                                <h4>Affinez votre recherche</h4>
                            </div>

                            <div class=\"sidebar-search-content\">
                            </div>

                            ";
        // line 49
        $this->loadTemplate("LGPCourseBundle:Form:all_search.html.twig", "LGPCourseBundle:Course:search.html.twig", 49)->display($context);
        // line 50
        echo "                        </div>

                        ";
        // line 58
        echo "
                        ";
        // line 161
        echo "
                    </aside>


                </div>

                <div class=\"col-sm-8 col-md-9\">
                    <div class=\"sorting-wrappper\">

                        <div class=\"sorting-header\">

                            <h3 class=\"sorting-title uppercase\">
                                Grands profs
                            </h3>
                            <p class=\"sorting-lead\"><strong>";
        // line 175
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "matieres_profs", array())), "html", null, true);
        echo "</strong> Grands
                                profs trouvés</p>
                        </div>

                        ";
        // line 205
        echo "
                    </div>

                    <div class=\"package-list-item-wrapper on-page-result-page\">
                        ";
        // line 209
        $this->loadTemplate("LGPCourseBundle:Course:prof_block.html.twig", "LGPCourseBundle:Course:search.html.twig", 209)->display($context);
        // line 210
        echo "                    </div>

                    ";
        // line 212
        $this->loadTemplate("LGPCourseBundle:Pagination:pagination.html.twig", "LGPCourseBundle:Course:search.html.twig", 212)->display($context);
        // line 213
        echo "
                </div>

            </div>

        </div>

    </div>
";
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
        return array (  137 => 213,  135 => 212,  131 => 210,  129 => 209,  123 => 205,  116 => 175,  100 => 161,  97 => 58,  93 => 50,  91 => 49,  57 => 18,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
