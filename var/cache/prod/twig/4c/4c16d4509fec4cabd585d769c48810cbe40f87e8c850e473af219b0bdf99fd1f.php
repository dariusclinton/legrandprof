<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_f5c10544f0ce907bfc0b3980be9c0a25d07b9d9b16be3646c3c3ae162edfb7b9 extends Twig_Template
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
        // line 2
        echo "
<div class=\"content-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"profile-block\">
                    ";
        // line 8
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()))) {
            // line 9
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), "webPath", array())), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
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
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()))) {
            // line 37
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()), "html", null, true);
            echo "
                        ";
        } else {
            // line 39
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
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
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()))) {
            // line 46
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()), "html", null, true);
            echo "
                            ";
        } else {
            // line 48
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
        echo "</p>
                        <p>Nom: ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
                        <p>Prenoms: ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()), "html", null, true);
        echo "</p>
                        <p>Date de naissance: ";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</p>
                        <p>
                            Sexe:
                            ";
        // line 66
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "sexe", array()) == "m")) {
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "telephone", array()), "html", null, true);
        echo "</p>
                        <p>Pays: ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "pays", array()), "html", null, true);
        echo "</p>

                        ";
        // line 76
        echo "                        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROF")) {
            // line 77
            echo "                        <p>Ville: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "ville", array()), "html", null, true);
            echo "</p>
                        <p>boite Postale: ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "boitePostale", array()), "html", null, true);
            echo "</p>
                        <p>Situation matrimoniale: ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "situationMatrimoniale", array()), "html", null, true);
            echo "</p>
                        <p>Niveau scolaire: ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "niveauScolaire", array()), "html", null, true);
            echo "</p>
                        <p>Nombre d'enfants: ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nombreEnfants", array()), "html", null, true);
            echo "</p>
                        <p>Presentation: ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "presentation", array()), "html", null, true);
            echo "</p>
                        <p>Profession: ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "profession", array()), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "quartierCibles", array()));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "experiencePros", array()));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "diplomes", array()));
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
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "CVFile", array()))) {
                // line 136
                echo "                            ";
                if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "CVFile", array()), "fileName", array()))) {
                    // line 137
                    echo "                                (<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "CVFile", array()), "webPath", array())), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "remunerations", array())), "html", null, true);
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
        return array (  337 => 153,  334 => 151,  325 => 145,  318 => 140,  315 => 139,  309 => 137,  306 => 136,  304 => 135,  296 => 129,  289 => 127,  283 => 125,  281 => 124,  277 => 123,  274 => 122,  270 => 121,  261 => 114,  252 => 111,  248 => 110,  243 => 108,  238 => 106,  233 => 104,  230 => 103,  226 => 102,  217 => 95,  208 => 92,  205 => 91,  201 => 90,  191 => 83,  187 => 82,  183 => 81,  179 => 80,  175 => 79,  171 => 78,  166 => 77,  163 => 76,  158 => 73,  154 => 72,  151 => 71,  147 => 69,  143 => 67,  141 => 66,  135 => 63,  131 => 62,  127 => 61,  123 => 60,  111 => 50,  105 => 48,  99 => 46,  97 => 45,  91 => 41,  85 => 39,  79 => 37,  77 => 36,  62 => 24,  57 => 22,  46 => 16,  42 => 14,  35 => 11,  29 => 9,  27 => 8,  19 => 2,);
    }

    public function getSource()
    {
        return "";
    }
}
