<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_670cab18b622b4bb9a5f6bcc85633d918d316bc9c113509bdc03c9ed3bd123f2 extends Twig_Template
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
        $__internal_323bc6eb7a31060ce58cb5d7d8a1356ba526a6bb81c1098355a56bb4a02b42c8 = $this->env->getExtension("native_profiler");
        $__internal_323bc6eb7a31060ce58cb5d7d8a1356ba526a6bb81c1098355a56bb4a02b42c8->enter($__internal_323bc6eb7a31060ce58cb5d7d8a1356ba526a6bb81c1098355a56bb4a02b42c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
          ";
        }
        // line 11
        echo "        </div>
        <div class=\"infos-block\">
          <h2>";
        // line 13
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
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()))) {
            // line 33
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 35
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
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
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()))) {
            // line 42
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
            echo "
                  ";
        } else {
            // line 44
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
                <p>Nom: ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
                <p>Prenoms: ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo "</p>
                <p>Date de naissance: ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</p>
                <p>
                  Sexe: 
                  ";
        // line 62
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "sexe", array()) == "m")) {
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "telephone", array()), "html", null, true);
        echo "</p>
                <p>Pays: ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()), "html", null, true);
        echo "</p>

                ";
        // line 72
        echo "                ";
        if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
            // line 73
            echo "                  <p>Ville: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ville", array()), "html", null, true);
            echo "</p>
                  <p>boite Postale: ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "boitePostale", array()), "html", null, true);
            echo "</p>
                  <p>Situation matrimoniale: ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "situationMatrimoniale", array()), "html", null, true);
            echo "</p>
                  <p>Niveau scolaire: ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "niveauScolaire", array()), "html", null, true);
            echo "</p>
                  <p>Nombre d'enfants: ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombreEnfants", array()), "html", null, true);
            echo "</p>
                  <p>Presentation: ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "presentation", array()), "html", null, true);
            echo "</p>
                  <p>Profession: ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profession", array()), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "quartierCibles", array()));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "experiencePros", array()));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "diplomes", array()));
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
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "CVFile", array()))) {
                // line 132
                echo "                  ";
                if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "CVFile", array()), "fileName", array()))) {
                    // line 133
                    echo "                    (<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "CVFile", array()), "webPath", array())), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "remunerations", array())), "html", null, true);
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
        
        $__internal_323bc6eb7a31060ce58cb5d7d8a1356ba526a6bb81c1098355a56bb4a02b42c8->leave($__internal_323bc6eb7a31060ce58cb5d7d8a1356ba526a6bb81c1098355a56bb4a02b42c8_prof);

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
        return array (  331 => 148,  328 => 146,  319 => 140,  313 => 136,  310 => 135,  304 => 133,  301 => 132,  299 => 131,  291 => 125,  284 => 123,  278 => 121,  276 => 120,  272 => 119,  269 => 118,  265 => 117,  256 => 110,  247 => 107,  243 => 106,  238 => 104,  233 => 102,  228 => 100,  225 => 99,  221 => 98,  212 => 91,  203 => 88,  200 => 87,  196 => 86,  186 => 79,  182 => 78,  178 => 77,  174 => 76,  170 => 75,  166 => 74,  161 => 73,  158 => 72,  153 => 69,  149 => 68,  146 => 67,  142 => 65,  138 => 63,  136 => 62,  130 => 59,  126 => 58,  122 => 57,  118 => 56,  106 => 46,  100 => 44,  94 => 42,  92 => 41,  86 => 37,  80 => 35,  74 => 33,  72 => 32,  58 => 21,  53 => 19,  42 => 13,  38 => 11,  32 => 9,  30 => 8,  22 => 2,);
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
