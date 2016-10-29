<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_d161fcef24252777e1883c1af5880c04e28f7ba1f59796bf0cbca1e39e09c18e extends Twig_Template
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
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

<div class=\"content-wrapper\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3\">
        <h3 class=\"title-block-dash\">Mon Profil</h3>
        <ul class=\"menu-dash\">
          <li><a href=\"#\">modifier mon profil</a></li>
        </ul>
      </div>
      <div class=\"col-md-9\">
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Informations générales</div>
          <div class=\"notifications-content\">
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'label', array("label_attr" => array(), "label" => "Photo de profil"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'widget');
        echo "</div>
              ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'errors');
        echo "
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'label', array("label_attr" => array(), "label" => "Nom"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
              ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'errors');
        echo "
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenoms", array()), 'label', array("label_attr" => array(), "label" => "Prénoms"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenoms", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
              ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenoms", array()), 'errors');
        echo "
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateNaissance", array()), 'label', array("label_attr" => array(), "label" => "Date de naissance"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateNaissance", array()), 'widget', array("attr" => array()));
        echo "</div>
              ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateNaissance", array()), 'errors');
        echo "
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexe", array()), 'label', array("label_attr" => array(), "label" => "Sexe"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
              ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexe", array()), 'errors');
        echo "
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'label', array("label_attr" => array(), "label" => "Numéro de téléphone (+237)"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
              ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'errors');
        echo "
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'label', array("label_attr" => array(), "label" => "Pays de résidence"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
              ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'errors');
        echo "
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array(), "label" => "Adresse email"));
        echo "</div>
              <div class=\"col-md-4\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
              ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
            </div><br>
          </div>
        </div>

        ";
        // line 62
        if ($this->env->getExtension('security')->isGranted("ROLE_PROF")) {
            // line 63
            echo "
          <div class=\"notifications-block\">
            <div class=\"notifications-header\">Informations de présentation</div>
            <div class=\"notifications-content\">
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'label', array("label_attr" => array(), "label" => "Ville"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
                ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'errors');
            echo "
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "boitePostale", array()), 'label', array("label_attr" => array(), "label" => "Boite postale"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "boitePostale", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
                ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "boitePostale", array()), 'errors');
            echo "
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "situationMatrimoniale", array()), 'label', array("label_attr" => array(), "label" => "Situation matrimoniale"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "situationMatrimoniale", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
                ";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "situationMatrimoniale", array()), 'errors');
            echo "
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "niveauScolaire", array()), 'label', array("label_attr" => array(), "label" => "Niveau scolaire"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "niveauScolaire", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
                ";
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "niveauScolaire", array()), 'errors');
            echo "
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 88
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreEnfants", array()), 'label', array("label_attr" => array(), "label" => "Nombre d'enfants"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreEnfants", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
                ";
            // line 90
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombreEnfants", array()), 'errors');
            echo "
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presentation", array()), 'label', array("label_attr" => array(), "label" => "Présentation"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presentation", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
                ";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "presentation", array()), 'errors');
            echo "
              </div><br>
              
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quartierCibles", array()), 'label', array("label_attr" => array(), "label" => "Quartiers cibles pour les répétitions"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quartierCibles", array()), 'widget');
            echo "</div>
                ";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quartierCibles", array()), 'errors');
            echo "
";
            // line 103
            echo "              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 105
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profession", array()), 'label', array("label_attr" => array(), "label" => "Profession"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profession", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
                ";
            // line 107
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profession", array()), 'errors');
            echo "
              </div><br>
            </div>
          </div>
          <div class=\"notifications-block\">
            <div class=\"notifications-header\">Experiences professionnelles</div>
            <div class=\"notifications-content\">
              ";
            // line 114
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "experiencePros", array()), 'row');
            echo "
              <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_experience\">Ajouter une expérience</a>
            </div>
          </div>
          <div class=\"notifications-block\">
            <div class=\"notifications-header\">Diplome</div>
            <div class=\"notifications-content\">
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 122
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "diplomes", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Diplômes"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 123
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "diplomes", array()), 'widget');
            echo "</div>
                ";
            // line 124
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "diplomes", array()), 'errors');
            echo "
                <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_diplome\">Ajouter un diplome</a>
              </div><br>
            </div>
          </div>
          <div class=\"notifications-block\">
            <div class=\"notifications-header\">CV</div>
            <div class=\"notifications-content\">
              <div class=\"row\">
                <div class=\"col-md-2\">";
            // line 133
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "CVFile", array()), 'label', array("label_attr" => array("class" => ""), "label" => "CV"));
            echo "</div>
                <div class=\"col-md-4\">";
            // line 134
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "CVFile", array()), 'widget');
            echo "</div>
                ";
            // line 135
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "CVFile", array()), 'errors');
            echo "
              </div><br>
            </div>
          </div>
        ";
        }
        // line 140
        echo "        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Mot de passe</div>
          <div class=\"notifications-content\">
            ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
          </div>
        </div>
        <input type=\"submit\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\"/>

      </div>
    </div>
  </div>
</div>

