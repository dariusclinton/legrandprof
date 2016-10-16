<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_b6e20248c653504544a766673dcd40f1d115d9296132a6ce62282f312795e3f0 extends Twig_Template
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
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
          ";
        }
        // line 11
        echo "        </div>
        <div class=\"infos-block\">
          <h2>";
        // line 13
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
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-primary\">Compléter profil</a>
            <br><br>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-primary btn-sm\">Modifier le mot de passe</a>
          </center>

        </div>
      </div>
          
      <div class=\"col-md-9\">
        
        <div class=\"notifications-block\">
            <div class=\"notifications-header\">
                Hello
                ";
        // line 32
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()))) {
            // line 33
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 35
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
            echo "
                ";
        }
        // line 37
        echo "            </div>
            <div class=\"notifications-content\">
                <h1>
                  Hello
                  ";
        // line 41
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()))) {
            // line 42
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()), "html", null, true);
            echo "
                  ";
        } else {
            // line 44
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
            echo "
                  ";
        }
        // line 46
        echo "                </h1>
            </div>
        </div>
        
        <div class=\"notifications-block\">

            <div class=\"notifications-header\">
                Qui suis je ?
            </div>
            <div class=\"notifications-content\">
                <p>Email: ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
        echo "</p>
                <p>Nom: ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
                <p>Prenoms: ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "prenoms", array()), "html", null, true);
        echo "</p>
                <p>Date de naissance: ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</p>
                <p>
                  Sexe: 
                  ";
        // line 62
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "sexe", array()) == "m")) {
            // line 63
            echo "                    Masculin
                  ";
        } else {
            // line 65
            echo "                    Féminin
                  ";
        }
        // line 67
        echo "                </p>
                <p>Telephone: ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "telephone", array()), "html", null, true);
        echo "</p>
                <p>Pays: ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "pays", array()), "html", null, true);
        echo "</p>

                ";
        // line 72
        echo "                ";
        if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
            // line 73
            echo "                  <p>Ville: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "ville", array()), "html", null, true);
            echo "</p>
                  <p>boite Postale: ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "boitePostale", array()), "html", null, true);
            echo "</p>
                  <p>Situation matrimoniale: ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "situationMatrimoniale", array()), "html", null, true);
            echo "</p>
                  <p>Niveau scolaire: ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "niveauScolaire", array()), "html", null, true);
            echo "</p>
                  <p>Nombre d'enfants: ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nombreEnfants", array()), "html", null, true);
            echo "</p>
                  <p>Presentation: ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "presentation", array()), "html", null, true);
            echo "</p>
                  <p>Profession: ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "profession", array()), "html", null, true);
            echo "</p>
            </div>
        </div>
        <div class=\"notifications-block\">
            <div class=\"notifications-header\">Quartiers cibles</div>
            <div class=\"notifications-content\">
                    <ul>
                      ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "quartierCibles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quartier"]) {
                // line 87
                echo "                        <li>
                          ";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["quartier"], "affichage", array()), "html", null, true);
                echo "
                        </li>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quartier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                    </ul>
            </div>
        </div>
        <div class=\"notifications-block\">
            <div class=\"notifications-header\">Expérience professionnelle</div>
            <div class=\"notifications-content\">
                <ul>
                  ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "experiencePros", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
                // line 99
                echo "                    <li>
                      ";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "poste", array()), "html", null, true);
                echo "
                      à
                      ";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "etablissement", array()), "html", null, true);
                echo "
                      de
                      ";
                // line 104
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateDebut", array()), "d/m/y"), "html", null, true);
                echo "
                      à
                      ";
                // line 106
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateFin", array()), "d/m/y"), "html", null, true);
                echo "
                      ";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "description", array()), "html", null, true);
                echo "
                    </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                </ul>
            </div>
        </div>
        <div class=\"notifications-block\">
            <div class=\"notifications-header\">Diplomes</div>
            <div class=\"notifications-content\">
                <ul>
                  ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "diplomes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
                // line 118
                echo "                    <li>
                      ";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
                echo "
                        ";
                // line 120
                if ( !(null === $this->getAttribute($context["diplome"], "fileName", array()))) {
                    // line 121
                    echo "                            (<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["diplome"], "webPath", array())), "html", null, true);
                    echo "\" target=\"blank\">voir</a>)
                        ";
                }
                // line 123
                echo "                    </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                </ul>
            </div>
        </div>
        <div class=\"notifications-block\">
            <div class=\"notifications-header\">CV</div>
            <div class=\"notifications-content\">
                ";
            // line 131
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "CVFile", array()))) {
                // line 132
                echo "                  ";
                if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "CVFile", array()), "fileName", array()))) {
                    // line 133
                    echo "                    (<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "CVFile", array()), "webPath", array())), "html", null, true);
                    echo "\" target=\"blank\">Voir le CV</a>)
                  ";
                }
                // line 135
                echo "                ";
            }
            // line 136
            echo "                <br />
            </div>
        </div>
        <div class=\"notifications-block\">
            <div class=\"notifications-header\">Rémunérations LeGrandProf <span class=\"badge\">";
            // line 140
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "remunerations", array())), "html", null, true);
            echo "</span></div>
            <div class=\"notifications-content\">
            </div>
        </div>
        <div>
          ";
        }
        // line 146
        echo "          
";
        // line 148
        echo "        </div>



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
        return array (  328 => 148,  325 => 146,  316 => 140,  310 => 136,  307 => 135,  301 => 133,  298 => 132,  296 => 131,  288 => 125,  281 => 123,  275 => 121,  273 => 120,  269 => 119,  266 => 118,  262 => 117,  253 => 110,  244 => 107,  240 => 106,  235 => 104,  230 => 102,  225 => 100,  222 => 99,  218 => 98,  209 => 91,  200 => 88,  197 => 87,  193 => 86,  183 => 79,  179 => 78,  175 => 77,  171 => 76,  167 => 75,  163 => 74,  158 => 73,  155 => 72,  150 => 69,  146 => 68,  143 => 67,  139 => 65,  135 => 63,  133 => 62,  127 => 59,  123 => 58,  119 => 57,  115 => 56,  103 => 46,  97 => 44,  91 => 42,  89 => 41,  83 => 37,  77 => 35,  71 => 33,  69 => 32,  55 => 21,  50 => 19,  39 => 13,  35 => 11,  29 => 9,  27 => 8,  19 => 2,);
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
            <a href=\"{{ path('fos_user_change_password') }}\" class=\"btn btn-primary btn-sm\">Modifier le mot de passe</a>
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
                <br />
            </div>
        </div>
        <div class=\"notifications-block\">
            <div class=\"notifications-header\">Rémunérations LeGrandProf <span class=\"badge\">{{ app.user.remunerations|length }}</span></div>
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
