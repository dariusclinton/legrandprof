<?php

/* LGPReservationBundle:Reservation:paiement.html.twig */
class __TwigTemplate_c2cd064ca4bd0f6e90a24c7e7ba5929a7930a41e3b4580f63780c8860b8b98dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPReservationBundle:Reservation:paiement.html.twig", 2);
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
        $__internal_cb9f1e7a44d9fdb747cd3d675c3215e8754b923246ef9abc0658801fe896663f = $this->env->getExtension("native_profiler");
        $__internal_cb9f1e7a44d9fdb747cd3d675c3215e8754b923246ef9abc0658801fe896663f->enter($__internal_cb9f1e7a44d9fdb747cd3d675c3215e8754b923246ef9abc0658801fe896663f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPReservationBundle:Reservation:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb9f1e7a44d9fdb747cd3d675c3215e8754b923246ef9abc0658801fe896663f->leave($__internal_cb9f1e7a44d9fdb747cd3d675c3215e8754b923246ef9abc0658801fe896663f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_229e1a91194f3f156bce0330a710bedad14852418d26410529c34ef80cc137a1 = $this->env->getExtension("native_profiler");
        $__internal_229e1a91194f3f156bce0330a710bedad14852418d26410529c34ef80cc137a1->enter($__internal_229e1a91194f3f156bce0330a710bedad14852418d26410529c34ef80cc137a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    mode de paiment  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_229e1a91194f3f156bce0330a710bedad14852418d26410529c34ef80cc137a1->leave($__internal_229e1a91194f3f156bce0330a710bedad14852418d26410529c34ef80cc137a1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d65fa94717b40bae5ab003f9028a96986abdcb21a38d0c222c6c90bd3b1f45b = $this->env->getExtension("native_profiler");
        $__internal_2d65fa94717b40bae5ab003f9028a96986abdcb21a38d0c222c6c90bd3b1f45b->enter($__internal_2d65fa94717b40bae5ab003f9028a96986abdcb21a38d0c222c6c90bd3b1f45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"bg-grey\">
        <div class=\"content-wrapper\">
            ";
        // line 11
        $this->loadTemplate("LGPReservationBundle:Reservation:etapes.html.twig", "LGPReservationBundle:Reservation:paiement.html.twig", 11)->display($context);
        // line 12
        echo "
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
                        <h3 >Choisissez votre fréquence de paiement</h3>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 text-center\">
                        <form action=\"\" method=\"POST\" role=\"form\" id=\"paiementForm\">            
                            <div class=\"form-group\">
                               <select name=\"paiement-frequence\" id=\"paiement-frequence\" class=\"form-control\" required>
                                <option value=\"\" disabled=\"disabled\" selected>Choisissez la fréquence de paiement</option>
                                <option value=\"hebdomadaire\">Hebdomadaire</option>
                                <option value=\"mensuelle\">Mensuelle</option>
                                <option value=\"trimestrielle\">Trimestrielle</option>
                                <option value=\"semestrielle\">Semestrielle</option>
                               </select>
                            </div>
                            <div class=\"form-group\">
                              <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
";
        
        $__internal_2d65fa94717b40bae5ab003f9028a96986abdcb21a38d0c222c6c90bd3b1f45b->leave($__internal_2d65fa94717b40bae5ab003f9028a96986abdcb21a38d0c222c6c90bd3b1f45b_prof);

    }

    public function getTemplateName()
    {
        return "LGPReservationBundle:Reservation:paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  61 => 11,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
    mode de paiment  - {{ parent() }}
{% endblock %}

{% block body %}
    <div class=\"bg-grey\">
        <div class=\"content-wrapper\">
            {% include 'LGPReservationBundle:Reservation:etapes.html.twig' %}

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center\">
                        <h3 >Choisissez votre fréquence de paiement</h3>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 text-center\">
                        <form action=\"\" method=\"POST\" role=\"form\" id=\"paiementForm\">            
                            <div class=\"form-group\">
                               <select name=\"paiement-frequence\" id=\"paiement-frequence\" class=\"form-control\" required>
                                <option value=\"\" disabled=\"disabled\" selected>Choisissez la fréquence de paiement</option>
                                <option value=\"hebdomadaire\">Hebdomadaire</option>
                                <option value=\"mensuelle\">Mensuelle</option>
                                <option value=\"trimestrielle\">Trimestrielle</option>
                                <option value=\"semestrielle\">Semestrielle</option>
                               </select>
                            </div>
                            <div class=\"form-group\">
                              <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
{% endblock %}

";
    }
}
