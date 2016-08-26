<?php

/* LGPCourseBundle:Pagination:pagination.html.twig */
class __TwigTemplate_4b557da848512378709a001e0bdde4ec35fcb92414b45f428ae7e251a77d0201 extends Twig_Template
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
        $__internal_3604806fdc724f494cddf19ee00af9292fc88fdb5a1101731fdfb65d40e6eb19 = $this->env->getExtension("native_profiler");
        $__internal_3604806fdc724f494cddf19ee00af9292fc88fdb5a1101731fdfb65d40e6eb19->enter($__internal_3604806fdc724f494cddf19ee00af9292fc88fdb5a1101731fdfb65d40e6eb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Pagination:pagination.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "pages_count", array()) > 1)) {
            // line 2
            echo "    <div class=\"pager-wrappper clearfix\">

        <div class=\"pager-innner\">

            <div class=\"flex-row flex-align-middle\">

                <div class=\"flex-column flex-sm-12\">
                    Resultats de ";
            // line 9
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "page", array()) - 1) * $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "max_per_page", array())) + 1), "html", null, true);
            echo " 
                    à 
                    ";
            // line 11
            if ((($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "page", array()) * $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "max_per_page", array())) > $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "profs_count", array()))) {
                // line 12
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "profs_count", array()), "html", null, true);
                echo "
                    ";
            } else {
                // line 14
                echo "                        ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "page", array()) * $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "max_per_page", array())), "html", null, true);
                echo "
                    ";
            }
            // line 15
            echo " 
                    sur  ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "profs_count", array()), "html", null, true);
            echo " 
                </div>

                <div class=\"flex-column flex-sm-12\">
                    <nav class=\"pager-right\">
                        <ul class=\"pagination\">
                            ";
            // line 22
            if (($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "page", array()) > 1)) {
                // line 23
                echo "                                <li>
                                    <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "route_params", array()), array("page" => ($this->getAttribute($this->getAttribute(                // line 25
(isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "page", array()) - 1)))), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "page", array()) - 2), 1), min(($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "page", array()) + 2), $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "pages_count", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 32
                echo "
                                <li ";
                // line 33
                if (($context["p"] == $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "page", array()))) {
                    echo "class=\"active\"";
                }
                echo "> 
                                    <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "route_params", array()), array("page" => $context["p"]))), "html", null, true);
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
            if (($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "page", array()) < $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "pages_count", array()))) {
                // line 40
                echo "                                <li>
                                    <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "route_params", array()), array("page" => ($this->getAttribute($this->getAttribute(                // line 42
(isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "pagination", array()), "page", array()) + 1)))), "html", null, true);
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
        
        $__internal_3604806fdc724f494cddf19ee00af9292fc88fdb5a1101731fdfb65d40e6eb19->leave($__internal_3604806fdc724f494cddf19ee00af9292fc88fdb5a1101731fdfb65d40e6eb19_prof);

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
        return array (  121 => 46,  114 => 42,  113 => 41,  110 => 40,  107 => 39,  94 => 34,  88 => 33,  85 => 32,  81 => 31,  78 => 30,  70 => 25,  69 => 24,  66 => 23,  64 => 22,  55 => 16,  52 => 15,  46 => 14,  40 => 12,  38 => 11,  33 => 9,  24 => 2,  22 => 1,);
    }
}
/* {% if params.pagination.pages_count > 1 %}*/
/*     <div class="pager-wrappper clearfix">*/
/* */
/*         <div class="pager-innner">*/
/* */
/*             <div class="flex-row flex-align-middle">*/
/* */
/*                 <div class="flex-column flex-sm-12">*/
/*                     Resultats de {{((params.pagination.page -1)*params.pagination.max_per_page)+1}} */
/*                     à */
/*                     {% if (params.pagination.page*params.pagination.max_per_page) > params.pagination.profs_count %}*/
/*                         {{params.pagination.profs_count}}*/
/*                     {% else %}*/
/*                         {{params.pagination.page*params.pagination.max_per_page}}*/
/*                     {% endif %} */
/*                     sur  {{params.pagination.profs_count}} */
/*                 </div>*/
/* */
/*                 <div class="flex-column flex-sm-12">*/
/*                     <nav class="pager-right">*/
/*                         <ul class="pagination">*/
/*                             {% if params.pagination.page > 1 %}*/
/*                                 <li>*/
/*                                     <a href="{{ path(params.pagination.route, params.pagination.route_params | merge( {*/
/*                                     'page':  params.pagination.page-1})) }}" title="precedent">*/
/*                                         &laquo;*/
/*                                     </a>*/
/*                                 </li>*/
/*                             {% endif %}*/
/* */
/*                             {% for p in range(max(params.pagination.page-2, 1), min(params.pagination.page+2, params.pagination.pages_count)) %}*/
/* */
/*                                 <li {% if p == params.pagination.page %}class="active"{% endif %}> */
/*                                     <a href="{{path(params.pagination.route, params.pagination.route_params | merge({'page':p})) }}">{{ p }}*/
/*                                     </a>*/
/*                                 </li>*/
/* */
/*                             {% endfor %}*/
/*                             {% if params.pagination.page < params.pagination.pages_count %}*/
/*                                 <li>*/
/*                                     <a href="{{ path(params.pagination.route, params.pagination.route_params | merge({*/
/*                                     'page':  params.pagination.page+1})) }}" title="suivant">&raquo;*/
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