";
        // line 153
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 153,  345 => 146,  339 => 143,  334 => 140,  326 => 135,  322 => 134,  318 => 133,  306 => 124,  302 => 123,  298 => 122,  287 => 114,  277 => 107,  273 => 106,  269 => 105,  265 => 103,  261 => 101,  257 => 100,  253 => 99,  246 => 95,  242 => 94,  238 => 93,  232 => 90,  228 => 89,  224 => 88,  218 => 85,  214 => 84,  210 => 83,  204 => 80,  200 => 79,  196 => 78,  190 => 75,  186 => 74,  182 => 73,  176 => 70,  172 => 69,  168 => 68,  161 => 63,  159 => 62,  151 => 57,  147 => 56,  143 => 55,  137 => 52,  133 => 51,  129 => 50,  123 => 47,  119 => 46,  115 => 45,  109 => 42,  105 => 41,  101 => 40,  95 => 37,  91 => 36,  87 => 35,  81 => 32,  77 => 31,  73 => 30,  67 => 27,  63 => 26,  59 => 25,  53 => 22,  49 => 21,  45 => 20,  26 => 4,  22 => 3,  19 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
{{ form_errors(form) }}

<div class=\"content-wrapper\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3\">
        <h3 class=\"title-block-dash\">Mon Profil</h3>
        <ul class=\"menu-dash\">
          <li><a href=\"#\">modifier mon profil</a></li>
        </ul>
      </div>
      <div class=\"col-md-9\">
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Informations générales</div>
          <div class=\"notifications-content\">
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.image, \"Photo de profil\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.image) }}</div>
              {{ form_errors(form.image) }}
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.nom, \"Nom\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.nom, {'attr': {'class':'form-control'}}) }}</div>
              {{ form_errors(form.nom) }}
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.prenoms, \"Prénoms\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.prenoms, {'attr': {'class':'form-control'}}) }}</div>
              {{ form_errors(form.prenoms) }}
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.dateNaissance, \"Date de naissance\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.dateNaissance, {'attr': {}}) }}</div>
              {{ form_errors(form.dateNaissance) }}
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.sexe, \"Sexe\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.sexe, {'attr': {'class':'form-control'}}) }}</div>
              {{ form_errors(form.sexe) }}
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.telephone, \"Numéro de téléphone (+237)\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.telephone, {'attr': {'class':'form-control'}}) }}</div>
              {{ form_errors(form.telephone) }}
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.pays, \"Pays de résidence\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.pays, {'attr': {'class':'form-control'}}) }}</div>
              {{ form_errors(form.pays) }}
            </div><br>
            <div class=\"row\">
              <div class=\"col-md-2\">{{ form_label(form.email, \"Adresse email\", {'label_attr': {}}) }}</div>
              <div class=\"col-md-4\">{{ form_widget(form.email, {'attr': {'class':'form-control'}}) }}</div>
              {{ form_errors(form.email) }}
            </div><br>
          </div>
        </div>

        {% if is_granted('ROLE_PROF') %}

          <div class=\"notifications-block\">
            <div class=\"notifications-header\">Informations de présentation</div>
            <div class=\"notifications-content\">
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.ville, \"Ville\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.ville, {'attr': {'class':'form-control'}}) }}</div>
                {{ form_errors(form.ville) }}
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.boitePostale, \"Boite postale\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.boitePostale, {'attr': {'class':'form-control'}}) }}</div>
                {{ form_errors(form.boitePostale) }}
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.situationMatrimoniale, \"Situation matrimoniale\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.situationMatrimoniale, {'attr': {'class':'form-control'}}) }}</div>
                {{ form_errors(form.situationMatrimoniale) }}
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.niveauScolaire, \"Niveau scolaire\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.niveauScolaire, {'attr': {'class':'form-control'}}) }}</div>
                {{ form_errors(form.niveauScolaire) }}
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.nombreEnfants, \"Nombre d'enfants\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.nombreEnfants, {'attr': {'class':'form-control'}}) }}</div>
                {{ form_errors(form.nombreEnfants) }}
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.presentation, \"Présentation\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.presentation, {'attr': {'class':'form-control'}}) }}</div>
                {{ form_errors(form.presentation) }}
              </div><br>
              
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.quartierCibles, \"Quartiers cibles pour les répétitions\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.quartierCibles) }}</div>
                {{ form_errors(form.quartierCibles) }}
{#                <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_quartier\">Ajouter un quartier</a>#}
              </div><br>
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.profession, \"Profession\", {'label_attr': {}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.profession, {'attr': {'class':'form-control'}}) }}</div>
                {{ form_errors(form.profession) }}
              </div><br>
            </div>
          </div>
          <div class=\"notifications-block\">
            <div class=\"notifications-header\">Experiences professionnelles</div>
            <div class=\"notifications-content\">
              {{ form_row(form.experiencePros) }}
              <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_experience\">Ajouter une expérience</a>
            </div>
          </div>
          <div class=\"notifications-block\">
            <div class=\"notifications-header\">Diplome</div>
            <div class=\"notifications-content\">
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.diplomes, \"Diplômes\", {'label_attr': {'class': ''}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.diplomes) }}</div>
                {{ form_errors(form.diplomes) }}
                <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"add_diplome\">Ajouter un diplome</a>
              </div><br>
            </div>
          </div>
          <div class=\"notifications-block\">
            <div class=\"notifications-header\">CV</div>
            <div class=\"notifications-content\">
              <div class=\"row\">
                <div class=\"col-md-2\">{{ form_label(form.CVFile, \"CV\", {'label_attr': {'class': ''}}) }}</div>
                <div class=\"col-md-4\">{{ form_widget(form.CVFile) }}</div>
                {{ form_errors(form.CVFile) }}
              </div><br>
            </div>
          </div>
        {% endif %}
        <div class=\"notifications-block\">
          <div class=\"notifications-header\">Mot de passe</div>
          <div class=\"notifications-content\">
            {{ form_rest(form) }}
          </div>
        </div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" class=\"btn btn-primary pull-right\"/>

      </div>
    </div>
  </div>
</div>

{{ form_end(form) }}
";
    }
}
