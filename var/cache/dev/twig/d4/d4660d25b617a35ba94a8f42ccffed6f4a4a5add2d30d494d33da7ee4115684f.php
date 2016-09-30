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
        $__internal_dcd1e4274def3623c756c110524e9c09e133851c0edf8d8d6cc74ea4dd827777 = $this->env->getExtension("native_profiler");
        $__internal_dcd1e4274def3623c756c110524e9c09e133851c0edf8d8d6cc74ea4dd827777->enter($__internal_dcd1e4274def3623c756c110524e9c09e133851c0edf8d8d6cc74ea4dd827777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "imageFile"), "html", null, true);
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
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
                <p>Nom: ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
                <p>Prenoms: ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo "</p>
                <p>Date de naissance: ";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</p>
                <p>
                  Sexe: 
                  ";
        // line 61
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "sexe", array()) == "m")) {
            // line 62
            echo "                    Masculin
                  ";
        } else {
            // line 64
            echo "                    Féminin
                  ";
        }
        // line 66
        echo "                </p>
                <p>Telephone: ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "telephone", array()), "html", null, true);
        echo "</p>
                <p>Pays: ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()), "html", null, true);
        echo "</p>

                ";
        // line 71
        echo "                ";
        if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
            // line 72
            echo "                  <p>Ville: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ville", array()), "html", null, true);
            echo "</p>
                  <p>boite Postale: ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "boitePostale", array()), "html", null, true);
            echo "</p>
                  <p>Situation matrimoniale: ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "situationMatrimoniale", array()), "html", null, true);
            echo "</p>
                  <p>Niveau scolaire: ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "niveauScolaire", array()), "html", null, true);
            echo "</p>
                  <p>Nombre d'enfants: ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombreEnfants", array()), "html", null, true);
            echo "</p>
                  <p>Presentation: ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "presentation", array()), "html", null, true);
            echo "</p>
                  <p>Profession: ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profession", array()), "html", null, true);
            echo "</p>
            </div>
        </div>
        <div class=\"notifications-block\">
            <div class=\"notifications-header\">Quartiers cibles</div>
            <div class=\"notifications-content\">
                    <ul>
                      ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "quartierCibles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quartier"]) {
                // line 86
                echo "                        <li>
                          ";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["quartier"], "affichage", array()), "html", null, true);
                echo "
                        </li>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quartier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                    </ul>
            </div>
        </div>
        <div class=\"notifications-block\">
            <div class=\"notifications-header\">Expérience professionnelle</div>
            <div class=\"notifications-content\">
                <ul>
                  ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "experiencePros", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
                // line 98
                echo "                    <li>
                      ";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "poste", array()), "html", null, true);
                echo "
                      à
                      ";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "etablissement", array()), "html", null, true);
                echo "
                      de
                      ";
                // line 103
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateDebut", array()), "d/m/y"), "html", null, true);
                echo "
                      à
                      ";
                // line 105
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateFin", array()), "d/m/y"), "html", null, true);
                echo "
                      ";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "description", array()), "html", null, true);
                echo "
                    </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                </ul>
            </div>
        </div>
        <div class=\"notifications-block\">
            <div class=\"notifications-header\">Diplomes</div>
            <div class=\"notifications-content\">
                <ul>
                  ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "diplomes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
                // line 117
                echo "                    <li>
                      ";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
                echo " 
                      (<a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($context["diplome"], "file"), "html", null, true);
                echo "\" target=\"blank\">voir</a>)
                    </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                </ul>
            </div>
        </div>
        <div class=\"notifications-block\">
            <div class=\"notifications-header\">CV</div>
            <div class=\"notifications-content\">
                ";
            // line 128
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "CVFile", array()))) {
                // line 129
                echo "                  ";
                if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "CVFile", array()), "fileName", array()))) {
                    // line 130
                    echo "                    (<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "CVFile", array()), "file"), "html", null, true);
                    echo "\" target=\"blank\">Voir le CV</a>)
                  ";
                }
                // line 132
                echo "                ";
            }
            // line 133
            echo "                <br />
            </div>
        </div>
        <div class=\"notifications-block\">
            <div class=\"notifications-header\">Rémunérations LeGrandProf <span class=\"badge\">";
            // line 137
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "remunerations", array())), "html", null, true);
            echo "</span></div>
            <div class=\"notifications-content\">
            </div>
        </div>
        <div>
            <a href='";
            // line 142
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_cours");
            echo "' class=\"btn btn-primary\">Mes cours</a>
            <a href='";
            // line 143
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_evaluation");
            echo "' class=\"btn btn-primary\">Mes Evaluations</a>
            <a href='";
            // line 144
            echo $this->env->getExtension('routing')->getPath("lgp_user_prof_indisponibilite");
            echo "' class=\"btn btn-primary\">Mes indisponibilités</a>
            <a href='";
            // line 145
            echo $this->env->getExtension('routing')->getPath("lgp_user_anomalies");
            echo "' class=\"btn btn-primary\">Anomalies du système</a>
          ";
        }
        // line 147
        echo "          
          <a href='";
        // line 148
        echo $this->env->getExtension('routing')->getPath("lgp_user_avis");
        echo "' class=\"btn btn-primary\">
            Avis
            ";
        // line 150
        if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
            // line 151
            echo "              <span class=\"badge avis-link\">";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LGPUserBundle:Avis:index", array("is_read" => "false")));
            echo "</span>
            ";
        }
        // line 153
        echo "          </a>
          <a href='";
        // line 154
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_receive");
        echo "' class=\"btn btn-primary message-link\">
            Messages <span class=\"badge\">";
        // line 155
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LGPUserBundle:Message:receive", array("is_read" => "false")));
        echo "</span>
          </a>
          <a href='";
        // line 157
        echo $this->env->getExtension('routing')->getPath("lgp_user_nouvelles_categories_cours");
        echo "' class=\"btn btn-primary\">
              Proposer une catégorie de cours
          </a>
          
          <a href='";
        // line 161
        echo $this->env->getExtension('routing')->getPath("lgp_user_mes_reservations");
        echo "' class=\"btn btn-primary\">Mes réservations</a>
          
          
