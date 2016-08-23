<?php

/* @LGPUser/Profile/show_content.html.twig */
class __TwigTemplate_e2cabb0fb33ae6b3465fa420d00ee634aacfa8afa030ae1a3f69ad9a11c68321 extends Twig_Template
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
        $__internal_0cd5ec5db2bd89294eca9de64e4d05327b18cb3aa2e68fd9e6b48f8de6cb5863 = $this->env->getExtension("native_profiler");
        $__internal_0cd5ec5db2bd89294eca9de64e4d05327b18cb3aa2e68fd9e6b48f8de6cb5863->enter($__internal_0cd5ec5db2bd89294eca9de64e4d05327b18cb3aa2e68fd9e6b48f8de6cb5863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            ";
        // line 6
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()))) {
            // line 7
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
            ";
        }
        // line 9
        echo "        </div>
        
        <div class=\"col-sm-8\">
            ";
        // line 12
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 13
            echo "                <h1>Hello Prof !</h1>
            ";
        } else {
            // line 15
            echo "                <h1>Hello Parent !</h1>
            ";
        }
        // line 17
        echo "        
            <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</p>
            <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
            <p>Nom: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
            <p>Prenoms: ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo "</p>
            <p>Date de naissance: ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateNaissance", array()), "d/m/y"), "html", null, true);
        echo "</p>
            <p>Sexe: ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "sexe", array()), "html", null, true);
        echo "</p>
            <p>Telephone: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "numTelephone", array()), "html", null, true);
        echo "</p>
            <p>Pays: ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()), "html", null, true);
        echo "</p>

            ";
        // line 27
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 28
            echo "                <p>Ville: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ville", array()), "html", null, true);
            echo "</p>
                <p>Quartier: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "quartier", array()), "html", null, true);
            echo "</p>
                <p>boite Postale: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "boitePostale", array()), "html", null, true);
            echo "</p>
                <p>Situation matrimoniale: ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "situationMatrimoniale", array()), "html", null, true);
            echo "</p>
                <p>Niveau scolaire: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "niveauScolaire", array()), "html", null, true);
            echo "</p>
                <p>Nombre d'enfants: ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombreEnfants", array()), "html", null, true);
            echo "</p>
                <p>Presentation: ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "presentation", array()), "html", null, true);
            echo "</p>
                <p>Profession: ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profession", array()), "html", null, true);
            echo "</p>
                
                <h3>Experience professionnelle</h3>
                <ul>
                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "experiencePros", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
                // line 40
                echo "                        <li>
                            ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "etablissement", array()), "html", null, true);
                echo "
                            ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "poste", array()), "html", null, true);
                echo "
                            ";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateDebut", array()), "d/m/y"), "html", null, true);
                echo "
                            ";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["experience"], "dateFin", array()), "d/m/y"), "html", null, true);
                echo "
                            ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "description", array()), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </ul>
                
                <h3>Diplomes</h3>
                <ul>
                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "diplomes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
                // line 53
                echo "                        <li>
                            ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "intitule", array()), "html", null, true);
                echo "
                            ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "specialite", array()), "html", null, true);
                echo "
                            ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "annee", array()), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </ul>
            ";
        }
        // line 61
        echo "
            ";
        // line 62
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()));
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_0cd5ec5db2bd89294eca9de64e4d05327b18cb3aa2e68fd9e6b48f8de6cb5863->leave($__internal_0cd5ec5db2bd89294eca9de64e4d05327b18cb3aa2e68fd9e6b48f8de6cb5863_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 62,  195 => 61,  191 => 59,  182 => 56,  178 => 55,  174 => 54,  171 => 53,  167 => 52,  161 => 48,  152 => 45,  148 => 44,  144 => 43,  140 => 42,  136 => 41,  133 => 40,  129 => 39,  122 => 35,  118 => 34,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  93 => 28,  91 => 27,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  60 => 19,  54 => 18,  51 => 17,  47 => 15,  43 => 13,  41 => 12,  36 => 9,  30 => 7,  28 => 6,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/*             {% if app.user.image is not null %}*/
/*                 <img src="{{ asset(app.user.image.webPath) }}" class="img-responsive">*/
/*             {% endif %}*/
/*         </div>*/
/*         */
/*         <div class="col-sm-8">*/
/*             {% if user.presentation is defined %}*/
/*                 <h1>Hello Prof !</h1>*/
/*             {% else %}*/
/*                 <h1>Hello Parent !</h1>*/
/*             {% endif %}*/
/*         */
/*             <p>{{ 'profile.show.username'|trans }}: {{ app.user.username }}</p>*/
/*             <p>{{ 'profile.show.email'|trans }}: {{ app.user.email }}</p>*/
/*             <p>Nom: {{ app.user.nom }}</p>*/
/*             <p>Prenoms: {{ app.user.prenoms }}</p>*/
/*             <p>Date de naissance: {{ app.user.dateNaissance | date('d/m/y') }}</p>*/
/*             <p>Sexe: {{ app.user.sexe }}</p>*/
/*             <p>Telephone: {{ app.user.numTelephone }}</p>*/
/*             <p>Pays: {{ app.user.pays }}</p>*/
/* */
/*             {% if user.presentation is defined %}*/
/*                 <p>Ville: {{ app.user.ville }}</p>*/
/*                 <p>Quartier: {{ app.user.quartier }}</p>*/
/*                 <p>boite Postale: {{ app.user.boitePostale }}</p>*/
/*                 <p>Situation matrimoniale: {{ app.user.situationMatrimoniale }}</p>*/
/*                 <p>Niveau scolaire: {{ app.user.niveauScolaire }}</p>*/
/*                 <p>Nombre d'enfants: {{ app.user.nombreEnfants }}</p>*/
/*                 <p>Presentation: {{ app.user.presentation }}</p>*/
/*                 <p>Profession: {{ app.user.profession }}</p>*/
/*                 */
/*                 <h3>Experience professionnelle</h3>*/
/*                 <ul>*/
/*                     {% for experience in app.user.experiencePros %}*/
/*                         <li>*/
/*                             {{ experience.etablissement }}*/
/*                             {{ experience.poste }}*/
/*                             {{ experience.dateDebut | date('d/m/y') }}*/
/*                             {{ experience.dateFin | date('d/m/y') }}*/
/*                             {{ experience.description }}*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*                 */
/*                 <h3>Diplomes</h3>*/
/*                 <ul>*/
/*                     {% for diplome in app.user.diplomes %}*/
/*                         <li>*/
/*                             {{ diplome.intitule }}*/
/*                             {{ diplome.specialite }}*/
/*                             {{ diplome.annee }}*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/* */
/*             {{ dump(app.user)}}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
