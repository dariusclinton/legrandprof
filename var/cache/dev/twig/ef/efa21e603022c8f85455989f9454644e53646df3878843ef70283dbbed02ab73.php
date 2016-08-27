<?php

/* @LGPReservation/Reservation/detail.html.twig */
class __TwigTemplate_f6b1025aa2a84fcb7f2bf16792d37a88306be50e9d0957ba7707c21dd560488a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPReservation/Reservation/detail.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c2c44156c7601cbcee5f0c399ff55e2adc30526a4a1d87a67f1177f9dc6b6ac = $this->env->getExtension("native_profiler");
        $__internal_3c2c44156c7601cbcee5f0c399ff55e2adc30526a4a1d87a67f1177f9dc6b6ac->enter($__internal_3c2c44156c7601cbcee5f0c399ff55e2adc30526a4a1d87a67f1177f9dc6b6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPReservation/Reservation/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c2c44156c7601cbcee5f0c399ff55e2adc30526a4a1d87a67f1177f9dc6b6ac->leave($__internal_3c2c44156c7601cbcee5f0c399ff55e2adc30526a4a1d87a67f1177f9dc6b6ac_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_87d2e1cf462ebf255e7a9cace30de78d24ffc90347991daa8d60c5f697e2b257 = $this->env->getExtension("native_profiler");
        $__internal_87d2e1cf462ebf255e7a9cace30de78d24ffc90347991daa8d60c5f697e2b257->enter($__internal_87d2e1cf462ebf255e7a9cace30de78d24ffc90347991daa8d60c5f697e2b257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Detail Reservation  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_87d2e1cf462ebf255e7a9cace30de78d24ffc90347991daa8d60c5f697e2b257->leave($__internal_87d2e1cf462ebf255e7a9cace30de78d24ffc90347991daa8d60c5f697e2b257_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_47b3701ff45da4504876b07fbf19904f228351563f605ff2007b80b6adfcf73d = $this->env->getExtension("native_profiler");
        $__internal_47b3701ff45da4504876b07fbf19904f228351563f605ff2007b80b6adfcf73d->enter($__internal_47b3701ff45da4504876b07fbf19904f228351563f605ff2007b80b6adfcf73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <div class=\"breadcrumb-wrapper bg-light-2\">

        <div class=\"container\">

            <ol class=\"breadcrumb-list booking-step\">
                <li><a href=\"#\">Accueil</a></li>
                <li><span>reservation</span></li>
            </ol>

        </div>

    </div>

    <div class=\"content-wrapper\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 col-md-9\" role=\"main\">

                    <div class=\"section-title text-left\">

                        <h3>Ajouter un prof au panier</h3>

                    </div>

                    <div class=\"payment-container\">

                        <form action=\" ";
        // line 37
        echo $this->env->getExtension('routing')->getPath("lgp_reservation_cart_add");
        echo " \" method=\"get\">\t

                            <div class=\"payment-box\">

                                <div class=\"payment-header clearfix\">

                                    <div class=\"number\">
                                        1
                                    </div>

                                    <div class=\"row gap-10\">

                                        <div class=\"col-sm-9\">
                                            <h5 class=\"heading mt-0\">Choisir le cours et la classe.</h5>
                                        </div>

                                        <div class=\"col-sm-3\">
                                            <a href=\"#\" class=\"btn btn-primary btn-inverse btn-sm pull-right pull-left-xs mb-20-xss\">Revoir le profil</a>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <div class=\"payment-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Choisir un cours</b>
                                        </div>
                                        <div class=\"col-md-3\">
                                            <select id=\"course\" name=\"course\" class=\"form-control\">
                                                <option disabled selected>Choisir un cours</option>
                                                ";
        // line 68
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "cours", array(), "any", true, true)) {
            // line 69
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "cours", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ens"]) {
                // line 70
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens"], "cours", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ens"], "cours", array()), "intitule", array()), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                                                ";
        }
        // line 73
        echo "                                            </select>
                                        </div>
                                    </div>  
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Choisir une classe</b>
                                        </div>
                                        <div class=\"col-md-3\">
                                            <select id=\"classes\" name=\"classes\" class=\"form-control\">
                                                <option disabled selected>Choisir une classe</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br><br>

                                <div class=\"payment-header clearfix\">

                                    <div class=\"number\">
                                        2
                                    </div>

                                    <div class=\"row gap-10\">

                                        <div class=\"col-sm-9\">
                                            <h5 class=\"heading mt-0\">Nombre d'heures par jour</h5>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class=\"payment-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <b>Nombre d'heures par jour</b>
                                        </div>
                                        <div class=\"col-md-3\">
                                            <select id=\"heuresParjours\" name=\"classe\" class=\"form-control\">
                                                <option value=\"0.5\">30min</option>
                                                <option value=\"1\">1h</option>
                                                <option value=\"1.5\">1h30</option>
                                                <option value=\"2\">2h</option>
                                                <option value=\"2.5\">2h30</option>
                                                <option value=\"3\">3h</option>}
                                                <option value=\"4\">4</option>}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br><br>

                                <div class=\"payment-header clearfix\">

                                    <div class=\"number\">
                                        3
                                    </div>

                                    <div class=\"row gap-10\">
                                        <div class=\"col-sm-9\">
                                            <h5 class=\"heading mt-0\">Choisir des jours de cours</h5>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div class=\"payment-content\" id=\"joursDeCours\">
                                </div>

                            </div>

                            <div class=\"row mt-20\">

                                <div class=\"col-sm-12 col-md-12\">

                                    <a class=\"btn btn-primary\">Réserver ce cours</a>&nbsp;&nbsp;
                                    <button class=\"btn\" type=\"submit\">Ajouter dans le panier</button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

                ";
        // line 159
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "prof", array(), "any", true, true)) {
            // line 160
            echo "                    ";
            $context["prof"] = $this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "prof", array());
            // line 161
            echo "                        <input type=\"hidden\" name=\"prof\" id=\"profId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id", array()), "html", null, true);
            echo "\">
                        <div class=\"col-sm-4 col-md-3 hidden-xs\">

                            <div class=\"price-summary-wrapper\">

                                <h4 class=\"heading mt-0 text-primary uppercase\">";
            // line 166
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "prenoms", array()) . " ") . $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "nom", array())), "html", null, true);
            echo "</h4>


                                <ul class=\"price-summary-list\">

                                    <li>
                                        ";
            // line 172
            if ($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "image", array(), "any", true, true)) {
                // line 173
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "image", array()), "webPath", array())), "html", null, true);
                echo "\">
                                        ";
            } else {
                // line 175
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profils/default.jpg"), "html", null, true);
                echo "\">
                                        ";
            }
            // line 177
            echo "                                    </li>
                                    <li class=\"divider\"></li>

                                    <li>
                                        <h6 class=\"heading mt-20 mb-5 text-primary uppercase\">Prix</h6>
                                        <div class=\"row gap-10 mt-10\">
                                            <div class=\"col-xs-7 col-sm-7\">
                                                Prix
                                            </div>
                                            <div class=\"col-xs-5 col-sm-5 text-right\" >
                                                <span id=\"prixH\">0 </span>
                                                FCFA/H
                                            </div>
                                        </div>

                                    </li>

                                    <li class=\"divider\"></li>

                                    <li class=\"total-price\">

                                        <div class=\"row gap-10\">
                                            <div class=\"col-xs-5 col-sm-5\">
                                                <h5 class=\"heading mt-0 mb-0 text-white\">Prix total</h5>
                                                <p>Mensuel</p>
                                            </div>
                                            <div class=\"col-xs-7 col-sm-7 text-right\">
                                                <span class=\"block font20 font600 mb-5\"><span id=\"prixTotal\">0</span> Fcfa</span>
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div>

                        </div>
                        ";
        }
        // line 216
        echo "                        </div>
                    </div>
                </div>
            </div>
            <script type=\"text/javascript\">
                function updateClasse() {
                    var profId = \$(\"#profId\").val();
                    var coursId = \$(\"#course\").val();

                    \$.ajax({
                        method: \"POST\",
                        url: \"/legrandprof/web/app_dev.php/course/update/\" + profId + \"/\" + coursId,
                        data: {}
                    })
                            .success(function(answer) {
                                window.classes = [];
                                window.prix = [];
                                for (i = 0; i < answer.length; i++)
                                {
                                    classes.push(answer[i].classe);
                                    prix.push(answer[i].prix);
                                }
                                \$('#classes option').each(function() {
                                    if (\$(this).val() != '')
                                    {
                                        \$(this).remove();
                                    }
                                });
                                for (i = 0; i < classes.length; i++)
                                {
                                    \$('#classes').append('<option value=\"' + i + '\">' + classes[i] + '</option>');
                                }
                                if (classes.length == 0) {
                                    \$('#classes').append('<option disabled selected></option>');
                                }

                                updatePrix();
                            })
                            .error(function(answer) {
                                console.log(answer);
                            });
                }

                function calculTotal(){
                    if(\$(\"#couse\").text() == \"Choisir un cours\" && \$(\"#classes\").text() == ''){
                        return 0;
                    }

                    var selectedval = \$(\"#classes option:selected\").val();
                    var prixHoraire = window.prix[selectedval] ;
                    var nbHeureparjour = \$(\"#heuresParjours option:selected\").val();
                    var nbJours = 0;
                    for (i = 0; i < window.days.length; i++) {
                       if(\$(\"#j\"+i).prop('checked')){
                            nbJours += 1;
                       }
                    }

                    var prixTotal = prixHoraire*nbHeureparjour*nbJours;
                    return prixTotal;
                }

                function updatePrix() {
                    \$(\"#prixH\").text('');
                    var selectedval = \$(\"#classes option:selected\").val();
                    \$(\"#prixH\").text(window.prix[selectedval]);
                }

                function updatePrixTotal() {
                    \$(\"#prixTotal\").text('');
                    prixT = calculTotal();
                    \$(\"#prixTotal\").text(prixT);
                }
            </script>
            ";
        
        $__internal_47b3701ff45da4504876b07fbf19904f228351563f605ff2007b80b6adfcf73d->leave($__internal_47b3701ff45da4504876b07fbf19904f228351563f605ff2007b80b6adfcf73d_prof);

    }

    public function getTemplateName()
    {
        return "@LGPReservation/Reservation/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 216,  267 => 177,  261 => 175,  255 => 173,  253 => 172,  244 => 166,  235 => 161,  232 => 160,  230 => 159,  142 => 73,  139 => 72,  128 => 70,  123 => 69,  121 => 68,  87 => 37,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Detail Reservation  - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="breadcrumb-wrapper bg-light-2">*/
/* */
/*         <div class="container">*/
/* */
/*             <ol class="breadcrumb-list booking-step">*/
/*                 <li><a href="#">Accueil</a></li>*/
/*                 <li><span>reservation</span></li>*/
/*             </ol>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="content-wrapper">*/
/* */
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-8 col-md-9" role="main">*/
/* */
/*                     <div class="section-title text-left">*/
/* */
/*                         <h3>Ajouter un prof au panier</h3>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="payment-container">*/
/* */
/*                         <form action=" {{path('lgp_reservation_cart_add')}} " method="get">	*/
/* */
/*                             <div class="payment-box">*/
/* */
/*                                 <div class="payment-header clearfix">*/
/* */
/*                                     <div class="number">*/
/*                                         1*/
/*                                     </div>*/
/* */
/*                                     <div class="row gap-10">*/
/* */
/*                                         <div class="col-sm-9">*/
/*                                             <h5 class="heading mt-0">Choisir le cours et la classe.</h5>*/
/*                                         </div>*/
/* */
/*                                         <div class="col-sm-3">*/
/*                                             <a href="#" class="btn btn-primary btn-inverse btn-sm pull-right pull-left-xs mb-20-xss">Revoir le profil</a>*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <br>*/
/*                                 <div class="payment-content">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-3">*/
/*                                             <b>Choisir un cours</b>*/
/*                                         </div>*/
/*                                         <div class="col-md-3">*/
/*                                             <select id="course" name="course" class="form-control">*/
/*                                                 <option disabled selected>Choisir un cours</option>*/
/*                                                 {% if params.cours is defined %}*/
/*                                                     {% for ens in params.cours %}*/
/*                                                         <option value="{{ens.cours.id}}">{{ens.cours.intitule}}</option>*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>  */
/*                                     <div class="row">*/
/*                                         <div class="col-md-3">*/
/*                                             <b>Choisir une classe</b>*/
/*                                         </div>*/
/*                                         <div class="col-md-3">*/
/*                                             <select id="classes" name="classes" class="form-control">*/
/*                                                 <option disabled selected>Choisir une classe</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <br><br>*/
/* */
/*                                 <div class="payment-header clearfix">*/
/* */
/*                                     <div class="number">*/
/*                                         2*/
/*                                     </div>*/
/* */
/*                                     <div class="row gap-10">*/
/* */
/*                                         <div class="col-sm-9">*/
/*                                             <h5 class="heading mt-0">Nombre d'heures par jour</h5>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <br>*/
/*                                 <div class="payment-content">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-3">*/
/*                                             <b>Nombre d'heures par jour</b>*/
/*                                         </div>*/
/*                                         <div class="col-md-3">*/
/*                                             <select id="heuresParjours" name="classe" class="form-control">*/
/*                                                 <option value="0.5">30min</option>*/
/*                                                 <option value="1">1h</option>*/
/*                                                 <option value="1.5">1h30</option>*/
/*                                                 <option value="2">2h</option>*/
/*                                                 <option value="2.5">2h30</option>*/
/*                                                 <option value="3">3h</option>}*/
/*                                                 <option value="4">4</option>}*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <br><br>*/
/* */
/*                                 <div class="payment-header clearfix">*/
/* */
/*                                     <div class="number">*/
/*                                         3*/
/*                                     </div>*/
/* */
/*                                     <div class="row gap-10">*/
/*                                         <div class="col-sm-9">*/
/*                                             <h5 class="heading mt-0">Choisir des jours de cours</h5>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                                 <br>*/
/*                                 <div class="payment-content" id="joursDeCours">*/
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/*                             <div class="row mt-20">*/
/* */
/*                                 <div class="col-sm-12 col-md-12">*/
/* */
/*                                     <a class="btn btn-primary">Réserver ce cours</a>&nbsp;&nbsp;*/
/*                                     <button class="btn" type="submit">Ajouter dans le panier</button>*/
/* */
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/*                         </form>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 {% if params.prof is defined %}*/
/*                     {% set prof = params.prof %}*/
/*                         <input type="hidden" name="prof" id="profId" value="{{prof.id}}">*/
/*                         <div class="col-sm-4 col-md-3 hidden-xs">*/
/* */
/*                             <div class="price-summary-wrapper">*/
/* */
/*                                 <h4 class="heading mt-0 text-primary uppercase">{{ prof.prenoms ~ " "~ prof.nom }}</h4>*/
/* */
/* */
/*                                 <ul class="price-summary-list">*/
/* */
/*                                     <li>*/
/*                                         {% if prof.image is defined %}*/
/*                                             <img src="{{ asset(prof.image.webPath) }}">*/
/*                                         {% else %}*/
/*                                             <img src="{{ asset('uploads/profils/default.jpg') }}">*/
/*                                         {% endif %}*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/* */
/*                                     <li>*/
/*                                         <h6 class="heading mt-20 mb-5 text-primary uppercase">Prix</h6>*/
/*                                         <div class="row gap-10 mt-10">*/
/*                                             <div class="col-xs-7 col-sm-7">*/
/*                                                 Prix*/
/*                                             </div>*/
/*                                             <div class="col-xs-5 col-sm-5 text-right" >*/
/*                                                 <span id="prixH">0 </span>*/
/*                                                 FCFA/H*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                     </li>*/
/* */
/*                                     <li class="divider"></li>*/
/* */
/*                                     <li class="total-price">*/
/* */
/*                                         <div class="row gap-10">*/
/*                                             <div class="col-xs-5 col-sm-5">*/
/*                                                 <h5 class="heading mt-0 mb-0 text-white">Prix total</h5>*/
/*                                                 <p>Mensuel</p>*/
/*                                             </div>*/
/*                                             <div class="col-xs-7 col-sm-7 text-right">*/
/*                                                 <span class="block font20 font600 mb-5"><span id="prixTotal">0</span> Fcfa</span>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                     </li>*/
/* */
/*                                 </ul>*/
/* */
/*                             </div>*/
/* */
/*                         </div>*/
/*                         {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <script type="text/javascript">*/
/*                 function updateClasse() {*/
/*                     var profId = $("#profId").val();*/
/*                     var coursId = $("#course").val();*/
/* */
/*                     $.ajax({*/
/*                         method: "POST",*/
/*                         url: "/legrandprof/web/app_dev.php/course/update/" + profId + "/" + coursId,*/
/*                         data: {}*/
/*                     })*/
/*                             .success(function(answer) {*/
/*                                 window.classes = [];*/
/*                                 window.prix = [];*/
/*                                 for (i = 0; i < answer.length; i++)*/
/*                                 {*/
/*                                     classes.push(answer[i].classe);*/
/*                                     prix.push(answer[i].prix);*/
/*                                 }*/
/*                                 $('#classes option').each(function() {*/
/*                                     if ($(this).val() != '')*/
/*                                     {*/
/*                                         $(this).remove();*/
/*                                     }*/
/*                                 });*/
/*                                 for (i = 0; i < classes.length; i++)*/
/*                                 {*/
/*                                     $('#classes').append('<option value="' + i + '">' + classes[i] + '</option>');*/
/*                                 }*/
/*                                 if (classes.length == 0) {*/
/*                                     $('#classes').append('<option disabled selected></option>');*/
/*                                 }*/
/* */
/*                                 updatePrix();*/
/*                             })*/
/*                             .error(function(answer) {*/
/*                                 console.log(answer);*/
/*                             });*/
/*                 }*/
/* */
/*                 function calculTotal(){*/
/*                     if($("#couse").text() == "Choisir un cours" && $("#classes").text() == ''){*/
/*                         return 0;*/
/*                     }*/
/* */
/*                     var selectedval = $("#classes option:selected").val();*/
/*                     var prixHoraire = window.prix[selectedval] ;*/
/*                     var nbHeureparjour = $("#heuresParjours option:selected").val();*/
/*                     var nbJours = 0;*/
/*                     for (i = 0; i < window.days.length; i++) {*/
/*                        if($("#j"+i).prop('checked')){*/
/*                             nbJours += 1;*/
/*                        }*/
/*                     }*/
/* */
/*                     var prixTotal = prixHoraire*nbHeureparjour*nbJours;*/
/*                     return prixTotal;*/
/*                 }*/
/* */
/*                 function updatePrix() {*/
/*                     $("#prixH").text('');*/
/*                     var selectedval = $("#classes option:selected").val();*/
/*                     $("#prixH").text(window.prix[selectedval]);*/
/*                 }*/
/* */
/*                 function updatePrixTotal() {*/
/*                     $("#prixTotal").text('');*/
/*                     prixT = calculTotal();*/
/*                     $("#prixTotal").text(prixT);*/
/*                 }*/
/*             </script>*/
/*             {% endblock %}*/
/* */
