<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ea8372b502eab537453e6788714b3e134ec652bc6eec023f023d08e2b4a73174 extends Twig_Template
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
        $__internal_7c777e465cee3b0c762660fd6ad592a2814e03daf98391ed4b4bcfedb3660e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c777e465cee3b0c762660fd6ad592a2814e03daf98391ed4b4bcfedb3660e9a->enter($__internal_7c777e465cee3b0c762660fd6ad592a2814e03daf98391ed4b4bcfedb3660e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"content-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"profile-block\">
                    ";
        // line 8
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()))) {
            // line 9
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
                    ";
        } else {
            // line 11
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/profils/default.png"), "html", null, true);
            echo "\"
                             alt=\"Tour Package\"/>
                    ";
        }
        // line 14
        echo "                </div>
                <div class=\"infos-block\">
                    <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</h2>
                    <p>
                        <span class=\"on\"><i class=\"fa fa-check\"></i></span>&nbsp;&nbsp;Profil complet<br>
                        <span class=\"off\"><i class=\"fa fa-remove\"></i></span> &nbsp;&nbsp;Profil recommandé
                    </p>
                    <center>
                        <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-primary\">Compléter profil</a>
                        <br><br>
                        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-primary btn-sm\">Modifier le mot
                            de passe</a>
                    </center>

                </div>
            </div>

            <div class=\"col-md-9\">

                <div class=\"notifications-block\">
                    <div class=\"notifications-header\">
                        Hello
                        ";
        // line 36
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()))) {
            // line 37
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
            echo "
                        ";
        } else {
            // line 39
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "
                        ";
        }
        // line 41
        echo "                    </div>
                    <div class=\"notifications-content\">
                        <h1>
                            Hello
                            ";
        // line 45
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()))) {
            // line 46
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
            echo "
                            ";
        } else {
            // line 48
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "
                            ";
        }
        // line 50
        echo "                        </h1>
                    </div>
                </div>

                <div class=\"notifications-block\">

                    <div class=\"notifications-header\">
                        Qui suis je ?
                    </div>
                    <div class=\"notifications-content\">
                        <p>Email: ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
                        <p>Nom: ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
                        <p>Prenoms: ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo "</p>
                        <p>Date de naissance: ";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</p>
                        <p>
                            Sexe:
                            ";
        // line 66
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "sexe", array()) == "m")) {
            // line 67
            echo "                                Masculin
                            ";
        } else {
            // line 69
            echo "                                Féminin
                            ";
        }
        // line 71
        echo "                        </p>
                        <p>Telephone: ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "telephone", array()), "html", null, true);
        echo "</p>
                        <p>Pays: ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()), "html", null, true);
        echo "</p>

                        ";
        // line 76
        echo "                        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROF")) {
            // line 77
            echo "                        <p>Ville: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ville", array()), "html", null, true);
            echo "</p>
                        <p>boite Postale: ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "boitePostale", array()), "html", null, true);
            echo "</p>
                        <p>Situation matrimoniale: ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "situationMatrimoniale", array()), "html", null, true);
            echo "</p>
                        <p>Niveau scolaire: ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "niveauScolaire", array()), "html", null, true);
            echo "</p>
                        <p>Nombre d'enfants: ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombreEnfants", array()), "html", null, true);
            echo "</p>
                        <p>Presentation: ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "presentation", array()), "html", null, true);
            echo "</p>
                        <p>Profession: ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profession", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"notifications-block\">
                    <div class=\"notifications-header\">Quartiers cibles</div>
                    <div class=\"notifications-content\">
                        <ul>
                            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "quartierCibles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quartier"]) {
                // line 91
                echo "                                <li>
                                    ";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["quartier"], "affichage", array()), "html", null, true);
                echo "
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quartier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                        </ul>
                    </div>
                </div>
                <div class=\"notifications-block\">
                    <div class=\"notifications-header\">Expérience professionnelle</div>
                    <div class=\"notifications-content\">
                        <ul>
                            ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "experiencePros", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
                // line 103
                echo "                                <li>
                                    ";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "poste", array()), "html", null, true);
                echo "
                                    à
                                    ";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "etablissement", array()), "html", null, true);
                echo "
                                    de
                                    ";
                // line 108
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateDebut", array()), "d/m/y"), "html", null, true);
                echo "
                                    à
                                    ";
                // line 110
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateFin", array()), "d/m/y"), "html", null, true);
                echo "
                                    ";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "description", array()), "html", null, true);
                echo "
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                        </ul>
                    </div>
                </div>
                <div class=\"notifications-block\">
                    <div class=\"notifications-header\">Diplomes</div>
                    <div class=\"notifications-content\">
                        <ul>
                            ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "diplomes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
                // line 122
                echo "                                <li>
                                    ";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
                echo "
                                    ";
                // line 124
                if ( !(null === $this->getAttribute($context["diplome"], "fileName", array()))) {
                    // line 125
                    echo "                                        (<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["diplome"], "webPath", array())), "html", null, true);
                    echo "\" target=\"blank\">voir</a>)
                                    ";
                }
                // line 127
                echo "                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                        </ul>
                    </div>
                </div>
                <div class=\"notifications-block\">
                    <div class=\"notifications-header\">CV</div>
                    <div class=\"notifications-content\">
                        ";
            // line 135
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "CVFile", array()))) {
                // line 136
                echo "                            ";
                if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "CVFile", array()), "fileName", array()))) {
                    // line 137
                    echo "                                (<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "CVFile", array()), "webPath", array())), "html", null, true);
                    echo "\" target=\"blank\">Voir le CV</a>)
                            ";
                }
                // line 139
                echo "                        ";
            }
            // line 140
            echo "                        <br/>
                    </div>
                </div>
                <div class=\"notifications-block\">
                    <div class=\"notifications-header\">Rémunérations LeGrandProf <span
                                class=\"badge\">";
            // line 145
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "remunerations", array())), "html", null, true);
            echo "</span></div>
                    <div class=\"notifications-content\">
                    </div>
                </div>
                <div>
                    ";
        }
        // line 151
        echo "
                    ";
        // line 153
        echo "                </div>


            </div>
        </div>
    </div>