";
        // line 165
        echo "        </div>

      </div>
    </div>
  </div>
</div>";
        
        $__internal_dcd1e4274def3623c756c110524e9c09e133851c0edf8d8d6cc74ea4dd827777->leave($__internal_dcd1e4274def3623c756c110524e9c09e133851c0edf8d8d6cc74ea4dd827777_prof);

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
        return array (  378 => 165,  372 => 161,  365 => 157,  360 => 155,  356 => 154,  353 => 153,  347 => 151,  345 => 150,  340 => 148,  337 => 147,  332 => 145,  328 => 144,  324 => 143,  320 => 142,  312 => 137,  306 => 133,  303 => 132,  297 => 130,  294 => 129,  292 => 128,  284 => 122,  275 => 119,  271 => 118,  268 => 117,  264 => 116,  255 => 109,  246 => 106,  242 => 105,  237 => 103,  232 => 101,  227 => 99,  224 => 98,  220 => 97,  211 => 90,  202 => 87,  199 => 86,  195 => 85,  185 => 78,  181 => 77,  177 => 76,  173 => 75,  169 => 74,  165 => 73,  160 => 72,  157 => 71,  152 => 68,  148 => 67,  145 => 66,  141 => 64,  137 => 62,  135 => 61,  129 => 58,  125 => 57,  121 => 56,  117 => 55,  106 => 46,  100 => 44,  94 => 42,  92 => 41,  86 => 37,  80 => 35,  74 => 33,  72 => 32,  58 => 21,  53 => 19,  42 => 13,  38 => 11,  32 => 9,  30 => 8,  22 => 2,);
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
            <img src=\"{{ vich_uploader_asset(app.user.image, 'imageFile') }}\" class=\"img-responsive\">
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
                      (<a href=\"{{ vich_uploader_asset(diplome, 'file') }}\" target=\"blank\">voir</a>)
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
                    (<a href=\"{{ vich_uploader_asset(app.user.CVFile, 'file') }}\" target=\"blank\">Voir le CV</a>)
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
            <a href='{{ path('lgp_user_prof_cours') }}' class=\"btn btn-primary\">Mes cours</a>
            <a href='{{ path('lgp_user_prof_evaluation') }}' class=\"btn btn-primary\">Mes Evaluations</a>
            <a href='{{ path('lgp_user_prof_indisponibilite') }}' class=\"btn btn-primary\">Mes indisponibilités</a>
            <a href='{{ path('lgp_user_anomalies') }}' class=\"btn btn-primary\">Anomalies du système</a>
          {% endif %}
          
          <a href='{{ path('lgp_user_avis') }}' class=\"btn btn-primary\">
            Avis
            {% if is_granted('ROLE_PROF') %}
              <span class=\"badge avis-link\">{{ render (controller('LGPUserBundle:Avis:index', {'is_read': 'false'})) }}</span>
            {% endif %}
          </a>
          <a href='{{ path('lgp_user_message_receive') }}' class=\"btn btn-primary message-link\">
            Messages <span class=\"badge\">{{ render (controller('LGPUserBundle:Message:receive', {'is_read': 'false'})) }}</span>
          </a>
          <a href='{{ path('lgp_user_nouvelles_categories_cours') }}' class=\"btn btn-primary\">
              Proposer une catégorie de cours
          </a>
          
          <a href='{{ path('lgp_user_mes_reservations') }}' class=\"btn btn-primary\">Mes réservations</a>
          
          
{#          {{ dump(app.user)}}#}
        </div>

      </div>
    </div>
  </div>
</div>";
    }
}
