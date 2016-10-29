<?php

/* LGPCourseBundle:Pagination:pagination.html.twig */
class __TwigTemplate_ee0c949431ed3b2e16889a9e748118b782d5ec0468e7df0639ffea55900a4a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "pages_count", array()) > 1)) {
            // line 2
            echo "    <div class=\"pager-wrappper clearfix\">

        <div class=\"pager-innner\">

            <div class=\"flex-row flex-align-middle\">

                <div class=\"flex-column flex-sm-12\">
                    Resultats de ";
            // line 9
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "page", array()) - 1) * $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "max_per_page", array())) + 1), "html", null, true);
            echo " 
                    à 
                    ";
            // line 11
            if ((($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "page", array()) * $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "max_per_page", array())) > $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "profs_count", array()))) {
                // line 12
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "profs_count", array()), "html", null, true);
                echo "
                    ";
            } else {
                // line 14
                echo "                        ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "page", array()) * $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "max_per_page", array())), "html", null, true);
                echo "
                    ";
            }
            // line 15
            echo " 
                    sur  ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "profs_count", array()), "html", null, true);
            echo " 
                </div>

                <div class=\"flex-column flex-sm-12\">
                    <nav class=\"pager-right\">
                        <ul class=\"pagination\">
                            ";
            // line 22
            if (($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "page", array()) > 1)) {
                // line 23
                echo "                                <li>
                                    <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "route_params", array()), array("page" => ($this->getAttribute($this->getAttribute(                // line 25
(isset($context["params"]) ? $context["params"] : null), "pagination", array()), "page", array()) - 1)))), "html", null, true);
                echo "\" title=\"precedent\">
                                        &laquo;
                                    </a>
                                </li>
                            ";
            }
            // line 30
            echo "
                            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "page", array()) - 2), 1), min(($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "page", array()) + 2), $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "pages_count", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 32
                echo "
                                <li ";
                // line 33
                if (($context["p"] == $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "page", array()))) {
                    echo "class=\"active\"";
                }
                echo "> 
                                    <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "route_params", array()), array("page" => $context["p"]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                                    </a>
                                </li>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                            ";
            if (($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "page", array()) < $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "pages_count", array()))) {
                // line 40
                echo "                                <li>
                                    <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "pagination", array()), "route_params", array()), array("page" => ($this->getAttribute($this->getAttribute(                // line 42
(isset($context["params"]) ? $context["params"] : null), "pagination", array()), "page", array()) + 1)))), "html", null, true);
                echo "\" title=\"suivant\">&raquo;
                                    </a>
                                </li>
                            ";
            }
            // line 46
            echo "                        </ul>
                    </nav>
                </div>

            </div>

        </div>

    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Pagination:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 46,  111 => 42,  110 => 41,  107 => 40,  104 => 39,  91 => 34,  85 => 33,  82 => 32,  78 => 31,  75 => 30,  67 => 25,  66 => 24,  63 => 23,  61 => 22,  52 => 16,  49 => 15,  43 => 14,  37 => 12,  35 => 11,  30 => 9,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