</div>";
        
        $__internal_7c777e465cee3b0c762660fd6ad592a2814e03daf98391ed4b4bcfedb3660e9a->leave($__internal_7c777e465cee3b0c762660fd6ad592a2814e03daf98391ed4b4bcfedb3660e9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 153,  337 => 151,  328 => 145,  321 => 140,  318 => 139,  312 => 137,  309 => 136,  307 => 135,  299 => 129,  292 => 127,  286 => 125,  284 => 124,  280 => 123,  277 => 122,  273 => 121,  264 => 114,  255 => 111,  251 => 110,  246 => 108,  241 => 106,  236 => 104,  233 => 103,  229 => 102,  220 => 95,  211 => 92,  208 => 91,  204 => 90,  194 => 83,  190 => 82,  186 => 81,  182 => 80,  178 => 79,  174 => 78,  169 => 77,  166 => 76,  161 => 73,  157 => 72,  154 => 71,  150 => 69,  146 => 67,  144 => 66,  138 => 63,  134 => 62,  130 => 61,  126 => 60,  114 => 50,  108 => 48,  102 => 46,  100 => 45,  94 => 41,  88 => 39,  82 => 37,  80 => 36,  65 => 24,  60 => 22,  49 => 16,  45 => 14,  38 => 11,  32 => 9,  30 => 8,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

<div class=\"content-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"profile-block\">
                    {% if app.user.image is not null %}
                        <img src=\"{{ asset(app.user.image.webPath) }}\" class=\"img-responsive\">
                    {% else %}
                        <img src=\"{{ asset('uploads/profils/default.png') }}\"
                             alt=\"Tour Package\"/>
                    {% endif %}
                </div>
                <div class=\"infos-block\">
                    <h2>{{ app.user.prenoms }} {{ app.user.nom }}</h2>
                    <p>
                        <span class=\"on\"><i class=\"fa fa-check\"></i></span>&nbsp;&nbsp;Profil complet<br>
                        <span class=\"off\"><i class=\"fa fa-remove\"></i></span> &nbsp;&nbsp;Profil recommandé
                    </p>
                    <center>
                        <a href=\"{{ path('fos_user_profile_edit') }}\" class=\"btn btn-primary\">Compléter profil</a>
                        <br><br>
                        <a href=\"{{ path('fos_user_change_password') }}\" class=\"btn btn-primary btn-sm\">Modifier le mot
                            de passe</a>
                    </center>

                </div>
            </div>

            <div class=\"col-md-9\">

                <div class=\"notifications-block\">
                    <div class=\"notifications-header\">
                        Hello
                        {% if app.user.prenoms is not null %}
                            {{ app.user.prenoms }}
                        {% else %}
                            {{ app.user.nom }}
                        {% endif %}
                    </div>
                    <div class=\"notifications-content\">
                        <h1>
                            Hello
                            {% if app.user.prenoms is not null %}
                                {{ app.user.prenoms }}
                            {% else %}
                                {{ app.user.nom }}
                            {% endif %}
                        </h1>
                    </div>
                </div>

                <div class=\"notifications-block\">

                    <div class=\"notifications-header\">
                        Qui suis je ?
                    </div>
                    <div class=\"notifications-content\">
                        <p>Email: {{ app.user.email }}</p>
                        <p>Nom: {{ app.user.nom }}</p>
                        <p>Prenoms: {{ app.user.prenoms }}</p>
                        <p>Date de naissance: {{ app.user.dateNaissance | date('d/m/y') }}</p>
                        <p>
                            Sexe:
                            {% if app.user.sexe=='m' %}
                                Masculin
                            {% else %}
                                Féminin
                            {% endif %}
                        </p>
                        <p>Telephone: {{ app.user.telephone }}</p>
                        <p>Pays: {{ app.user.pays }}</p>

                        {#Si profil prof#}
                        {% if is_granted('ROLE_PROF') %}
                        <p>Ville: {{ app.user.ville }}</p>
                        <p>boite Postale: {{ app.user.boitePostale }}</p>
                        <p>Situation matrimoniale: {{ app.user.situationMatrimoniale }}</p>
                        <p>Niveau scolaire: {{ app.user.niveauScolaire }}</p>
                        <p>Nombre d'enfants: {{ app.user.nombreEnfants }}</p>
                        <p>Presentation: {{ app.user.presentation }}</p>
                        <p>Profession: {{ app.user.profession }}</p>
                    </div>
                </div>
                <div class=\"notifications-block\">
                    <div class=\"notifications-header\">Quartiers cibles</div>
                    <div class=\"notifications-content\">
                        <ul>
                            {% for quartier in app.user.quartierCibles %}
                                <li>
                                    {{ quartier.affichage }}
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
                <div class=\"notifications-block\">
                    <div class=\"notifications-header\">Expérience professionnelle</div>
                    <div class=\"notifications-content\">
                        <ul>
                            {% for experience in app.user.experiencePros %}
                                <li>
                                    {{ experience.poste }}
                                    à
                                    {{ experience.etablissement }}
                                    de
                                    {{ experience.dateDebut | date('d/m/y') }}
                                    à
                                    {{ experience.dateFin | date('d/m/y') }}
                                    {{ experience.description }}
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
                <div class=\"notifications-block\">
                    <div class=\"notifications-header\">Diplomes</div>
                    <div class=\"notifications-content\">
                        <ul>
                            {% for diplome in app.user.diplomes %}
                                <li>
                                    {{ diplome.intitule }}
                                    {% if diplome.fileName is not null %}
                                        (<a href=\"{{ asset(diplome.webPath) }}\" target=\"blank\">voir</a>)
                                    {% endif %}
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
                <div class=\"notifications-block\">
                    <div class=\"notifications-header\">CV</div>
                    <div class=\"notifications-content\">
                        {% if app.user.CVFile is not null %}
                            {% if app.user.CVFile.fileName is not null %}
                                (<a href=\"{{ asset(app.user.CVFile.webPath) }}\" target=\"blank\">Voir le CV</a>)
                            {% endif %}
                        {% endif %}
                        <br/>
                    </div>
                </div>
                <div class=\"notifications-block\">
                    <div class=\"notifications-header\">Rémunérations LeGrandProf <span
                                class=\"badge\">{{ app.user.remunerations|length }}</span></div>
                    <div class=\"notifications-content\">
                    </div>
                </div>
                <div>
                    {% endif %}

                    {#          {{ dump(app.user)}}#}
                </div>


            </div>
        </div>
    </div>
</div>";
    }
}
