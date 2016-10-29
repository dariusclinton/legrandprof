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
        $__internal_8d212a00cc229abcf9f4bd13092e18d3d99cb6a41a4dbc303b9c34fcf821e974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d212a00cc229abcf9f4bd13092e18d3d99cb6a41a4dbc303b9c34fcf821e974->enter($__internal_8d212a00cc229abcf9f4bd13092e18d3d99cb6a41a4dbc303b9c34fcf821e974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
          ";
        } else {
            // line 11
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/profils/default.png"), "html", null, true);
            echo "\"
                 alt=\"Tour Package\"/>
          ";
        }
        // line 14
        echo "        </div>
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
        <div class=\"alert alert-warning\">
          <b>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avanceeProfil", array()), "html", null, true);
        echo "% de remplissage du profil</b><br>
          <p>Veuillez compléter votre profil pour être le plus sollicité par les apprenants/parents</p>
        </div>
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">
            Hello
            ";
        // line 39
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()))) {
            // line 40
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 42
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "
            ";
        }
        // line 44
        echo "          </div>
          <div class=\"notifications-content\">
            <h1>
              Hello
              ";
        // line 48
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()))) {
            // line 49
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
            echo "
              ";
        } else {
            // line 51
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "
              ";
        }
        // line 53
        echo "            </h1>
          </div>
        </div>

        <div class=\"notifications-block\">

          <div class=\"notifications-header\">
            Qui suis je ?
          </div>
          <div class=\"notifications-content\">
            <p>Email: ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
            <p>Nom: ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
            <p>Prenoms: ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo "</p>
            <p>Date de naissance: ";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</p>
            <p>
              Sexe:
              ";
        // line 69
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "sexe", array()) == "m")) {
            // line 70
            echo "                Masculin
              ";
        } else {
            // line 72
            echo "                Féminin
              ";
        }
        // line 74
        echo "            </p>
            <p>Telephone: ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "telephone", array()), "html", null, true);
        echo "</p>
            <p>Pays: ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()), "html", null, true);
        echo "</p>

            ";
        // line 79
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROF")) {
            // line 80
            echo "            <p>Ville: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ville", array()), "html", null, true);
            echo "</p>
            <p>boite Postale: ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "boitePostale", array()), "html", null, true);
            echo "</p>
            <p>Situation matrimoniale: ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "situationMatrimoniale", array()), "html", null, true);
            echo "</p>
            <p>Niveau scolaire: ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "niveauScolaire", array()), "html", null, true);
            echo "</p>
            <p>Nombre d'enfants: ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombreEnfants", array()), "html", null, true);
            echo "</p>
            <p>Presentation: ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "presentation", array()), "html", null, true);
            echo "</p>
            <p>Profession: ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profession", array()), "html", null, true);
            echo "</p>
          </div>
        </div>
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Quartiers dans lesquels je suis disposé à donner cours</div>
          <div class=\"notifications-content\">
            <ul>
              ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "quartierCibles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quartier"]) {
                // line 94
                echo "                <li>
                  ";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["quartier"], "affichage", array()), "html", null, true);
                echo "
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quartier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "            </ul>
          </div>
        </div>
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Expérience professionnelle</div>
          <div class=\"notifications-content\">
            <ul>
              ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "experiencePros", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
                // line 106
                echo "                <li>
                  ";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "poste", array()), "html", null, true);
                echo "
                  à
                  ";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "etablissement", array()), "html", null, true);
                echo "
                  de
                  ";
                // line 111
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateDebut", array()), "d/m/y"), "html", null, true);
                echo "
                  à
                  ";
                // line 113
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateFin", array()), "d/m/y"), "html", null, true);
                echo "
                  ";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "description", array()), "html", null, true);
                echo "
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "            </ul>
          </div>
        </div>
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Diplômes</div>
          <div class=\"notifications-content\">
            <ul>
              ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "diplomes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
                // line 125
                echo "                <li>
                  ";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
                echo "
                  ";
                // line 127
                if ( !(null === $this->getAttribute($context["diplome"], "fileName", array()))) {
                    // line 128
                    echo "                    (<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["diplome"], "webPath", array())), "html", null, true);
                    echo "\" target=\"blank\">voir</a>)
                  ";
                }
                // line 130
                echo "                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "            </ul>
          </div>
        </div>
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">CV</div>
          <div class=\"notifications-content\">
            ";
            // line 138
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "CVFile", array()))) {
                // line 139
                echo "              ";
                if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "CVFile", array()), "fileName", array()))) {
                    // line 140
                    echo "                (<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "CVFile", array()), "webPath", array())), "html", null, true);
                    echo "\" target=\"blank\">Voir le CV</a>)
              ";
                }
                // line 142
                echo "            ";
            }
            // line 143
            echo "            <br/>
          </div>
        </div>
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Rémunérations LeGrandProf <span
                class=\"badge\">";
            // line 148
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "remunerations", array())), "html", null, true);
            echo "</span></div>
          <div class=\"notifications-content\">
          </div>
        </div>
        <div>
          ";
        }
        // line 154
        echo "
          ";
        // line 156
        echo "        </div>


      </div>
    </div>
  </div>
</div>";
        
        $__internal_8d212a00cc229abcf9f4bd13092e18d3d99cb6a41a4dbc303b9c34fcf821e974->leave($__internal_8d212a00cc229abcf9f4bd13092e18d3d99cb6a41a4dbc303b9c34fcf821e974_prof);

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
        return array (  346 => 156,  343 => 154,  334 => 148,  327 => 143,  324 => 142,  318 => 140,  315 => 139,  313 => 138,  305 => 132,  298 => 130,  292 => 128,  290 => 127,  286 => 126,  283 => 125,  279 => 124,  270 => 117,  261 => 114,  257 => 113,  252 => 111,  247 => 109,  242 => 107,  239 => 106,  235 => 105,  226 => 98,  217 => 95,  214 => 94,  210 => 93,  200 => 86,  196 => 85,  192 => 84,  188 => 83,  184 => 82,  180 => 81,  175 => 80,  172 => 79,  167 => 76,  163 => 75,  160 => 74,  156 => 72,  152 => 70,  150 => 69,  144 => 66,  140 => 65,  136 => 64,  132 => 63,  120 => 53,  114 => 51,  108 => 49,  106 => 48,  100 => 44,  94 => 42,  88 => 40,  86 => 39,  77 => 33,  65 => 24,  60 => 22,  49 => 16,  45 => 14,  38 => 11,  32 => 9,  30 => 8,  22 => 2,);
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
        <div class=\"alert alert-warning\">
          <b>{{ app.user.avanceeProfil }}% de remplissage du profil</b><br>
          <p>Veuillez compléter votre profil pour être le plus sollicité par les apprenants/parents</p>
        </div>
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
          <div class=\"notifications-header\">Quartiers dans lesquels je suis disposé à donner cours</div>
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
          <div class=\"notifications-header\">Diplômes</div>
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
