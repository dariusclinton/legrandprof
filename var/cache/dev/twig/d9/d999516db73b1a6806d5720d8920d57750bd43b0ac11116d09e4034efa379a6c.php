<?php

/* @LGPReservation/Reservation/cart.html.twig */
class __TwigTemplate_4b4b9d2e7c3521f8ca737619490e5e41fe9882e7126232ea5b2fa97c14d74f22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPReservation/Reservation/cart.html.twig", 2);
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
        $__internal_ab0cb6241ab241f0619993cf98d91bc7f99497c5aeb49aff51b228fa47090315 = $this->env->getExtension("native_profiler");
        $__internal_ab0cb6241ab241f0619993cf98d91bc7f99497c5aeb49aff51b228fa47090315->enter($__internal_ab0cb6241ab241f0619993cf98d91bc7f99497c5aeb49aff51b228fa47090315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPReservation/Reservation/cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab0cb6241ab241f0619993cf98d91bc7f99497c5aeb49aff51b228fa47090315->leave($__internal_ab0cb6241ab241f0619993cf98d91bc7f99497c5aeb49aff51b228fa47090315_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b4d9f6fe2d34e19967acf33967a320ff620402ce1e3895304a8441b7ab6d79d = $this->env->getExtension("native_profiler");
        $__internal_7b4d9f6fe2d34e19967acf33967a320ff620402ce1e3895304a8441b7ab6d79d->enter($__internal_7b4d9f6fe2d34e19967acf33967a320ff620402ce1e3895304a8441b7ab6d79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Panier  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7b4d9f6fe2d34e19967acf33967a320ff620402ce1e3895304a8441b7ab6d79d->leave($__internal_7b4d9f6fe2d34e19967acf33967a320ff620402ce1e3895304a8441b7ab6d79d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c6abb09e98b43c418fb62daa9c7d610fd032b7b9de45adc3805d0386a0122e3 = $this->env->getExtension("native_profiler");
        $__internal_1c6abb09e98b43c418fb62daa9c7d610fd032b7b9de45adc3805d0386a0122e3->enter($__internal_1c6abb09e98b43c418fb62daa9c7d610fd032b7b9de45adc3805d0386a0122e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"bg-grey\">
            <div class=\"content-wrapper\">

                    <div class=\"container\">
                            <h1 class=\"panier-title\">PANIER</h1>
                            <div class=\"row\">
                                    <div class=\"col-md-12\">
                                            <table class=\"table table-hover table-bordered\">
                                                    <thead>
                                                            <th style=\"width:15%\"></th>
                                                            <th style=\"width:40%\">Cours</th>
                                                            <th style=\"width:20%\">Jours de cours</th>
                                                            <th style=\"width:20%\">Sous-Total</th>
                                                            <th style=\"width:5%\"></th>
                                                    </thead>
                                                    <tbody>
                                                            <tr>
                                                                    <td><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/man/01.jpg"), "html", null, true);
        echo "\"></td>
                                                                    <td>
                                                                            <p><b>Cours de mathématiques en premiere C</b></p>
                                                                            <ul class=\"list-info\">
                                                                                    <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">Position: </span> Douala - Akwa</li>

                                                                                    <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Compétences :</span> Mathématiques, Physiques,...</li>
                                                                            </ul><br>
                                                                            <p><b>Prof : </b> Antony Robert</p>
                                                                    </td>
                                                                    <td><br>
                                                                            <ul class=\"list-info\">
                                                                                    <li>Lundi (16-18h)</li>
                                                                                    <li>Mercredi (14h-16h)</li>
                                                                                    <li>Samedi (10h-12h)</li>
                                                                            </ul>
                                                                    </td>
                                                                    <td>
                                                                            <h2 class=\"price\">35.000 FCFA / Mois</h2>
                                                                    </td>
                                                                    <td>
                                                                            <center><a href=\"#\" class=\"btn-cancel\"><i class=\"fa fa-remove\"></i></a></center>
                                                                    </td>
                                                            </tr>
                                                            <tr>
                                                                    <td><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/man/03.jpg"), "html", null, true);
        echo "\"></td>
                                                                    <td>
                                                                            <p><b>Cours de Genie Logiciel en 2e année Informatique</b></p>
                                                                            <ul class=\"list-info\">
                                                                                    <li><span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span> <span class=\"font600\">Position: </span> Douala - Bonaberi</li>

                                                                                    <li><span class=\"icon\"><i class=\"fa fa-book\"></i></span> <span class=\"font600\">Compétences :</span> Informatique, Genie Logiciel,...</li>
                                                                            </ul><br>
                                                                            <p><b>Prof : </b> Darius Tsafack</p>
                                                                    </td>
                                                                    <td><br>
                                                                            <ul class=\"list-info\">
                                                                                    <li>Lundi (16-18h)</li>
                                                                                    <li>Mercredi (14h-16h)</li>
                                                                                    <li>Samedi (10h-12h)</li>
                                                                            </ul>
                                                                    </td>
                                                                    <td>
                                                                            <h2 class=\"price\">40.000 FCFA / Mois</h2>
                                                                    </td>
                                                                    <td>
                                                                            <center><a href=\"#\" class=\"btn-cancel\"><i class=\"fa fa-remove\"></i></a></center>
                                                                    </td>
                                                            </tr>
                                                            <tr>
                                                                    <td colspan=\"5\" class=\"recap text-right\">
                                                                            <b>Total : <span class=\"total\">75.000 FCFA / Mois</span></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            <button class=\"btn\">Réserver ces Cours</button>
                                                                    </td>
                                                            </tr>
                                                    </tbody>
                                            </table>
                                    </div>


                            </div>

                    </div>
            </div>
    </div>
    
";
        
        $__internal_1c6abb09e98b43c418fb62daa9c7d610fd032b7b9de45adc3805d0386a0122e3->leave($__internal_1c6abb09e98b43c418fb62daa9c7d610fd032b7b9de45adc3805d0386a0122e3_prof);

    }

    public function getTemplateName()
    {
        return "@LGPReservation/Reservation/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 51,  76 => 26,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Panier  - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="bg-grey">*/
/*             <div class="content-wrapper">*/
/* */
/*                     <div class="container">*/
/*                             <h1 class="panier-title">PANIER</h1>*/
/*                             <div class="row">*/
/*                                     <div class="col-md-12">*/
/*                                             <table class="table table-hover table-bordered">*/
/*                                                     <thead>*/
/*                                                             <th style="width:15%"></th>*/
/*                                                             <th style="width:40%">Cours</th>*/
/*                                                             <th style="width:20%">Jours de cours</th>*/
/*                                                             <th style="width:20%">Sous-Total</th>*/
/*                                                             <th style="width:5%"></th>*/
/*                                                     </thead>*/
/*                                                     <tbody>*/
/*                                                             <tr>*/
/*                                                                     <td><img src="{{ asset('images/man/01.jpg') }}"></td>*/
/*                                                                     <td>*/
/*                                                                             <p><b>Cours de mathématiques en premiere C</b></p>*/
/*                                                                             <ul class="list-info">*/
/*                                                                                     <li><span class="icon"><i class="fa fa-map-marker"></i></span> <span class="font600">Position: </span> Douala - Akwa</li>*/
/* */
/*                                                                                     <li><span class="icon"><i class="fa fa-book"></i></span> <span class="font600">Compétences :</span> Mathématiques, Physiques,...</li>*/
/*                                                                             </ul><br>*/
/*                                                                             <p><b>Prof : </b> Antony Robert</p>*/
/*                                                                     </td>*/
/*                                                                     <td><br>*/
/*                                                                             <ul class="list-info">*/
/*                                                                                     <li>Lundi (16-18h)</li>*/
/*                                                                                     <li>Mercredi (14h-16h)</li>*/
/*                                                                                     <li>Samedi (10h-12h)</li>*/
/*                                                                             </ul>*/
/*                                                                     </td>*/
/*                                                                     <td>*/
/*                                                                             <h2 class="price">35.000 FCFA / Mois</h2>*/
/*                                                                     </td>*/
/*                                                                     <td>*/
/*                                                                             <center><a href="#" class="btn-cancel"><i class="fa fa-remove"></i></a></center>*/
/*                                                                     </td>*/
/*                                                             </tr>*/
/*                                                             <tr>*/
/*                                                                     <td><img src="{{ asset('images/man/03.jpg') }}"></td>*/
/*                                                                     <td>*/
/*                                                                             <p><b>Cours de Genie Logiciel en 2e année Informatique</b></p>*/
/*                                                                             <ul class="list-info">*/
/*                                                                                     <li><span class="icon"><i class="fa fa-map-marker"></i></span> <span class="font600">Position: </span> Douala - Bonaberi</li>*/
/* */
/*                                                                                     <li><span class="icon"><i class="fa fa-book"></i></span> <span class="font600">Compétences :</span> Informatique, Genie Logiciel,...</li>*/
/*                                                                             </ul><br>*/
/*                                                                             <p><b>Prof : </b> Darius Tsafack</p>*/
/*                                                                     </td>*/
/*                                                                     <td><br>*/
/*                                                                             <ul class="list-info">*/
/*                                                                                     <li>Lundi (16-18h)</li>*/
/*                                                                                     <li>Mercredi (14h-16h)</li>*/
/*                                                                                     <li>Samedi (10h-12h)</li>*/
/*                                                                             </ul>*/
/*                                                                     </td>*/
/*                                                                     <td>*/
/*                                                                             <h2 class="price">40.000 FCFA / Mois</h2>*/
/*                                                                     </td>*/
/*                                                                     <td>*/
/*                                                                             <center><a href="#" class="btn-cancel"><i class="fa fa-remove"></i></a></center>*/
/*                                                                     </td>*/
/*                                                             </tr>*/
/*                                                             <tr>*/
/*                                                                     <td colspan="5" class="recap text-right">*/
/*                                                                             <b>Total : <span class="total">75.000 FCFA / Mois</span></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                                                                             <button class="btn">Réserver ces Cours</button>*/
/*                                                                     </td>*/
/*                                                             </tr>*/
/*                                                     </tbody>*/
/*                                             </table>*/
/*                                     </div>*/
/* */
/* */
/*                             </div>*/
/* */
/*                     </div>*/
/*             </div>*/
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
