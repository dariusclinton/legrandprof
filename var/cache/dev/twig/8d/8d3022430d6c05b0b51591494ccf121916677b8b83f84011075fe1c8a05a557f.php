<?php

/* LGPCourseBundle:Pagination:pagination.html.twig */
class __TwigTemplate_6196b79876e7a2b1f17e1b7fd2334c1394d7bf852b5d4ca74317ccd487889a4f extends Twig_Template
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
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "pages_count", array()) > 1)) {
            // line 2
            echo "    <div class=\"pager-wrappper clearfix\">

        <div class=\"pager-innner\">

            <div class=\"flex-row flex-align-middle\">

                <div class=\"flex-column flex-sm-12\">
                    Resultats de ";
            // line 9
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) - 1) * $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "max_per_page", array())) + 1), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) * $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "max_per_page", array())), "html", null, true);
            echo " sur ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "profs_count", array()), "html", null, true);
            echo " 
                </div>

                <div class=\"flex-column flex-sm-12\">
                    <nav class=\"pager-right\">
                        <ul class=\"pagination\">
                            ";
            // line 15
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) > 1)) {
                // line 16
                echo "                                <li>
                                    <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), array("cours" => (isset($context["cours"]) ? $context["cours"] : null), "page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) - 1))), "html", null, true);
                echo "\" title=\"precedent\">
                                        &laquo;
                                    </a>
                                </li>
                            ";
            }
            // line 22
            echo "
                            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) - 2), 1), min(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) + 2), $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "pages_count", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 24
                echo "
                                <li ";
                // line 25
                if (($context["p"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()))) {
                    echo "class=\"active\"";
                }
                echo "> 
                                    <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), array("cours" => (isset($context["cours"]) ? $context["cours"] : null), "page" => $context["p"])), "html", null, true);
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
            // line 31
            echo "                            ";
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "pages_count", array()))) {
                // line 32
                echo "                                <li>
                                    <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), array("cours" => (isset($context["cours"]) ? $context["cours"] : null), "page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) + 1))), "html", null, true);
                echo "\" title=\"suivant\">&raquo;
                                    </a>
                                </li>
                            ";
            }
            // line 37
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
        return array (  98 => 37,  91 => 33,  88 => 32,  85 => 31,  72 => 26,  66 => 25,  63 => 24,  59 => 23,  56 => 22,  48 => 17,  45 => 16,  43 => 15,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% if pagination.pages_count > 1 %}*/
/*     <div class="pager-wrappper clearfix">*/
/* */
/*         <div class="pager-innner">*/
/* */
/*             <div class="flex-row flex-align-middle">*/
/* */
/*                 <div class="flex-column flex-sm-12">*/
/*                     Resultats de {{((pagination.page -1)*pagination.max_per_page)+1}} à {{pagination.page*pagination.max_per_page}} sur {{pagination.profs_count}} */
/*                 </div>*/
/* */
/*                 <div class="flex-column flex-sm-12">*/
/*                     <nav class="pager-right">*/
/*                         <ul class="pagination">*/
/*                             {% if pagination.page > 1 %}*/
/*                                 <li>*/
/*                                     <a href="{{ path(pagination.route,  {'cours':cours,'page':  pagination.page-1}) }}" title="precedent">*/
/*                                         &laquo;*/
/*                                     </a>*/
/*                                 </li>*/
/*                             {% endif %}*/
/* */
/*                             {% for p in range(max(pagination.page-2, 1), min(pagination.page+2, pagination.pages_count)) %}*/
/* */
/*                                 <li {% if p == pagination.page %}class="active"{% endif %}> */
/*                                     <a href="{{path(pagination.route, {'cours':cours,'page':  p})}}">{{ p }}*/
/*                                     </a>*/
/*                                 </li>*/
/* */
/*                             {% endfor %}*/
/*                             {% if pagination.page < pagination.pages_count %}*/
/*                                 <li>*/
/*                                     <a href="{{ path(pagination.route,  {'cours':cours,'page':  pagination.page+1}) }}" title="suivant">&raquo;*/
/*                                     </a>*/
/*                                 </li>*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                     </nav>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* {% endif %}*/
