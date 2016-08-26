<?php

/* LGPReservationBundle:Reservation:cart.html.twig */
class __TwigTemplate_ee7fd8f47a97160e116521c8cbbd0307f5a470eeebea0009caa1b991cca4e04f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPReservationBundle:Reservation:cart.html.twig", 2);
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
        $__internal_4426b354e9fbe84562da5121881316b147656256815a9ec6e8dbf0d349a42956 = $this->env->getExtension("native_profiler");
        $__internal_4426b354e9fbe84562da5121881316b147656256815a9ec6e8dbf0d349a42956->enter($__internal_4426b354e9fbe84562da5121881316b147656256815a9ec6e8dbf0d349a42956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Reservation:cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4426b354e9fbe84562da5121881316b147656256815a9ec6e8dbf0d349a42956->leave($__internal_4426b354e9fbe84562da5121881316b147656256815a9ec6e8dbf0d349a42956_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_201da0fd80ba659e65e2583498fd05637c1ace981352b1f5d1ad0b7e98499f7c = $this->env->getExtension("native_profiler");
        $__internal_201da0fd80ba659e65e2583498fd05637c1ace981352b1f5d1ad0b7e98499f7c->enter($__internal_201da0fd80ba659e65e2583498fd05637c1ace981352b1f5d1ad0b7e98499f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Panier  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_201da0fd80ba659e65e2583498fd05637c1ace981352b1f5d1ad0b7e98499f7c->leave($__internal_201da0fd80ba659e65e2583498fd05637c1ace981352b1f5d1ad0b7e98499f7c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5e5c6bf184d5e2ba9c49ed6a3d95895b47eb5e7146793dbf4aa5cf3d710ae6e = $this->env->getExtension("native_profiler");
        $__internal_a5e5c6bf184d5e2ba9c49ed6a3d95895b47eb5e7146793dbf4aa5cf3d710ae6e->enter($__internal_a5e5c6bf184d5e2ba9c49ed6a3d95895b47eb5e7146793dbf4aa5cf3d710ae6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a5e5c6bf184d5e2ba9c49ed6a3d95895b47eb5e7146793dbf4aa5cf3d710ae6e->leave($__internal_a5e5c6bf184d5e2ba9c49ed6a3d95895b47eb5e7146793dbf4aa5cf3d710ae6e_prof);

    }

    public function getTemplateName()
    {
        return "LGPReservationBundle:Reservation:cart.html.twig";
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
