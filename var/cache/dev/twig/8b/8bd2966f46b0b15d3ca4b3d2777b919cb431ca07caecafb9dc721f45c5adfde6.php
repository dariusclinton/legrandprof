<?php

/* LGPCourseBundle:Course:prof_block.html.twig */
class __TwigTemplate_2b1a860f7322f1e9449be6ef09b4b34e39b5da36edffd54d5281d66fde58d644 extends Twig_Template
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
        $__internal_b6cc508d209eb7c40cc3e86da2d90d859c7d7f3be59fffec1abb7a12c1643fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6cc508d209eb7c40cc3e86da2d90d859c7d7f3be59fffec1abb7a12c1643fb7->enter($__internal_b6cc508d209eb7c40cc3e86da2d90d859c7d7f3be59fffec1abb7a12c1643fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPCourseBundle:Course:prof_block.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array())) != 0)) {
            // line 2
            echo "
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "matieres_profs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["enseigne"]) {
                // line 4
                echo "        <div class=\"package-list-item clearfix\">
            <div class=\"image\">
                ";
                // line 6
                if ((null === $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "image", array()))) {
                    // line 7
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/profils/default.png"), "html", null, true);
                    echo "\" alt=\"Tour Package\"/>
                ";
                } else {
                    // line 9
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "image", array()), "webPath", array())), "html", null, true);
                    echo "\" alt=\" image prof \"/>
                ";
                }
                // line 11
                echo "            </div>

            <div class=\"content\">
                <h5>";
                // line 14
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "prenoms", array()) . "  ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "nom", array()))), "html", null, true);
                echo "
                    <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button>
                </h5>
                <div class=\"row gap-10\">
                    <div class=\"col-sm-12 col-md-9\">

                        <p class=\"line18\"> ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "presentation", array()), "html", null, true);
                echo " </p>
                        <br>
                        <ul class=\"list-info\">
                            <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span
                                        class=\"font600\">Position: </span>
                                ";
                // line 25
                if ( !(null === $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array()))) {
                    // line 26
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "ville", array())), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 28
                    echo "                                    NON DEFINIE
                                ";
                }
                // line 30
                echo "                            </li>

                            <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span
                                        class=\"font600\">Cours :</span>
                                ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "enseignementRep", array()), "getCoursByProf", array(0 => $this->getAttribute($context["enseigne"], "prof", array())), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["ens_cours"]) {
                    // line 35
                    echo "                                    ";
                    if (($this->getAttribute($context["loop"], "index", array()) != $this->getAttribute($context["loop"], "last", array()))) {
                        // line 36
                        echo "                                        <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_find_prof_course", array("slug_course" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "slug", array()))), "html", null, true);
                        echo " \"
                                           title=\"\">";
                        // line 37
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a> -
                                    ";
                    } else {
                        // line 39
                        echo "                                        <a href=\" ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_find_prof_course", array("slug_course" => $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "slug", array()))), "html", null, true);
                        echo " \"
                                           title=\"\">";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens_cours"], "cours", array()), "intitule", array()), "html", null, true);
                        echo "</a>
                                    ";
                    }
                    // line 42
                    echo "                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens_cours'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                            </li>
                        </ul>

                    </div>
                    <div class=\"col-sm-12 col-md-3 text-right text-left-sm\">
                        ";
                // line 48
                $context["avisSum"] = 0;
                // line 49
                echo "                        ";
                $context["allAvis"] = $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "avisRep", array()), "findBy", array(0 => array("prof" => $this->getAttribute($context["enseigne"], "prof", array()))), "method");
                // line 50
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis")));
                foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                    // line 51
                    echo "                            ";
                    $context["avisSum"] = ((isset($context["avisSum"]) ? $context["avisSum"] : $this->getContext($context, "avisSum")) + $this->getAttribute($context["avis"], "note", array()));
                    // line 52
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                        ";
                if ((twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))) != 0)) {
                    // line 54
                    echo "                            ";
                    $context["avisRange"] = ((isset($context["avisSum"]) ? $context["avisSum"] : $this->getContext($context, "avisSum")) / twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))));
                    // line 55
                    echo "                        ";
                } else {
                    // line 56
                    echo "                            ";
                    $context["avisRange"] = 0;
                    // line 57
                    echo "                        ";
                }
                // line 58
                echo "                        <div class=\"rating-wrapper\">
                            <div class=\"raty-wrapper\">
                                <div>
                                    ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 62
                    echo "                                        ";
                    if ((twig_round((isset($context["avisRange"]) ? $context["avisRange"] : $this->getContext($context, "avisRange"))) >= $context["i"])) {
                        // line 63
                        echo "                                            <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                 src=\"";
                        // line 64
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/raty/star-on-sm.png"), "html", null, true);
                        echo "\">
                                        ";
                    } else {
                        // line 66
                        echo "                                            <img alt=\" ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " \"
                                                 src=\"";
                        // line 67
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/raty/star-off-sm.png"), "html", null, true);
                        echo "\"
                                                 title=\"\">
                                        ";
                    }
                    // line 70
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                                </div>
                                <span> / ";
                // line 72
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["allAvis"]) ? $context["allAvis"] : $this->getContext($context, "allAvis"))), "html", null, true);
                echo " avis</span>
                            </div>
                        </div>
                        ";
                // line 75
                ob_start();
                // line 76
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "enseignementRep", array()), "getPrixProf", array(0 => $this->getAttribute($context["enseigne"], "prof", array())), "method"), "html", null, true);
                echo "
                        ";
                $context["minPrice"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 78
                echo "                        <div class=\"price\">";
                echo twig_escape_filter($this->env, (isset($context["minPrice"]) ? $context["minPrice"] : $this->getContext($context, "minPrice")), "html", null, true);
                echo " Fcfa / Mois <br> Prix minimal</div>
                        <a href=\" ";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_course_profile_prof", array("slug" => $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "slug", array()))), "html", null, true);
                echo " \"
                           class=\"btn btn-primary btn-sm\">Voir Profil</a>
                        <a href=\" ";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lgp_reservation_detail", array("slug" => $this->getAttribute($this->getAttribute($context["enseigne"], "prof", array()), "slug", array()))), "html", null, true);
                echo " \"
                           class=\"anchor btn btn-primary btn-sm\" style=\"margin-top: 10px;\">Réserver
                            un cours</a>
                    </div>
                </div>
            </div>

        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseigne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_b6cc508d209eb7c40cc3e86da2d90d859c7d7f3be59fffec1abb7a12c1643fb7->leave($__internal_b6cc508d209eb7c40cc3e86da2d90d859c7d7f3be59fffec1abb7a12c1643fb7_prof);

    }

    public function getTemplateName()
    {
        return "LGPCourseBundle:Course:prof_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 81,  245 => 79,  240 => 78,  234 => 76,  232 => 75,  226 => 72,  223 => 71,  217 => 70,  211 => 67,  206 => 66,  201 => 64,  196 => 63,  193 => 62,  189 => 61,  184 => 58,  181 => 57,  178 => 56,  175 => 55,  172 => 54,  169 => 53,  163 => 52,  160 => 51,  155 => 50,  152 => 49,  150 => 48,  143 => 43,  129 => 42,  124 => 40,  119 => 39,  114 => 37,  109 => 36,  106 => 35,  89 => 34,  83 => 30,  79 => 28,  73 => 26,  71 => 25,  63 => 20,  54 => 14,  49 => 11,  43 => 9,  37 => 7,  35 => 6,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if params.matieres_profs | length != 0 %}

    {% for enseigne in params.matieres_profs %}
        <div class=\"package-list-item clearfix\">
            <div class=\"image\">
                {% if enseigne.prof.image is null %}
                    <img src=\"{{ asset('uploads/profils/default.png') }}\" alt=\"Tour Package\"/>
                {% else %}
                    <img src=\"{{ asset(enseigne.prof.image.webPath) }}\" alt=\" image prof \"/>
                {% endif %}
            </div>

            <div class=\"content\">
                <h5>{{ enseigne.prof.prenoms ~\"  \"~ enseigne.prof.nom | upper }}
                    <button class=\"btn\"><i class=\"fa fa-heart-o\"></i></button>
                </h5>
                <div class=\"row gap-10\">
                    <div class=\"col-sm-12 col-md-9\">

                        <p class=\"line18\"> {{ enseigne.prof.presentation }} </p>
                        <br>
                        <ul class=\"list-info\">
                            <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span
                                        class=\"font600\">Position: </span>
                                {% if enseigne.prof.ville is not null %}
                                    {{ enseigne.prof.ville | upper }}
                                {% else %}
                                    NON DEFINIE
                                {% endif %}
                            </li>

                            <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span
                                        class=\"font600\">Cours :</span>
                                {% for ens_cours in params.enseignementRep.getCoursByProf(enseigne.prof) %}
                                    {% if loop.index != loop.last %}
                                        <a href=\" {{ path('lgp_course_find_prof_course',{'slug_course':ens_cours.cours.slug,}) }} \"
                                           title=\"\">{{ ens_cours.cours.intitule }}</a> -
                                    {% else %}
                                        <a href=\" {{ path('lgp_course_find_prof_course',{'slug_course':ens_cours.cours.slug}) }} \"
                                           title=\"\">{{ ens_cours.cours.intitule }}</a>
                                    {% endif %}
                                {% endfor %}
                            </li>
                        </ul>

                    </div>
                    <div class=\"col-sm-12 col-md-3 text-right text-left-sm\">
                        {% set avisSum = 0 %}
                        {% set allAvis = params.avisRep.findBy({'prof':enseigne.prof}) %}
                        {% for avis in  allAvis %}
                            {% set avisSum = avisSum + avis.note %}
                        {% endfor %}
                        {% if allAvis | length != 0 %}
                            {% set avisRange = avisSum / allAvis | length %}
                        {% else %}
                            {% set avisRange = 0 %}
                        {% endif %}
                        <div class=\"rating-wrapper\">
                            <div class=\"raty-wrapper\">
                                <div>
                                    {% for i in range(1,5) %}
                                        {% if (avisRange | round) >= i %}
                                            <img alt=\" {{ i }} \"
                                                 src=\"{{ asset('images/raty/star-on-sm.png') }}\">
                                        {% else %}
                                            <img alt=\" {{ i }} \"
                                                 src=\"{{ asset('images/raty/star-off-sm.png') }}\"
                                                 title=\"\">
                                        {% endif %}
                                    {% endfor %}
                                </div>
                                <span> / {{ allAvis | length }} avis</span>
                            </div>
                        </div>
                        {% set minPrice %}
                            {{ params.enseignementRep.getPrixProf(enseigne.prof) }}
                        {% endset %}
                        <div class=\"price\">{{ minPrice }} Fcfa / Mois <br> Prix minimal</div>
                        <a href=\" {{ path('lgp_course_profile_prof',{'slug' : enseigne.prof.slug}) }} \"
                           class=\"btn btn-primary btn-sm\">Voir Profil</a>
                        <a href=\" {{ path('lgp_reservation_detail',{'slug': enseigne.prof.slug}) }} \"
                           class=\"anchor btn btn-primary btn-sm\" style=\"margin-top: 10px;\">Réserver
                            un cours</a>
                    </div>
                </div>
            </div>

        </div>
    {% endfor %}
{% endif %}";
    }
}
